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
        <img src="assets/img/logos/HTML5.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/CSS3.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/PHP.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/MySQL.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Markdown.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Git.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Sass.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/JavaScript.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Jquery.svg" alt="Image test" style="height: 200px;">
      </div>
      <div>
        <h4>... ce que je vais savoir.</h4>
        <img src="assets/img/logos/Angularjs.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Node.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Symfony.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/React.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Vue.svg" alt="Image test" style="height: 200px;">
        <img src="assets/img/logos/Python.svg" alt="Image test" style="height: 200px;">
      </div>
      <div>
        <h4>Mes outils </h4>
        <img src="assets/img/logos/VSCode.svg" alt="Image test" style="height: 200px;">
        
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