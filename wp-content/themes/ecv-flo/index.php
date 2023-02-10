<?php get_header(); ?>
<body>
<?= toto_function(); ?>
<?php while ( have_posts() ) { the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content();
}?>
</body>
<?php get_footer(); ?>
