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
                                                'countries-aljir--label-text-id',         - id текста который вставляется в пилюлю
                                                'pills__wrapper--countries-id',    - id пилюли контейнера для вставки стран
                                                'pills__text--countries-id',                -
                                                'pills__button--countries-id',              -
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
                                                'pills__wrapper--countries-africa-id',
                                                'pills__text--countries-id',
                                                'pills__button--countries-id',
                                                'countries__modal-window--button',
                                                'countries__modal-window--placeholder-id'
                                              )"
                   type="checkbox"
                   name="regions-aljir" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-egipet--label-text-id">Еги́пет</span>

            <input class="custom-checkbox__input"
                   id="regions-egipet--input-id"
                   onclick="addCheckedElement( event, 'regions-egipet--label-text-id', 'pills__wrapper--countries-africa-id', 'pills__text--regions-id', 'pills__button--regions-id', 'regions__modal-window--button', 'regions__modal-window--placeholder-id' )"
                   type="checkbox"
                   name="regions-egipet" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        <li>
          <label class="custom-checkbox__label">
            <span id="regions-madagaskar--label-text-id">Мадагаскар</span>

            <input class="custom-checkbox__input"
                   id="regions-madagaskar--input-id"
                   onclick="addCheckedElement( event, 'regions-madagaskar--label-text-id', 'pills__wrapper--countries-africa-id', 'pills__text--regions-id', 'pills__button--regions-id', 'regions__modal-window--button', 'regions__modal-window--placeholder-id' )"
                   type="checkbox"
                   name="regions-madagaskar" >
                    <span class="cr">
                      <i class="cr-icon custom-checkbox__icon"></i>
                    </span>
          </label>
        </li>
        
      </ul>
    </div>
  </div>

</div>