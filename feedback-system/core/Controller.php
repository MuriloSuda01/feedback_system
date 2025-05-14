<?php
namespace Core;

class Controller {
    protected function view($view, $dados = []) {
        extract($dados);
        require_once "../app/views/{$view}.php";
    }
}
