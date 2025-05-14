<!DOCTYPE html>
<html>
<head>
    <title>Lista de Feedbacks</title>
</head>
<body>
    <h1>Feedbacks Recebidos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Tipo</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($feedbacks as $feedback): ?>
        <tr>
            <td><?= $feedback['id'] ?></td>
            <td><?= $feedback['titulo'] ?></td>
            <td><?= $feedback['tipo'] ?></td>
            <td><?= $feedback['status'] ?></td>
            <td><a href="/feedbacks/<?= $feedback['id'] ?>">Detalhes</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
