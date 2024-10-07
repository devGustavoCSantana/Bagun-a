// Construção de uma função para consultar e JSON com PHP

function loadData(){
    fetch('../private/api/api.json.php')
    .then(response => response.json())
    .then(data => {
        const dataDiv = document.getElementById('dados-api');
        //Limpa os dados 
        dataDiv.innerHTML = '';
        data.forEach(item => {
            const div = document.createElement('div');

            div.textContent = `id: ${item.id} | Nome: ${item.name} | Idade: ${item.age}`;
            dataDiv.appendChild(div); 
        });
    })
    .catch(error => console.error('ERRO: ', error));
    
}
document.getElementById('addFriends').addEventListener('submit', function(event){

    //Impede o envio do formulario
    event.preventDefault();

    const itemName = document.getElementById('name').value;
    
    const itemAge = document.getElementById('age').value;
    fetch('../private/api/api.json.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body:JSON.stringify({ name: itemName, age: itemAge})
    })
    .then(response => response.json())
    .then(data => {
        console.log('Item adicionado', data);
        loadData();
        document.getElementById('addFriends').reset();
    })
    .catch(error => console.error('ERRO: ', error));
});
//setInterval(loadData, 5000);
loadData();
