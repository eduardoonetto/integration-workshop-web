<?php
// Función para cargar controladores
function loadController($controllerName) {
    require_once('./controllers/' . $controllerName . '.php');
}

// Obtén la URL solicitada
$requestUri = isset($_GET['url']) ? $_GET['url'] : 'Auth/index';

if (preg_match('/\.(css|js|jpg|jpeg|png|gif)$/', $requestUri)) {
    // Si la URL termina en .css, .js, .jpg, .jpeg, .png o .gif, 
    // sirve el archivo estático directamente
    return false;
}
// Divide la URL en partes usando "/" como delimitador
$parts = explode('/', $requestUri);

// El primer elemento en la matriz de partes es el nombre del controlador
$controllerName = !empty($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'AuthController';

// El segundo elemento en la matriz de partes es el nombre de la función (o acción)
$actionName = !empty($parts[1]) ? $parts[1] : 'index';

// Carga el controlador
loadController($controllerName);

// Verifica si el controlador y la acción existen
if (class_exists($controllerName)) {
    $controller = new $controllerName();

    if (method_exists($controller, $actionName)) {
        // Llama a la acción
        $controller->$actionName();
    } else {
        echo "La acción $actionName no existe en el controlador $controllerName.";
    }
} else {
    echo "El controlador $controllerName no existe.";
}
