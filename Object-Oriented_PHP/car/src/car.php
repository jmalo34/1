<?php
    class Car
    {
        private $make_model;
        private $picture;
        private $price;
        private $miles;

        function __construct($car_kind, $photo, $price_tag, $miles_onit = 120000)
        {
            $this->make_model = $car_kind;
            $this->picture = $photo;
            $this->price = $price_tag;
            $this->miles = $miles_onit;
        }

        function worthBuying($max_price, $max_miles)
        {
            $cars = array($porsche, $ford, $lexus, $mercedes);

            foreach ($cars as $car)
            {
                if ($max_price > $this->miles && $max_miles > $this->miles)
                {
                    return $car;
                }
            }
            return false;

        }
        //
        // function worthBuying($max_price, $max_miles)
        // {
        //     if($this->price < $max_price && $this->miles < $max_miles)
        //     {
        //         return true;
        //     }
        //     else
        //     {
        //         return false;
        //     }
        // }

        function setModel($new_model)
        {
            $this->model = $new_model;
        }

        function getModel()
        {
            return $this->make_model;
        }

        function setPicture($new_picture)
        {
            $this->picture = $new_picture;
        }

        function getPicture()
        {
            return $this->picture;
        }

        function setPrice($new_price)
        {
            $this->price = $new_price;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setMiles($new_miles)
        {
            $this->miles = $new_miles;
        }

        function getMiles()
        {
            return $this->miles;
        }

    }
 ?>
