<?php

# https://www.php.net/manual/en/language.fibers.php
# https://openswoole.com/article/php-fibers-rfc-vs-swoole-co
# https://php.watch/versions/8.1/fibers
# https://www.php.net/manual/en/language.fibers.php
# https://www.youtube.com/watch?v=P7ucMvlVhGc
# https://wiki.php.net/rfc/fibers

# Testei todos os metodos da classe:
# Fiber::__construct
# Fiber::start
# Fiber::suspend
# Fiber::resume
# Fiber::getCurrent
# Fiber::getReturn
# Fiber::throw
# Fiber::isStarted
# Fiber::isSuspended
# Fiber::isRunning
# Fiber::isTerminated

echo '<h1> Fibers: </h1> <hr>';

$horas = 9;
$pessoaQueTrabalha = new Fiber(function ($horas) {
    echo "\n Inicio trabalho às: {$horas}";
    Fiber::suspend();
    echo "\n Voltou a trabalhar";
    return "o trabalhador se sente cansado!";
});

$emprego = new Fiber(function ($pessoaQueTrabalha, $horas) {
    $pessoaQueTrabalha->start($horas);

    if ($pessoaQueTrabalha->isSuspended()) {
        echo "\n Pessoa fez uma pausa";
    }

    for ($i = 0; $i <= 8; $i++) {
        $horas++;
        if ($horas == 12) {
            $pessoaQueTrabalha->resume();
        }
    }

    if ($pessoaQueTrabalha->isTerminated()) {
        echo "\n Pessoa terminou o trabalho às: {$horas}";
        echo "\n Sentimentos pessoa: {$pessoaQueTrabalha->getReturn()}";
    }
});

$emprego->start($pessoaQueTrabalha, $horas);
