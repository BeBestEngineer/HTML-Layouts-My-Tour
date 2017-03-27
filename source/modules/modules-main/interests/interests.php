
  <div class="row__wrapper">
    

    <div class="row  banner__top
                col-direction-sm--row
                col-direction-xs--column"><!--height 100px-->

      <aside class="col--test                 container--960           banner__top--middle
                                              container-full-width-xs">
        Banners top-middle
      </aside>


      <aside class="col--test  col--order--1  flex__item--equal-width  banner__top--side">
        Banners top-side
      </aside>


      <aside class="col--test                 flex__item--equal-width  banner__top--side  ">
        Banners top-side
      </aside>

    </div>


    
    
    <div class="row
                col-direction-md--row
                col-direction-xs--column">

      <div class="                            container--960
                                              container-full-width-sm">
          <main class="main-modules  interests
                                                margin-top-100-sm">
            <b class="title-md  interests__title">Настройка интересов</b>
            <div class="row__wrapper">
              <div class="tabs  row">

                <div class="col
                            col-lg-14
                            col-sm-13
                            col-xs-20
                                       row__wrapper">
                  <div class="row">

                    <a class="
                              col-lg-5
                              col-md-8
                              col-sm-10
                              col-xs-20
                                        links  tabs__title  active"  href="javascript:void(0)"  onclick="openTab(event, 'selection-1')">
                      Подборка
                      <span class="tabs__title-marker--bottom"></span>
                    </a>


                    <a class="
                              col-lg-5
                              col-md-8
                              col-sm-10
                              col-xs-20
                                        links  tabs__title"          href="javascript:void(0)"  onclick="openTab(event, 'selection-2')">
                      Подборка 2
                      <span class="tabs__title-marker--bottom"></span>
                    </a>

                  </div>
                </div>



                  <div class="col
                              col-lg-6
                              col-sm-7
                              col-xs-20
                                         flex__container  flex__justify-content--flex-end">
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

    
    

    <div class="row  banner__bottom
                col-direction-sm--row
                col-direction-xs--column"><!--height 100px-->

      <aside class="col--test                 container--960           banner__bottom--middle
                                              container-full-width-xs">
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
