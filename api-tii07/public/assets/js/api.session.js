// Construção de uma função para consulta e JSON com PHP
function loadData() {
    fetch("../private/api/api.session.php")
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

    fetch("../private/api/api.session.php", {
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

// setInterval(loadData, 5000);
loadData();