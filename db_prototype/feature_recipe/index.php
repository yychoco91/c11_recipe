<html>

<?php require_once("head.php"); ?>

<body>
<h2 class="addRecipe">Add Your Recipe</h2>
<div class="container">
    <form action="" method="post" class="form-horizontal col-xs-offset-1 col-xs-10 ingredient-form">
        <legend>Recipe:</legend>
        <div class="form-group">
            <label class="control-label col-xs-2" for="recipeName">Title:</label>
            <div class="col-xs-10">
                <input class="form-control" type="text" name="recipeName" id="recipeName">
            </div>
        </div>
        <legend>Ingredients List:</legend>

        <div id="ingredientArea">
            <!--        individual ingredients here-->
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-primary" type="button" id="addIngredient">Add Ingredient</button>
            </div>
        </div>
        <legend>Instructions:</legend>
        <div class="form-group instruction-group">
            <label class="control-label col-xs-2" for="instructions">Instructions</label>
            <div class="col-xs-10">
                <textarea class="form-control" name="instructions" id="instructions" style="width:100%" rows="10" placeholder="Please type your recipe directions here"></textarea>
            </div>
            <label class="control-label col-xs-2" for="cookTime">Cook Time</label>
            <div class="col-xs-4">
                <input class="form-control" type="number" name="cookTime" id="cookTime" min="0" placeholder="in minutes">
            </div>
        </div>
        <button type="button" id="submitBtn" class="pull-right btn btn-success">Submit</button>
        <button type="button" id="clearBtn" class="pull-right btn btn-danger">Clear form</button>

    </form>

</div>
</body>
</html>