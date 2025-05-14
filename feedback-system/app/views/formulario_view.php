<!DOCTYPE html>
<html>
<head>
    <title>Enviar Feedback</title>
</head>
<body>
    <h1>Formulário de Feedback</h1>
    <form action="/feedback/cadastrar" method="POST">
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br><br>
        <label>Descrição:</label><br>
        <textarea name="descricao" required></textarea><br><br>
        <label>Tipo:</label><br>
        <select name="tipo" required>
            <option value="bug">Bug</option>
            <option value="sugestão">Sugestão</option>
            <option value="reclamação">Reclamação</option>
            <option value="feedback">Feedback</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
