<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
            
        );
    }
    #[Route('/lucky/letter')]
        public function letter(): Response
    {
        $number = random_int(0, 23);

        $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

        $letter = $alphabet[$number];

        return new Response(
            '<html><body>Lucky letter: '.$letter.'</body></html>'
            
        );
    }
}