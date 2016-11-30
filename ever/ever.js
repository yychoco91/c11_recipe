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
            $("#ingredientInput").autocomplete({
                source: ingredientsArray
            });

            var authorName;
            var recipeName;
            var imgSrc;
            var url;

            var ingName;
            var amount;
            var amountType;
            var designatedIngredients;

            for (var i = 0; i < response.recipeData.length; i++) {

                authorName = response.recipeData[i].author;
                recipeName = response.recipeData[i].name;
                imgSrc = response.recipeData[i].img;
                url = response.recipeData[i].url;

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
                    height: "180px"         //set the height of card-block cards in following rows will line up correctly
                });
                var h3 = $("<h3>", {
                    class: "card-title",
                    text: recipeName
                });

                var recipeUrl=$("<p>",{
                   text:url
                });

                $(".modal-body").append(recipeUrl);

                theDiv.append(outterDiv);
                outterDiv.append(img, innerDiv);
                innerDiv.append(h3); //butt

                var ingDiv = $('<div>', {
                    class: 'ingDiv',
                    style: 'height: 0; overflow: hidden'
                });

                $("#stuff").append(theDiv);

                for (var j = 0; j < response.recipeData[i].ingredients.length; j++) {

                    ingName = response.recipeData[i].ingredients[j].name;
                    amount = response.recipeData[i].ingredients[j].amount;
                    amountType = response.recipeData[i].ingredients[j].amountType;
                    designatedIngredients = Math.round(amount) + " " + amountType + " " + ingName;

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
