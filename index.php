<?php

$cliente = new Cliente("Ca", "ca.mail@email.com", "123.456.789-10", "(18) 9 9999-9999", null, "123 R. Nome da Rua Nascimento");
$professor = new Professor("Jane Jane de Jane", "jane.jane@example.com", "987.654.321-10", "(11) 12345-6789", "Ph.D.");
$disciplina = new Disciplina("Programação Orientada a Objetos", "POO", $professor, "67h", "...");
$produto = new Produto("Smartphone", 1500.00, 2, "Samsung", "John Doe");

echo "Cliente: " . $cliente->get_nome() . "\n";
echo "Disciplina: " . $disciplina->get_nome() . "\n";
echo "Professor: " . $professor->get_nome() . "\n";
echo "Produto: " . $produto->get_nome() . "\n";
echo "Valor total: " . $produto->calcularValorTotal() . "\n";
