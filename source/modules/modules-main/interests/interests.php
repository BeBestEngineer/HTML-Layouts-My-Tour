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
<!--              Хранить состояния вкладок после отправки форм можно в local storage-->
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

<!--            <p><iframe name="area" width="500" height="200"></iframe></p>-->
<!--            method="post"-->


            


            <form action="" class="interests__form" method="post">
              <div class="form__container">
                <div class="flex__container">

                  <div class="flex__container  flex__direction--column  flex__item--custom-width-1-0  form__selection-name-container">
                    <label class="form__label" for="selection-name">Название подборки</label>
                    <input class="form__input" type="text" id="selection-name" name="selection-name" placeholder="Введите название подборки">
                  </div>


                  <div class="flex__container  flex__direction--column  flex__item--custom-width-1-0">
                    <label class="form__label" for="selection-name">Ваш город</label>
<!--                    <input class="form__input" type="text" id="selection__city" name="selection-client-city" placeholder="Введите название вашего города">-->
                    <div class="form__input  form__input--cities  dropdown-menu__button"
                         id="cities__modal-window--button">
                      <span id="cities__modal-window--placeholder-id">Выберите Ваш город</span>


                      <div id="location-pills-container">

                        <!--                          pills ( begin )-->
                        <div class="pills__interests-form--cities  hide"
                             id="pills__wrapper--cities-id">
                          <span class="allign-middle" id="pills__text--cities-id">City</span>
                          <button class="allign-middle  icons__wrapper"
                                  type="button"
                                  id="pills__button--cities-id"
                                  onclick="removeCheckedElement( event, 'cities__modal-window--placeholder-id', 'pills__interests-form--cities' )">
                            <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                              <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                            </svg>
                          </button>
                        </div>
                        <!--                          pills ( end )-->

                      </div>
                    </div>

                    <?php require_once 'modules/modules-widgets/cities-modal-window/cities-modal-window.php'; ?>
                  </div>


                  <!--Submit button ( begin )-->
                  <div class="flex__container  flex__direction--row-reverse  flex__align-items--flex-end  flex__item--custom-width-2-0">
                    <button class="buttons  buttons__interests-form--submit" type="submit" name="Button_pressed">
                      <span class="allign-middle">Смотреть результаты</span>
                      <span class="allign-middle  icons__wrapper">
                        <svg class="icons  icons__svg" viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="12" height="12">
                          <path d="M16.7,22.7l9-9c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7l-9-9C16.5,3.1,16.3,3,16,3s-0.5,0.1-0.7,0.3l-1.4,1.4  c-0.4,0.4-0.4,1,0,1.4l4,4c0.3,0.3,0.1,0.9-0.4,0.9H1c-0.6,0-1,0.4-1,1v2c0,0.6,0.4,1,1,1h16.6c0.4,0,0.7,0.5,0.4,0.9l-4,4  c-0.4,0.4-0.4,1,0,1.4l1.4,1.4c0.2,0.2,0.4,0.3,0.7,0.3C16.3,23,16.5,22.9,16.7,22.7z"/>
                        </svg>
                      </span>
                    </button>
                  </div>
                  <!--Submit button ( end )-->

                </div>
              </div>




              <div class="form__container">
                  <label class="form__label">Вы можете задать несколько стран или регионов для подборки</label>
<!--                  <input class="form__input  form__input--regions" type="text" name="selection-regions" placeholder="Выберите регион мира и страну для добавления к подборке" value="">-->
                      <!--todo: заменить на группу input, наверное динамически надо генерировать-->

                <div class="flex__container  flex__direction--column  form__area"
                     id="regions-pills-container"><!--      область для placeholder и групп Регион-Страны              -->
                  <span id="regions__modal-window--placeholder-id">Нажмите кнопку "Добавить регион"</span>

                  <!--                          pills ( begin )-->
                  <!--todo: обернуть в рамку или выделить фоном-->
                  <!--скрытая пилюля региона для клонирования-->
                  <div class="pills__interests-form--regions  hide"
                       id="pills__wrapper--regions-id">
<!--
                       При создании нужно менять id с учётом региона, чтобы id не дублировались
                       Исходный id:                 pills__wrapper-regions-id
                       id для конкретного региона:  pills__wrapper-regions--australia-and-oceania-id
-->
                    <span class="allign-middle" id="pills__text--regions-id">Region name</span>
<!--
                                                    При создании нужно менять id для текста с учётом региона, чтобы id не дублировались
                                                    Исходный id:                 pills__text-regions-id
                                                    id для конкретного региона:  pills__text-regions--australia-and-oceania-id
-->
                    <button class="allign-middle  icons__wrapper"
                            type="button"
                            id="pills__button--regions-id"
                            onclick="removeRegion( event, 'regions__modal-window--placeholder-id', 'pills__interests-form--regions' )">
<!--                        меняем id-->
                      <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                        <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                      </svg>
                    </button>

                    <!--контейнер для пилюль стран-->
                    <div id="countries--pills-container">
<!--
                         при добавлении региона поменять id с учётом региона:  countries--australia-and-oceania-pills-container
-->
                      <!--скрытая пилюля страны для клонирования-->
                      <div class="pills__interests-form--country  hide"
                           id="pills__wrapper--countries-id">
<!--                       при добавлении региона нужно менять id  pills__wrapper--countries-africa-id-->
                        <div class="image-wrapper  pills__image-wrapper  allign-middle">
                          <img class="image" src="icons/flags/" alt="flag-country-name" >
                        </div>

<!--                                                при добавлении региона нужно менять id  pills__text--countries-africa-id-->
                        <span class="allign-middle" id="pills__text--countries-id">Country name</span>

<!--                            при добавлении региона нужно менять id  pills__button--countries-africa-id-->
                        <button class="allign-middle  icons__wrapper"
                                type="button"
                                id="pills__button--countries-id"
                                onclick="removeCheckedElement( event, 'regions__modal-window--placeholder-id', 'pills__interests-form--regions' )">
                          <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                            <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                          </svg>
                        </button>
                      </div>

                    </div>
                  </div>
                  <!--                          pills ( end )-->

                </div>

<!--                Buttons for add regions and countries-->
                <div class="flex__container">                  
                  <button class="buttons  buttons__interests-form--add"
                          id="regions__modal-window--button"
                          
                          type="button">
                    <!--
                    Алгоритм добавления регионов и стран:
                      Раздел 1. Когда нажимаем на "Добавить регион"
                        1. Открывается модальное окно
                        2. Выбираем нужный регион или несколько регионов
                        3. Закрываем модальное окно ( нажимаем на "ок" или "крестик" в верхнем правом углу )
                        4. Скрипт добавляет блоки-региона( пока пилюли ) в #regions-pills-container и устанавливает радиокнопку на первый регион ( делает первый регион активным )
                           Пользователь может самостоятельно перемещать радиокнопку на нужный регион
                           Радиокнопка как стандартный HTML элемент будет скрыта, но активный регион должен отличаться от неактивного ( background-color )
                           /*Может лучше перенести кнопку добавить страну в блоки-региона( пока пилюли )???*/

                          4.1. Добавление блоков региона
                            4.1.1. Скрипт находит шаблон блока
                            4.1.2. Клонирует блок
                            4.1.3. меняет id для: блока-региона, названия региона( находится в span ), кнопки удаления региона

                        5. Скрипт меняет id для кнопки "Добавить страну":
                           Исходный id:                                               countries--country-name__modal-window-button
                           id который устанавливает скрипт в зависимости от региона:  countries--australia-and-oceania__modal-window-button
                                                                                      countries--asia__modal-window-button
                                                                                      countries--america__modal-window-button
                                                                                      countries--africa__modal-window-button
                                                                                      countries--europe__modal-window-button
                                                                                      countries--euroasia__modal-window-button
                      Раздел 2. Когда нажимаем на "Добавить страну"
                        1. Открывается модальное окно в зависимости  от установленного на кнопку id ( Раздел 1, пункт 5. )
                        2. Выбираем нужные страны
                        3. Закрываем модальное окно ( нажимаем на "ок" или "крестик" в верхнем правом углу )
                        4. Скрипт добавляет пилюли для выбранных стран в #regions__countries-container

                      Раздел 3. Когда переключаемся между блоками-регионов( пока пилюлями )
                        1. Скрипт меняет id кнопки ( Раздел 1, пункт 5. )
                    -->
                    <span class="allign-middle">Добавить регион</span>
                  </button>
                  
                  <?php require_once 'modules/modules-widgets/regions-modal-window/regions-modal-window.php'; ?>
                  
                  
                  
<!--                  После выбора региона поменять id кнопки для страны-->
<!--                  onclick="addCountry( event )"-->
                  <button class="buttons  buttons__interests-form--add"
                          id=  "countries--country-name__modal-window-button"
                          data-first-level-dependent-button-id="countries--country-name__modal-window-button"
                          onclick="addCountry( event )"
                          type="button">
                    <span class="allign-middle">Добавить страну</span>
                  </button>
                  
                  <?php require_once 'modules/modules-widgets/countries-modal-window/countries-modal-windows.php'; ?>                  
                  
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
                        <input class="form__input  form__input--departure-date"  id="departure-date"   name="selection-departure-date"  type="text"  placeholder="дата вылета">
                        <input class="form__input  form__input--arrival-date"  id="arrival-date"   name="selection-arrival-date"  type="text"  placeholder="дата прилёта">
                      </div>
                    </div>


                    <div class="flex__container  flex__direction--column  flex__item--custom-width-170-0">
<!--                      todo: вместо flex__direction--column указать flex__direction т.е. без --column-->
<!--                      960px / 170px = 5.647-->
                      <label class="form__label"  for="dates__dropdown-menu--button">На сколько</label>
<!--                      <input class="form__input  form__input--dates  dropdown-menu__button"
                             id="dates__dropdown-menu--button"  
                             onclick="openDropdownMenu( event, 'dates__dropdown-menu--content-id', 'dropdown-menu__content' )"
                             name="selection-dates"
                             type="text"  
                             placeholder="7-14 ночей">-->
                      <div class="flex__container">
                        <input class="form__input  form__input--dates  form__input--1-2  dropdown-menu__button"
                               id="dates-min__dropdown-menu--button"
                               onclick="openDropdownMenu( event, 'dates__dropdown-menu--content-id', 'dropdown-menu__content' )"
                               name="selection-dates-min"
                               type="text"
                               placeholder="7 ночей">
                        <span>-</span>
                        <input class="form__input  form__input--dates  form__input--1-2  dropdown-menu__button"
                               id="dates-max__dropdown-menu--button"
                               onclick="openDropdownMenu( event, 'dates__dropdown-menu--content-id', 'dropdown-menu__content' )"
                               name="selection-dates-max"
                               type="text"
                               placeholder="14 ночей">
                      </div>
                      <div class="dropdown-menu__wrapper">
                        <div id="dates__dropdown-menu--content-id" class="dropdown-menu__content  dates__dropdown-menu--content">

                          <div class="sliders__time-between-boardings-wrapper">
                            <div class="sliders__time-between-boardings"  id="slider__time-between-boardings"></div>
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
                      <div class="flex__container">
                        <input class="form__input  form__input--passengers  dropdown-menu__button"
                               id="parents__dropdown-menu--button"
                               onclick="openDropdownMenu( event, 'passengers__dropdown-menu--content-id', 'dropdown-menu__content' )"
                               name="selection-passengers-parents"
                               value="1"
                               type="text"
                               placeholder="Пассажиры">
                        <span class="flex__item--equal-width  form__text--passengers" id="parents__text">взрослый</span>
                        <input class="form__input  form__input--passengers  dropdown-menu__button"
                               id="childs__dropdown-menu--button"
                               onclick="openDropdownMenu( event, 'passengers__dropdown-menu--content-id', 'dropdown-menu__content' )"
                               name="selection-passengers-childs"
                               value="0"
                               type="text"
                               placeholder="Пассажиры">
                        <span class="flex__item--equal-width  form__text--passengers" id="childs__text">детей</span>
                      </div>
                      <div class="">
                        <div class="dropdown-menu__wrapper">
                          <div id="passengers__dropdown-menu--content-id" class="dropdown-menu__content">

                            <div class="widget__passengers-range">
                              <span class="allign-middle">Взрослые:</span>

                              <button class="allign-middle  widget__passengers-range--button"
                                      id="widget__passengers-range--button-more"
                                      onclick="ChangeInputValueMore( event, 'widget__passengers-range-parents--input', 'parents__dropdown-menu--button', 'parents__text' )"
                                      type="button">
                                <svg width="20" height="20" viewBox="0 0 1792 1792">
                                  <path class="icons__svg-color" d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"></path>
                                </svg>
                              </button>

                              <input class="allign-middle  widget__passengers-range--input"
                                     id="widget__passengers-range-parents--input"
                                     name="selection-passengers-parents"
                                     value="1"
                                     type="text">

                              <button class="allign-middle  widget__passengers-range--button"
                                      id="widget__passengers-range--button-less"
                                      onclick="ChangeInputValueLess( event, 'widget__passengers-range-parents--input', 'parents__dropdown-menu--button', 'parents__text' )"
                                      type="button">
                                <svg width="20" height="20" viewBox="0 0 1792 1792">
                                  <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                                </svg>
                              </button>

                            </div>


                            <div class="widget__passengers-range">
                              <span class="allign-middle">Дети:</span>

                              <button class="allign-middle  widget__passengers-range--button"
                                      id="widget__passengers-range--button-more"
                                      onclick="ChangeInputValueMore( event, 'widget__passengers-range-childs--input', 'childs__dropdown-menu--button', 'childs__text' )"
                                      type="button">
                                <svg width="20" height="20" viewBox="0 0 1792 1792">
                                  <path class="icons__svg-color" d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"></path>
                                </svg>
                              </button>

                              <input class="allign-middle  widget__passengers-range--input"
                                     id="widget__passengers-range-childs--input"
                                     name="selection-passengers-childs"
                                     value="0"
                                     type="text">

                              <button class="allign-middle  widget__passengers-range--button"
                                      id="widget__passengers-range--button-less"
                                      onclick="ChangeInputValueLess( event, 'widget__passengers-range-childs--input', 'childs__dropdown-menu--button', 'childs__text' )"
                                      type="button">
                                <svg width="20" height="20" viewBox="0 0 1792 1792">
                                  <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                                </svg>
                              </button>

                            </div>


                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="flex__container  flex__direction--column  flex__item--custom-width-265-0">
<!--                      960px / 265px = 3.623-->
                      <label class="form__label"  for="price">Стоимость тура</label>
                      <div class="flex__container">
                        <input class="form__input  form__input--prices  form__input--1-2  dropdown-menu__button"
                               id="prices-min__dropdown-menu--button"
                               onclick="openDropdownMenu( event, 'prices__dropdown-menu--content-id', 'dropdown-menu__content' )"
                               name="selection-prices-min"
                               type="text"
                               placeholder="7 ночей">
                        <span>-</span>
                        <input class="form__input  form__input--prices  form__input--1-2  dropdown-menu__button"
                               id="prices-max__dropdown-menu--button"
                               onclick="openDropdownMenu( event, 'prices__dropdown-menu--content-id', 'dropdown-menu__content' )"
                               name="selection-prices-max"
                               type="text"
                               placeholder="14 ночей">
                      </div>
                      <div class="dropdown-menu__wrapper">
                        <div id="prices__dropdown-menu--content-id" class="dropdown-menu__content  prices__dropdown-menu--content">

                          <div class="sliders__interests-prices-wrapper">
                            <div class="sliders__interests-prices"  id="slider__interests-prices"></div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>




                  <div class="flex__container">
                    <div class="flex__container  flex__direction--column  flex__item--custom-width-160-0">
                      <label class="form__label"  for="hotel-stars">Категория отелей от</label>
<!--                      todo: синхронизироать id для input и label-->
<!--                      <input class="hide"  id="hotels__dropdown-menu--input"  name="selection-hotels-stars"  type="text">-->
                      <input class="form__checkbox--hotel-stars  hide"  id="hotel-stars--5"  name="selection__hotel-5-stars"  type="checkbox">
                      <input class="form__checkbox--hotel-stars  hide"  id="hotel-stars--4"  name="selection__hotel-4-stars"  type="checkbox">
                      <input class="form__checkbox--hotel-stars  hide"  id="hotel-stars--3"  name="selection__hotel-3-stars"  type="checkbox">
                      <input class="form__checkbox--hotel-stars  hide"  id="hotel-stars--2"  name="selection__hotel-2-stars"  type="checkbox">

                      <div class="form__input  form__input--hotels  dropdown-menu__button"
                           id="hotels__dropdown-menu--button"
                           onclick="openDropdownMenu( event, 'hotels__dropdown-menu--content-id', 'dropdown-menu__content' )">
                        <span id="hotels__dropdown-menu--placeholder-id">Выберите уровень отеля</span>
                      </div>
                      <div class="dropdown-menu__wrapper">
                        <div id="hotels__dropdown-menu--content-id" class="dropdown-menu__content  hotels__dropdown-menu--content">

                          
                          <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                               id="rating--5-wrapper-id"
                               onclick="addSelectElement( event, 'rating--5-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--5-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                            <div class="rating  rating--5-stars"
                                 id="rating--5-stars-id">
  <!--                            JavaScript create stars-->
                              <svg class="icons__svg" width="20" height="20" viewBox="0 0 1792 1792">
                                <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                              </svg>
                            </div>
<!--                                    todo: разобраться с названиями классов и идентификаторов по БЭМ-->
                            <button class="allign-middle  icons__wrapper  hide"
                                    type="button"
                                    id="rating--5-remove-button"
                                    onclick="removeSelectElement( event, 'rating--5-wrapper-id', 'hotels__dropdown-menu--placeholder-id', 'form__rating-hotels-wrapper', 'hotel-stars--N' )">
                              <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                              </svg>
                            </button>
                          </div>


                          <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                               id="rating--4-wrapper-id"
                               onclick="addSelectElement( event, 'rating--4-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--4-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                            <div class="rating  rating--4-stars"
                                 id="rating--4-stars-id">
  <!--                            JavaScript create stars-->
                              <svg class="icons__svg" width="20" height="20" viewBox="0 0 1792 1792">
                                <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                              </svg>
                            </div>
                            <button class="allign-middle  icons__wrapper  hide"
                                    type="button"
                                    id="rating--4-remove-button"
                                    onclick="removeSelectElement( event, 'rating--4-wrapper-id', 'hotels__dropdown-menu--placeholder-id', 'form__rating-hotels-wrapper', 'hotel-stars--N' )">
                              <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                              </svg>
                            </button>
                          </div>


                          <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                               id="rating--3-wrapper-id"
                               onclick="addSelectElement( event, 'rating--3-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--3-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                            <div class="rating  rating--3-stars"
                                 id="rating--3-stars-id">
  <!--                            JavaScript create stars-->
                              <svg class="icons__svg" width="20" height="20" viewBox="0 0 1792 1792">
                                <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                              </svg>
                            </div>
                            <button class="allign-middle  icons__wrapper  hide"
                                    type="button"
                                    id="rating--3-remove-button"
                                    onclick="removeSelectElement( event, 'rating--3-wrapper-id', 'hotels__dropdown-menu--placeholder-id', 'form__rating-hotels-wrapper', 'hotel-stars--N' )">
                              <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                              </svg>
                            </button>
                          </div>


                          <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                               id="rating--2-wrapper-id"
                               onclick="addSelectElement( event, 'rating--2-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--2-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                            <div class="rating  rating--2-stars"
                                 id="rating--2-stars-id">
  <!--                            JavaScript create stars-->
                              <svg class="icons__svg" width="20" height="20" viewBox="0 0 1792 1792">
                                <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                              </svg>
                            </div>
                            <button class="allign-middle  icons__wrapper  hide"
                                    type="button"
                                    id="rating--2-remove-button"
                                    onclick="removeSelectElement( event, 'rating--2-wrapper-id', 'hotels__dropdown-menu--placeholder-id', 'form__rating-hotels-wrapper', 'hotel-stars--N' )">
                              <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                              </svg>
                            </button>
                          </div>

                        </div>
                      </div>
                    </div>




                    <div class="flex__container  flex__direction--column  flex__item--custom-width-125-0">
                      <label class="form__label"  for="hotel-rating">Рейтинг TopHotels</label>
                      <!--
                      <input class="form__input  form__input--hotel-rating  dropdown-menu__button"
                             id="hotel-rating__dropdown-menu--button"
                             onclick="openDropdownMenu( event, 'hotel-rating__dropdown-menu--content-id', 'dropdown-menu__content' )"
                             name="selection-hotels-rating"
                             type="text"
                             placeholder="Рейтинг отеля">
                      -->
<!--                      <input class="hide"  id="hotel-rating__dropdown-menu--input-button"  name="selection-hotels-rating"  type="text">-->
                      <input class="form__checkbox--hotel-rating  hide"  id="hotel-rating--50"  name="selection__hotel-rating-5-0"  type="checkbox">
                      <input class="form__checkbox--hotel-rating  hide"  id="hotel-rating--40"  name="selection__hotel-rating-4-0"  type="checkbox">
                      <input class="form__checkbox--hotel-rating  hide"  id="hotel-rating--30"  name="selection__hotel-rating-3-0"  type="checkbox">
                      <input class="form__checkbox--hotel-rating  hide"  id="hotel-rating--20"  name="selection__hotel-rating-2-0"  type="checkbox">
                      <input class="form__checkbox--hotel-rating  hide"  id="hotel-rating--10"  name="selection__hotel-rating-1-0"  type="checkbox">
                      <div class="form__input  form__input--hotels-rating  dropdown-menu__button"
                           id="hotels-rating__dropdown-menu--button"
                           onclick="openDropdownMenu( event, 'hotel-rating__dropdown-menu--content-id', 'dropdown-menu__content' )">
                        <span id="hotels-rating__dropdown-menu--placeholder-id">Выберите рейтинг отеля</span>
                        <ul id="hotels-rating-list">

                        </ul>
                      </div>

                      <div class="dropdown-menu__wrapper">
                        <div id="hotel-rating__dropdown-menu--content-id" class="dropdown-menu__content  hotel-rating__dropdown-menu--content">

                          <ul class="hotels-rating-list  hotels-rating-5-list" id="hotels-rating-list__dropdown-id">

                            <li class="flex__container  flex__justify-content--space-between  hotels-rating-list__item  form__rating-hotels-number-wrapper"
                                id="hotel-rating--10-wrapper-id"
                                onclick="addSelectElement( event, 'hotel-rating--10-wrapper-id' ,'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list', 'hotels-rating--10-remove-button', 'hotels-rating__dropdown-menu--button', 'hotel-rating--N' )">
                                <div class="">
                                  <span class="hotels-rating-list__text">Не ниже</span>
                                  <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                                    <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                                  </svg>
                                  <span id="hotels-rating-select__value-id" class="hotels-rating-list__value">1.0</span>
                                </div>
                                <div class="">
                                  <button class="allign-middle  icons__wrapper  hide"
                                          type="button"
                                          id="hotels-rating--10-remove-button"
                                          onclick="removeSelectElement( event, 'hotel-rating--10-wrapper-id', 'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list__item', 'hotel-rating--N' )">
                                    <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                      <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                    </svg>
                                  </button>
                                </div>
                            </li>


                            <li class="flex__container  flex__justify-content--space-between  hotels-rating-list__item  form__rating-hotels-number-wrapper"
                                     id="hotel-rating--20-wrapper-id"
                                     onclick="addSelectElement( event, 'hotel-rating--20-wrapper-id' ,'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list', 'hotels-rating--20-remove-button', 'hotels-rating__dropdown-menu--button', 'hotel-rating--N' )">
                              <div class="">
                                <span class="hotels-rating-list__text">Не ниже</span>
                                <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                                  <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                                </svg>
                                <span id="hotels-rating-select__value-id" class="hotels-rating-list__value">2.0</span>
                              </div>
                              <div class="">
                                <button class="allign-middle  icons__wrapper  hide"
                                        type="button"
                                        id="hotels-rating--20-remove-button"
                                        onclick="removeSelectElement( event, 'hotel-rating--20-wrapper-id', 'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list__item', 'hotel-rating--N' )">
                                  <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                    <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                  </svg>
                                </button>
                              </div>
                            </li>


                            <li class="flex__container  flex__justify-content--space-between  hotels-rating-list__item  form__rating-hotels-number-wrapper"
                                id="hotel-rating--30-wrapper-id"
                                onclick="addSelectElement( event, 'hotel-rating--30-wrapper-id' ,'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list', 'hotels-rating--30-remove-button', 'hotels-rating__dropdown-menu--button', 'hotel-rating--N' )">
                              <div class="">
                                <span class="hotels-rating-list__text">Не ниже</span>
                                <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                                  <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                                </svg>
                                <span id="hotels-rating-select__value-id" class="hotels-rating-list__value">3.0</span>
                              </div>
                              <div class="">
                                <button class="allign-middle  icons__wrapper  hide"
                                        type="button"
                                        id="hotels-rating--30-remove-button"
                                        onclick="removeSelectElement( event, 'hotel-rating--30-wrapper-id', 'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list__item', 'hotel-rating--N' )">
                                  <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                    <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                  </svg>
                                </button>
                              </div>
                            </li>


                            <li class="flex__container  flex__justify-content--space-between  hotels-rating-list__item  form__rating-hotels-number-wrapper"
                                id="hotel-rating--40-wrapper-id"
                                onclick="addSelectElement( event, 'hotel-rating--40-wrapper-id' ,'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list', 'hotels-rating--40-remove-button', 'hotels-rating__dropdown-menu--button', 'hotel-rating--N' )">
                              <div class="">
                                <span class="hotels-rating-list__text">Не ниже</span>
                                <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                                  <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                                </svg>
                                <span id="hotels-rating-select__value-id" class="hotels-rating-list__value">4.0</span>
                              </div>
                              <div class="">
                                <button class="allign-middle  icons__wrapper  hide"
                                        type="button"
                                        id="hotels-rating--40-remove-button"
                                        onclick="removeSelectElement( event, 'hotel-rating--40-wrapper-id', 'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list__item', 'hotel-rating--N' )">
                                  <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                    <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                  </svg>
                                </button>
                              </div>
                            </li>


                            <li class="flex__container  flex__justify-content--space-between  hotels-rating-list__item  form__rating-hotels-number-wrapper"
                                id="hotel-rating--50-wrapper-id"
                                onclick="addSelectElement( event, 'hotel-rating--50-wrapper-id' ,'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list', 'hotels-rating--50-remove-button', 'hotels-rating__dropdown-menu--button', 'hotel-rating--N' )">
                              <div class="">
                                <span class="hotels-rating-list__text">Не ниже</span>
                                <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                                  <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                                </svg>
                                <span id="hotels-rating-select__value-id" class="hotels-rating-list__value">5.0</span>
                              </div>
                              <div class="">
                                <button class="allign-middle  icons__wrapper  hide"
                                        type="button"
                                        id="hotels-rating--50-remove-button"
                                        onclick="removeSelectElement( event, 'hotel-rating--50-wrapper-id', 'hotels-rating__dropdown-menu--placeholder-id', 'hotels-rating-list__item', 'hotel-rating--N' )">
                                  <svg class="icons  icons__svg  icons__svg--rating-hotels" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                    <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                  </svg>
                                </button>
                              </div>
                            </li>



                          </ul>

                        </div>
                      </div>
                    </div>




                    <div class="flex__container  flex__direction--column  flex__item--custom-width-185-0">
                      <label class="form__label"  for="nutrition">Тип питания</label>
                      <input class="hide"
                             id=""
                             name="selection-nutrition"
                             type="text"
                             placeholder="Выберите питание">
                      <div class="form__input  form__input--nutrition  dropdown-menu__button"
                           id="nutrition__dropdown-menu--button"
                           onclick="openDropdownMenu( event, 'nutrition__dropdown-menu--content-id', 'dropdown-menu__content' )">
                        <span id="nutrition__dropdown-menu--placeholder-id">Выберите тип питания</span>
                        <div id="nutrition-pills-container">


<!--                          pills ( begin )-->
                          <div class="pills__interests-form--nutrition  someClass  hide"
                               id="pills__wrapper--nutrition-id">
                            <span class="allign-middle" id="pills__text--nutrition-id">Nuttrition type</span>
                            <button class="allign-middle  icons__wrapper"
                                    type="button"
                                    id="pills__button--nutrition-id"
                                    onclick="removeCheckedElement( event, 'nutrition__dropdown-menu--placeholder-id', 'pills__interests-form--nutrition' )">
                              <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                              </svg>
                            </button>
                          </div>
<!--                          pills ( end )-->

                        </div>
                      </div>

                      <div class="dropdown-menu__wrapper">
                        <div id="nutrition__dropdown-menu--content-id" class="dropdown-menu__content  nutrition__dropdown-menu--content">

                          <ul>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="nutrition__dropdown-menu-option  custom-checkbox__input"
                                       id="nutrition-room-only--input-id"
                                       onclick="addCheckedElement( event, 'nutrition-room-only--label-text-id', 'pills__wrapper--nutrition-id', 'pills__text--nutrition-id', 'pills__button--nutrition-id', 'nutrition__dropdown-menu--button', 'nutrition__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="nutrition-room-only" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="nutrition-room-only--label-text-id">Room only</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="nutrition__dropdown-menu-option  custom-checkbox__input"
                                       id="nutrition-bed-and-breakfast--input-id"
                                       onclick="addCheckedElement( event, 'nutrition-bed-and-breakfast--label-text-id', 'pills__wrapper--nutrition-id', 'pills__text--nutrition-id', 'pills__button--nutrition-id', 'nutrition__dropdown-menu--button', 'nutrition__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="nutrition-bed-and-breakfast" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="nutrition-bed-and-breakfast--label-text-id">Bed &amp; breakfast</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="nutrition__dropdown-menu-option  custom-checkbox__input"
                                       id="nutrition-half-board--input-id"
                                       onclick="addCheckedElement( event, 'nutrition-half-board--label-text-id', 'pills__wrapper--nutrition-id', 'pills__text--nutrition-id', 'pills__button--nutrition-id', 'nutrition__dropdown-menu--button', 'nutrition__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="nutrition-half-board" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="nutrition-half-board--label-text-id">Half board</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="nutrition__dropdown-menu-option  custom-checkbox__input"
                                       id="nutrition-full-board--input-id"
                                       onclick="addCheckedElement( event, 'nutrition-full-board--label-text-id', 'pills__wrapper--nutrition-id', 'pills__text--nutrition-id', 'pills__button--nutrition-id', 'nutrition__dropdown-menu--button', 'nutrition__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="nutrition-full-board" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="nutrition-full-board--label-text-id">Full board</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="nutrition__dropdown-menu-option  custom-checkbox__input"
                                       id="nutrition-all-inclusive--input-id"
                                       onclick="addCheckedElement( event, 'nutrition-all-inclusive--label-text-id', 'pills__wrapper--nutrition-id', 'pills__text--nutrition-id', 'pills__button--nutrition-id', 'nutrition__dropdown-menu--button', 'nutrition__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="nutrition-all-inclusive" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="nutrition-all-inclusive--label-text-id">All inclusive</span>
                              </label>
                            </li>
                          </ul>

                        </div>
                      </div>
                    </div>




                    <div class="flex__container  flex__direction--column  flex__item--custom-width-225-0">
                      <label class="form__label"  for="location">Расположение</label>
                      <input class="hide"
                             id=""
                             name="selection-location"
                             type="text"
                             placeholder="Выберите расположение">
                      <div class="form__input  form__input--location  dropdown-menu__button"
                           id="location__dropdown-menu--button"
                           onclick="openDropdownMenu( event, 'location__dropdown-menu--content-id', 'dropdown-menu__content' )">
                        <span id="location__dropdown-menu--placeholder-id">Выберите расположение</span>
                        <div id="location-pills-container">


                          <!--                          pills ( begin )-->
                          <div class="pills__interests-form--location  someClass  hide"
                               id="pills__wrapper--location-id">
                            <span class="allign-middle" id="pills__text--location-id">Location place</span>
                            <button class="allign-middle  icons__wrapper"
                                    type="button"
                                    id="pills__button--location-id"
                                    onclick="removeCheckedElement( event, 'location__dropdown-menu--placeholder-id', 'pills__interests-form--location' )">
                              <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                              </svg>
                            </button>
                          </div>
                          <!--                          pills ( end )-->

                        </div>
                      </div>


                      <div class="dropdown-menu__wrapper">
                        <div id="location__dropdown-menu--content-id" class="dropdown-menu__content  location__dropdown-menu--content">


                          <div class="flex__container">
                            <ul>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="location__dropdown-menu-option  custom-checkbox__input"
                                       id="location-active--input-id"
                                       onclick="addCheckedElement( event, 'location-active--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="location-active" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="location-active--label-text-id">Активный</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="location__dropdown-menu-option  custom-checkbox__input"
                                       id="location-calm--input-id"
                                       onclick="addCheckedElement( event, 'location-calm--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="location-calm" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="location-calm--label-text-id">Спокойный</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="location__dropdown-menu-option  custom-checkbox__input"
                                       id="location-family--input-id"
                                       onclick="addCheckedElement( event, 'location-family--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="location-family" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="location-family--label-text-id">Семейный</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="location__dropdown-menu-option  custom-checkbox__input"
                                       id="location-health--input-id"
                                       onclick="addCheckedElement( event, 'location-health--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="location-health" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="location-health--label-text-id">Здоровье</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="location__dropdown-menu-option  custom-checkbox__input"
                                       id="location-city--input-id"
                                       onclick="addCheckedElement( event, 'location-city--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="location-city" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="location-city--label-text-id">Городской</span>
                              </label>
                            </li>
                            <li>
                              <label class="custom-checkbox__label">
                                <input class="location__dropdown-menu-option  custom-checkbox__input"
                                       id="location-beachfront--input-id"
                                       onclick="addCheckedElement( event, 'location-beachfront--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                       type="checkbox"
                                       name="location-beachfront" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                <span id="location-beachfront--label-text-id">Пляжный</span>
                              </label>
                            </li>
                          </ul>
                            <ul>
                              <li>
                                <label class="custom-checkbox__label">
                                  <input class="location__dropdown-menu-option  custom-checkbox__input"
                                         id="location-first-line--input-id"
                                         onclick="addCheckedElement( event, 'location-first-line--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                         type="checkbox"
                                         name="location-first-line" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                  <span id="location-first-line--label-text-id">1-я линия</span>
                                </label>
                              </li>
                              <li>
                                <label class="custom-checkbox__label">
                                  <input class="location__dropdown-menu-option  custom-checkbox__input"
                                         id="location-second-line--input-id"
                                         onclick="addCheckedElement( event, 'location-second-line--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                         type="checkbox"
                                         name="location-second-line" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                  <span id="location-second-line--label-text-id">2-я линия</span>
                                </label>
                              </li>
                              <li>
                                <label class="custom-checkbox__label">
                                  <input class="location__dropdown-menu-option  custom-checkbox__input"
                                         id="location-third-line--input-id"
                                         onclick="addCheckedElement( event, 'location-third-line--label-text-id', 'pills__wrapper--location-id', 'pills__text--location-id', 'pills__button--location-id', 'location__dropdown-menu--button', 'location__dropdown-menu--placeholder-id' )"
                                         type="checkbox"
                                         name="location-third-line" >
                                <span class="cr">
                                  <i class="cr-icon custom-checkbox__icon"></i>
                                </span>
                                  <span id="location-third-line--label-text-id">3-я линия</span>
                                </label>
                              </li>
                            </ul>
                          </div>


                        </div>
                      </div>
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
      <?php
        echo '<pre>';
        var_dump(  $_SESSION );
        echo '</pre>';
      ?>
      
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



