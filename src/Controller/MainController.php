<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    private $factorial = 1;

    /**
     * @Route("/{arg?}", name="factz")
     */
    public function index(Request $request){
        $n = $request->get('arg');
        $this->factorial = $this->factorial($n);
        return $this->render("factorial/factorial.html.twig",
            [
                'n' =>  $n,
                'factorial' =>  $this->factorial
            ]);
    }

    private function factorial($num){
        $fact = 1;
        while($num > 0){
            $fact *= $num;
            $num--;
        }
        return $fact;
    }
}
