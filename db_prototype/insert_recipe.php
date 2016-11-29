
<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/20/16
 * Time: 11:57 AM
 */
require_once("config/connect.php");

//mySQL queries

//INSERT INTO `ingredient`(`ID`, `name`) VALUES ([value-1],[value-2])

//INSERT INTO `ingredientsToRecipe`(`ID`, `ingred_id`, `recipe_id`, `name`, `name_str`, `count_type`, `count`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

//INSERT INTO `recipes`(`ID`, `given_id`, `name`, `author`, `url`, `picture_url`, `added`, `modified`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

//SELECT `ID` FROM `ingredient` WHERE `name`='milk'

if($conn->connect_error){
    die("Failed to Connect: " . $conn->connect_error);
}

$ingredientsListData = $_POST['ingredientData'];
$recipeListData = $_POST['recipeData'];


/**
 * Insert Ingredients
 */
function insertIngredientsIntoIngTable($connect, $ingredientsList) {
    $queryInsertStatement = $connect->prepare("INSERT INTO `ingredient` (`name`) VALUES (?) ON DUPLICATE KEY UPDATE `name` = VALUES(`name`)");

    $queryInsertStatement->bind_param('s', $ingName);

    foreach ($ingredientsList as $ingredient) {
        $ingName = $ingredient;
        $queryInsertStatement->execute();
    }
    $queryInsertStatement->close();
}

/**
 * Insert Recipes and Ingredients
 */
function insertRecipesAndItsIngredients($connect, $recipesList){
    //prepare for recipe insert
    $queryRecipe = "INSERT IGNORE INTO `recipes` (`given_id`, `name`, `author`, `url`, `picture_url`) VALUES (?, ?, ?, ?, ?)";
    $queryInsertRecipe = $connect->prepare($queryRecipe);

    //set recipe binding parameters
    $queryInsertRecipe->bind_param('issss', $r_id, $r_name, $r_author, $r_url, $r_img);

    //prepare for ingredient insert
    $queryIngred = "INSERT IGNORE INTO `ingredientsToRecipe` (`ingred_id`, `recipe_id`, `name`, `name_str`, `count_type`, `count`) VALUES (?, ?, ?, ? , ?, ?)";
    $queryInsertIngred = $connect->prepare($queryIngred);

    //set ingredients binding parameters
    $queryInsertIngred->bind_param('iisssi', $ing_iId, $ing_rId, $ing_name, $ing_nameStr, $ing_type, $ing_count);

    //assign for each recipe in list
    foreach ($recipesList as $recipe) {
        //recipe data to insert to recipe table
        $r_id = $recipe['givenId'];
        $r_name = $recipe['name'];
        $r_author = $recipe['author'];
        $r_url = $recipe['url'];
        $r_img = $recipe['img'];
        //insert recipe and proceed if insert is successful
        if($queryInsertRecipe->execute()){
            //get last recipe id
            $sqlRecipeId = $queryInsertRecipe->insert_id;

        foreach ($recipe['ingredients'] as $ingredient) {
                $ingNameForSql = $ingredient['name'];
                //Get ingredient id that matches recipe ingredient
                if($result = $connect->query("SELECT `ID` FROM `ingredient` WHERE `name`='$ingNameForSql'")){
                   $ingFromSql = $result->fetch_assoc();
                    $sqlIngID = $ingFromSql['ID'];
                    //print_r("Ingredient ID for " . $ingredient['name'] . " : ".$sqlIngID);
                }

                //individual ingredients from recipe to insert into ingredientsToRecipe table
                $ing_iId = $sqlIngID;
                $ing_rId = $sqlRecipeId;
                $ing_name = $ingredient['name'];
                $ing_nameStr = $ingredient['originStr'];
                $ing_type = $ingredient['amountType'];
                $ing_count = $ingredient['amount'];
                //insert into table
                $queryInsertIngred->execute();
            }
        }
    }
    $queryInsertRecipe->close();
    $queryInsertIngred->close();
}

//insertIngredientsIntoIngTable($conn, $ingredientsListData);

//insertRecipesAndItsIngredients($conn, $recipeListData);

$conn->close();
?>

