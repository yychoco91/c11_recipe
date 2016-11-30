$(function() {
    // Toggle Nav on Click
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });
});

function toggleNav() {
    if ($('#site-wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#site-wrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('#site-wrapper').addClass('show-nav');
    }
}

$(document).ready(function () {
    $('#stuff').on('click', 'img', function () {
        var image = $(this).attr('src');
        var recipeTitle = $(this).parent().find(".card-title").text();
        var recipeUrl = $(this).parent().find()
        // console.log(recipeTitle);
        //var modalHeader = $(this).text(recipeTitle);
        //alert(image);
        // console.log('Modal img should be:', image); // no
        $("#myModal .showImage").attr("src", image);
        $('#myModal .ingContainer').html($(this).next().find('.ingDiv').html());

        $("#myModal .modal-header").text(recipeTitle);
        // console.log($(this).next().find('.ingDiv').html()); //no


        // $('body').on('show.bs.modal', '#myModal',function () {
        //     console.log('Show modal called');
        //
        // });
    });
});