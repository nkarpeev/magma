<?php $bodyClass = "body-gray"; require_once $_SERVER['DOCUMENT_ROOT'].'/parts/head.php';?>
  
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
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php">ПОРТФОЛИО ПРОЕКТОВ</a>
                </li>
                <li class="nav-item active">
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

  <section class="product-nav--bg-gray" id="product-nav">
    <div class="container">
      <div class="row product-nav__row">

        <a class="col col-lg-2 col-md-4 col-6 product-nav__item active" href="our_product.php">
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

  <section id="catalog" class="catalog">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4 col-md-6">
          <div class="catalog__item">

            <div class="catalog__item-image fotorama"  data-nav="false">
              <img src="img/catalog/product_001.jpg" alt="" class="catalog__item-img">
              <img src="img/catalog/product_002.jpg" alt="" class="catalog__item-img">
            </div>

            <div class="catalog__item-header">
              <div class="catalog__item-title">Стол прямой</div>
              <div class="catalog__item-price">1 920 – 2 310 ₽</div>
              <div class="catalog__item-button--open">ПОДРОБНЕЕ</div>
            </div>

            <div class="catalog__item-details">
              <div class="catalog__item-details__title">Материалы:</div>
              <div class="catalog__item-details__text">ламинированная ДСП;</div>
              <div class="catalog__item-details__text">кромка столешницы — ПВХ 2 мм;</div>
              <div class="catalog__item-details__text">кромка каркаса — ПВХ 0,4 мм</div>

              <div class="catalog__item-details__title">Цвет:</div>
              <div class="catalog__item-details__text">на выбор заказчика</div>

              <div class="catalog__item-details__title">Толщина:</div>
              <div class="catalog__item-details__text">столешницы — 25 мм;</div>
              <div class="catalog__item-details__text">каркаса — 16 мм</div>

              <div class="catalog__item-details__title">Размеры:</div>
              <div class="catalog__item-details__text">1 400 × 1 400 × 750 мм</div>
              <div class="catalog__item-details__text">1 500 × 1 500 × 750 мм</div>
              <div class="catalog__item-details__text">1 600 × 1 600 × 750 мм</div>
              <div class="catalog__item-details__button">
                <div class="catalog__item-button--close">СВЕРНУТЬ</div>
              </div>
              
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="catalog__item">
  
              <div class="fotorama"  data-nav="false">
                <img src="img/catalog/product_002.jpg" alt="" class="catalog__item-img">
              </div>
  
              <div class="catalog__item-header">
                <div class="catalog__item-title">Стол прямой</div>
                <div class="catalog__item-price">1 920 – 2 310 ₽</div>
                <div class="catalog__item-button--open">ПОДРОБНЕЕ</div>
              </div>
  
              <div class="catalog__item-details">
                <div class="catalog__item-details__title">Материалы:</div>
                <div class="catalog__item-details__text">ламинированная ДСП;</div>
                <div class="catalog__item-details__text">кромка столешницы — ПВХ 2 мм;</div>
                <div class="catalog__item-details__text">кромка каркаса — ПВХ 0,4 мм</div>
  
                <div class="catalog__item-details__title">Цвет:</div>
                <div class="catalog__item-details__text">на выбор заказчика</div>
  
                <div class="catalog__item-details__title">Толщина:</div>
                <div class="catalog__item-details__text">столешницы — 25 мм;</div>
                <div class="catalog__item-details__text">каркаса — 16 мм</div>
  
                <div class="catalog__item-details__title">Размеры:</div>
                <div class="catalog__item-details__text">1 400 × 1 400 × 750 мм</div>
                <div class="catalog__item-details__text">1 500 × 1 500 × 750 мм</div>
                <div class="catalog__item-details__text">1 600 × 1 600 × 750 мм</div>
                <div class="catalog__item-details__button">
                  <div class="catalog__item-button--close">СВЕРНУТЬ</div>
                </div>
                
              </div>
  
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="catalog__item">
    
                <div class="fotorama"  data-nav="false">
                  <img src="img/catalog/product_003.jpg" alt="" class="catalog__item-img">
                </div>
    
                <div class="catalog__item-header">
                  <div class="catalog__item-title">Стол прямой</div>
                  <div class="catalog__item-price">1 920 – 2 310 ₽</div>
                  <div class="catalog__item-button--open">ПОДРОБНЕЕ</div>
                </div>
    
                <div class="catalog__item-details">
                  <div class="catalog__item-details__title">Материалы:</div>
                  <div class="catalog__item-details__text">ламинированная ДСП;</div>
                  <div class="catalog__item-details__text">кромка столешницы — ПВХ 2 мм;</div>
                  <div class="catalog__item-details__text">кромка каркаса — ПВХ 0,4 мм</div>
    
                  <div class="catalog__item-details__title">Цвет:</div>
                  <div class="catalog__item-details__text">на выбор заказчика</div>
    
                  <div class="catalog__item-details__title">Толщина:</div>
                  <div class="catalog__item-details__text">столешницы — 25 мм;</div>
                  <div class="catalog__item-details__text">каркаса — 16 мм</div>
    
                  <div class="catalog__item-details__title">Размеры:</div>
                  <div class="catalog__item-details__text">1 400 × 1 400 × 750 мм</div>
                  <div class="catalog__item-details__text">1 500 × 1 500 × 750 мм</div>
                  <div class="catalog__item-details__text">1 600 × 1 600 × 750 мм</div>
                  <div class="catalog__item-details__button">
                    <div class="catalog__item-button--close">СВЕРНУТЬ</div>
                  </div>
                  
                </div>
    
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="catalog__item">
      
                  <div class="fotorama"  data-nav="false">
                    <img src="img/catalog/product_004.jpg" alt="" class="catalog__item-img">
                  </div>
      
                  <div class="catalog__item-header">
                    <div class="catalog__item-title">Стол прямой</div>
                    <div class="catalog__item-price">1 920 – 2 310 ₽</div>
                    <div class="catalog__item-button--open">ПОДРОБНЕЕ</div>
                  </div>
      
                  <div class="catalog__item-details">
                    <div class="catalog__item-details__title">Материалы:</div>
                    <div class="catalog__item-details__text">ламинированная ДСП;</div>
                    <div class="catalog__item-details__text">кромка столешницы — ПВХ 2 мм;</div>
                    <div class="catalog__item-details__text">кромка каркаса — ПВХ 0,4 мм</div>
      
                    <div class="catalog__item-details__title">Цвет:</div>
                    <div class="catalog__item-details__text">на выбор заказчика</div>
      
                    <div class="catalog__item-details__title">Толщина:</div>
                    <div class="catalog__item-details__text">столешницы — 25 мм;</div>
                    <div class="catalog__item-details__text">каркаса — 16 мм</div>
      
                    <div class="catalog__item-details__title">Размеры:</div>
                    <div class="catalog__item-details__text">1 400 × 1 400 × 750 мм</div>
                    <div class="catalog__item-details__text">1 500 × 1 500 × 750 мм</div>
                    <div class="catalog__item-details__text">1 600 × 1 600 × 750 мм</div>
                    <div class="catalog__item-details__button">
                      <div class="catalog__item-button--close">СВЕРНУТЬ</div>
                    </div>
                    
                  </div>
      
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="catalog__item">
        
                    <div class="fotorama"  data-nav="false">
                      <img src="img/catalog/product_005.jpg" alt="" class="catalog__item-img">
                    </div>
        
                    <div class="catalog__item-header">
                      <div class="catalog__item-title">Стол прямой</div>
                      <div class="catalog__item-price">1 920 – 2 310 ₽</div>
                      <div class="catalog__item-button--open">ПОДРОБНЕЕ</div>
                    </div>
        
                    <div class="catalog__item-details">
                      <div class="catalog__item-details__title">Материалы:</div>
                      <div class="catalog__item-details__text">ламинированная ДСП;</div>
                      <div class="catalog__item-details__text">кромка столешницы — ПВХ 2 мм;</div>
                      <div class="catalog__item-details__text">кромка каркаса — ПВХ 0,4 мм</div>
        
                      <div class="catalog__item-details__title">Цвет:</div>
                      <div class="catalog__item-details__text">на выбор заказчика</div>
        
                      <div class="catalog__item-details__title">Толщина:</div>
                      <div class="catalog__item-details__text">столешницы — 25 мм;</div>
                      <div class="catalog__item-details__text">каркаса — 16 мм</div>
        
                      <div class="catalog__item-details__title">Размеры:</div>
                      <div class="catalog__item-details__text">1 400 × 1 400 × 750 мм</div>
                      <div class="catalog__item-details__text">1 500 × 1 500 × 750 мм</div>
                      <div class="catalog__item-details__text">1 600 × 1 600 × 750 мм</div>
                      <div class="catalog__item-details__button">
                        <div class="catalog__item-button--close">СВЕРНУТЬ</div>
                      </div>
                      
                    </div>
        
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="catalog__item">
          
                      <div class="fotorama"  data-nav="false">
                        <img src="img/catalog/product_006.jpg" alt="" class="catalog__item-img">
                      </div>
          
                      <div class="catalog__item-header">
                        <div class="catalog__item-title">Стол прямой</div>
                        <div class="catalog__item-price">1 920 – 2 310 ₽</div>
                        <div class="catalog__item-button--open">ПОДРОБНЕЕ</div>
                      </div>
          
                      <div class="catalog__item-details">
                        <div class="catalog__item-details__title">Материалы:</div>
                        <div class="catalog__item-details__text">ламинированная ДСП;</div>
                        <div class="catalog__item-details__text">кромка столешницы — ПВХ 2 мм;</div>
                        <div class="catalog__item-details__text">кромка каркаса — ПВХ 0,4 мм</div>
          
                        <div class="catalog__item-details__title">Цвет:</div>
                        <div class="catalog__item-details__text">на выбор заказчика</div>
          
                        <div class="catalog__item-details__title">Толщина:</div>
                        <div class="catalog__item-details__text">столешницы — 25 мм;</div>
                        <div class="catalog__item-details__text">каркаса — 16 мм</div>
          
                        <div class="catalog__item-details__title">Размеры:</div>
                        <div class="catalog__item-details__text">1 400 × 1 400 × 750 мм</div>
                        <div class="catalog__item-details__text">1 500 × 1 500 × 750 мм</div>
                        <div class="catalog__item-details__text">1 600 × 1 600 × 750 мм</div>
                        <div class="catalog__item-details__button">
                          <div class="catalog__item-button--close">СВЕРНУТЬ</div>
                        </div>
                        
                      </div>
          
                    </div>
                  </div>
                  

      </div>
    </div>
  </section>

  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'; ?>

	<script src="js/scripts.min.js"></script>

</body>
</html>
