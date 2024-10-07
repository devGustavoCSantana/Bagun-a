<?php
class Carro
{
    private String $modelo;
    private int $ano;
    private String $cor;
    private String $fabricante;

    //no contexto de classe se chama método
    public function pegarModelo()
    {
        return $this->modelo;
    }
    public function pegarAno()
    {
        return $this->ano;
    }
    public function pegarCor()
    {
        return $this->cor;
    }
    public function pegarFabricante()
    {
        return $this->fabricante;
    }
    
    public function __construct(String $modelo, int $ano, String $cor, String $fabricante)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->fabricante = $fabricante;
    }
}
//instanciar a classe Carro (criar)
$carro = new Carro('Corolla', 2020, 'Preto','Toyota');
echo $carro->pegarModelo();
echo "<br>";
echo $carro->pegarAno();
echo "<br>";
echo $carro->pegarCor();
echo "<br>";
echo $carro->pegarFabricante();
echo "<br>";



