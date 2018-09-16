<?php
  $bodyClass = "";
  require_once $_SERVER['DOCUMENT_ROOT'].'/parts/head.php';?>

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
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <nav class="col navbar navbar-expand-lg navbar-dark bg-dark">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link" href="/">ГЛАВНАЯ</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="portfolio.php">ПОРТФОЛИО ПРОЕКТОВ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="our_product.php">НАШИ ПРОДУКТЫ</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link " href="production.php"  role="button"  aria-haspopup="true" aria-expanded="false">
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

  <section class="product" id="product">
    
    <div class="container product__container">
      <div class="row product__row">
        <div class="col-12">
          <div class="section__title">Название компании</div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 product__gallery">
          <div class="fotorama"  data-nav="thumbs" data-allowfullscreen="true">
            <img src="img/images/portfolio covers/sberbank_2020.jpg" alt="">
            <img src="img/images/portfolio covers/avers.jpg" alt="">
            <img src="img/images/portfolio covers/tatneft.jpg" alt="">
            <img src="img/images/portfolio covers/sberbank.jpg" alt="">
            <img src="img/images/portfolio covers/yugra.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 product__detail">
          <div class="product__detail__inner">
            <div class="product__detail__title">Что было сделано:</div>
            <ul class="list">
              <li>Кухонные гарнитуры</li>
              <li>Кухонные стулья</li>
              <li>Шкафы-гардеробы</li>
              <li>Тумбы и комоды</li>
              <li>Шторы и тюли</li>
            </ul>
          </div>
        </div>
      </div>
    </div> 

  </section>

  <section class="portfolio" id="portfolio">
    <div class="container portfolio__container">
      <div class="row portfolio__row">
        <div class="col-12">
          <div class="section__title">ДРУГИЕ ПРОЕКТЫ</div>
        </div>
      </div>
    </div>

    <div class="portfolio__list">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 col-12 portfolio__item">
            <a href="project-page.php" class="portfolio__item__link">
              <img class="portfolio__item__img" src="img/images/portfolio covers/ak_bars.jpg" alt="">
              <div class="portfolio__item__title">
                    Название компании
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-12 portfolio__item">
            <a href="project-page.php" class="portfolio__item__link">
              <img class="portfolio__item__img" src="img/images/portfolio covers/ak_bars.jpg" alt="">
              <div class="portfolio__item__title">
                    Название компании
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-12 portfolio__item">
            <a href="project-page.php" class="portfolio__item__link">
              <img class="portfolio__item__img" src="img/images/portfolio covers/ak_bars.jpg" alt="">
              <div class="portfolio__item__title">
                    Название компании
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

 <?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'; ?>

	<script src="js/scripts.min.js"></script>

</body>
</html>
