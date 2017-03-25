<!-- The Modal -->
<!--<div class="modal"  id="">-->
<div class="modal"  id="<?php echo $modal_windows_Countries_lists -> module_data['id-modal-window']; ?>">


  <!-- Modal content -->
  <div class="modal-content
                               container--960
                               container-full-width-sm">

    <div class="modal-body">
      <div class="row__wrapper">
        <!--row--><div class="row">
                    <div class="col-xs-20  flex__container
                                                                flex__align-items--baseline
                                                                flex__justify-content--space-between
                                                                                                      margin-bottom-20">
                      <b class="title-md  ">Выберите страну</b>                      
                      <span class="close" id="<?php echo $modal_windows_Countries_lists -> module_data['id-modal-button']; ?>">&times;</span>
                    </div>
                  </div>

        <!--row--><?php require $modal_windows_Countries_lists -> module_data['path-list']; ?>
        
      </div>
    </div>
  </div>


</div>