/**
 * Declare Global Variables
 */
var globalIndex = 2;

function addRow(){
    console.log("Clickity Clack");
    $('.ingredient-form .ingredient-group, .ingredient-form hr').last().after(
        $("<hr>"),
        $('<div class="form-group ingredient-group">').append(
            $('<label class="control-label col-xs-2" for="ingredient">Ingredient:</label>'),
            $('<div class="col-xs-10">').append(
                $('<input class="form-control" type="text" name="ingredient[]" id="ingredient">')
            ),
            $('<label class="control-label col-xs-2" for="quantity">Quantity:</label>'),
            $('<div class="col-xs-4">').append(
                $('<input class="form-control col-xs-4" type="number" min="0" max="1000" name="quantity[]" id="quantity">')
            ),
            $('<label class="control-label col-xs-2" for="type">Type:</label>'),
            $('<div class="col-xs-4">').append(
                $('<input class="form-control" type="number" min="0" max="99" name="type[]" id="type">')
            )
        )
    )
}

function applyClickHandlers(){
    $('#addIngredient').click(addRow);
}

$(document).ready(applyClickHandlers);