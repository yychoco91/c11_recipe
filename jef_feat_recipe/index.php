<html>

<?php require_once("head.php"); ?>

<body>
<h2>Add Your Recipe</h2>
<div class="container">
    <form action="insert.php" method="post" class="form-horizontal col-xs-offset-2 col-xs-8 ingredient-form">
        <legend>Recipe:</legend>
        <div class="form-group">
            <label class="control-label col-xs-2" for="recipeName">Recipe Name:</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="recipeName" id="recipeName">
            </div>
        </div>
        <hr>
        <legend>Ingredients List:</legend>
        <div class="form-group ingredient-group">
            <label class="control-label col-xs-2" for="ingredient">Ingredient:</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="ingredient[]" id="ingredient">
            </div>
            <label class="control-label col-xs-2" for="quantity">Quantity:</label>
            <div class="col-xs-4">
                <input class="form-control col-xs-4" type="number" min="0" max="1000" name="quantity[]" id="quantity">
            </div>
            <label class="control-label col-xs-2" for="type">Type:</label>
            <div class="col-xs-4">
                <input class="form-control" type="number" min="0" max="99" name="type[]" id="type">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="button" id="addIngredient">Add Ingredient</button>
            </div>
        </div>
        <legend>Instructions:</legend>
        <div class="form-group instruction-group">
            <label class="control-label col-xs-2" for="instructions">Instructions</label>
            <div class="col-xs-10">
                <textarea name="instructions" id="instructions"></textarea>
            </div>
            <label class="control-label col-xs-2" for="cookTime">Cook Time</label>
            <div class="col-xs-2">
                <input type="text" name="cookTime" id="cookTime">
            </div>
        </div>
    </form>
</div>

</body>
</html>