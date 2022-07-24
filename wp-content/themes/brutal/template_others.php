<?php /* Template Name: Others page template */ ?>
<?php get_header(); ?>

    <section class="layout__projets projets">
        <h2 class="projets__title"><?= __('Webdesign mais aussi', 'Aline-portfolio-brutal'); ?></h2>
        <div class="projets__container">
            <?php if(($othersProjects = dw_get_othersProjects(300))->have_posts()): while($othersProjects->have_posts()): $othersProjects->the_post(); ?>
                <article class="project">
                    <div class="project__card">
                        <header class="project__head">
                            <h3 class="project__title"><?= get_the_title(); ?></h3>
                            <p class="project__date"><time class="project__time" datetime="<?= date('c', strtotime(get_field('project_date', false, false))); ?>">
                                    <?= ucfirst(date_i18n('F, Y', strtotime(get_field('project_date', false, false)))); ?>
                                </time></p>
                        </header>
                        <figure class="project__fig">
                            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'project__thumb']); ?>
                        </figure>
                    </div>
                    <a href="<?= get_the_permalink(); ?>" class="project__link"><?= __('Voir le projet', 'Aline-portfolio-brutal'); ?> "<?= get_the_title(); ?>"</a>
                </article>
            <?php endwhile; else: ?>
                <p class="projects__empty"><?= __('Il n\'y a pas de projet à vous monter...', 'Aline-portfolio-brutal'); ?></p>
            <?php endif; ?>
        </div>
    </section>



<?php get_footer(); ?>