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
  <link rel="stylesheet" href="style/css/style.css">
  <title><?= $title ?></title>
</head>

<body>
  <header>
    <div id="title">
      <a href="#home">
        <h1>Nicolas Revel</h1>
        <h2 id="subtitle">Développeur web fullstack</h2>
      </a>
    </div>
    <div id="navopener">
      <span onclick="openNav()">&#9776;</span>
    </div>
    <div id="myNav" class="responsive">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="responsive-content">
        <a href="#skills">Compétences</a>
        <a href="#projects">Projets</a>
        <a href="#about">Mon parcours</a>
        <a href="#contact">Réseaux Sociaux et Contact</a>
      </div>
    </div>
    <div class="nonresponsive">
      <a href="#skills">Compétences</a>
      <a href="#projects">Projets</a>
      <a href="#about">Mon parcours</a>
      <a href="#contact">Réseaux Sociaux et Contact</a>
    </div>
  </header>

  <main>
    <section id="home">
      <h2>Nicolas Revel</h2>
      <p id="home-subtitle">Développeur Web Fullstack</p>
      <p id="wish">Actuellement en recherche d'une alternance à partir de Septembre 2021</p>
      <nav>
        <ul id="">
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
          <a href="https://developer.mozilla.org/fr/docs/Web/HTML" target="_blank">
            <img src="assets/img/logos/HTML5.svg" alt="Logo de HTML" style="width: 200px;">
            <p>HTML</p>
          </a>
        </div>
        <div class="card">
          <a href="https://developer.mozilla.org/fr/docs/Web/CSS" target="_blank">
            <img src="assets/img/logos/CSS3.svg" alt="Logo de CSS" style="width: 200px;">
            <p>CSS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://getbootstrap.com/" target="_blank">
            <img src="assets/img/logos/Bootstrap.svg" alt="Logo de Bootstrap" style="width: 200px;">
            <p>Bootstrap</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.php.net/manual/fr/intro-whatis.php" target="_blank">
            <img src="assets/img/logos/PHP.svg" alt="Logo de PHP" style="width: 200px;">
            <p>PHP</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.mysql.com/fr/" target="_blank">
            <img src="assets/img/logos/MySQL.svg" alt="Logo de MySQL" style="width: 200px;">
            <p>MySQL</p>
          </a>
        </div>
        <div class="card">
          <a href="https://fr.wikipedia.org/wiki/Markdown" target="_blank">
            <img src="assets/img/logos/Markdown.svg" alt="Logo de Markdown" style="width: 200px;">
            <p>Markdown</p>
          </a>
        </div>
        <div class="card">
          <a href="https://git-scm.com/" target="_blank">
            <img src="assets/img/logos/Git.svg" alt="Logo de Git" style="width: 200px;">
            <p>Git</p>
          </a>
        </div>
        <div class="card">
          <a href="https://sass-lang.com/" target="_blank">
            <img src="assets/img/logos/Sass.svg" alt="Logo de SASS" style="width: 200px;">
            <p>SASS/SCSS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript" target="_blank">
            <img src="assets/img/logos/JavaScript.svg" alt="Logo de JavaScript" style="width: 200px;">
            <p>JavaScript</p>
          </a>
        </div>
        <div class="card">
          <a href="https://jquery.com/" target="_blank">
            <img src="assets/img/logos/Jquery.svg" alt="Logo de JQuery" style="width: 200px;">
            <p>JQuery</p>
          </a>
        </div>
        <div class="card">
          <a href="https://wordpress.org/" target="_blank">
            <img src="assets/img/logos/Wordpress.svg" alt="Logo de Wordpress" style="width: 200px;">
            <p>Wordpress</p>
          </a>
        </div>
      </div>
      <div>
        <h4>... ce que je vais savoir.</h4>
        <div class="card">
          <a href="https://angular.io/" target="_blank">
            <img src="assets/img/logos/Angularjs.svg" alt="Logo de Angular" style="width: 200px;">
            <p>Angular</p>
          </a>
        </div>
        <div class="card">
          <a href="https://nodejs.org/en/" target="_blank">
            <img src="assets/img/logos/Node.svg" alt="Logo de NodeJs" style="width: 200px;">
            <p>NodeJS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://symfony.com/" target="_blank">
            <img src="assets/img/logos/Symfony.svg" alt="Logo de Symfony" style="width: 200px;">
            <p>Symfony</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.slimframework.com/" target="_blank">
            <img src="assets/img/logos/Slim.png" alt="Logo de Slim Framework" style="width: 200px;">
            <p>Slim</p>
          </a>
        </div>
        <div class="card">
          <a href="https://fr.reactjs.org/" target="_blank">
            <img src="assets/img/logos/React.svg" alt="Logo de React" style="width: 200px;">
            <p>React</p>
          </a>
        </div>
        <div class="card">
          <a href="https://vuejs.org/" target="_blank">
            <img src="assets/img/logos/Vue.svg" alt="Logo de VueJS" style="width: 200px;">
            <p>VueJS</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.python.org/" target="_blank">
            <img src="assets/img/logos/Python.svg" alt="" style="width: 200px;">
            <p>Python</p>
          </a>
        </div>
      </div>
      <div>
        <h4>Mes outils </h4>
        <div class="card">
          <a href="https://code.visualstudio.com/" target="_blank">
            <img src="assets/img/logos/VSCode.svg" alt="Logo de Visual Studio Code" style="width: 200px;">
            <p>Visual Studio Code</p>
          </a>
        </div>
        <div class="card">
          <a href="https://github.com/" target="_blank">
            <img src="assets/img/logos/Github.svg" alt="Logo de Github" style="width: 200px;">
            <p>GitHub</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.gitkraken.com/" target="_blank">
            <img src="assets/img/logos/gitkraken.svg" alt="Logo de GitKraken" style="width: 200px;">
            <p>GitKraken</p>
          </a>
        </div>
        <div class="card">
          <a href="https://stackoverflow.com/" target="_blank">
            <img src="assets/img/logos/Stack-overflow.svg" alt="Logo de Stack-Overflow" style="width: 200px;">
            <p>Stack-Overflow</p>
          </a>
        </div>
        <div class="card">
          <a href="https://getcomposer.org/" target="_blank">
            <img src="assets/img/logos/Composer.svg" alt="Logo de Composer" style="width: 200px;">
            <p>Composer</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.npmjs.com/" target="_blank">
            <img src="assets/img/logos/Npm.svg" alt="Logo de NPM" style="width: 200px;">
            <p>NPM</p>
          </a>
        </div>
        <div class="card">
          <a href="https://www.figma.com/" target="_blank">
            <img src="assets/img/logos/Figma.svg" alt="Logo de Figma" style="width: 200px;">
            <p>Figma</p>
          </a>
        </div>
        <div class="card">
          <a href="https://kubuntu.org/" target="_blank">
            <img src="assets/img/logos/Kubuntu.svg" alt="Logo de Kubuntu" style="width: 200px;">
            <p>Kubuntu</p>
          </a>
        </div>
        <div class="card">
          <a href="https://trello.com/" target="_blank">
            <img src="assets/img/logos/Trello.svg" alt="Logo de Trello" style="width: 200px;">
            <p>Trello</p>
          </a>
        </div>
      </div>
    </section>
    <section id="projects">
      <h3>Mes projets</h3>
      <img src="assets/img/screenshots/screenshot_wip.png" alt="Screenshot de mon projet Work in Progress" style="width: 300px;">
      <img src="assets/img/screenshots/screenshot_fansite.png" alt="Screenshot de mon projet de Fansite" style="width: 300px;">
      <img src="assets/img/screenshots/screenshot_livreor.png" alt="Screenshot de mon projet de Livre d'Or" style="width: 300px;">
      <img src="assets/img/screenshots/screenshot_discussion.png" alt="Screenshot de mon projet de site de discussion" style="width: 300px;">
      <img src="assets/img/screenshots/screenshot_blougout.png" alt="Screenshot de mon projet Blougout, site de blog sur le web" style="width: 300px;">
      <img src="assets/img/screenshots/screenshot_boutique.png" alt="Screenshot de mon projet Jungle Gardener, projet de boutique en ligne" style="width: 300px;">
      <p>Je réalise actuellement ma formation de développeur web, à <a href="https://www.laplateforme.io">La Plateforme_</a> qui a une méthode de formation par projet. Par conséquent, même si je n'ai pas encore eu d'expérience professionnelle, j'ai eu l'occasion de faire plusieurs projets.</p>
      <p>Parmis ces projets, j'ai pu réaliser un site de discussion, un projet de blog, ainsi qu'un projet de boutique en ligne factice. Vous pouvez découvrir mes projets via <a href="https://github.com/nicolas-revel/">mon github</a>.</p>
      <a href="https://github.com/nicolas-revel/"><button>Mon GitHub</button></a>
    </section>
    <section id="about">
      <h3>Mon parcours</h3>
      <p>Diplômé d'un Master de Neuropsychologie clinique et intégrative, j'ai décidé, à la suite de mes expériences en stages, de m'orienter vers le développment informatique.</p>
      <p>Je suis passioné par le milieu de la tech dans son ensemble, et j'ai eu la chance d'intégrer <a href="https://www.laplateforme.io">La Plateforme_</a> pour me lancer dans une formation avec un apprentissage par projet.</p>
      <p>Mes objectifs sont maintenant de trouver une alternance de 12 mois pour Septembre 2021. A long terme, j'aimerais me lancer dans une aventure entrepreunariale.</p>
      <img src="assets/img/extras/carbon.svg" style="width: 200px;" alt="">
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

  <script src="javascript/script.js" type="text/Javascript"></script>
</body>

</html>