<?php
    require_once './utils/RequestUtils.php';
    class AdminController {
        private $config;
        
        public function __construct() {
            // Cargar el archivo de configuración
            $this->config = require_once('./config/config.php');
        }

        // Acción por defecto
        public function index() {
            session_start();
            $data = array(
                'titulo' => 'Administracion de Usuarios',
                'contenido' => 'Registre usuarios a su sistema'
            );
            $midata = array_merge($_SESSION['user'], $data);
            $this->_render('admin/adminuser', $midata);
        }

        public function adminuser(){
 
        }

        
        private function _render($view, $data = array()) {
            // Carga la vista
            extract($data);
            //include($this->config['VIEWS_PATH'] . 'templates/header.php');
            include($this->config['VIEWS_PATH'] . $view . '.php');
            //include($this->config['VIEWS_PATH'] . 'templates/footer.php');
        }
    }
