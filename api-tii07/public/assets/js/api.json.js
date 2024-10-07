// Construção de uma função para consulta e JSON com PHP
function loadData() {
    fetch("../private/api/api.json.php")
        .then(response => response.json())
        .then(data => {
            const dataDiv = document.getElementById("dados-api");

            // Limpa os dados
            dataDiv.innerHTML = "";

            data.forEach(item => {
                const div = document.createElement("div");

                div.textContent = `Id: ${ item.id } | Nome: ${ item.name } | Idade: ${ item.age }`;
                dataDiv.appendChild(div);
            })
        })
        .catch(error => console.error("ERRO: ", error));
}

// Função para adicionar item
document.getElementById("addFriends").addEventListener("submit", function (event) {
    // Impede o envio do formulário
    event.preventDefault();

    const itemName = document.getElementById("name").value;
    const itemAge = document.getElementById("age").value;

    fetch("../private/api/api.json.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ name: itemName, age: itemAge })
    })
        .then(response => response.json())
        .then(data => {
            console.log("Item adicionado!", data);
            loadData();
            document.getElementById("addFriends").reset();
        })
        .catch(error => console.error("ERRO: ", error));
});

// Função para editar item
document.getElementById("editFriends").addEventListener("submit", function (event) {
    event.preventDefault();

    const editId   = document.getElementById("editId").value;
    const editName = document.getElementById("editName").value;
    const editAge  = document.getElementById("editAge").value;

    // Construindo um vetor para os valores do editar
    const updateData = { id: editId };

    if (editName) updateData.name = editName;
    if (editAge)  updateData.age  = editAge;

    fetch("../private/api/api.json.php?id=" + editId, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(updateData)
        // body: JSON.stringify({ id: editId, name: editName, age: editAge });
    })
        .then(response => {
            if (!response.ok) {
                throw new Error("Erro ao editar o amigo: " + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log("Amigo editar ", data);
            loadData();
            document.getElementById("editFriends").reset();
        })
        .catch(error => console.error("ERRO: ", error));
});

//Função Deletar Item 

document.getElementById('deleteFriends').addEventListener('submit', function(event){
    event.preventDefault();

    const deleteId = document.getElementById('deleteId').value;

    fetch('../private/api/api.json.php',{
        method: 'DELETE',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({id: deleteId})
    })
    .then(response => {
        if(!response.ok){
            throw new Error('Erro ao deletar amigo: ' + response.textContent);
        }
        return response.json();
    })
    .then(data=>{
        console.log('Amigo deletado', data);
        loadData();
        document.getElementById('deleteFriends').reset();
    })
    .catch(error => console.error('ERRO:', error));
});

// Sempre últimos comandos
// setInterval(loadData, 5000);
loadData();