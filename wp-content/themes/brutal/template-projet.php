<?php /* Template Name: Projets page template */ ?>
<?php get_header(); ?>

    <section class="layout__projets projets">
        <h2 class="projets__title"><?= __('Mes projets web et design', 'Aline-portfolio-brutal'); ?></h2>
        <div class="projects__content">
            <?=  the_content();  ?>
        </div>
        <div class="projets__container">
            <?php if(($projects = dw_get_projects(300))->have_posts()): while($projects->have_posts()): $projects->the_post(); ?>
                <article class="project">
                    <div class="project__card">
                        <header class="project__head">
                            <h3 class="project__title"><?= get_the_title(); ?></h3>
                        </header>
                        <figure class="project__fig">
                            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'project__thumb']); ?>
                        </figure>
                    </div>
                    <a href="<?= get_the_permalink(); ?>" class="project__link"><?= __('Voir le projet', 'Aline-portfolio-brutal'); ?> "<?= get_the_title(); ?>"</a>
                </article>
            <?php endwhile; else: ?>
                <p class="projects__empty"><?= __('Il n\'y a pas de projet à vous monter ...', 'Aline-portfolio-brutal'); ?></p>
            <?php endif; ?>
        </div>
    </section>



<?php get_footer(); ?>