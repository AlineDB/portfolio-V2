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
        <?php if(! isset($_SESSION['contact_form_feedback']) || ! $_SESSION['contact_form_feedback']['success']) : ?>
            <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php" method="post" class="contact__form" >
                <?php if(isset($_SESSION['contact_form_feedback'])) : ?>
                    <p><?= __('Oups, il y a un (des) erreur(s) dans le formulaires', 'Aline-portfolio-brutal'); ?></p>
                <?php endif; ?>
                <div class="form__field">
                    <label for="firstname" class="form__label"><?= __('Votre prénom', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="text" name="firstname" id="firstname" placeholder="<?= __('Votre prénom', 'Aline-portfolio-brutal'); ?>" class="form__input">
                </div>
                <div class="form__field">
                    <label for="name" class="form__label"><?= __('Votre nom', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="text" name="name" id="name" placeholder="<?= __('Votre nom', 'Aline-portfolio-brutal'); ?>" class="form__input">
                </div>
                <div class="form__field">
                    <label for="phone" class="form__label"><?= __('Votre téléphone', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="tel" name="phone" id="phone" minlength="10" placeholder="0474123456" class="form__input">
                </div>
                <div class="form__field">
                    <label for="mail" class="form__label"><?= __('Votre mail', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="email" name="mail" id="mail" placeholder="exemple@mail.com" class="form__input">
                </div>
                <div class="form__field">
                    <label for="message" class="form__label"><?= __('Votre message', 'Aline-portfolio-brutal'); ?> :</label>
                    <textarea type="message" name="message" placeholder="<?= __('Ecrivez votre message ici', 'Aline-portfolio-brutal'); ?>" cols="30" rows="10" id="message" class="form__textarea">
                    </textarea>
                </div>
                <div class="form__field">
                    <label for="rules" class="form__checkbox">
                        <input type="checkbox" name="rules"  id="rules" value="1">
                        <span><?= str_replace(':conditions', '<a class="form__link" href="http://localhost:8888/portfolio2/mentions-legales/">' . __('conditions générales d\'utilisation', 'Aline-portfolio-brutal') . '</a>', __('J\'accepte les :conditions', 'Aline-portfolio-brutal')); ?>
                            .</span>
                    </label>
                </div>
                <div class="form__action">
                    <?php wp_nonce_field('nonce_submit_contact') ?>
                    <input type="hidden" name="action" value="submit_contact_form"/>
                    <button class="form__button" type="submit"><?= __('Envoyez', 'Aline-portfolio-brutal'); ?></button>
                </div>
            </form>
        <?php else : ?>
            <p id="contact" class="contact__valid"><?= __('Merci votre message a bien été envoyé', 'Aline-portfolio-brutal'); ?>.</p>
            <?php unset($_SESSION['contact_form_feedback']); endif; ?>
        </div>
        <div class="contact__information">
            <h3 class="contact__subtitle" itemscope itemtype="http://schema.org/Person"><?= __('Coordonnées', 'Aline-portfolio-brutal'); ?></h3>
                <div itemprop="name"><strong>DE BARROS</strong></div>
                <div itemprop="name"><strong>Aline</strong></div>
                <div itemprop="homeLocation" content="Saint-Nicolas">Saint-Nicolas</div>
                <a title="mentions légales" class="contact__link" href="http://localhost:8888/portfolio2/mentions-legales/"><?= __('Mentions légales', 'Aline-portfolio-brutal'); ?></a>
            </div>
    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
