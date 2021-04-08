<?php get_header(); ?>

<!-- <h2>< ?php the_title(); ?></h2> -->

<main>

    <?php
        get_sidebar();
    
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
    ?>

</main>

<?php
        else:
            _e("Aucune publication trouvée.", "textdomain");
        endif;
?>
    
<?php get_footer(); ?>