# Portfolio Aline V2

## Projet Portfolio Aline De Barros

Dans le cadre du cours de Design Web, création d'un site portfolio afin de présenter mes projets, 
mes expériences, mon CV et moi-même.

La première version se trouve [ici](https://github.com/AlineDB/Aline-portfolio)

(Tous droits réservés, ne pas reproduire)

## Documents

L'analyse et les personas n'ont pas changé -> [voir](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/Analyse%20et%20personas%20portfolio.docx)

Vous trouverez le wireframe du nouveau design -> [ici](https://github.com/AlineDB/portfolio-V2/tree/main/doc/design)

L'ancien design ainsi que le prototype se trouvent toujours -> [ici](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/portfolio_wireframe_complet.png)

Vous trouverez les scénarios de tests utilisateurs et les résultats pour les prototypes -> [ici](https://github.com/AlineDB/Aline-portfolio/blob/8cf5d4585e2d595c578bf5667efcff27cb049399/Doc/tests%20utilisateurs%20prototype.docx)

## Retours jury de juin 2022

J'ai rencontré 8 jurés dont un qui concernait exclusivement que le site client et n'a donc pas vu le portfolio.
Les retours ont été globalement les mêmes: design pas abouti. Concernant le Wordpress, pour ceux qui ont regardé cela 
semblait correct. Même remarque pour le code en lui-même avec toutefois la possibilité d'exploiter un peu plus Wordpress.
Il y a eu quand même quelques remarques uniques selon le juré rencontré et sa spécificité (métadonnées, timestamp, espacement, logo et design pas en adéquation,
style, polices, images, ...). J'ai bien entendu tout noté et pris en compte lors de la création du nouveau design.

Il faut donc continuer à creuser et si je veux un design aussi poussé je dois y aller à fond ! 

## Tests

### W3C HTML
Deux warning concernant un titre vide et le type pas nécessaire pour le script js.
Deux erreurs concenrnat les deux div dans les li de la navigation langages (fr/en) dans le header.

### W3C CSS
Une erreur qui dit que le charset n'apparaît pas au début du fichier alors qu'il est bien en première ligne dnas le head du site. Le reste est validé, des messages 
concernant des webkit étant extension propriétaire sont mis en avertissements.

### W3C Internationalisation
Pas d'erreur. Encodage caractère: UTF-8, lang=fr, autres langues = fr-be et en-gb.

### W3C Link
Deux messages pour Facebook et LinkedIn qui excluent les robots et un message d'erreur pour le lien Kindle qui ne peut être analysé que manuellement.

### CSS Stats
2 couleurs uniques, 4 background colors, les schémas n'ont pas de "gros" pics mais ont quand même certains scores élevés sans monter fort haut. 
Peut-être dû aux paramètres de Wordpress car je n'utilise que les classe où les élément directement comme sélecteurs.

### GT Metrix
Classé A avec 90% de performance et 99% pour la structure pour un serveur basé au Canada et utilisé via Chrome sur un PC.
Premier contenu chargé en 1.4s

### Wave -> accessibility
L'erreur pour le h3 vide est présente et un avertissement pour le lien de téléchargement pdf, pour le reste tout est ok: structure, contraste, hiérarchie, langues, alt médias.

### Google test mobile friendly
Message indiquant que le site est facile d'utilisation sur un site mobile.

### I am responsive
Aperçu sur 4 écrans : desktop, laptop, tablette et smartphone. Visuellement cela semble correct.