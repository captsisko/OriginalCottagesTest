<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MainController.php',
        ]);*/

/*        $ships = [];

        $ship = new OilTanker('Exxon Valdez', false, 'Oriental Nicety', '£10');
        $ship->capacity(1.48);
//        $ship->hail();
        array_push($ships, $ship);

        $ship = new AircraftCarrier('USS Nimitz', false, 'Old Salt', '1 billion US');
        $ship->airwing(2480);
//        $ship->hail();
        array_push($ships, $ship);

        $ship = new AircraftCarrier('USS George H.W. Bush', false, 'Avenger', '6.2 billion US');
        $ship->airwing(90);
//        $ship->hail();
        array_push($ships, $ship);

        $ship = new SpaceShip('USS Enterprise (NCC-1701-E)', false, 'The Enterprise', 'unknown');
        array_push($ships, $ship);

        $ship = new SpaceShip('USS Defiant', false, 'The Defiant', 'unknown');
        array_push($ships, $ship);*/

//        return $this->render("main/main.html.twig", ['ships' => $ships]);

        return $this->render('main/main.html.twig');
    }
}
