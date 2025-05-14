<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Feedback</title>
</head>
<body>
    <h1>Detalhes do Feedback</h1>
    <p><strong>ID:</strong> <?= $feedback['id'] ?></p>
    <p><strong>Título:</strong> <?= $feedback['titulo'] ?></p>
    <p><strong>Descrição:</strong> <?= $feedback['descricao'] ?></p>
    <p><strong>Tipo:</strong> <?= $feedback['tipo'] ?></p>
    <p><strong>Status:</strong> <?= $feedback['status'] ?></p>

    <form action="/feedback/atualizar" method="POST">
        <input type="hidden" name="id" value="<?= $feedback['id'] ?>">
        <label>Atualizar Status:</label><br>
        <select name="status" required>
            <option value="recebido">Recebido</option>
            <option value="em análise">Em Análise</option>
            <option value="em desenvolvimento">Em Desenvolvimento</option>
            <option value="finalizado">Finalizado</option>
        </select><br><br>
        <button type="submit">Atualizar Status</button>
    </form>

    <br>
    <a href="/feedbacks">Voltar à Lista</a>
</body>
</html>
