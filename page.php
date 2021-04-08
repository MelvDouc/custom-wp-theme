<?php get_header(); ?>

<main>

    <?php get_sidebar(); ?>
    
    <section>
        
        <h2 class="section-title"><?php the_title(); ?></h2>
        
        <?php
            if(have_posts()):
                while(have_posts()):
        ?>

        <div class="container">
            <?php
                the_post();
                the_content();
            ?>
        </div>

        <?php
                endwhile;
            endif;    
        ?>

    </section>

</main>

<?php get_footer(); ?>