<div class="interests__form-wrapper">
  <form action="" class="form--clients-interests" method="post">

    <div class="row__wrapper  form__container">
      <div class="row  form--clients-interests__fields-row">

        <div class="col
                    col-lg-5
                    col-md-5
                    col-sm-10
                    col-xs-20
                               flex__container
                               flex__direction--column
                                                        form--clients-interests__input-wrapper--row-1
                                                                                                       margin-bottom-30-xs">
          <label class="form__label" for="selection-name">Название подборки</label>
          <div class="form__dropdown-menu-button  form__input-text">
            <input class="form__input" type="text" id="selection-name" name="selection-name" placeholder="Введите название подборки">
          </div>
        </div>


        <div class="col
                    col-lg-5
                    col-md-5
                    col-sm-10
                    col-xs-20
                               flex__container
                               flex__direction--column
                                                        form--clients-interests__input-wrapper--row-1
                                                                                                       margin-bottom-30-sm">
          <label class="form__label" for="selection-name">Ваш город</label>
          <div class="flex__container  flex__direction--column  flex__justify-content--center  form__dropdown-menu-button"
               id="cities__modal-window--button">
            <span id="cities__modal-window--placeholder-id" class="form__dropdown-menu-placeholder">Выберите Ваш город</span>


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
        <div class="col
                    col-lg-10
                    col-md-10
                    col-sm-20
                    col-xs-20
                               flex__container
                               flex__direction--row-reverse
                                                             flex__align-items--flex-end">
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

      <div class="flex__container  flex__direction--column  form__area--regions"
           id="regions--pills-container"><!--      область для placeholder и групп Регион-Страны              -->
        <span id="regions__modal-window--placeholder-id" class="form__input-text">Нажмите кнопку "Добавить регион"</span>
        <!-- сюда вставляетмя пилюля для регионов -->
      </div>

      <!--todo: обернуть в рамку или выделить фоном-->
      <!--скрытая пилюля региона для клонирования ( начало )-->
      <div class="pills__interests-form--regions  hide"
           id="pills__wrapper--regions-id">

        <span class="allign-middle" id="pills__text--regions-id">Region name</span>

        <button class="allign-middle  icons__wrapper"
                type="button"
                id="pills__button--regions-id"
                onclick="removeRegion( event, 'regions__modal-window--placeholder-id', 'pills__interests-form--regions' )">
          <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
            <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
          </svg>
        </button>
        <div id="countries--pills-container">
                    <span id="placeholder__countries-id"
                          data-first-level-dependent-countries-placeholder-id="placeholder__countries-id">
                      Нажмите в этом месте чтобы выбрать регион, а затем кнопку "Добавить страну"
                    </span>
          <!-- сюда вставляетмя пилюля для стран -->
        </div>
      </div>
      <!--скрытая пилюля региона для клонирования ( окончание )-->

      <!--скрытая пилюля стран для клонирования ( начало )-->
      <div class="pills__interests-form--country  hide"
           id="pills__wrapper--countries-id">
        <!--                    заменяется на pills__wrapper--countries--america-id-->
        <div class="image-wrapper  pills__image-wrapper  allign-middle">
          <img class="image" src="icons/flags/" alt="flag-country-name" >
        </div>

        <span class="allign-middle" id="pills__text--countries-id">Country name</span>
        <!--                                            заменяется на pills__text--countries-america-id-->
        <button class="allign-middle  icons__wrapper"
                type="button"
                id="pills__button--countries-id"
                data-region-placeholder-id="region-placeholder-id"
                onclick="removeCheckedElement( event, 'placeholder__countries-id', 'pills__interests-form--country' )">
          <!--                        заменяется на pills__button--countries-america-id-->
          <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
            <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
          </svg>
        </button>
      </div>
      <!--скрытая пилюля стран для клонирования ( окончание )-->

      <!-- Buttons for add regions and countries-->
      <div class="flex__container">
        <button class="buttons  buttons__interests-form--add"
                id="regions__modal-window--button"
                type="button">
          <span class="allign-middle">Добавить регион</span>
        </button>

        <?php require_once 'modules/modules-widgets/regions-modal-window/regions-modal-window.php'; ?>

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
      <div class="row__wrapper">

        <div class="row  form--clients-interests__fields-row  form__container  "><!--... строка-->

          <div class="col
                      col-lg-6
                      col-md-10
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-2
                                                                                                         margin-bottom-30-md">
            <div class="">
              <label class="form__label"  for="flatpickr-input__interests-form--boarding-dates">Даты вылета</label>
            </div>

            <div class="flex__container  form__dropdown-menu-button  form__input-text">
              <input class="form__input"
                     id="flatpickr-input__interests-form--boarding-dates"
                     placeholder="Даты вылета и прилёта"
                     readonly="readonly"
                     type="text">
            </div>
          </div>


          <div class="col
                      col-lg-4
                      col-md-10
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-2
                                                                                                         margin-bottom-30-xs">

            <label class="form__label"  for="dates__dropdown-menu--button">На сколько</label>

            <div class="form__dropdown-menu-button
                        semantic__dropdown-menu
                        flex__container
                        ui  selection  dropdown"
                 id="period-dropdown-id">

              <span id="dates-min__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text  dropdown-menu__button">
              </span>

              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text">-</span>

              <span id="dates-max__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text  dropdown-menu__button">
              </span>

              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text">ночей</span>


              <div class="menu">
                <div class="item">
                  <div class="sliders__time-between-boardings-wrapper">
                    <div class="sliders__time-between-boardings"  id="slider__time-between-boardings"></div>
                  </div>
                </div>
              </div>

              <div class="dropdown icon  semantic__dropdown-menu-open-button">
                <div class="icons__wrapper">
                  <svg class="allign-middle
                                icons
                                icons__svg-template--chevron-down
                                icons__svg
                                buttons--open-dropdown-menu" viewBox="0 0 1792 1792" width="15" height="15">
                    <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                  </svg>
                </div>
              </div>

            </div>
          </div>


          <div class="col
                      col-lg-5
                      col-md-10
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-2
                                                                                                         margin-bottom-30-xs">

            <label class="form__label  "                  for="passengers">Количество пассажиров</label>
            <label class="form__label  form__label--hide" for="passengers-childs">Количество пассажиров</label>

            <div class="form__dropdown-menu-button
                        semantic__dropdown-menu
                        flex__container
                        ui  selection  dropdown"
                 id="passengers-dropdown-id">

              <span id="parents__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text  dropdown-menu__button">1
              </span>
              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text"
                    id="parents__text">взрослый
              </span>
              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text">,</span>
              <span id="childs__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text  dropdown-menu__button">0
              </span>
              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text"
                    id="childs__text">детей
              </span>


              <div class="menu">
                <div class="item">
                  <div class="row__wrapper">
                    <div class="row">
                      <div class="col-xs-20">
                        <div class="widget__passengers-range  flex__container  flex__justify-content--space-between  flex__align-items--baseline">
                          <span class="allign-middle">Взрослые:</span>

                          <div class="">
                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-less"
                                    onclick="ChangeInputValueLess( event, 'widget__passengers-range-parents--input', 'parents__dropdown-menu--button', 'parents__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--opacity" viewBox="0 0 100 100">
                                  <rect height="16" width="100" x="0" y="42"></rect>
                                </svg>
                              </span>
                            </button>

                            <input class="allign-middle  buttons__interests-form--input-passengers"
                                   id="widget__passengers-range-parents--input"
                                   name="selection-passengers-parents"
                                   value="1"
                                   type="text">

                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-more"
                                    onclick="ChangeInputValueMore( event, 'widget__passengers-range-parents--input', 'parents__dropdown-menu--button', 'parents__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--rotate" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                  <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                </svg>
                              </span>
                            </button>
                          </div>

                        </div>
                        <div class="widget__passengers-range  flex__container  flex__justify-content--space-between  flex__align-items--baseline">
                          <span class="allign-middle">Дети:</span>

                          <div class="">
                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-less"
                                    onclick="ChangeInputValueLess( event, 'widget__passengers-range-childs--input', 'childs__dropdown-menu--button', 'childs__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--opacity" viewBox="0 0 100 100">
                                  <rect height="16" width="100" x="0" y="42"></rect>
                                </svg>
                              </span>
                            </button>

                            <input class="allign-middle  buttons__interests-form--input-passengers"
                                   id="widget__passengers-range-childs--input"
                                   name="selection-passengers-childs"
                                   value="0"
                                   type="text">

                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-more"
                                    onclick="ChangeInputValueMore( event, 'widget__passengers-range-childs--input', 'childs__dropdown-menu--button', 'childs__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--rotate" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                  <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                </svg>
                              </span>
                            </button>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown icon  semantic__dropdown-menu-open-button">
                <div class="icons__wrapper">
                  <svg class="allign-middle
                                icons
                                icons__svg-template--chevron-down
                                icons__svg
                                buttons--open-dropdown-menu" viewBox="0 0 1792 1792" width="15" height="15">
                    <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                  </svg>
                </div>
              </div>

            </div>


<!--
            <div class="flex__container  form__dropdown-menu-button  form__input-text"
                 onclick="openDropdownMenu( event, 'passengers__dropdown-menu--content-id', 'dropdown-menu__content' )">

              <span id="parents__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input--passengers  dropdown-menu__button">1
              </span>

              <span class="flex__container  flex__direction--column  flex__justify-content--center" id="parents__text">взрослый</span>
              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__text--passengers-parents">,</span>

              <span id="childs__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input--passengers  dropdown-menu__button">0
              </span>

              <span class="flex__container  flex__direction--column  flex__justify-content--center" id="childs__text">детей</span>

            </div>
            <div class="">
              <div class="dropdown-menu__wrapper">
                <div class="dropdown-menu__content  dropdown-menu__content--passengers" id="passengers__dropdown-menu--content-id">

                  <div class="row__wrapper">
                    <div class="row">
                      <div class="col-xs-20">
                        <div class="widget__passengers-range  flex__container  flex__justify-content--space-between  flex__align-items--baseline">
                          <span class="allign-middle">Взрослые:</span>

                          <div class="">
                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-less"
                                    onclick="ChangeInputValueLess( event, 'widget__passengers-range-parents--input', 'parents__dropdown-menu--button', 'parents__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--opacity" viewBox="0 0 100 100">
                                  <rect height="16" width="100" x="0" y="42"></rect>
                                </svg>
                              </span>
                            </button>

                            <input class="allign-middle  buttons__interests-form--input-passengers"
                                   id="widget__passengers-range-parents--input"
                                   name="selection-passengers-parents"
                                   value="1"
                                   type="text">

                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-more"
                                    onclick="ChangeInputValueMore( event, 'widget__passengers-range-parents--input', 'parents__dropdown-menu--button', 'parents__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--rotate" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                  <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                </svg>
                              </span>
                            </button>
                          </div>

                        </div>
                        <div class="widget__passengers-range  flex__container  flex__justify-content--space-between  flex__align-items--baseline">
                          <span class="allign-middle">Дети:</span>

                          <div class="">
                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-less"
                                    onclick="ChangeInputValueLess( event, 'widget__passengers-range-childs--input', 'childs__dropdown-menu--button', 'childs__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--opacity" viewBox="0 0 100 100">
                                  <rect height="16" width="100" x="0" y="42"></rect>
                                </svg>
                              </span>
                            </button>

                            <input class="allign-middle  buttons__interests-form--input-passengers"
                                   id="widget__passengers-range-childs--input"
                                   name="selection-passengers-childs"
                                   value="0"
                                   type="text">

                            <button class="allign-middle  buttons__interests-form--more-less-passengers"
                                    id="widget__passengers-range--button-more"
                                    onclick="ChangeInputValueMore( event, 'widget__passengers-range-childs--input', 'childs__dropdown-menu--button', 'childs__text' )"
                                    type="button">
                              <span class="allign-middle  icons__wrapper">
                                <svg class="icons  icons__svg  icons--rotate" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                                  <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "></polygon>
                                </svg>
                              </span>
                            </button>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

-->
          </div>


          <div class="col
                      col-lg-5
                      col-md-10
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-2">
            <label class="form__label"  for="price">Стоимость тура</label>

            <div class="form__dropdown-menu-button
                        semantic__dropdown-menu
                        flex__container
                        ui  selection  dropdown"
                 id="price-dropdown-id">

              <span id="prices-min__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text  dropdown-menu__button">
              </span>
              <span class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text">-</span>
              <span id="prices-max__dropdown-menu--button"
                    class="flex__container  flex__direction--column  flex__justify-content--center  form__input-text  dropdown-menu__button">
              </span>


                <div class="menu">
                  <div class="item">
                    <div class="sliders__interests-prices-wrapper">
                      <div class="sliders__interests-prices"  id="slider__interests-prices"></div>
                    </div>
                  </div>
                </div>

              <div class="dropdown icon  semantic__dropdown-menu-open-button">
                <div class="icons__wrapper">
                  <svg class="allign-middle
                                icons
                                icons__svg-template--chevron-down
                                icons__svg
                                buttons--open-dropdown-menu" viewBox="0 0 1792 1792" width="15" height="15">
                    <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                  </svg>
                </div>
              </div>

            </div>
          </div>


        </div>




        <div class="row  form--clients-interests__fields-row"><!--последняя строка-->

          <div class="col
                      col-lg-3
                      col-md-5
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-3
                                                                                                         margin-bottom-30-md">
            <label class="form__label"  for="hotel-stars">Категория отелей от</label>

              <div class="ui fluid multiple selection dropdown
                          form__dropdown-menu-button
                             semantic__dropdown-menu
                             flex__container
                             flex__wrap
                             flex__justify-content--flex-start
                             flex__align-items--center"
                   id="interests-form__selection-dropdown--hotels-stars">
                <input name="hotel-stars" type="hidden">

                <div class="dropdown icon  semantic__dropdown-menu-open-button">
                  <div class="icons__wrapper">
                    <svg class="allign-middle
                                icons
                                icons__svg-template--chevron-down
                                icons__svg
                                buttons--open-dropdown-menu" viewBox="0 0 1792 1792" width="15" height="15">
                      <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                    </svg>
                  </div>
                </div>
                <div class="default text  form__dropdown-menu-placeholder">Выберите уровень отеля</div>
                <div class="menu">

                  <div class="item" data-value="hotel-stars--1-stars">
                    <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                         id="rating--1-wrapper-id"
                         onclick="addSelectElement( event, 'rating--1-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--1-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                      <div class="rating  rating--1-stars"
                           id="rating--1-stars-id">
                        <svg class="icons__svg" width="25" height="25" viewBox="0 0 1792 1792">
                          <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                        </svg>
                      </div>
                    </div>
                  </div>


                  <div class="item" data-value="hotel-stars--2-stars">
                    <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                         id="rating--2-wrapper-id"
                         onclick="addSelectElement( event, 'rating--2-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--2-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                      <div class="rating  rating--2-stars"
                           id="rating--2-stars-id">
                        <svg class="icons__svg" width="25" height="25" viewBox="0 0 1792 1792">
                          <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                        </svg>
                      </div>
                    </div>
                  </div>


                  <div class="item" data-value="hotel-stars--3-stars">
                    <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                         id="rating--3-wrapper-id"
                         onclick="addSelectElement( event, 'rating--3-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--3-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                      <div class="rating  rating--3-stars"
                           id="rating--3-stars-id">
                        <svg class="icons__svg" width="25" height="25" viewBox="0 0 1792 1792">
                          <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                        </svg>
                      </div>
                    </div>
                  </div>


                  <div class="item" data-value="hotel-stars--4-stars">
                    <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                         id="rating--4-wrapper-id"
                         onclick="addSelectElement( event, 'rating--4-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--4-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                      <div class="rating  rating--4-stars"
                           id="rating--4-stars-id">
                        <svg class="icons__svg" width="25" height="25" viewBox="0 0 1792 1792">
                          <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                        </svg>
                      </div>
                    </div>
                  </div>


                  <div class="item" data-value="hotel-stars--5-stars">
                    <div class="form__rating-hotels-wrapper  flex__container  flex__justify-content--space-between"
                         id="rating--5-wrapper-id"
                         onclick="addSelectElement( event, 'rating--5-wrapper-id' ,'hotels__dropdown-menu--placeholder-id', 'hotels__dropdown-menu--button', 'rating--5-remove-button', 'hotels__dropdown-menu--button', 'hotel-stars--N' )">
                      <div class="rating  rating--5-stars"
                           id="rating--5-stars-id">
                        <svg class="icons__svg" width="25" height="25" viewBox="0 0 1792 1792">
                          <path d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
                        </svg>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

          </div>


          <div class="col
                      col-lg-4
                      col-md-5
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-3
                                                                                                       margin-bottom-30-xs">
            <label class="form__label"  for="hotel-rating">Рейтинг TopHotels</label>

            <div class="ui fluid multiple selection dropdown
                          form__dropdown-menu-button
                             semantic__dropdown-menu
                             flex__container
                             flex__wrap
                             flex__justify-content--flex-start
                             flex__align-items--center"
                 id="interests-form__selection-dropdown--hotels-rating">
              <input name="hotel-ratings" type="hidden">

              <div class="dropdown icon  semantic__dropdown-menu-open-button">
                <div class="icons__wrapper">
                  <svg class="allign-middle
                                icons
                                icons__svg-template--chevron-down
                                icons__svg
                                buttons--open-dropdown-menu" viewBox="0 0 1792 1792" width="15" height="15">
                    <path class="icons__svg-color" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                  </svg>
                </div>
              </div>
              <div class="default text  form__dropdown-menu-placeholder">Выберите рейтинг отеля</div>
              <div class="menu">

                <div class="item" data-value="hotel-rating--1.0">
                  <span class="allign-middle">Не ниже</span>
                  <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                    <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                  </svg>
                  <span class="allign-middle">1.0</span>
                </div>


                <div class="item" data-value="hotel-rating--2.0">
                  <span class="allign-middle">Не ниже</span>
                  <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                    <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                  </svg>
                  <span class="allign-middle">2.0</span>
                </div>


                <div class="item" data-value="hotel-rating--3.0">
                  <span class="allign-middle">Не ниже</span>
                  <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                    <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                  </svg>
                  <span class="allign-middle">3.0</span>
                </div>


                <div class="item" data-value="hotel-rating--4.0">
                  <span class="allign-middle">Не ниже</span>
                  <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                    <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                  </svg>
                  <span class="allign-middle">4.0</span>
                </div>


                <div class="item" data-value="hotel-rating--5.0">
                  <span class="allign-middle">Не ниже</span>
                  <svg class="allign-bottom  icons__svg  hotels-rating-list__icon" width="20" height="20" viewBox="0 0 24 24" >
                    <path d="M21 22h-18v-4h18v4zm-2.266-12.906c-3.749 2.293-5.296-2.125-6.734-7.094-1.433 4.951-2.984 9.388-6.734 7.094-1.305-.798-5.266-4.094-5.266-4.094 1.796 3.797 2.75 6.292 3 11h18c.25-4.708 1.203-7.203 3-11 0 0-3.961 3.296-5.266 4.094z"/>
                  </svg>
                  <span class="allign-middle">5.0</span>
                </div>

              </div>
            </div>

          </div>


          <div class="col
                      col-lg-3
                      col-md-10
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-3
                                                                                                         margin-bottom-30-xs">
            <label class="form__label"  for="nutrition">Тип питания</label>

            <div class="flex__container
                        flex__direction--column
                        flex__justify-content--center">

              <select class="ui  fluid  selection  dropdown
                             form__dropdown-menu-button
                             semantic__dropdown-menu
                             flex__container
                             flex__wrap
                             flex__justify-content--flex-start
                             flex__align-items--center"
                      name="regions"
                      multiple="multiple"
                      id="interests-form__selection-dropdown--nutrition">
                <option class="form__dropdown-menu-placeholder" value="">Выберите тип питания</option>

                <option value="nutrition-active">Room only</option>
                <option value="nutrition-calm">Bed &amp; breakfast</option>
                <option value="nutrition-family">Half board</option>
                <option value="nutrition-health">Full board</option>
                <option value="nutrition-city">All inclusive</option>
              </select>

            </div>

          </div>


          <div class="col
                      col-lg-5
                      col-md-10
                      col-sm-10
                      col-xs-20
                                 flex__container
                                 flex__direction--column
                                                          form--clients-interests__input-wrapper--row-3
                                                                                                         margin-bottom-30-sm">
            <label class="form__label"  for="location">Расположение</label>

            <div class="flex__container
                        flex__direction--column
                        flex__justify-content--center">

              <select class="ui  fluid  selection  dropdown
                             form__dropdown-menu-button
                             semantic__dropdown-menu
                             flex__container
                             flex__wrap
                             flex__justify-content--flex-start
                             flex__align-items--center"
                      multiple="multiple"
                      name="regions"
                      id="interests-form__selection-dropdown--locations">
                <option class="form__dropdown-menu-placeholder" value="">Выберите расположение</option>

                <option value="location-active">Активный</option>
                <option value="location-calm">Спокойный</option>
                <option value="location-family">Семейный</option>
                <option value="location-health">Здоровье</option>
                <option value="location-city">Городской</option>
                <option value="location-beach">Пляжный</option>

                <option value="location-1-line">1-я Линия</option>
                <option value="location-2-line">2-я Линия</option>
                <option value="location-3-line">3-я Линия</option>
              </select>

            </div>
          </div>


          <div class="col
                      col-lg-5
                      col-md-10
                      col-sm-20
                      col-xs-20
                                 flex__container
                                 flex__direction--row-reverse
                                                               flex__align-items--flex-end">
            <button class="buttons  buttons__interests-form--clear-selection" type="button">
                        <span class="allign-middle  icons__wrapper">
                          <svg class="icons  icons__svg" x="0px" y="0px" viewBox="0 0 32.526 32.526" width="8" height="8">
                            <polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "/>
                          </svg>
                        </span>
              <span class="allign-middle">Удалить подборку</span>
            </button>
          </div>

          <!--
            todo: сделать input как в яндекс авиа
            todo: скрыть инпут и добавить readonly="readonly", значения вставлять в div
           -->
        </div>

      </div>
    </div>

  </form>
</div>