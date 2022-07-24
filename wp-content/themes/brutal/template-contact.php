<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout contact">
        <h2 class="contact__title"><?= get_the_title(); ?></h2>
        <div class="contact__content">
            <?=  get_the_content();  ?>
        </div>
        <?php if(! isset($_SESSION['contact_form_feedback']) || ! $_SESSION['contact_form_feedback']['success']) : ?>
            <form action="https://portfolio.aline-db.be/fr/wp-admin/admin-post.php" method="post" class="contact__form" >
                <?php if(isset($_SESSION['contact_form_feedback'])) : ?>
                    <p><? __('Oups, il y a un (des) erreur(s) dans le formulaires', 'Aline-portfolio-brutal'); ?></p>
                <?php endif; ?>
                <div class="form__field">
                    <label for="firstname" class="form__label"><?= __('Votre prénom', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="text" name="firstname" id="firstname" class="form__input">
                </div>
                <div class="form__field">
                    <label for="name" class="form__label"><?= __('Votre nom', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="text" name="name" id="name" class="form__input">
                </div>
                <div class="form__field">
                    <label for="phone" class="form__label"><?= __('Votre téléphone', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="tel" name="phone" id="phone" class="form__input">
                </div>
                <div class="form__field">
                    <label for="mail" class="form__label"><?= __('Votre mail', 'Aline-portfolio-brutal'); ?> :</label>
                    <input type="email" name="mail" id="mail" class="form__input">
                </div>
                <div class="form__field">
                    <label for="message" class="form__label"><?= __('Votre message', 'Aline-portfolio-brutal'); ?> :</label>
                    <textarea type="message" name="message" cols="30" rows="10" id="message" class="form__input">
                    </textarea>
                </div>
                <div class="form__field">
                    <label for="rules" class="form__checkbox">
                        <input type="checkbox" name="rules"  id="rules" value="1">
                        <span><?= str_replace(':conditions', '<a class="form__link" href="https://portfolio.aline-db.be/fr/politique-de-confidentialite/">' . __('conditions générales d\'utilisation', 'Aline-portfolio-brutal') . '</a>', __('J\'accepte les :conditions', 'Aline-portfolio-brutal')); ?>
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
            <p id="contact"><?= __('Merci votre message a bien été envoyé', 'Aline-portfolio-brutal'); ?>.</p>
            <?php unset($_SESSION['contact_form_feedback']); endif; ?>
    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
