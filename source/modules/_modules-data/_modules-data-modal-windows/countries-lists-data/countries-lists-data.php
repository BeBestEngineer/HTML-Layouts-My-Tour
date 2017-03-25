<?php

class modal_windows_Countries_lists {
    public $module_path = 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-window.php';
    public $module_data;
  
    public function Get_data( $page, $position ) {
        switch ( $page ) { 
            case 'interests-form':
                switch ( $position ) {
                    case 'africa':
                        $this -> module_data = array(
                            'path-this-module' => $this -> module_path,
                            'path-list' => 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-windows--africa/countries-modal-list--africa.php',
                            'id-modal-window' => 'modal-windows__countries--africa-list',
                            'id-modal-button' => 'modal-windows__countries--africa-close-button',
                        );
                    break;
                    case 'america':
                        $this -> module_data = array(
                            'path-this-module' => $this -> module_path,
                            'path-list' => 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-windows--america/countries-modal-list--america.php',
                            'id-modal-window' => 'modal-windows__countries--america-list',
                            'id-modal-button' => 'modal-windows__countries--america-close-button',
                        );
                    break;
                    case 'asia':
                        $this -> module_data = array(
                            'path-this-module' => $this -> module_path,
                            'path-list' => 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-windows--asia/countries-modal-list--asia.php',
                            'id-modal-window' => 'modal-windows__countries--asia-list',
                            'id-modal-button' => 'modal-windows__countries--asia-close-button',
                        );
                    break;
                    case 'australia-and-oceania':
                        $this -> module_data = array(
                            'path-this-module' => $this -> module_path,
                            'path-list' => 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-windows--australia-and-oceania/countries-modal-list--australia-and-oceania.php',
                            'id-modal-window' => 'modal-windows__countries--australia-and-oceania-list',
                            'id-modal-button' => 'modal-windows__countries--australia-and-oceania-close-button',
                        );
                    break;
                    case 'euroasia':
                        $this -> module_data = array(
                            'path-this-module' => $this -> module_path,
                            'path-list' => 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-windows--euroasia/countries-modal-list--euroasia.php',
                            'id-modal-window' => 'modal-windows__countries--euroasia-list',
                            'id-modal-button' => 'modal-windows__countries--euroasia-close-button',
                        );
                    break;
                    case 'europe':
                        $this -> module_data = array(
                            'path-this-module' => $this -> module_path,
                            'path-list' => 'modules/modules-widgets/countries-modal-window/countries-modal-windows/countries-modal-windows--europe/countries-modal-list--europe.php',
                            'id-modal-window' => 'modal-windows__countries--europe-list',
                            'id-modal-button' => 'modal-windows__countries--europe-close-button',
                        );
                    break;
                }
            break;
        }
        return $this -> module_data;
    }
    
    
}
$modal_windows_Countries_lists = new modal_windows_Countries_lists();

?>