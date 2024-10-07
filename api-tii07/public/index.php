<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API's</title>
</head>
<body>
    <h1>API's</h1>
    <h2>Exibe amigos</h2>

    <!-- Div para exibir os dados da API -->
    <div id="dados-api"></div>
    <hr>
    <h2>Adicionar Amigos</h2>
    <form id="addFriends">
        <p>
            <label>Nome</label><br>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label>Idade</label><br>
            <input type="text" id="age" name="age">
        </p>
        <p>
            <button type="submit" id="add-friends">Adicionar</button>
        </p>
    </form>

    <hr>

    <h2>Editar Amigos</h2>
    <form id="editFriends">
        <p>
            <label>Id</label>
            <input type="text" id="editId" name="editId">
        </p>
        <p>
            <label>Nome</label>
            <input type="text" id="editName" name="editName">
        </p>
        <p>
            <label>Idade</label>
            <input type="text" id="editAge" name="editAge">
        </p>
        <p>
            <button type="submit" id="editFriends">Adicionar</button>
        </p>
    </form>
    <hr>
    <h2>Deletar Amigos</h2>
    <form id="deleteFriends">
        <p>
            <label>Id</label><br>
            <input type="text" id="deleteId" name="deleteId">
        </p>
        <p>
            <button type="submit" id="delete-friends">Adicionar</button>
        </p>
    </form>

    <script src="assets/js/api.json.js"></script>
</body>
</html>