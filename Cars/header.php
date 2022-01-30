<head>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
<!--    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />-->
  </head>
  <body>
    <header>
      <nav class="nav collapsible">
        <a class="nav__brand" href="/"><img src="images/logo.svg" alt="" /></a>
        <svg class="icon icon--white nav__toggler">
          <use xlink:href="images/sprite.svg#menu"></use>
        </svg>
        <!--<ul class="list nav__list collapsible__content">
          <li class="nav__item"><a href="#">Hosting</a></li>
          <li class="nav__item"><a href="#">VPS</a></li>
          <li class="nav__item"><a href="#">Domain</a></li>
          <li class="nav__item"><a href="#">Pricing</a></li>
        </ul>-->
      </nav>
    </header>
    <section class="block block--dark block--skewed-left hero">
      <div class="container grid grid--1x2">
        <header class="block__header hero__content">
          <h1 data-aos="fade-right" class="block__heading">
            Salvage Valuation System
          </h1>
          <p class="hero__tagline">
            Calculate you car value in less than 60 seconds.
          </p>
          <a href="" class="btn btn--accent btn--stretched">Get Started</a>
        </header>
        <picture data-aos="zoom-in">
          <source
            type="image/webp"
            srcset="images/First.webp 1x, images/banner@2x.webp 2x"
          />
          <source
            type="image/png"
            srcset="images/First.png 1x, images/banner@2x.png 2x"
          />
          <img class="hero__image" src="images/banner.png" alt="" />
        </picture>
      </div>
    </section>
