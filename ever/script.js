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
        //alert(image);
        console.log('Modal img should be:', image);
        $("#myModal .showImage").attr("src", image);
        $('#myModal .modal-body .ingContainer').html($(this).next().find('.ingDiv').html());

        console.log($(this).next().find('.ingDiv').html());
        // $('body').on('show.bs.modal', '#myModal',function () {
        //     console.log('Show modal called');
        //
        // });
    });
});