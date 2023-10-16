<?php
    require_once('./models/UserModel.php');
    require_once './utils/RequestUtils.php';
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
            $this->_render('auth/index', $data);
        }

        public function login() {
            // Lógica para la página de inicio del administrador
            // Datos que deseas pasar a la vista
            $email = RequestUtils::getPostData('email');
            $password = RequestUtils::getPostData('password');
            var_dump($email);
            var_dump($password);
            $userData = ($this->User->login($email, $password) ? $this->User->login($email, $password) : false);
            if($userData){
                //crear session:
                session_start();
                $_SESSION['user'] = $userData;
                header("Location: /dashboard");
            }else{
                //retornar al index con mensaje de usuario no registrado o contraseña incorrecta:
                $data = array(
                    'error' => 'Usuario no registrado o contraseña incorrecta'
                );
                $this->_render('auth', $data);
            }
            /*$data = array(
                'email' => 'Login',
                'password' => 'Este es el contenido de mi página'
            );*/
            
            //$this->_render('dashboard/index', $data);
        }
        
        private function _render($view, $data = array()) {
            // Carga la vista
            extract($data);
            include($this->config['VIEWS_PATH'] . $view . '.php');
        }
    }
