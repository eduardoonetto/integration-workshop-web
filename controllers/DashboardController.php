<?php
    require_once './utils/RequestUtils.php';
    session_start();
    class DashboardController {
        private $config;
        public function __construct() {
            // Cargar el archivo de configuración
            $this->config = require_once('./config/config.php');
        }

        // Acción por defecto
        public function index() {
            // Lógica para la página de inicio del administrador
            // Datos que deseas pasar a la vista
            //var_dump($_SESSION);
            if (isset($_SESSION['user']['User_Name'])) {
                    $this->_render('dashboard/index', $_SESSION['user']);
            } else {
                // El usuario no ha iniciado sesión, redirige a una página de inicio de sesión o muestra un mensaje de error
                $data = array(
                    'error' => 'Sesión Expirada'
                );
                header("Location: /auth?session=expired");
            }
        }

        
        private function _render($view, $data = array()) {
            // Carga la vista
            extract($data);
            //include($this->config['VIEWS_PATH'] . 'templates/header.php');
            include($this->config['VIEWS_PATH'] . $view . '.php');
            //include($this->config['VIEWS_PATH'] . 'templates/footer.php');
        }
    }
