

<div id="news">
    	
		<div class="container">
				<div class="row news">
					<div class="col-md-6  text-left">
					
                        <?php if ( has_post_thumbnail()) :?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php else:  ?>
                    <img class="img-responsive picsGall" src="https://dummyimage.com/600x400/000/fff.jpg">
                <?php endif; ?>    
                    
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title() ;?></a>
                    </h3>
					<ul>
						<li><i class="fa fa-calendar"></i><?php the_date(); ?></li>
						<li><a href="#"><i class="fa fa-folder-open"></i><?php the_category(' ');?></a></li>
						<li><a href="#"><i class="fa fa-tags fa-fw"></i><?php the_tags('', ' ', ''); ?></a></li>
					</ul>
					<p><?php the_excerpt(); ?> <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					
                    
                    <hr class="hrNews">
					</div>
					
				</div>
			</div>
			
</div>