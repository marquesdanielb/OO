<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo;

final class Endereco
{
    public function __construct(
       private string $cidade,
       private string $bairro,
       private string $rua,
       private string $numero, 
    ) {}

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = ucfirst($nomeAtributo);
        $metodo = 'recupera' . $metodo;

        return $this->$metodo();
    }

    public function __set($nomeAtributo, $valor)
    {
        $this->$nomeAtributo = $valor;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
