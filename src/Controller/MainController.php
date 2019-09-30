<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/{postcode?}", name="main")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request){
        $postcode = $request->get('postcode');
//        dump($postcode);

        $curl = curl_init();
        //setup the request, you can also use CURLOPT_URL
        $ch = curl_init("api.postcodes.io/postcodes/ {$postcode} /validate");
        // Returns the data/output as a string instead of raw data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Good practice to let people know who's accessing their servers. See https://en.wikipedia.org/wiki/User_agent
//        curl_setopt($ch, CURLOPT_USERAGENT, 'YourScript/0.1 (contact@email)');
        //Set your auth headers
        /*curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $TOKEN
        ));*/
        // get stringified data/output. See CURLOPT_RETURNTRANSFER
        $data = curl_exec($ch);
        // get info about the request
        $info = curl_getinfo($ch);
        // close curl resource to free up system resources
        curl_close($ch);
//        dump($data);

        $data = json_decode($data);

        return $this->render('postcode.html.twig', ['postcode' => $postcode, 'feedback' => $data]);
    }
}
