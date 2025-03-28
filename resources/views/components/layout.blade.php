<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMS | {{$title}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<!--START SECTION 1 - THE NAVBAR SECTION-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="images/logo.png" alt="logo image" width="130" height="auto">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Acceuil</a></li>
          <li class="nav-item"><a class="nav-link" href="#about"> A propos de nous</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#faq">faq</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">contact</a>
          </li>
        </ul>
        <button type="button" class="rounded-pill btn-rounded" onclick="window.location.href='#footer'">
            Contactez-nous
            <span><i class="fas fa-phone-alt"></i></span>
        </button>
      </div>
    </div>
  </nav>

<!--START SECTION 2 - THE INTRO SECTION-->

<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">Hey!, Bienvenue chez DMS</span>
          <span class="display-2--description lh-base">
           Une startup africaine polyvalente qui vous accompagne dans la digitalisation et la gestion de vos activités
          </span>
        </h1>
        <button type="button" class="btn-rounded rounded-pill" onclick="window.location.href='#footer'">
            Contactez-nous
            <span><i class="fas fa-arrow-right"></i></span>
        </button>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros text-end">
        <div class="welcome">
          <img src="images/arts/intro-section-illustration-removebg.png" class="img-fluid">

        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<!-- START SECTION 3 - THE ABOUT-->
<section id="about" class="about">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">A propos de nous </h1>
      <div class="heading-line"></div>
    </div>
    <!-- START THE CONTENT FOR THE ABOUT  -->
    <div class="row mt-5">
      <div class="col-md-6 about__content">
        <h2 class="display-3--title">Qui sommes-nous ?</h2>
        <p class="lh-lg fw-light fs-6" style="font-family: 'Poppins', sans-serif; color: #000000; line-height: 1.8;">
            Digital Management Services (DMS-Afrique) est un cabinet leader en innovation numérique, spécialisé dans les solutions technologiques sur mesure pour les entreprises et institutions. Basé en Afrique de l’Ouest et présent au Bénin 🇧🇯, Niger 🇳🇪 et Togo 🇹🇬, nous nous engageons à propulser votre transformation digitale avec expertise et excellence.
        </p>
      </div>
      <div class="col-md-6 about__pic"></div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 about__pic"> </div>
        <div class="col-md-6 about__content">
        <h2 class="display-3--title">Ce que nous faisons</h2>
        <p class="lh-lg fw-light fs-6" style="font-family: 'Poppins', sans-serif; color: #000000; line-height: 1.8;">
           Nous offrons des services variés allant de la création de sites web, à la gestion de projets complexes, en passant par le marketing digital et l'hébergement cloud. Notre équipe d'experts est dédiée à fournir des solutions innovantes et efficaces pour répondre aux besoins spécifiques de nos clients.

        </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 about__content">
          <h2 class="display-3--title">Notre mission</h2>
          <p class="lh-lg fw-light fs-6" style="font-family: 'Poppins', sans-serif; color: #000000; line-height: 1.8;">
            DMS-Afrique s’implante progressivement dans tous les pays francophones, avec une approche locale et une vision panafricaine. Notre mission ? Vous offrir des technologies accessibles, fiables et innovantes pour accélérer votre croissance.
          </p>
        </div>
        <div class="col-md-6 about__pic"></div>
      </div>
  </div>


        <!-- START SECTION 4 - THE SERVICES-->
        <section id="services" class="services">
        <div class="container">
            <div class="row text-center">
            <h1 class="display-3 fw-bold">Nos domaines d'expertise</h1>
            <div class="heading-line mb-1"></div>
            </div>
         <!-- START THE DESCRIPTION CONTENT  -->
        <div class="row pt-2 pb-2 mt-0 mb-3">
        <div class="col-md-6 border-right">
            <div class="bg-white p-3">
            <h2 class="fw-bold text-capitalize text-center">
            Nos services vont de l'apport de solutions numériques à la gestion de projets complexes au marketing.
            </h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-white p-4 text-start">
            <p class="lh-lg fw-light fs-6" style="font-family: 'Poppins', sans-serif; color: #000000; line-height: 1.8; fw-dark">
                Nous sommes une entreprise innovante spécialisée dans les services numériques, offrant des solutions sur mesure pour répondre aux besoins des entreprises et des particuliers.
                ne tardez pas voyez par vous même ce que nous vous proposons.
            </p>
            <div class="gif-container text-center mt-4">
                <img src="images/services/backhand_index_pointing_down.gif" alt="suivant" href="#" style="max-height: 200px;">
            </div>
        </div>
        </div>
    </div>

  <!-- START THE CONTENT FOR THE SERVICES  -->
  <div class="container">
    <!-- START THE MARKETING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-paper-plane"></div>
          <h3 class="display-3--title mt-1">Solutions Informatiques</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium
             maxime atque ratione magni repellat?
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/solution1-1.svg" class="img-fluid" style="max-height: 350px;">
        </div>
      </div>
    </div>
    <!-- START THE SOLUTIONS CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="images/services/conception.svg" alt="solutions illustration" class="img-fluid" style="max-height: 350px;" >
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          <h3 class="display-3--title mt-1">Conception de logiciel de gestion</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium
             maxime atque ratione magni repellat?
          </p>
        </div>
      </div>
    </div>
    <!-- START THE CLOUD HOSTING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-cloud-upload-alt"></div>
          <h3 class="display-3--title mt-1">Conception de site web</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium
             maxime atque ratione magni repellat?
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/conception web.svg" alt="cloud hosting illustration" class="img-fluid" style="max-height: 350px;">
        </div>
      </div>
    </div>
    <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="images/services/formation.svg" alt="web development illustration" class="img-fluid" style="max-height: 350px;">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-code"></div>
            <h3 class="display-3--title mt-1">Formation</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
               doloremque autem quibusdam blanditiis harum alias hic accusantium
               maxime atque ratione magni repellat?
            </p>
          </div>
        </div>
      </div>
      <!-- START THE CLOUD HOSTING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-cloud-upload-alt"></div>
            <h3 class="display-3--title mt-1">Vente de matériel informatique</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
               doloremque autem quibusdam blanditiis harum alias hic accusantium
               maxime atque ratione magni repellat?
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/services/vente2.svg" alt="cloud hosting illustration" class="img-fluid" style="max-height: 350px;">
          </div>
        </div>
      </div>
      <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="images/services/marketing.svg" alt="web development illustration" class="img-fluid" style="max-height: 350px;">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-code"></div>
            <h3 class="display-3--title mt-1">Marketing</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
               doloremque autem quibusdam blanditiis harum alias hic accusantium
               maxime atque ratione magni repellat?
            </p>
          </div>
        </div>
      </div>
    </div>

</section>
<hr>
<!--  START SECTION 6 - THE FAQ-->

<section id="faq" class="faq">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-uppercase">faq</h1>
      <div class="heading-line"></div>
      <p class="lead">Questions fréquemment posées, apprenez à l'avance</p>
    </div>
    <!-- ACCORDION CONTENT  -->
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <!-- ACCORDION ITEM 1 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Où se situe votre cabinet ?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque consectetur nostrum placeat aspernatur iste nulla? Ratione ex odit voluptatem minus perspiciatis totam autem, minima nostrum atque magni eum officiis aliquam?
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 2 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               A quelle prix sont vos différents services ?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ipsum, illum nesciunt similique magnam nihil assumenda eum in quod, ullam iusto doloremque nam odit labore ipsa. Ullam nostrum necessitatibus a.
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 3 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Proposer vous des services après vente ?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatibus. Quasi, cumque. Quod, accusantium. Quisquam, voluptatibus. Quasi, cumque. Quod, accusantium. Quisquam, voluptatibus. Quasi, cumque. Quod, accusantium.
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 4 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                je ne suis dans aucun des pays dans lesquels vos services sont proposé, est-ce à dire que je ne peux en profiter ?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nobis quasi cumque non quod aspernatur praesentium laborum dolor debitis corrupti. Ab doloribus deleniti voluptate officiis, perferendis iure provident possimus quo.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- START SECTION 8 - GET STARTED-->
<section id="contact" class="get-started mt-5">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Contactez-nous</h1>
      <div class="heading-line"></div>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class="row text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <div class="cta-info w-100">
          <h4 class="display-4 fw-bold">Satisfaction garantie à 99,99%</h4>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam alias optio minima, tempore architecto sint ipsam dolore tempora facere laboriosam corrupti!
          </p>
          <h3 class="display-3--brief">Quelle sera la prochaine étape ?</h3>
          <ul class="cta-info__list">
            <li>Nous allons analyser votre demande</li>
            <li>Nous allons discuter ensemble</li>
            <li>Nous allons satisfaire votre demande</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        <div class="form w-100 pb-2">
          <h4 class="display-3--title mb-5">Parlez nous de vos besoins</h4>
          <form action="#" class="row">
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" placeholder="email address" id="inputEmail" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <textarea name="message" placeholder="message" id="message" rows="8" class="shadow form-control form-control-lg"></textarea>
            </div>
            <div class="text-center d-grid mt-1">
              <button type="button" class="btn btn-primary rounded-pill pt-3 pb-3">
                Envoyer
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--START SECTION 9 - THE FOOTER-->
<section id="footer" class="footer mt-5">

<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path d="M15 7a2 2 0 0 1 2 2" />
            <path d="M15 3a6 6 0 0 1 6 6" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">+229 60 47 60 60
          </a>
          <p class="contact-box__info--subtitle">Tel Direction 7/7 H24</p>
        </div>
      </div>
      <!-- CONTENT FOR EMAIL  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="3 9 12 15 21 9 12 3 3 9" />
            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
            <line x1="3" y1="19" x2="9" y2="13" />
            <line x1="15" y1="13" x2="21" y2="19" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">contact@dmsafrique.com
        </a>
          <p class="contact-box__info--subtitle">support en ligne</p>
        </div>
      </div>
      <!-- CONTENT FOR LOCATION  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="18" y2="6.01" />
            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
            <line x1="9" y1="4" x2="9" y2="17" />
            <line x1="15" y1="15" x2="15" y2="20" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">Cotonou, BENIN</a>
          <p class="contact-box__info--subtitle">----</p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class="footer-sm" style="background-color: #212121;">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
         Contactez-nous directement sur les réseaux whatsapp ou télégram. (cliquez sur l'icône de votre choix pour nous contacter.)
        </div>
        <div class="col-lg-7 col-md-6">
            <a href="https://wa.me/22966044104" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://t.me/dmsafrique" target="_blank"><i class="fab fa-telegram"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  <div class="container mt-5">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-6 mx-auto">
        <h5 class="text-capitalize fw-bold">Digital Management Services</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <p class="lh-lg">
          votre Satisfaction fait notre réputation 😉!
        </p>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">navigation rapide</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">

          <li><a href="#about">A propos de nous</a></li>
          <li><a href="#services">nos services</a></li>
          <li><a href="#home">Réponses à vos questions</a></li>
          <li><a href="#contact">parlez nous de vos besoins</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Nos contact</h5>
        <p class="lh-lg">
          cliquez simplement 👇
        </p>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
            <li><a href="tel:+22960446060">📞Bénin: +229 60 44 60 60</a></li>
            <li><a href="tel:+22789408989">📞Niger: +227 89 40 89 89</a></li>
            <li><a href="tel:+22890149090">📞Togo: +228 90 14 90 90</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- START THE COPYRIGHT INFO  -->
  <div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright">
            &COPY; Copyright 202* <a href="#home">DMS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
<!-- BACK TO TOP BUTTON  -->
<a href="#" class="shadow btn-primary rounded-circle back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbar = document.querySelector('nav');

        // Détection de la section active
        function updateActiveNav() {
            let fromTop = window.scrollY + navbar.offsetHeight + 50;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (fromTop >= sectionTop && fromTop < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }

        // Écouteur d'événement pour le scroll
        window.addEventListener('scroll', throttle(updateActiveNav, 100));

        // Optimisation des performances
        function throttle(fn, wait) {
            let time = Date.now();
            return function() {
                if ((time + wait - Date.now()) < 0) {
                    fn();
                    time = Date.now();
                }
            }
        }

        // Initialisation au chargement
        updateActiveNav();
    });
    </script>
     <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}></script>

</body>
</html>
