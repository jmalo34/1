<?php
    class Contact
    {
        public $name;
        public $phone;
        public $address;
        public $image_path;
    }

    $hendrix = new Contact();
    $hendrix->name= "Jimi Hendrix";
    $hendrix->phone = "503-826-9371";
    $hendrix->address = "208 SW 5th St. Portland, OR 97204";
    $hendrix->image_path = "images/jimi.jpg";

    $elvis = new Contact();
    $elvis->name = "Elvis Presley";
    $elvis->phone = "617-356-3571";
    $elvis->address = "Graceland";
    $elvis->image_path = "images/elvis.jpg";

    $einstein = new Contact();
    $einstein->name = "Albert Einstein";
    $einstein->phone = "415-738-4935";
    $einstein->address = "3178 MLK Blvd. Vienna";
    $einstein->image_path = "images/einstein.jpg";

    $marie = new Contact ();
    $marie->name = "Marie Curie";
    $marie->phone = "432-154-2534";
    $marie->address = "1911 West 1st Ave.";
    $marie->image_path = "images/marie.jpg";

    $janis = new Contact();
    $janis->name = "Janis Jolplin";
    $janis->phone = "415-222-5308";
    $janis->address = "Haight Ashbury, VA";
    $janis->image_path = "images/janis.jpg";

    $addresses_compiled = array($hendrix, $elvis, $einstein);
 ?>

 <!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Address Book</title>
</head>
<body>
    <div class="container">
        <h1>Address Book</h1>
        <ul>
            <?php
                foreach ($addresses_compiled as $contact) {
                    echo "<li>";
                    echo $contact->name;
                    echo "<ul>";
                    echo "<li><img src='$contact->image_path'></li>";
                    echo "<li> $contact->phone </li>";
                    echo "<li> $contact->address </li>";
                    echo "</ul>";
                    echo "</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
