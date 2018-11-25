<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.showsite.com.br", "contato@showsite.com.br", "Showsite2509#", "ssl", "465",
    "contato@showsite.com.br", "Show Site");
$novoEmail->sendMail("Email de teste 2", "<p>Mensagem do email de <b>teste 2</b></p>", "financeiro@showsite.com.br",
    "Financeiro", "adautonobrejr@gmail.com", "Junior");

var_dump($novoEmail);