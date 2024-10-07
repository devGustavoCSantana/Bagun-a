<?php
class Gato
{
    private String $pelagem;    
    private String $cor;    

    //no contexto de classe se chama método
    public function getPelagem()//pegar
    {
        return $this->pelagem;
    }
    public function getCor()
    {
        return $this->cor;        
    }
    
    public function setPelagem($pelagem)//setar
    {
        $this->pelagem = $pelagem;        
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }    

// metodo construtor
    public function __construct(String $pelagem, String $cor)
    {
        $this->pelagem = $pelagem;
        $this->cor = $cor;        
    }
}







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