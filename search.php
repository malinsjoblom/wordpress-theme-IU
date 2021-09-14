<?php

/* Template Name: Search

*/
?>
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <h1> </h1>
        </div>
    </section>
    
        <?php 
        if (have_posts()) :
            while (have_posts()) : the_post();
            the_title();
            the_content();
            endwhile;
        else :
            _e('Sorry, we couldn´t find what you were looking for', 'textdomain');
        endif; ?>

    
</main>
<?php get_footer(); ?>