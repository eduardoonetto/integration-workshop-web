<?php
    class AdminController {
        private $config;

        public function __construct() {
            // Cargar el archivo de configuración
            $this->config = require('./config/config.php');
        }

        // Acción por defecto
        public function index() {
            // Lógica para la página de inicio del administrador
            // Datos que deseas pasar a la vista
            $data = array(
                'titulo' => 'Mi Página',
                'contenido' => 'Este es el contenido de mi página'
            );
            
            $this->_render('admin/index', $data);
        }

        
        private function _render($view, $data = array()) {
            // Carga la vista
            extract($data);
            //include($this->config['VIEWS_PATH'] . 'templates/header.php');
            include($this->config['VIEWS_PATH'] . $view . '.php');
            //include($this->config['VIEWS_PATH'] . 'templates/footer.php');
        }
    }
