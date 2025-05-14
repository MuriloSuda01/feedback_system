<?php
namespace Core;

use Core\Conexao;

class Model {
    protected $db;

    public function __construct() {
        $this->db = Conexao::getInstancia();
    }
}
