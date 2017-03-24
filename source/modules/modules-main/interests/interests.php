<div class="row__wrapper">
  <div class="row">
    <div class="col--test  col-lg-3">3</div>
    <div class="col--test  col-lg-14">
      <div class="container--960">960</div>
    </div>
    <div class="col--test  col-lg-3">3</div>
  </div>
</div>


  <div class="row__wrapper">

    <div class="row  banner__top"><!--height 100px-->

      <aside class="col--test                 container--960           banner__top--middle">
        Banners top-middle
      </aside>


      <aside class="col--test  col--order--1  flex__item--equal-width  banner__top--side">
        Banners top-side
      </aside>


      <aside class="col--test                 flex__item--equal-width  banner__top--side  ">
        Banners top-side
      </aside>

    </div>


    
    
    <div class="row">

      <div class="container--960">
          <main class="main-modules  interests">
            <b class="title">Настройка интересов</b>
            <div class="flex__container  tabs">

                  <div class="flex__container  flex__item--custom-width-1-0  tabs__titles-wrapper">
                    <a class="links  tabs__title  active"  href="javascript:void(0)"  onclick="openTab(event, 'selection-1')">
                      Подборка
                      <!--              Хранить состояния вкладок после отправки форм можно в local storage-->
                      <span class="tabs__title-marker--bottom"></span>
                    </a>
                    <a class="links  tabs__title"          href="javascript:void(0)"  onclick="openTab(event, 'selection-2')">
                      Подборка 2
                      <span class="tabs__title-marker--bottom"></span>
                    </a>
                  </div>


                  <div class="tabs__buttons  flex__container  flex__direction--row-reverse  ">
                    <button class="buttons  buttons__interests-form--add-selection" type="button">
                  <span class="allign-middle  icons__wrapper">
                    <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                      <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "/>
                    </svg>
                  </span>
                      <span class="allign-middle">Добавить подборку</span>
                    </button>
                  </div>

                </div>
            <div   class="tabs-wrapper"  id="tabs-wrapper-id">
                  <div class="tabs__content  active"  id="selection-1">
                    <?php require_once 'modules/modules-widgets/forms/form-client-interests/form-client-interests.php'; ?>
                  </div>
                  <div class="tabs__content"                      id="selection-2">
                    <!--                Подборка 2-->
                  </div>
                </div>
          </main>
        </div>


      <aside class="col--test  col--order--1  flex__item--equal-width  banner__middle--side">
        Banners middle-side
        </aside>


      <aside class="col--test                 flex__item--equal-width  banner__middle--side">
        Banners middle-side
        </aside>

    </div>

    
    

    <div class="row  banner__bottom"><!--height 100px-->

      <aside class="col--test                 container--960           banner__bottom--middle">
        Banners bottom-middle
      </aside>


      <aside class="col--test  col--order--1  flex__item--equal-width  banner__bottom--side">
        Banners bottom-side
      </aside>


      <aside class="col--test                 flex__item--equal-width  banner__bottom--side">
        Banners bottom-side
      </aside>

    </div>

</div>



