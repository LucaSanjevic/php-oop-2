<?php 
require_once __DIR__ . '/prodotti.php';
require_once __DIR__ . '/utenti.php';

$cliente = new cliente("Paolo", "Rossi", 25);

$cellulare = new prodotti("Cellulare", "apple", 799.99);
$PC = new prodotti("PC", "hp", 599.99);
$Mac = new prodotti("Mac", "apple", 899.99);

$cliente->return_risultati1();
$cellulare->return_risultati2();
$PC->return_risultati2();
$Mac->return_risultati2();
