<?php
/**
 * Created by PhpStorm.
 * User: kingsada, Bobby
 * Date: 1/12/2018
 * Time: 3:49 PM
 *
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

$animals = array("panda", "alpaca", "boa");
$cupcakes = array(   "grasshopper"=>"The Grasshopper",
                "maple"=>"Whiskey Maple Bacon",
                "Carrot"=>"Carrot Walnut",
                "caramel"=>"Salted Caramel Cupcake",
                "velvet"=>"Red Velvet",
                "lemon"=>"Lemon Drop",
                "tiramisu"=>"Tiramisu");

function sortAndPrint($array){
    sort($array);
    print_r($array);
    echo '<br>';
}

function add($array, $string){
    if (array_key_exists($string, $array)){
        echo $array. " is already in the array";
    }else{
        array_push($array, $string);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>array review</title>
</head>
<body>
<h1>Array Review</h1>

<div>
    <form class="form-check">
    <?php
    sortAndPrint($animals);

    foreach ($cupcakes as $flavor){
        echo '<input class="form-check-input" name="flavors[]" type="checkbox" value=$flavor>' .$flavor.'<br>';
    }
    ?>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>

