// Document Ready Function
$("document").ready(function () {
    recipe_info_from_jsonphp_file();
});
// ajax call to json.php
var ingredientsArray;

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

                var imgSrc = response.recipeData[i].img;
                console.log(imgSrc);

                var recipeName = response.recipeData[i].name;

                authorName = response.recipeData[i].author;
                recipeName = response.recipeData[i].name;
                imgSrc = response.recipeData[i].img;
                url = response.recipeData[i].url;

                var theDiv = $("<div>", {
                    class: "col-md-3 col-sm-6"
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
                    'data-target': "#myModal"
                });
                var innerDiv = $("<div>", {
                    class: "card-block",
                    height: "180px"         //set the height of card-block so cards in following rows will line up correctly
                });
                var h3 = $("<h3>", {
                    class: "card-title",
                    text: recipeName
                });

                // var butt = $("<button>", {
                //     class: "btn btn-primary",
                //     text: "Go somewhere"
                // });

                console.log('IMG ELE:', img);

                console.log('URL:', url);
                var recipeUrl= $("<p>",{
                   html:'<a href="' + url + '">' + url + '</a>'
                });

                var ingDiv = $('<div>', {
                    class: 'ingDiv',
                    style: 'height: 0; overflow: hidden'
                });


                $("#stuff").append(theDiv);
                theDiv.append(outterDiv);
                outterDiv.append(img, innerDiv);
                innerDiv.append(h3);

                for (var j = 0; j < response.recipeData[i].ingredients.length; j++) {
                    ingName = response.recipeData[i].ingredients[j].name;
                    amount = response.recipeData[i].ingredients[j].amount;
                    amountType = response.recipeData[i].ingredients[j].amountType;
                    designatedIngredients = Math.round(amount) + " " + amountType + " " + ingName;

                    var p = $("<p>", {
                        class: "card-text",
                        html: '<li>' + designatedIngredients
                    });
                    ingDiv.append(p)
                }
                innerDiv.append(ingDiv.append(recipeUrl));
            }
        }
    })
};

$(document).ready(function () {

    $('#stuff').on('click', 'img', function () {
        var image = $(this).attr('src');
        var recipeTitle = $(this).parent().find(".card-title").text();
        // console.log(recipeTitle);
        //var modalHeader = $(this).text(recipeTitle);
        //alert(image);
        // console.log('Modal img should be:', image); // no
        $("#myModal .showImage").attr("src", image);
        $('#myModal .ingContainer').html($(this).next().find('.ingDiv').html());

        $("#myModal .modal-header").html("<h3>" + recipeTitle +"</h3>");


        // $('body').on('show.bs.modal', '#myModal',function () {
        //     console.log('Show modal called');
        //
        // });
    });
});