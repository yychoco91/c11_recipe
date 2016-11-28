<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/27/16
 * Time: 6:26 PM
 */

/**
 * todo make function to check GET call to
 * 1) get all ingredients and its ID
 * 2) receive ingredients ID and search recipe matching ingredients
 * 3) add recipes
 * 4) log in
 * 5) add user favorites
 */
require_once ('connect.php');

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

if ($requestFromFrontEnd === 'get'){
    getAllIngredientsAndID($conn);
}elseif ($requestFromFrontEnd === 'getrecipes'){
    getAllRecipesMatchIngredients($conn);
}
/**
 *
 */
function getAllIngredientsAndID($db){
    $output = [
        'success' => false,
        'data' => []
    ];

    if ($result = $db->query("SELECT `ID`, `name` FROM `ingredient`")) {

        while ($row = $result->fetch_assoc()) {
            $output['data'][$row['name']] = $row['ID'];
        }
        $output['success'] = true;
    }

    $result->close();
    print(json_encode($output));
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