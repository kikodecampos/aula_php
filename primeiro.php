<?php

// Utilizar $ para criar variáveis
$nome = 'Glauco Luiz';
$escola = 'Senac Taubaté';
$turno = 'noite';

echo "<h1>Olá Mundo!</h1>";
// Usando áspas duplas, não é necessário concatenar string com variável
echo "<h3>Seja bem-vindo $nome</h3>";
// Usando ásplas simples, é necessário concatenar string e variável
// utilizando "ponto final" (.)
echo 'Você está matriculado no ' . $escola . ', no turno da ' . $turno;

