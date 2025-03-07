<?php



# - Sobrescrevendo um método que não faz nada...

class ContratoDeTrabalho
{
    public function remuneracao()
    {
        echo 'dar dinheiro';
    }
}

class Voluntario extends ContratoDeTrabalho
{
    // public function remuneracao()
    // {
    //     // echo 'nao dar dinheiro';
    // }
}

$voluntario = new Voluntario();
$voluntario->remuneracao();

# - Lançando uma exceção inesperada...
class MusicPlay
{
    public function play($file)
    {
        // toca a música   
    }
}

class Mp3MusicPlay extends MusicPlay
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'mp3') {
            throw new Exception;
        }
        
        // toca a música
    }
}


# - Retornando valores de tipos diferentes...
class Auth
{
    public function checkCredentials($login, $password)
    {
        // faz alguma coisa
        
        return true;
    }
}

class AuthApi extends Auth
{
    public function checkCredentials($login, $password)
    {
        // faz alguma coisa
        
        return ['auth' => true, 'status' => 200];
    }
}