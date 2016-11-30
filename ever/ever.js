// Document Ready Function
$("document").ready(function () {
    recipe_info_from_jsonphp_file();
});

// C:/MAMP/htdocs/lfz/c11_recipe/db_prototype/testjson.php
// C:/MAMP/htdocs/lfz/c11_recipe/ever/jqever.html

// ajax call to json.php
var ingredientsArray;
var desingatedIngredients

var recipe_info_from_jsonphp_file = function () {
    $.ajax({
        url: "../db_prototype/testjson.php",
        dataType: "json",
        method: "post",
        success: function (response) {
            console.log("data from json.php\n", response);

            ingredientsArray = response.ingredientData;
            //console.log(ingredientsArray);

            $( "#ingredientInput" ).autocomplete({
                source: ingredientsArray
            });

            // console.log("hi0")
            var name;

            for (var i = 0; i < response.recipeData.length; i++) {
                // console.log("==========RECIPE_NAME==========")
                var imgSrc = response.recipeData[i].img;
                console.log(imgSrc);

                var recipeName = response.recipeData[i].name;

                var theDiv = $("<div>", {
                    class: "col-md-3 col-sm-6",
                });
                var outterDiv = $("<div>", {
                    class: "card"
                });
                var img = $("<img>", {
                    src: imgSrc,
                    class: "showImage img-responsive",
                    width: "100%",
                    height: "286px",
                    'data-toggle': "modal",
                    'data-target': "#myModal",
                });
                var innerDiv = $("<div>", {
                    class: "card-block",
                    height:"180px"         //set the height of card-block cards in following rows will line up correctly
                });
                var h4 = $("<h4>", {
                    class: "card-title",
                    text: recipeName
                });
                var title=$('<h4>',{
                    text:recipeName,
                    class:'modal-title',
                    id: 'myModalLabel'
                });

                $(".modal-header").append(title);

                // var butt = $("<button>", {
                //     class: "btn btn-primary",
                //     text: "Go somewhere"
                // });
                // var modalBody = $("<div>", {
                //     // class: "modal-body",
                // })

                console.log('IMG ELE:', img);
                theDiv.append(outterDiv);
                outterDiv.append(img, innerDiv);
                innerDiv.append(h4); //butt

                var ingDiv = $('<div>', {
                    class: 'ingDiv',
                    style: 'height: 0; overflow: hidden'
                });

                $("#stuff").append(theDiv);

                for(var j = 0; j < response.recipeData[i].ingredients.length; j++){
                    // console.log("-------INGREDIENT_NAME-------");
                    name = response.recipeData[i].ingredients[j].name;
                    var amount = response.recipeData[i].ingredients[j].amount;
                    var amountType = response.recipeData[i].ingredients[j].amountType;
                    // console.log(name)

                    var designatedIngredients = Math.round(amount) + " " + amountType + " " + name ;

                    var p = $("<p>", {
                        class: "card-text",
                        html: '<li>' + designatedIngredients,
                    });
                    ingDiv.append(p)
                }

                innerDiv.append(ingDiv);
            }
        }
    })
};
