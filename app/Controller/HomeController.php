<?php


namespace Lani\BelajarPhpMvc\Controller;

use Lani\BelajarPhpMvc\App\View;

class HomeController
{

    public function Index()
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar php mvc"
        ];

        View::render("Home/index", $model);
    }

    public function Hello()
    {
        echo "HomeController.hello";
    }

    public function world()
    {
        echo "HomeController.world";
    }

    public function about()
    {
        echo "Author: Muhammad Mirlani";
    }

    public function login(): void
    {
        $reques = [
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ];

        $respon = [
            "pesan" => "login sukses"
        ];

        // kirimkan respon ke view
        // intinya itu data apapun adalah model
    }
    
}
