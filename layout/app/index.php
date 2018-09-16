<?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/head.php';?>

  <section class="nav__section" id="nav">
    <div class="nav__header">
      <div class="container">
        <div class="row nav__header__row">

          <a href="mailto:magma_kzn@mail.ru" class="col nav__header__link">
            <img src="img/svg/mail.svg" class="nav__header__link__icon" alt="">
            <span>magma_kzn@mail.ru</span>
          </a>
          <a href="/" class="nav__header__logo">
            <img src="img/svg/magma_logo.svg" class=" nav__header__logo__img" alt="">
          </a>
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="tel:8 843 214-58-33" class="col nav__header__link">
            <img src="img/svg/phone.svg" class="nav__header__link__icon" alt="">
            <span>8 843 214-58-33</span>
          </a>

        </div>
      </div>
    </div>

    <div class="nav__menu">
      <div class="container">
        <div class="row">
          <nav class="col navbar navbar-expand-lg navbar-dark ">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav">

                <li class="nav-item active">
                  <a class="nav-link" href="/">ГЛАВНАЯ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portfolio.php">ПОРТФОЛИО ПРОЕКТОВ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="our_product.php">НАШИ ПРОДУКТЫ</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link " href="production.php" role="button" aria-haspopup="true" aria-expanded="false">
                    ПРОИЗВОДСТВО
                  </a>
                  <span class="dropdown-btn" data-toggle="dropdown"></span>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="production.php">ОБОРУДОВАНИЕ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="production.php">ТЕХНОЛОГИИ</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="gratitude.php">БЛАГОДАРНОСТИ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">КОНТАКТЫ</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="header" id="header" style="background-image: url('img/bg/Bagkround.jpg');">
    <div class="container">
      <div class="row header__row">
        <div class="col">
          <div class="header__title">
            ОТ НАБРОСКА<br>
            К ГОТОВОМУ ИЗДЕЛИЮ
          </div>
          <div class="header__btn-wrap">
            <a href="portfolio.php" class="button">ПОСМОТРЕТЬ ПРОЕКТЫ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-nav" id="product-nav">
    <div class="container">
      <div class="row product-nav__row">

        <a class="col col-lg-2 col-md-4 col-6 product-nav__item" href="our_product.php">
          <div class="product-nav__item__icon">
            <img class="svg" src="img/svg/office.svg" alt="">
          </div>
          <div class="product-nav__item__title">
            Офисная<br>мебель
          </div>
        </a>
        <a class="col col-lg-2 col-md-4 col-6 product-nav__item" href="our_product.php">
          <div class="product-nav__item__icon">
            <img class="svg" src="img/svg/sofa.svg" alt="">
          </div>
          <div class="product-nav__item__title">
            Офисные<br>диваны
          </div>
        </a>

        <a class="col col-lg-2 col-md-4 col-6 product-nav__item" href="our_product.php">
          <div class="product-nav__item__icon">
            <img class="svg" src="img/svg/metalic.svg" alt="">
          </div>
          <div class="product-nav__item__title">
            Металлическая<br>мебель
          </div>
        </a>

        <a class="col col-lg-2 col-md-4 col-6 product-nav__item" href="our_product.php">
          <div class="product-nav__item__icon">
            <img class="svg" src="img/svg/bath.svg" alt="">
          </div>
          <div class="product-nav__item__title">
            Мебель<br>для ванной
          </div>
        </a>


        <a class="col col-lg-2 col-md-4 col-6 product-nav__item" href="our_product.php">
          <div class="product-nav__item__icon">
            <img class="svg" src="img/svg/kids.svg" alt="">
          </div>
          <div class="product-nav__item__title">
            Детская<br>мебель
          </div>
        </a>

        <a class="col col-lg-2 col-md-4 col-6 product-nav__item" href="our_product.php">
          <div class="product-nav__item__icon">
            <img class="svg" src="img/svg/discount.svg" alt="">
          </div>
          <div class="product-nav__item__title">
            Распродажа<br>мебели
          </div>
        </a>

      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container about__container">
      <div class="row about__row">
        <div class="col-12">
          <div class="section__title">О КОМПАНИИ</div>
        </div>
      </div>
    </div>
    <div class="about__inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about__text-block">
            <div class="about__text-block__title">Компания «Магма» — надежный поставщиккачественной продукции.</div>
            <div class="about__text-block__text">
              <p> Нас отличает высокотехнологичная производственная линия, уникальность предоставляемых решений и
                высокий уровень профессионализма кадров. </p>
              <p>Мы всегда находимся в тренде новых веяний в сфере технологийи дизайна и выступаем интегратором
                инновационных решений на всех этапах: от проектирования до сдачи объекта.</p>
            </div>
          </div>
          <div class="col-lg-6 about__img-block">
            <div class="about__img-block__img">
              <img src="img/about.jpg" alt="" class="about__img-block__img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="why" id="why">

    <div class="container why__container">
      <div class="row why__row">
        <div class="col-12">
          <div class="section__title">ПОЧЕМУ ВЫБИРАЮТ НАС</div>
        </div>
      </div>

      <div class="row why__item">
        <div class="col-md-4 why__item__img">
          <img src="img/svg/complex.svg" alt="">
        </div>
        <div class="col-lg-7 col-md-8 why__item__text-block">
          <div class="why__item__title">Комплексный сервис</div>
          <ul class="list">
            <li>Бесплатный выезд специалистов для проведение замеров и консультации</li>
            <li>Бесплатная разработка эскизных проектов</li>
            <li>Бесплатное устранение рекламаций в период гарантийного срока</li>
            <!-- <li>Послегарантийное обслуживание</li> -->
          </ul>
        </div>
      </div>
      <div class="row why__item">
        <div class="col-md-4 why__item__img">
          <img src="img/svg/win.svg" alt="">
        </div>
        <div class="col-lg-7 col-md-8 why__item__text-block">
          <div class="why__item__title">Более 100 выигранных тендеров и госконтрактов</div>
          <ul class="list">
            <li> Сбербанк</li>
            <li>Банк Аверс</li>
            <li>Татнефть-Арена</li>
            <!-- <li>Таиф НК, ТГК 16 и другие</li> -->
          </ul>
        </div>
      </div>
      <div class="row why__item">
        <div class="col-md-4 why__item__img">
          <imag src="img/svg/service.svg" alt="">
        </div>
        <div class="col-lg-7 col-md-8 why__item__text-block">
          <div class="why__item__title">Высококласный сервис</div>
          <ul class="list">
            <li>Помощь в организации доставки, сборке и расстановке товара</li>
            <li>Доставка товара весом не более 40 кг по г. Казани осуществляется бесплатно</li>
            <li>Бесплатное устранение рекламаций в период гарантийного срока</li>

          </ul>
        </div>
      </div>

    </div>
  </section>

  <section class="clients" id="clients">
    <div class="container clients__container">
      <div class="row clients__row">
        <div class="col-12">
          <div class="section__title">НАШИ КЛИЕНТЫ</div>
        </div>
      </div>

      <div class="container clients__container">
        <div class="row clients__row">

          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(1).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(2).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(3).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(4).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(5).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(6).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(7).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(8).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(9).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(10).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(11).jpg" alt="" class="clients__logo">
          </div>
          <div class="col-lg-3 col-md-4 col-6 clients__item ">
            <img src="img/images/partnerslogos/logo(12).jpg" alt="" class="clients__logo">
          </div>

        </div>
      </div>
  </section>


  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'; ?>

  <script src="js/scripts.min.js"></script>

</body>

</html>