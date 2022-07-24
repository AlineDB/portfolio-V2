<?php /* Template Name: Politique page template */ ?>
<?php get_header(); ?>

<main class="layout__politique">
    <h2 class="contact__politique"><?= get_the_title(); ?></h2>
    <div class="contact__content">
        <?=  get_the_content();  ?>
    </div>
</main>

<?php get_footer(); ?>

