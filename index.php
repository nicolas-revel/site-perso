<?php

$title = "Nicolas Revel - Portfolio";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bonjour et bienvenue sur mon portfolio ! Je vous souhaite une bonne visite et n'hésitez pas à me contacter si vous souhaitez collaborer avec moi sur vos projets.">
  <meta name="keywords" content="Nicolas Revel, développeur web, développeur mobile, La plateforme, Marseille">
  <title><?= $title ?></title>
</head>

<body>
  <header>
    <h1>Nicolas Revel - Portfolio</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="wip.php?page=projects">Projets</a></li>
        <li><a href="wip.php?page=about">A propos</a></li>
        <li><a href="wip.php?page=contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Nicolas Revel</h2>
      <p><span>Développeur Web Fullstack</span></p>
      <p>Actuellement en recherche d'une alternance à partir de Septembre 2021</p>
      <nav>
        <ul>
          <li><a href="#skills">Compétences</a></li>
          <li><a href="#projects">Projets</a></li>
          <li><a href="#about">Mon parcours</a></li>
          <li><a href="#contact">Réseaux Sociaux et Contact</a></li>
        </ul>
      </nav>
      <div>
        <a href="#skills">icone à animer</a>
      </div>
    </section>
    <section id="skills">
      <h3>Mes compétences</h3>
      <div>
        <h4>Ce que j'ai appris...</h4>
        <div class="card">
          <a href="https://developer.mozilla.org/fr/docs/Web/HTML">
            <img src="assets/img/logos/HTML5.svg" alt="Logo de HTML" style="height: 200px;">
            <p>HTML</p>
          </a>
        </div>
        <div class="card">
          <a href="https://developer.mozilla.org/fr/docs/Web/CSS">
            <img src="assets/img/logos/CSS3.svg" alt="Logo de CSS" style="height: 200px;">
            <p>CSS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://getbootstrap.com/">
            <img src="assets/img/logos/Bootstrap.svg" alt="Logo de Bootstrap" style="height: 200px;">
            <p>Bootstrap</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.php.net/manual/fr/intro-whatis.php">
            <img src="assets/img/logos/PHP.svg" alt="Logo de PHP" style="height: 200px;">
            <p>PHP</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.mysql.com/fr/">
            <img src="assets/img/logos/MySQL.svg" alt="Logo de MySQL" style="height: 200px;">
            <p>MySQL</p>
          </a>
        </div>
        <div class="card">
          <a href="https://fr.wikipedia.org/wiki/Markdown">
            <img src="assets/img/logos/Markdown.svg" alt="Logo de Markdown" style="height: 200px;">
            <p>Markdown</p>
          </a>
        </div>
        <div class="card">
          <a href="https://git-scm.com/">
            <img src="assets/img/logos/Git.svg" alt="Logo de Git" style="height: 200px;">
            <p>Git</p>
          </a>
        </div>
        <div class="card">
          <a href="https://sass-lang.com/">
            <img src="assets/img/logos/Sass.svg" alt="Logo de SASS" style="height: 200px;">
            <p>SASS/SCSS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript">
            <img src="assets/img/logos/JavaScript.svg" alt="Logo de JavaScript" style="height: 200px;">
            <p>JavaScript</p>
          </a>
        </div>
        <div class="card">
          <a href="https://jquery.com/">
            <img src="assets/img/logos/Jquery.svg" alt="Logo de JQuery" style="height: 200px;">
            <p>JQuery</p>
          </a>
        </div>
        <div class="card">
          <a href="https://wordpress.org/">
            <img src="assets/img/logos/Wordpress.svg" alt="Logo de Wordpress" style="height: 200px;">
            <p>Wordpress</p>
          </a>
        </div>
      </div>
      <div>
        <h4>... ce que je vais savoir.</h4>
        <div class="card">
          <a href="https://angular.io/">
            <img src="assets/img/logos/Angularjs.svg" alt="Logo de Angular" style="height: 200px;">
            <p>Angular</p>
          </a>
        </div>
        <div class="card">
          <a href="https://nodejs.org/en/">
            <img src="assets/img/logos/Node.svg" alt="Logo de NodeJs" style="height: 200px;">
            <p>NodeJS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://symfony.com/">
            <img src="assets/img/logos/Symfony.svg" alt="Logo de Symfony" style="height: 200px;">
            <p>Symfony</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.slimframework.com/">
            <img src="assets/img/logos/Slim.png" alt="Logo de Slim Framework" style="height: 200px;">
            <p>Slim</p>
          </a>
        </div>
        <div class="card">
          <a href="https://fr.reactjs.org/">
            <img src="assets/img/logos/React.svg" alt="Logo de React" style="height: 200px;">
            <p>React</p>
          </a>
        </div>
        <div class="card">
          <a href="https://vuejs.org/">
            <img src="assets/img/logos/Vue.svg" alt="Logo de VueJS" style="height: 200px;">
            <p>VueJS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.python.org/">
            <img src="assets/img/logos/Python.svg" alt="" style="height: 200px;">
            <p>Python</p>
          </a>
        </div>
      </div>
      <div>
        <h4>Mes outils </h4>
        <div class="card">
          <a href="https://code.visualstudio.com/">
            <img src="assets/img/logos/VSCode.svg" alt="Logo de Visual Studio Code" style="height: 200px;">
            <p>Visual Studio Code</p>
          </a>
        </div>
        <div class="card">
          <a href="https://github.com/">
            <img src="assets/img/logos/Github.svg" alt="Logo de Github" style="height: 200px;">
            <p>GitHub</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.gitkraken.com/">
            <img src="assets/img/logos/gitkraken.svg" alt="Logo de GitKraken" style="height: 200px;">
            <p>GitKraken</p>
          </a>
        </div>
        <div class="card">
          <a href="https://stackoverflow.com/">
            <img src="assets/img/logos/Stack-overflow.svg" alt="Logo de Stack-Overflow" style="height: 200px;">
            <p>Stack-Overflow</p>
          </a>
        </div>
        <div class="card">
          <a href="https://getcomposer.org/">
            <img src="assets/img/logos/Composer.svg" alt="Logo de Composer" style="height: 200px;">
            <p>Composer</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.npmjs.com/">
            <img src="assets/img/logos/Npm.svg" alt="Logo de NPM" style="height: 200px;">
            <p>NPM</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.figma.com/">
            <img src="assets/img/logos/Figma.svg" alt="Logo de Figma" style="height: 200px;">
            <p>Figma</p>
          </a>
        </div>
        <div class="card">
          <a href="https://kubuntu.org/">
            <img src="assets/img/logos/Kubuntu.svg" alt="Logo de Kubuntu" style="height: 200px;">
            <p>Kubuntu</p>
          </a>
        </div>
        <div class="card">
          <a href="https://trello.com/">
            <img src="assets/img/logos/Trello.svg" alt="Logo de Trello" style="height: 200px;">
            <p>Trello</p>
          </a>
        </div>
      </div>
    </section>
    <section id="projects">
      <h3>Mes projets</h3>
      <img src="https://picsum.photos/200/150" alt="Screenshot 1">
      <img src="https://picsum.photos/200/150" alt="Screenshot 2">
      <img src="https://picsum.photos/200/150" alt="Screenshot 3">
      <p>Je réalise actuellement ma formation de développeur web, à <a href="https://www.laplateforme.io">La Plateforme_</a> qui a une méthode de formation par projet. Par conséquent, même si je n'ai pas encore eu d'expérience professionnelle, j'ai eu l'occasion de faire plusieurs projets.</p>
      <p>Parmis ces projets, j'ai pu réaliser un site de discussion, un projet de blog, ainsi qu'un projet de boutique en ligne factice. Vous pouvez découvrir mes projets via <a href="https://github.com/nicolas-revel/">mon github</a>.</p>
      <a href="https://github.com/nicolas-revel/"><button>Mon GitHub</button></a>
    </section>
    <section id="about">
      <h3>Mon parcours</h3>
      <p>Diplômé d'un Master de Neuropsychologie clinique et intégrative, j'ai décidé, à la suite de mes expériences en stages, de m'orienter vers le développment informatique.</p>
      <p>Je suis passioné par le milieu de la tech dans son ensemble, et j'ai eu la chance d'intégrer <a href="https://www.laplateforme.io">La Plateforme_</a> pour me lancer dans une formation avec un apprentissage par projet.</p>
      <p>Mes objectifs sont maintenant de trouver une alternance de 12 mois pour Septembre 2021. A long terme, j'aimerais me lancer dans une aventure entrepreunariale.</p>
      <!-- Ajouter une petite image en mode script JS -->
    </section>
    <section id="contact">
      <h3>Me contacter</h3>
      <p>Si mon profil vous intéresse et que vous souhaitez collaborer avec moi à l'avenir, n'hésitez pas à me contacter et je ne manquerais pas de revenir vers vous au plus vite !</p>
      <a href="mailto:nicolas.revel@laplateforme.io"><button>Me contacter</button></a>
      <h4>Mes réseaux sociaux</h4>
      <ul>
        <li><a href="https://twitter.com/NicoRvl_Dev">Twitter</a></li>
        <li><a href="https://www.linkedin.com/in/nicolas-revel/">LinkedIn</a></li>
        <li><a href="https://github.com/nicolas-revel/">GitHub</a></li>
        <li><a href="https://stackoverflow.com/users/14775067/nicolas-revel">Stack-overflow</a></li>
      </ul>
    </section>
  </main>

  <footer>
    <p><span>Made by Nicolas Revel</span></p>
  </footer>
</body>

</html>