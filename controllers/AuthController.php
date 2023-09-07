<?php
    require_once('./models/UserModel.php');

    class AuthController {
        private $config;
        private $User;

        public function __construct() {
            // Cargar el archivo de configuración
            $this->config = require_once('./config/config.php');
            $this->User = new UserModel();
        }

        // Acción por defecto
        public function index() {
            // Lógica para la página de inicio del administrador
            // Datos que deseas pasar a la vista
            $data = array(
                'titulo' => 'Login',
                'contenido' => 'Este es el contenido de mi página'
            );

            $data['user'] = $this->User->obtenerUsuarioByEmail('EDUARDO.ONETTO97@GMAIL.COM')[0];
            $this->_render('auth/index', $data);
        }

        
        private function _render($view, $data = array()) {
            // Carga la vista
            extract($data);
            include($this->config['VIEWS_PATH'] . $view . '.php');
        }
    }
