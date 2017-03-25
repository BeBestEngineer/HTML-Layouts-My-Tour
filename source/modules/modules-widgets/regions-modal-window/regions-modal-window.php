<!-- The Modal -->
<div class="modal"  id="modal-windows__regions-list">

  <!-- Modal content -->
  <div class="modal-content
                             container--960
                             container-full-width-sm"><!-- Modal content -->

    <div class="modal-body">
      <div class="row__wrapper">
        <div class="row">
          <div class="col-xs-20  flex__container
                                                    flex__align-items--baseline
                                                    flex__justify-content--space-between
                                                                                          margin-bottom-20">
            <b class="title-md  ">Выберите регион</b>
            <span class="close" id="regions__modal-window--close-button">&times;</span>

          </div>
        </div>
        <ul class="row">
          <li class="col-lg-5
                     col-md-10
                     col-sm-10
                     col-xs-20
                                margin-bottom-20">
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
          <li class="col-lg-5
                     col-md-10
                     col-sm-10
                     col-xs-20
                                margin-bottom-20">
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
          <li class="col-lg-5
                     col-md-10
                     col-sm-10
                     col-xs-20
                                margin-bottom-20">
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
          <li class="col-lg-5
                     col-md-10
                     col-sm-10
                     col-xs-20
                                margin-bottom-20">
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
          <li class="col-lg-5
                     col-md-10
                     col-sm-10
                     col-xs-20
                                margin-bottom-20">
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
          <li class="col-lg-5
                     col-md-10
                     col-sm-10
                     col-xs-20
                                margin-bottom-20">
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
</div>








