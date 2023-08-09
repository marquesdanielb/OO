<?php

require 'autoload.php';

use DMB\Banco\Modelo\Endereco;

$endereco = new Endereco('Rio de Janerio', 'Vaz Leblon', 'Agrário de Menezes', '532');

$endereco->bairro = 'Vila Da Penha';
echo $endereco;