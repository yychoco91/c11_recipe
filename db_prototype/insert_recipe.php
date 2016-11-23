
<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/20/16
 * Time: 11:57 AM
 */
//require_once("connect.php");

$ingredientsList = $_POST;
$ingredientsList['success'] = true;

$ingredientsListJson = json_encode($ingredientsList);
print($ingredientsListJson);
//print($ingredientsListJson);

//INSERT INTO `ingredient_meta`(`ID`, `name`) VALUES ([value-1],[value-2])


//INSERT INTO `ingredients`(`ingred_id`, `recipe_id`, `count_type`, `count`) VALUES ([value-1],[value-2],[value-3],[value-4])

//INSERT INTO `recipes`(`ID`, `name`, `author`, `url`, `picture_url`, `added`, `modified`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
//foreach($recipes as $recipe) {
//    $insertQuery = "INSERT INTO `recipes`(`name`, `author`, `url`, `picture_url`) VALUES (" . $recipe['matches']['recipeName'] . "," . $recipe['matches']['sourceDisplayName'] . ",[value-4],[value-5])";
//}
?>

