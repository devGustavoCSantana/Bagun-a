<?php
class Pessoa
{
    //public String $nome;
    //public int $idade;
    //public float $altura;
    //public String $cpf;

    private String $nome;
    private int $idade;
    private float $altura;
    private String $cpf;

    //no contexto de classe se chama método
    public function getNome()//pegar
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setNome($nome)//setar
    {
        $this->nome = $nome;        
    }

    public function setIdade($idade)//setar
    {
        $this->idade = $idade;}
// metodo construtor
    public function __construct(String $nome, int $idade, float $altura, String $cpf)
    {
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}
//instanciar a classe Pessoa (criar)
$pessoa = new Pessoa('Maria', 50, 1.75, '12345678912');
echo $pessoa->getNome();
echo "<br>Idade: ";
echo $pessoa->getIdade();

$pessoa->setIdade(20);
$pessoa->setNome('Joana');
echo "<br>Nome: ";
echo $pessoa->getNome();
echo"<br>Nova Idade: ";
echo $pessoa->getIdade();
echo "<br>";
$pessoa2 = new Pessoa('João', 30, 1.90, '12345678912');
echo $pessoa2->getNome();
echo "<br>";
echo $pessoa2->getIdade();
echo "<br>";


//$pessoa = new Pessoa();
//$pessoa->nome = "Maria";
//$pessoa->idade = 50;
//pessoa->altura = 1.75;
//$pessoa->cpf = 12345678912;

//. ponto aqui é ->

// echo $pessoa->nome;
// echo "<br>";
// echo $pessoa->idade;
// echo "<br>";
// echo $pessoa->altura;
// echo "<br>";
// echo $pessoa->cpf;
// echo "<br>";

//$this: se refere a instancia da classe | self: se refere a própria classe | parent: se refere a classe pai
class Juridica extends Pessoa {
    private String $cnpj;
    
//sobreescrever
public function getCpf() {
    echo "Essa pessoa é Juridica";    
}
    public function __construct(String $nome, int $idade, float $altura, String $cpf, String $cnpj)
    {
        parent::__construct($nome, $idade, $altura, $cpf);
        $this->cnpj = $cnpj;
    }

    public function getCNPJ(){
        return $this->cnpj;        
    }
    public function setCNPJ ($cnpj){
        $this->cnpj;        
    }   
}

$pessoaJuridica = new Juridica('José', 23, 1.92, '32165498719', '321654987/0001-95');
//echo $pessoaJuridica->getCNPJ();    
echo $pessoaJuridica->getCpf();
