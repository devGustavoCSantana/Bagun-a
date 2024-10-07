<?php
class Animal {
    //atributos
    private int $patas;
    private float $peso;
    private string $nome;
    private string $raca;
    private int $anos;

    //método costrutor
    public function __construct(int $patas, float $peso, string $nome, string $raca, int $anos) {
        $this->patas = $patas;
        $this->peso = $peso;
        $this->nome = $nome;
        $this->raca = $raca;
        $this->anos = $anos;
    }
    //geters
    public function getPatas():int {//nomes dos métodos de escreve em CamelCase
        return $this->patas;        
    }
    public function getPeso():float {
        return $this->peso;        
    }
    public function getNome():string {
        return $this->nome;        
    }
    public function getRaca():string {
        return $this->raca;        
    }
    public function getAnos():int {
        return $this->anos;        
    }
    //seters
    public function setPatas($patas){
        $this->patas = $patas;        
    }
    public function setPeso($peso){
        $this->peso = $peso;        
    }
    public function setNome($nome){
        $this->nome = $nome;        
    }
    public function setRaca($raca){
        $this->raca = $raca;        
    }
    public function setAnos($anos){
        $this->anos = $anos;        
    }

    //metodo de comunicar
    public function comunicar() {
        echo "Animal de comunicando.....";
    }
}


