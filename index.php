<?php
require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Email de teste 2", "<p>Mensagem do email de <b>teste 2</b></p>", "financeiro@showsite.com.br", "Financeiro", "adautonobrejr@gmail.com", "Junior");

var_dump($novoEmail);
