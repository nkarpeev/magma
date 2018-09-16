<?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/head.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/nav.php';?>

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
