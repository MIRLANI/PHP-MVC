<?php 


namespace Lani\BelajarPhpMvc\MiddleWare;

class AuthMiddleWare implements MiddleWare
{
    public function before(): void
    {
        session_start();

        if (!isset($_SESSION['user']))
        {
            header("Location: /login");
            exit();
        }
    }
}



?>