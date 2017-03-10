<div class="flex__container  flex__item--stretch  main-wrapper">
  <div class="  grid__container--medium">
    <!--        todo: проверить ширину контейнера-->
    <div class="grid__col">
      <main class="main-modules  interests">

        <b class="title">Настройка интересов</b>


        <div class="flex__container  tabs">
          <div class="flex__container  flex__item--custom-width-1-0  tabs__titles-wrapper">
            <a class="links  tabs__title  active"  href="javascript:void(0)"  onclick="openTab(event, 'selection-1')">
              Подборка
              <span class="tabs__title-marker--bottom"></span>
            </a>
            <a class="links  tabs__title"          href="javascript:void(0)"  onclick="openTab(event, 'selection-2')">
              Подборка 2
              <i></i>
              <i></i>
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
          <div class="interests__form-wrapper">
            <form action="" class="interests__form">


              <div class="form__container">
                <div class="flex__container">

                  <div class="flex__container  flex__direction--column  flex__item--custom-width-1-0  form__selection-name-container">
                    <label class="form__label" for="selection-name">Название подборки</label>
                    <input class="form__input" type="text" id="selection-name" placeholder="Введите название подборки">
                  </div>


                  <div class="flex__container  flex__direction--column  flex__item--custom-width-1-0">
                    <label class="form__label" for="selection-name">Ваш город</label>
                    <input class="form__input" type="text" id="selection-name" placeholder="Введите название вашего города">
                  </div>


                  <div class="flex__container  flex__direction--row-reverse  flex__align-items--flex-end  flex__item--custom-width-2-0">
                    <button class="buttons  buttons__interests-form--submit" type="submit">
                      <span class="allign-middle">Смотреть результаты</span>
                      <span class="allign-middle  icons__wrapper">
                        <svg class="icons  icons__svg" viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="12" height="12">
                          <path d="M16.7,22.7l9-9c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7l-9-9C16.5,3.1,16.3,3,16,3s-0.5,0.1-0.7,0.3l-1.4,1.4  c-0.4,0.4-0.4,1,0,1.4l4,4c0.3,0.3,0.1,0.9-0.4,0.9H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h16.6c0.4,0,0.7,0.5,0.4,0.9l-4,4  c-0.4,0.4-0.4,1,0,1.4l1.4,1.4c0.2,0.2,0.4,0.3,0.7,0.3C16.3,23,16.5,22.9,16.7,22.7z"/>
                        </svg>
                      </span>
                    </button>
                  </div>

                </div>
              </div>


              <div class="form__container">
                  <label class="form__label">Вы можете задать несколько стран или регионов для подборки</label>
                  <input class="form__input  form__input--regions" type="text" placeholder="Выберите регион мира и страну для добавления к подборке" value="Франция Германия">

                <div class="flex__container  flex__direction--column  form__area">
                  <span class="form__region-name">Европа</span>
                  <div class="flex__container">
                    <div    class="pills__interests-form--country">
                      <div class="image-wrapper  pills__image-wrapper  allign-middle">
                        <img class="image" src="/myTour.loc/source/images/flags/flag-france.png" alt="flag-france" >
                      </div>
                      <span  class="allign-middle">Франция</span>
                      <a class="links  allign-middle  icons__wrapper" href="#">
                        <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                          <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "/>
                        </svg>
                      </a>
                    </div>
<!--                    -->
                    <div    class="pills__interests-form--country">
                      <div class="image-wrapper  pills__image-wrapper  allign-middle">
                        <img class="image" src="/myTour.loc/source/images/flags/flag-germany.png" alt="flag-germany" >
                      </div>
                      <span  class="allign-middle">Германия</span>
                      <a class="links  allign-middle  icons__wrapper" href="#">
                        <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                          <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "/>
                        </svg>
                      </a>
                    </div>
<!--                    -->
                  </div>
                </div>
                <div class="flex__container">                  
                  <button class="buttons  buttons__interests-form--add" type="button">
                    <span class="allign-middle">Добавить регион</span>
                  </button>
                  <button class="buttons  buttons__interests-form--add" type="button">
                    <span class="allign-middle">Добавить страну</span>
                  </button>
                </div>
              </div>
              


              <div class="form__container">
                <div class="flex__container  flex__direction--column">
                  <div class="flex__container  form__container">

                    <div class="flex__container  flex__direction--column  flex__item--custom-width-270-0">
                      <div class="flex__container">
<!--                      960px / 135px = 7.111-->
<!--                        todo: добавить плавное появление для datepicker-->
                        <label class="form__label"  for="departure-date">Дата вылета</label>
                        <label class="form__label  hide__label"  for="arrival-date">Дата прилёта</label>
                      </div>

                      <div class="flex__container">
<!--                      135px -->
                        <input class="form__input  form__input--departure-date"  id="departure-date"  type="text"  placeholder="дата вылета">
                        <input class="form__input  form__input--arrival-date"  id="arrival-date"  type="text"  placeholder="дата прилёта">
                      </div>
                    </div>


                    <div class="flex__container  flex__direction--column  flex__item--custom-width-170-0">
<!--                      todo: вместо flex__direction--column указать flex__direction т.е. без --column-->
<!--                      960px / 170px = 5.647-->
                      <label class="form__label"  for="dates">На сколько</label>
                      <div class="dates__dropdown-menu-wrapper">
                        <input class="form__input  form__input--dates  dates__dropdown-menu--button"  type="text"  id="dates__dropdown-menu--button" onclick="openDropdownMenu( event, 'dates__dropdown-menu--content-id', 'dates__dropdown-menu--content' )" placeholder="7-14 ночей">
                        <div id="dates__dropdown-menu--content-id" class="dates__dropdown-menu--content">

                          <div class="widget__dates-range">
                            <span class="allign-middle">Взрослые:</span>

                            <button class="allign-middle  widget__dates-range--button" id="widget__dates-range--button-more" type="button" onclick="ChangeInputValueMore( event, 'widget__dates-range--input' )">
                              <svg width="20" height="20" viewBox="0 0 1792 1792">
                                <path class="icons__svg-color" d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"></path>
                              </svg>
                            </button>

                            <input class="allign-middle  widget__dates-range--input" id="widget__dates-range--input" value="1" type="text">

                            <button class="allign-middle  widget__dates-range--button" id="widget__dates-range--button-less" type="button" onclick="ChangeInputValueLess( event, 'widget__dates-range--input' )">
                              <svg width="20" height="20" viewBox="0 0 1792 1792">
                                <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                              </svg>
                            </button>

                          </div>                          

                        </div>
                      </div>
                    </div>


                    <div class="flex__container  flex__direction--column  flex__item--custom-width-214-0">
<!--                      960px / 107px = 8.972-->
                      <div class="flex__container  ">
                        <label class="form__label" for="passengers">Количество пассажиров</label>
                        <label class="form__label  hide__label" for="passengers-childs">Количество пассажиров</label>
                      </div>
                      <div class="flex__container  ">
                        <input class="form__input  form__input--passengers-parents" type="text" id="passengers-parents" placeholder="взрослые" value="1 взрослый"  onclick="openDropdownMenu()">
                        <input class="form__input  form__input--passengers-childs"  type="text" id="passengers-childs"  placeholder="дети"     value="0 детей"     onclick="openDropdownMenu()">
                      </div>
                    </div>


                    <div class="flex__container  flex__direction--column  flex__item--custom-width-265-0">
<!--                      960px / 265px = 3.623-->
                      <label class="form__label"  for="price">Стоимость тура</label>
                      <input class="form__input"  type="text"  id="price" placeholder="Укажите стоимость тура" value="50 000 Р - 150 000 Р">
                    </div>
                  </div>


                  <div class="flex__container">
                    <div class="flex__container  flex__direction--column  flex__item--custom-width-160-0">
                      <label class="form__label"  for="hotel-stars">Категория отелей от</label>
                      <input class="form__input"  type="text"  id="hotel-stars" placeholder="" value="5 stars">
<!--                      <span class="icons__chevron icons__chevron--bottom"></span>-->
                    </div>
                    <div class="flex__container  flex__direction--column  flex__item--custom-width-185-0">
                      <label class="form__label"  for="hotel-rating">Рейтинг TopHotels</label>
                      <input class="form__input"  type="text"  id="hotel-rating" placeholder="" value="не ниже 4.0">
                    </div>
                    <div class="flex__container  flex__direction--column  flex__item--custom-width-125-0">
                      <label class="form__label"  for="nutrition">Тип питания</label>
                      <input class="form__input"  type="text"  id="nutrition" placeholder="Выберите питание">
                    </div>
                    <div class="flex__container  flex__direction--column  flex__item--custom-width-225-0">
                      <label class="form__label"  for="location">Расположение</label>
                      <input class="form__input"  type="text"  id="location" placeholder="Выберите расположение">
                    </div>
                    <!--
                      todo: сделать input как в яндекс авиа
                      todo: скрыть инпут и добавить readonly="readonly", значения вставлять в div
                     -->
                    <div class="flex__container  flex__direction--row-reverse  flex__align-items--flex-end  flex__item--custom-width-225-0">

                      <button class="buttons  buttons__interests-form--clear-selection" type="button">
                        <span class="allign-middle  icons__wrapper">
                          <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                            <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "/>
                          </svg>
                        </span>
                        <span class="allign-middle">Удалить подборку</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="tabs__content"                      id="selection-2">
          Подборка 2
        </div>
      </div>

      </main>
    </div>
  </div>

<!--todo: hovers? colors? backgrounds? js?-->
  <aside class="flex__item--equal-width  grid__col    flex__item--order--1">
    <!--    Empty Aside-->
  </aside>


  <aside class="flex__item--equal-width  grid__col">
    <!--    Empty Aside-->
  </aside>
</div>

