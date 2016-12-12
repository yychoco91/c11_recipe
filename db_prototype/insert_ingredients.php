<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/20/16
 * Time: 11:57 AM
 */

//mySQL queries

//INSERT INTO `ingredient`(`ID`, `name`) VALUES ([value-1],[value-2])

//INSERT INTO `ingredientsToRecipe`(`ID`, `ingred_id`, `recipe_id`, `name`, `name_str`, `count_type`, `count`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

//INSERT INTO `recipes`(`ID`, `given_id`, `name`, `author`, `url`, `picture_url`, `added`, `modified`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

//SELECT `ID` FROM `ingredient` WHERE `name`='milk'

/**
 * Insert Ingredients
 * param $connect - mysql connection config
 * param $ingredientList - [array] ingredientData containing ingredients
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
