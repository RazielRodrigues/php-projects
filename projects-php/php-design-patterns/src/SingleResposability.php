<?php

/** 
 * Essa classe não tem solid pois esta implementando
 * uma função que não faz parte de usuario
 * como por exemplo enviar email
*/ 
class UserNotSingleResposability
{
    private $id;
    private $username;

    public function __construct($id, $username) {
        $this->id = $id;
        $this->username = $username;
    }

    public  function create()
    {
        $user = [
            $this->id,
            $this->username
        ];

        var_dump($user);
    }

    public function sendEmail()
    {
       echo 'sending email to: ' . $this->username ;
    }

}

class UserSingleResposability
{
    private $id;
    private $username;

    public function __construct($id, $username) {
        $this->id = $id;
        $this->username = $username;
    }

    public  function create()
    {
        $user = [
            $this->id,
            $this->username
        ];

        var_dump($user);
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}

class EmailSingleResposability
{
    public $userSingleResposability;

    public function __construct(UserSingleResposability $userSingleResposability) {
        $this->userSingleResposability = $userSingleResposability;
    }

    public function sendEmail()
    {
       echo '<br> sending email to: ' . $this->userSingleResposability->getUsername() ;
    }


}

// wrong
$raziel = new UserNotSingleResposability(1, 'Raziel Rodrigues Wrong');
$raziel->sendEmail() . '<br>';

// right
$raziel = new UserSingleResposability(1, 'Raziel Rodrigues Right');
$email = new EmailSingleResposability($raziel);

$email->sendEmail();