<!-- The Modal -->
<div id="modal-windows__countries--africa-list" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="countries--africa__modal-window-close-button">&times;</span>
    </div>
    <div class="">
      <ul>
        <!--        todo: распарсить через дерево-->

<!--               onclick="addCheckedElement(
                                                event,
                                                'countries-aljir--label-text-id',           - id текста который вставляется в пилюлю страны
                                                'pills__wrapper--countries-id',             - id оболочки пилюли страны
                                                'pills__text--countries-id',                - id текста который заменяется на текст в countries-aljir--label-text-id
                                                'pills__button--countries-id',              - id кнопки для удаления пилюли
                                                'countries__modal-window--button',          -
                                                'countries__modal-window--placeholder-id'   -
                                              )"
-->
        <li>
          <label class="custom-checkbox__label">
            <span id="countries-aljir--label-text-id">Алжир</span>

            <input class="custom-checkbox__input"
                   id="countries-aljir--input-id"
                   onclick="addCheckedElement(
                                                event,
                                                'countries-aljir--label-text-id',
                                                'pills__wrapper--countries-id',
                                                'pills__text--countries-id',
                                                'pills__button--countries-id',
                                                'countries--africa-pills-container',
                                                'placeholder__countries--africa-id',
                                                '',
                                                '',
                                                'placeholder__countries--africa-id'
                                              )"
                   type="checkbox"
                   name="country-aljir" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="countries-egipet--label-text-id">Еги́пет</span>

            <input class="custom-checkbox__input"
                   id="countries-egipet--input-id"
                   onclick="addCheckedElement(
                                                event,
                                                'countries-egipet--label-text-id',
                                                'pills__wrapper--countries-id',
                                                'pills__text--countries-id',
                                                'pills__button--countries-id',
                                                'countries--africa-pills-container',
                                                'placeholder__countries--africa-id',
                                                '',
                                                '',
                                                'placeholder__countries--africa-id'
                                              )"
                   type="checkbox"
                   name="country-egipet" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="countries-madagaskar--label-text-id">Мадагаскар</span>

            <input class="custom-checkbox__input"
                   id="countries-madagaskar--input-id"
                   onclick="addCheckedElement(
                                                event,
                                                'countries-madagaskar--label-text-id',
                                                'pills__wrapper--countries-id',
                                                'pills__text--countries-id',
                                                'pills__button--countries-id',
                                                'countries--africa-pills-container',
                                                'placeholder__countries--africa-id',
                                                '',
                                                '',
                                                'placeholder__countries--africa-id'
                                              )"
                   type="checkbox"
                   name="country-madagaskar" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        
      </ul>
    </div>
  </div>

</div>