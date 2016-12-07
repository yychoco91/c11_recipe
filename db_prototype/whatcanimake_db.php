<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/27/16
 * Time: 6:26 PM
 */

/**
 * todo make function to check GET call to
 * 1)
 * 2) receive ingredients ID and search recipe matching ingredients
 * 3) add recipes
 * 4) log in
 * 5) add user favorites
 */
require_once('connect.php');

if ($conn->connect_errno) {
    $output = [
        'success' => false,
        'data' => "Connect failed: %s\n", $conn->connect_error
    ];
    print(json_encode($output));
    exit();
}

$requestFromFrontEnd = $_GET['request'];
$dataFromFront = $_POST;

/**
 *
 */
function getAllIngredientsAndID($db){

}

function getAllRecipesMatchIngredients($db){
    $output = [
        'success' => false,
        'data'=> []
    ];

    print(json_encode($output));
}

$conn->close();
?>