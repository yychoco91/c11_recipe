var count = 0;

function addRow(){
    var name = "name"+count;
    var amount = "amount"+count;
    var type = "type"+count;
    $('#ingredientArea').append(
        $('<div>',{
            class: "form-group ingredient-group",
            id: count
        })
            .append(
                $('<label class="control-label col-xs-2" for="ingredient">Ingredient:</label>'),
                $('<div>', {class: 'col-xs-10', id:name})
                    .append(
                        $('<input class="form-control" type="text">')
                    ),
                $('<label class="control-label col-xs-2" for="quantity">Quantity:</label>'),
                $('<div>', {class:"col-xs-4", id:amount})
                    .append(
                        $('<input class="form-control col-xs-4" type="number" min="0" max="1000">')
                    ),
                $('<label class="control-label col-xs-1 col-xs-offset-1" for="type">Type:</label>'),
                $('<div>', {class:"col-xs-4", id:type})
                    .append(
                        $('<select class="form-control">')
                            .append(
                                $('<option value=" " selected>').text("-"),
                                $('<option value="teaspoon">').text("teaspoon"),
                                $('<option value="tablespoon">').text("tablespoon"),
                                $('<option value="fluid ounce">').text("fluid ounce"),
                                $('<option value="cup">').text("cup"),
                                $('<option value="pint">').text("pint"),
                                $('<option value="quart">').text("quart"),
                                $('<option value="ounce">').text("ounce"),
                                $('<option value="pound">').text("pound")
                            )
                    )
            )
    );
    count++
}

function sendFormData(){
    var recipe = {
        givenId: '',
        name: $('#recipeName').val(),
        author: '',
        url: '',
        img: '',
        instructions: $('#instructions').val(),
        cookingTime: $('#cookTime').val(),
        ingredients: []
    };
    for(var i = 0; i < count; i++){
        var name = '#name'+i+ ' input';
        var type = '#type'+i+ ' select';
        var amount = '#amount'+i+ ' input';
        //console.log(amount);
        var ingredient = {
            name: $(name).val(),
            amountType: $(type).val(),
            amount: $(amount).val(),
            originStr: ''
        };
        ingredient.originStr = ingredient.amount + ' ' + ingredient.amountType + ' ' + ingredient.name;
        recipe.ingredients.push(ingredient);
    }
    $.ajax({
        url: "./handleRecipeForm.php",
        method: 'post',
        data: recipe,
        dataType: 'json',
        success: function(resp){
            console.log(resp);
        }
    });
}
function applyClickHandlers(){
    addRow();
    $('#addIngredient').click(addRow);
    $('#submitBtn').click(sendFormData);
}

$(document).ready(applyClickHandlers);