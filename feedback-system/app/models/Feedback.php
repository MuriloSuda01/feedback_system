<?php
namespace App\models;

use Core\Model;
use PDO;

class Feedback extends Model {
    public function listarTodos() {
        $stmt = $this->db->query("SELECT * FROM feedbacks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM feedbacks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function criar($dados) {
        $stmt = $this->db->prepare("INSERT INTO feedbacks (titulo, descricao, tipo, status) VALUES (?, ?, ?, 'recebido')");
        return $stmt->execute([$dados['titulo'], $dados['descricao'], $dados['tipo']]);
    }

    public function atualizarStatus($id, $status) {
        $stmt = $this->db->prepare("UPDATE feedbacks SET status = ? WHERE id = ?");
        return $stmt->execute([$status, $id]);
    }
}
