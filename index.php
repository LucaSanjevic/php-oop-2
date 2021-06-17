<?php 
/*provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti
premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta
di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). */
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
