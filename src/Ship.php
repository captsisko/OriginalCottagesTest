<?php

    namespace ShippingLane;

    abstract Class Ship{
        protected $designation;
        private $status;
        private $nickname;
        private $cost;
        private $crew;

        public function __construct($name, $status = false, $also_known_as, $pricetag){
            $this->designation = $name;
            $this->status = $status;
            $this->nickname = $also_known_as;
            $this->cost = $pricetag;
        }

        public function hail(){
            print("{$this->designation} responding!");
        }
    }

    class AircraftCarrier extends Ship{
        private $ships_company;
        private $air_wing;

        public function company($count){
            $this->ships_company = $count;
        }

        public function airwing($count){
            $this->air_wing = $count;
        }

        public function hail(){
            print "This is the warship {$this->designation} responding.";
        }
    }

    class OilTanker extends Ship{
        private $barrels; // in millions

        public function capacity($carries){
            $this->barrels = $carries;
        }

        public function hail(){
            print "This is the oil tanker {$this->designation} responding";
        }
    }

    final class SpaceShip extends Ship{
        private static $instance = null;

        /**
         * @return null
         */
        public static function getInstance(){
            if(!self::$instance){
                self::$instance = new SpaceShip();
            }
            return self::$instance;
        }
    }