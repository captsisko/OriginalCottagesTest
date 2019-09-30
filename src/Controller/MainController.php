<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/calculations/{arraysize?}", name="main")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request){
        $data   = $this->setup($request->get('arraysize'));
        $median = $this->median($data);
        $mean   =   $this->mean($data);

        return $this->render('calculations.html.twig',
            [
                'array' =>  $data,
                'median' => $median,
                'mean'  =>  $mean
            ]);
    }

    private function setup($size=0){
        /**
         * create array with passed argument for size
         * , populate each index with random numbers
         * in the range 1 to 200, sort in ascending
         * order
         */
        $data = array($size);
        for ($i = 0; $i < $size; $i++) {
            $data[$i] = rand(1, 200);
        }

        sort($data); // sort the array in ascending order by value
        return $data;
    }

    private function median($data){
//        dump($data);
        $size = sizeof($data);

        if ($size % 2 == 1) { // uneven midway point
            $mid = floor($size / 2);
            return $data[$mid];
        } else if ($size % 2 == 0) {
            $mid = $size / 2;
            return ($data[$mid] + $data[$mid - 1]) / 2;
        }
    }

    private function mean($data){
        $total = 0;
        for($i = 0; $i < sizeof($data); $i++){
            $total += $data[$i];
        }

        return $total/sizeof($data);
    }

}

