
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __('Aline votre webdesign', 'Aline-portfolio-brutal'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100&family=Noto+Sans+Mono&family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>"/>
    <style>
        html{
            font-family: 'IBM Plex Sans', sans-serif;
            font-size: 20px;
        }
        h1{
            font-family: "Source Code Pro", monospace;
            font-size: 3.5em; /*70/20*/
        }
        h2, h3, h4,h5{
            font-family: "Noto Sans Mono", monospace;
        }
    </style>
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>
    <meta name="description" content="Projet Portfolio par Aline DE BARROS reprenant ses projets web et design mais aussi son implication en politique et ses livres !">
    <meta name="author" content="DE BARROS Aline">
    <meta name="keywords" content="CV, Aline, études, expériences, projets, languages, employée, politique, livres, travail, job, HEPL, bachelier, infographie, web, design, sites, HTML, CSS, JS,
PHP, 3D, vidéo, Adobe, ">
</head>
<body>
<header class="header">
    <a title="Accueil" href="<?= get_home_url() ?>"><h1 class="header__title"><?= get_bloginfo('name'); ?></h1></a>
    <p class="header__tagline"><?= get_bloginfo('description'); ?></p>

    <nav class="header__nav nav">
        <h2 class="nav__title"><?= __('Navigation principale', 'Aline-portfolio-brutal'); ?></h2>
        <ul class="nav__container">
            <?php foreach (dw_get_menu_items('primary') as $link): ?>
                <li class="<?= $link->getBemClasses('nav__item'); ?>">
                    <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?>
                       class="nav__link"><?= $link->label; ?>
                    </a>
                </li>
            <?php endforeach; ?>

          <div class="languages__container">
                <?php foreach (pll_the_languages(['raw' => true]) as $code => $locale) : ?>
                <li class="nav__languages">
                    <a href="<?= $locale['url']; ?>" lang="<?= $locale['locale']; ?>"
                       hreflang="<?= $locale['locale']; ?>" class="nav__locale"
                       title="<?= $locale['name']; ?>"><?= $code; ?></a>
                    <?php endforeach; ?>
                </li>
            </div>
    </nav>
</header>