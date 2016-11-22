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
</head>
<body>
<button onclick="getRecipes();">Get Recipes</button>
</body>
<script>
    function getRecipes(){
        $.ajax({
           datatype: 'json',
            method: 'get',
            url:'http://api.yummly.com/v1/api/recipes'
            headers: yummlyAccess,
            success: function(resp){

            }
        });
    }
</script>
</html>
