<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleProjet">
        <h2 class="singleProjet__title"><?= get_the_title(); ?></h2>
        <figure class="singleProjet__fig">
            <?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'singleProject__thumb']); ?>
        </figure>
        <div class="singleProjet__content">
            <?=  the_content();  ?>
        </div>
        <aside class="singleProjet__details">
            <h3 class="singleProjet__subtitle"><?= __('Détails du projet', 'Aline-portfolio-brutal'); ?></h3>
            <dl class="singleProjet__def">
                <dt class="singleProjet__label"><?= __('Date du projet', 'Aline-portfolio-brutal'); ?></dt>
                <dd class="singleProjet__data">
                    <time class="singleProjet__date" datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>">
                        <?= ucfirst(date_i18n('d F Y', strtotime(get_field('date', false, false)))); ?>
                    </time></dd>
                <?php if(get_field('cours')):  ?>
                <dt class="singleProjet__label"><?= __('Cours correspondant', 'Aline-portfolio-brutal'); ?></dt>
                <dd class="singleProjet__data"><?= get_field('cours', false, false);  ?>
                    <?php endif; ?>
                </dd>
                <?php if(get_field('categories')):  ?>
                <dt class="singleProjet__label"><?= __('Catégorie(s)', 'Aline-portfolio-brutal'); ?></dt>
                <?php foreach (get_field('categories', false, false) as $id_category): ?>
                    <dd class="singleProjet__data"><?= (get_cat_name($id_category)); ?></dd>
                <?php endforeach;?>
                <?php endif; ?>
            </dl>
        </aside>
        <section class="singleProjet__sugestion">
            <!--ajouter une section suggestion où on propose un des derniers projets ayant la/les mêmes catégories-->
        </section>
    </main>
    <?php endwhile; endif; ?>



<?php get_footer(); ?>
