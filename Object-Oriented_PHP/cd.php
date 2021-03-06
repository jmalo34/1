<?php

    class CD
    {
        public $title;
        public $artist;
        public $cover_art;
        private $price;

        function __construct($album_name, $band_name, $image_path, $album_price = 10.99)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->cover_art = $image_path;
            $this->price = $album_price;
        }

        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price != 0)
            {
                $formatted_price = number_format($float_price, 2);
                $this->price = $formatted_price;
            }
        }

        function getPrice()
        {
            return $this->price;
        }
    }


    $first_cd = new CD("Master of Reality", "Black Sabbath", "images/reality.jpg");
    $second_cd = new CD("Electric Ladyland", "Jimi Hendrix", "images/ladyland.jpg");
    $third_cd = new CD("Nevermind", "Nirvana", "images/nevermind.jpg");
    $fourth_cd = new CD("IDGI", "The Internet","images/default.mp4", 49.99);


    $fourth_cd->setPrice("$1.3925");

// instead of declaring the properties and values of each object, within the delcaration, as below, we passsing to the method an argument for each property that we want to set.
    // $first_cd = new CD();
    // $first_cd->title = "Master of Reality";
    // $first_cd->artist = "Black Sabbath";
    // $first_cd->cover_art = "images/reality.jpg";
    // $first_cd->price = 10.99;
    //
    // $second_cd = new CD();
    // $second_cd->title = "Electric Ladyland";
    // $second_cd->artist = "Jimi Hendrix";
    // $second_cd->cover_art = "images/ladyland.jpg";
    // $second_cd->price = 10.99;
    //
    // $third_cd = new CD();
    // $third_cd->title = "Nevermind";
    // $third_cd->artist = "Nirvana";
    // $third_cd->cover_art = "images/nevermind.jpg";
    // $third_cd->price = 10.99;


    $cds = array($first_cd, $second_cd, $third_cd, $fourth_cd);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>CDs for sale</title>
     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
 </head>
 <body>
     <div class="container">
         <?php
            foreach ($cds as $album)
            {
                $cd_price = $album->getPrice();
                echo
                "<div class='row'>
                    <div class='col-md-6'>
                        <img src='$album->cover_art'>
                    </div>
                    <div class='col-md-6'>
                            <p>$album->title</p>
                            <p>By $album->artist</p>
                            <p>$$cd_price</p>
                    </div>
                </div>
                ";
            }
         ?>
     </div>
 </body>
 </html>
