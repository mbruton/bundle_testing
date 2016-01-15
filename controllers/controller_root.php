<?php

namespace applications\bundle_testing{
    
    /* Prevent direct access */
    defined('ADAPT_STARTED') or die;
    
    
    class controller_root extends \frameworks\adapt\controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        
        
        /*
         * Views
         */
        public function view_default(){
            $this->add_view(new html_h1('Bundle testing'));
        }
        
    }
    
}

?>