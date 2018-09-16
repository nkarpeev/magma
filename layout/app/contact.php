<?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/head.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/nav.php';?>


  <section class="contact" id="contact">
    <div class="container contact__container">
      <div class="row contact__row">
        <div class="col-12">
          <div class="section__title">КОНТАКТЫ</div>
        </div>
      </div>
    </div>
  
    <div class="container-fluid">
      <div class="row">
        <div id="map" class="col contact__map"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-lg-6">
          <div class="contact__list-title">Контактная информация:</div>
          <ul class="contact__list">
            <li class="contact__list__item">
              <img class="contact__list__item-icon" src="img/svg/address_contacts.svg">
              <span>Казань, ул. Тэцевская 201, оф. 203 (имеется парковка) <br>
              <a class="link" href="#">Как добраться?</a></span>
            </li>
            <li class="contact__list__item">
              <img class="contact__list__item-icon" src="img/svg/clock_contacts.svg">
              <span>10:00 – 18:00</span>    
            </li>
            <li class="contact__list__item">
              <img class="contact__list__item-icon" src="img/svg/phone_contacts.svg">
              <span><a class="link-text" href="tel:8 843 214-58-33">8 843 214-58-33</a></span>
            </li>
            <li class="contact__list__item">
              <img class="contact__list__item-icon" src="img/svg/mail_contacts.svg">
              <span><a class="link-text" href="mailto:magma_kzn@mail.ru">magma_kzn@mail.ru</a></span>
            </li>
          </ul>
          <div class="contact__soc">
            <a href="#" class="contact__soc-item instagram"></a>
            <a href="#" class="contact__soc-item vk"></a>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="contact__form-title">Есть вопросы? Оставьте заявку:</div>
          <form action="" class="contact__form">
            <div class="contact__form-group">
              <input type="text" name="name" id="name"  class="contact__form__input" placeholder="Ваше имя">
              <div class="contact__error">error</div>
            </div>
            <div class="contact__form-group">
              <input type="email" name="email" id="email"  class="contact__form__input" placeholder="Email">
              <div class="contact__error"></div>
            </div>
            <div class="contact__form-group">
              <textarea name="message" id="message"   rows="5" class="contact__form__input" placeholder="Ваше сообщение"></textarea>
              <div class="contact__error"></div>
            </div>
            <div class="contact__form-group">
              <button type="submit" class="button">ОТПРАВИТЬ</button>
            </div>
          </form>
          <div class="privacy-policy">
            <span class="accent">*</span> — отправляя свои данные в форме обратной связи, вы соглашаетесь на обработку персональных данных.
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'; ?>

  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/parts/script_map.php'; ?>
  <script src="js/scripts.min.js"></script>


</body>
</html>
