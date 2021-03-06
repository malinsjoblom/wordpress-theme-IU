<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Blogg</h1>

					<?php
					// the query
					$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
					if ($wpb_all_query->have_posts()) : ?>

						<ul>

							<!-- the loop -->
							<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
								<article>
									<?php the_post_thumbnail(); ?>
									<h2 class="title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<ul class="meta">
										<li>
											<i class="fa fa-calendar"></i> <?php the_date() ?>
										</li>
										<li>
											<i class="fa fa-user"></i> <a href="forfattare.html"> <?php the_author() ?></a>
										</li>
										<li>
											<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(", ") ?></a>
										</li>
									</ul>
									<p> <?php the_content(); ?></p>
								</article>
							<?php endwhile; ?>
							<!-- end of the loop -->
						</ul>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>



					<nav class="navigation pagination">
					<h2 class="screen-reader-text">Inläggsnavigering</h2>
						<a class="prev page-numbers" href="">Föregående</a>
						<span class="page-numbers current">1</span>
						<a class="page-numbers" href="">2</a>
						<a class="next page-numbers" href="">Nästa</a>

					</nav>


				</div>

				<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <?php get_search_form(); ?>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <h2>Sidor</h2>
              
                    <?php
                     wp_nav_menu( 
                        array( 
                            'theme_location' => 'side-menu',
                            'container' => 'false',
                            'menu_class' => 'side-menu' )); 
                    ?>
                
            </li>
            <li>
                <h2>Arkiv</h2>
                <ul>
                    <li>
                        <a href="arkiv.html">oktober 2016</a>
                    </li>
                </ul>
            </li>
            <li class="categories">
                <h2>Kategorier</h2>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'blog-categories-menu',
                            'container' => false
                        )
                    );
                    ?>
                

            </li>
        </ul>
    </div>
</aside>


			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>