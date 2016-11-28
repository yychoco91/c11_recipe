<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/27/16
 * Time: 6:55 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Test Different Calls to DB</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script>
        $(document).ready(function(){
            $('#get').click(getIngredients);
        });

        function getIngredients(){
            $.ajax({
                url: 'whatcanimake_db.php/?request=get',
                method: 'get',
                dataType: 'JSON',
                success: function(response) {
                    console.log('Look, it works! ', response);
                }
            });
        }
    </script>
</head>
<body>
<button id="get" type="button">Get All Ingredients</button>
</body>
</html>
