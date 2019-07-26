<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

		<div class="some">
            <?php echo carbon_get_theme_option('crb_text'.carbon_lang()) ?>
        </div>
	    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php else: ?>
<?php endif; ?>



<?php get_footer(); ?>
