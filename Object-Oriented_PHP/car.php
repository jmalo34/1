<?php
    class Car
    {
        public $make_model;
        public $picture;
        public $price;
        public $miles;


        function __construct($car_kind, $photo, $price_tag, $miles_onit = 120000)
        {
            $this->make_model = $car_kind;
            $this->picture = $photo;
            $this->price = $price_tag;
            $this->miles = $miles_onit;
        }

        function worthBuying($max_price, $max_miles)
        {
            return $this->price < $max_price && $this->miles < $max_miles;
        }

        // function setPrice()
    }

    $porsche = new Car("2014 Porsche 911", "images/porsche.jpg", 114991, 7864);
    $ford = new Car("2011 Ford F450", "images/ford.jpg", 55995, 14241);
    $lexus = new Car("2013 Lexus RC 350", "images/lexus.jpg", 44700, 20000);
    $mercedes = new Car ("Mercedes Benz CLS550", "images/mercedes.jpg", 39900, 37979);


    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
    foreach ($cars as $car)
        {
            if ($car->worthBuying($_GET["price"], $_GET["mileage"]))
            {
                array_push($cars_matching_search, $car);
            }
            // elseif ($car->worthBuying($_GET["mileage"]))
            // {
            //     array_push($cars_matching_search, $car);
            // }
        }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Your Car Dealership's Homepage</title>
 </head>
 <body>
     <h1>Your Car Dealership</h1>
     <ul>
         <?php
            if (empty($cars_matching_search))
            {
                echo "This array is empty!";
            }

            foreach ($cars_matching_search as $car)
            {
                echo "<li> $car->make_model </li>";
                echo "<img src='$car->picture'>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
                echo "<br>";
            }
          ?>
      </ul>
  </body>
  </html>
