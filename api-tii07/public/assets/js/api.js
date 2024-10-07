// Construção de uma função para consulta e JSON com PHP
function loadData() {
    fetch("../private/api/api.php")
        .then(response => response.json())
        .then(data => {
            const dataDiv = document.getElementById("dados-api");

            // Limpa os dados
            dataDiv.innerHTML = "";

            data.forEach(item => {
                const div = document.createElement("div");

                div.textContent = `Id: ${ item.id } | Nome: ${ item.name }`;
                dataDiv.appendChild(div);
            })
        })
        .catch(error => console.error("ERRO: ", error));
}

// setInterval(loadData, 5000);
loadData();