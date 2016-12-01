<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/20/16
 * Time: 3:31 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>API Get Ingredients</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="connect.php"></script>
</head>
<body>
<button onclick="getRecipes();">Get and Send Recipes</button>
</body>
<script>
    function getRecipes(){
        console.log('Getting recipes');
        $.ajax({
            dataType: 'json',
            method: 'get',
            url:'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/recipes/random?limitLicense=false&number=1',
            headers: spoonAccess,
            success: function(resp){
                console.log('Success', resp);
                var ingredientsList = [];
                var recipesList = [];
                var returnQuery = resp.recipes;
                console.log(resp.recipes);
                for(var i = 0; i < returnQuery.length; i++) {
                    var currentRecipe = returnQuery[i];
                    var recipe = {
                        img: currentRecipe.image,
                        url: currentRecipe.sourceUrl,
                        author: currentRecipe.sourceName,
                        name: currentRecipe.title
                    };
                    recipesList.push(recipe);
                    for(var j = 0; j < returnQuery[i].extendedIngredients.length; j++) {
                        if (ingredientsList.indexOf(returnQuery[i].extendedIngredients[j].name) === -1) {
                            ingredientsList.push(returnQuery[i].extendedIngredients[j].name);
                        }
                    }
                }
                console.log('Ingredients List Complete: ', ingredientsList, ' Recipes: ', recipesList);

                sendRecipe(ingredientsList, recipesList);
            }
        });
    }

    function sendRecipe(ingredients, recipes){
        var dataToSend = {ingredientData: ingredients, recipeData: recipes};
        console.log('Hello');
        $.ajax({
            method: 'post',
            url: 'insert_recipe.php',
            dataType: 'json',
            data: dataToSend,
            success: function(resp){
                console.log('From Insert', resp);
            }
        });
    }
</script>
</html>