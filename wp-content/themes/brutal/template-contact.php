<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout__contact">
        <h2 class="contact__title"><?= get_the_title(); ?></h2>
        <h3 class="contact__subtitle"><?= __('Des questions ? Une demande ? Ou autre chose ?', 'Aline-portfolio-brutal'); ?></h3>
        <div class="contact__description">
            <p><?= __('N’hésiter pas à me contacter afin d’en savoir plus sur un projet ou sur mon parcours, mes compétences, un devis, une recherche, un job, un partenariat … bref je répondrais dès que possible !
                Pour cela remplissez le formulaire !', 'Aline-portfolio-brutal'); ?></p>
            <figure class="contact__fig">
                <img src="<?php echo get_template_directory_uri() . '/img/Aline_pixel.png'; ?>" alt="Photo d'Aline" width="150" height="200">
            </figure>
        </div>
        <div class="contact__content">
            <?php echo do_shortcode("[contact-form-7 id='182' title='Contact']"); ?>
        </div>
        <div class="contact__information">
            <h3 class="contact__subtitle" itemscope itemtype="http://schema.org/Person"><?= __('Coordonnées', 'Aline-portfolio-brutal'); ?></h3>
                <div itemprop="name"><strong>DE BARROS</strong></div>
                <div itemprop="name"><strong>Aline</strong></div>
                <div itemprop="homeLocation" content="Saint-Nicolas">Saint-Nicolas</div>
                <a title="mentions légales" class="contact__link" href="http://aline-db.be/mentions-legales/"><?= __('Mentions légales', 'Aline-portfolio-brutal'); ?></a>
            </div>
    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
