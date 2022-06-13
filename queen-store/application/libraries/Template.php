<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
        private $template_data = [];
        
        /**
        * You have to load this library, after loading library
        * You can load this library in controller with by using
        * $this->template->load('VIEW_PAGE');
        * Where VIEW_PAGE is the content of a page without header
        * & footer.
        */


        /**
         * This function will use to set template data.
         * 
         * @param mixed $name this will be the name of the variable which will show in view template.
         * @param mixed $value this will be the return value from the view, passed to variable $view.
         * @return void 
         */
        function _set($name, $value)
        {
            $this->template_data[$name] = $value;
        }

        /**
         * This function will use to load template.
         * 
         * @param mixed $view this will be the view file name.
         * @param array $view_data this will be the data you want to pass to the view.
         * @param mixed $template your default template name is template, if changed, use your template file own name.
         * @param bool $return type of your view.
         * @return void 
         */
    
        function load($view = '' , $view_data = [], $template = 'template/template', $return = FALSE)
        {               
            $this->CI =& get_instance();
            $this->_set('template_contents', $this->CI->load->view("template/{$view}", $view_data, TRUE));            
            return $this->CI->load->view($template, $this->template_data, $return);
        }
}

/* End of file template.php and path \application\libraries\Template.php */
