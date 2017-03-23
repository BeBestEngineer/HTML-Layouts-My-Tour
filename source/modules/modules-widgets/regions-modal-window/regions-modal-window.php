<!-- The Modal -->
<div id="modal-windows__regions-list" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="regions__modal-window--close-button">&times;</span>
    </div>
    <div class="">
      <ul>
<!--        todo: распарсить через дерево-->
<!--
Описание
onclick="addRegion(
                     event,
                    'regions-australia-and-oceania--label-text-id',   - id текста который вставляется в пилюлю
                    'pills__wrapper--regions-id',                     - id скрытой пилюли, которая клонируется в функции addCheckedElement и id меняется с учётом региона т.е. становиться  pills__wrapper--regions-australia-and-oceania-id
                    'pills__text--regions-id',                        - id текста скрытой пилюли, которая клонируется в функции addCheckedElement  и . . .                                  pills__text--regions-australia-and-oceania-id
                    'pills__button--regions-id',                      - id кнопки скрытой пилюли . . .                                                                                      pills__button--regions-australia-and-oceania-id

                    'regions--pills-container',                        - id контейнера, куда вставляются пилюли, в функции addCheckedElement это параметр - dropdownButtonId, нужен для работы с высотой элемента regions--pills-container
                    'regions__modal-window--placeholder-id',          - id placeholder для скрытия / отображения placeholder

                    'countries--country-name__modal-window-button',   - исходный id кнопки добавления страны, нужен для изменения id кнопки добавления страны, в зависимости от региона
                    'countries--pills-container'                      - id скрытой пилюли страны ( пилюли первого уровня вложенности ), меняется в функции addCheckedElement на             countries--australia-and-oceania-pills-container
                                                                        нужен для добавления пилюль стран в контейнеры для стран соответствующего региона
                  )"
-->

        <li>
          <label class="custom-checkbox__label">
            <span id="regions-australia-and-oceania--label-text-id">Австралия и Океания</span>

            <input class="custom-checkbox__input"
                   id="regions-australia-and-oceania--input-id"
                   onclick="addRegion( 
                                        event,
                                        'regions-australia-and-oceania--label-text-id',
                                        'pills__wrapper--regions-id',
                                        'pills__text--regions-id',
                                        'pills__button--regions-id',
                                        'regions--pills-container',
                                        'regions__modal-window--placeholder-id',
                                        'countries--country-name__modal-window-button',
                                        'placeholder__countries-id',
                                        'countries--pills-container'
                                      )"
                   type="checkbox"
                   name="regions-australia-and-oceania" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-asia--label-text-id">Азия</span>

            <input class="custom-checkbox__input"
                   id="regions-asia--input-id"
                   onclick="addRegion(
                                        event,
                                        'regions-asia--label-text-id',
                                        'pills__wrapper--regions-id',
                                        'pills__text--regions-id',
                                        'pills__button--regions-id',
                                        'regions--pills-container',
                                        'regions__modal-window--placeholder-id',
                                        'countries--country-name__modal-window-button',
                                        'placeholder__countries-id',
                                        'countries--pills-container'
                                      )"
                   type="checkbox"
                   name="regions-asia" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-america--label-text-id">Америка</span>

            <input class="custom-checkbox__input"
                   id="regions-america--input-id"
                   onclick="addRegion(
                                        event,
                                        'regions-america--label-text-id',
                                        'pills__wrapper--regions-id',
                                        'pills__text--regions-id',
                                        'pills__button--regions-id',
                                        'regions--pills-container',
                                        'regions__modal-window--placeholder-id',
                                        'countries--country-name__modal-window-button',
                                        'placeholder__countries-id',
                                        'countries--pills-container'
                                      )"
                   type="checkbox"
                   name="regions-america" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-africa--label-text-id">Африка</span>

            <input class="custom-checkbox__input"
                   id="regions-africa--input-id"
                   onclick="addRegion( 
                                        event, 
                                        'regions-africa--label-text-id', 
                                        'pills__wrapper--regions-id', 
                                        'pills__text--regions-id', 
                                        'pills__button--regions-id', 
                                        'regions--pills-container', 
                                        'regions__modal-window--placeholder-id', 
                                        'countries--country-name__modal-window-button',
                                        'placeholder__countries-id',
                                        'countries--pills-container'
                                      )"
                   type="checkbox"
                   name="regions-africa" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-europe--label-text-id">Европа</span>

            <input class="custom-checkbox__input"
                   id="regions-europe--input-id"
                   onclick="addRegion(
                                        event,
                                        'regions-europe--label-text-id',
                                        'pills__wrapper--regions-id',
                                        'pills__text--regions-id',
                                        'pills__button--regions-id',
                                        'regions--pills-container',
                                        'regions__modal-window--placeholder-id',
                                        'countries--country-name__modal-window-button',
                                        'placeholder__countries-id',
                                        'countries--pills-container'
                                      )"
                   type="checkbox"
                   name="regions-europe" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-euroasia--label-text-id">Евразия</span>

            <input class="custom-checkbox__input"
                   id="regions-euroasia--input-id"
                   onclick="addRegion(
                                        event,
                                        'regions-euroasia--label-text-id',
                                        'pills__wrapper--regions-id',
                                        'pills__text--regions-id',
                                        'pills__button--regions-id',
                                        'regions--pills-container',
                                        'regions__modal-window--placeholder-id',
                                        'countries--country-name__modal-window-button',
                                        'placeholder__countries-id',
                                        'countries--pills-container'
                                      )"
                   type="checkbox"
                   name="regions-euroasia" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
      </ul>
    </div>
  </div>

</div>