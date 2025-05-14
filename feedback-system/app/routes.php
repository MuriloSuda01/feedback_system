<?php
use App\controllers\FeedbackController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];

$controller = new FeedbackController();

switch ($uri) {
    case '/':
        $controller->formulario();
        break;
    case '/feedbacks':
        $controller->index();
        break;
    case (preg_match('/\/feedbacks\/(\d+)/', $uri, $matches) ? true : false):
        $controller->show($matches[1]);
        break;
    case '/feedback/cadastrar':
        if ($metodo === 'POST') {
            $controller->store();
        }
        break;
    case '/feedback/atualizar':
        if ($metodo === 'POST') {
            $controller->update();
        }
        break;
    case '/login':
        if ($metodo === 'GET') {
            $controller->login();
        } else if ($metodo === 'POST') {
            $controller->autenticarLogin();
        }
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}
