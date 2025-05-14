<?php
namespace App\controllers;

use Core\Controller;
use App\models\Feedback;

class FeedbackController extends Controller {
    private $feedbackModel;

    public function __construct() {
        $this->feedbackModel = new Feedback();
        session_start();
    }

    public function index() {
        $this->autenticar();
        $feedbacks = $this->feedbackModel->listarTodos();
        $this->view('feedbacks_view', ['feedbacks' => $feedbacks]);
    }

    public function show($id) {
        $this->autenticar();
        $feedback = $this->feedbackModel->buscarPorId($id);
        $this->view('feedbacks_show_view', ['feedback' => $feedback]);
    }

    public function store() {
        $dados = $_POST;
        $this->feedbackModel->criar($dados);
        header('Location: /');
    }

    public function update() {
        $this->autenticar();
        $id = $_POST['id'];
        $status = $_POST['status'];
        $this->feedbackModel->atualizarStatus($id, $status);
        header("Location: /feedbacks/{$id}");
    }

    public function formulario() {
        $this->view('formulario_view');
    }

    public function login() {
        $this->view('login');
    }

    public function autenticarLogin() {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        if ($usuario === 'admin' && $senha === '123456') {
            $_SESSION['logado'] = true;
            header('Location: /feedbacks');
        } else {
            echo "Usuário ou senha inválidos.";
        }
    }

    private function autenticar() {
        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
            header('Location: /login');
            exit;
        }
    }
}
