<div class="container">
<div class="post mb-5">
				    <div class="media">
                        <?php
                        the_post_thumbnail_url(); 
                        ?>
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thubnail');?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="post.html"><?php the_title(); ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php comments_number(); ?><a href="#"><?php ?></a>
                        </span><span class="comment"><a href="#"><? comments_number(); ?></a></span></div>
						   
                         <div class="intro">
<?php
the_excerpt();
?>
                         <a class="more-link" href="p<?php the_permalink(); ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			    



</div>