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
<button onclick="getRecipes();">Get Recipes</button>
</body>
<script>
    function getRecipes(){
        console.log('Getting recipes');
        $.ajax({
            dataType: 'json',
            method: 'get',
            url:'http://api.yummly.com/v1/api/recipes?maxResult=20',
            headers: yummlyAccess,
            success: function(resp){
                console.log('Success', resp);
                var ingredientsList = [];
                var recipesList = [];
                var returnQuery = resp.matches;
                console.log(resp.matches);
                for(var i = 0; i < returnQuery.length; i++) {
                    for(var j = 0; j < returnQuery[i].ingredients.length; j++) {
                        if (ingredientsList.indexOf(returnQuery[i].ingredients[j]) === -1) {
                            ingredientsList.push(returnQuery[i].ingredients[j]);
                        }
                    }
                }
                console.log('Ingredients List Complete: ', ingredientsList);
            }
        });
    }
</script>
</html>
