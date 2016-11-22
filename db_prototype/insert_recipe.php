<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/20/16
 * Time: 11:57 AM
 */

$recipes =
    [
        "criteria"=> [
            "q"=> null,
            "allowedIngredient"=> null,
            "excludedIngredient"=> null
        ],
        "matches"=>[
            "imageUrlsBySize"=> [
                "90"=> "https://lh3.googleusercontent.com/vVQAeakPF0f4PFA0daxvauCyZg3wlEykn600epqWfsuBh4F25NwimdE0mDYPRlJbMxr888pJLYixrBWw5jPBsw=s90-c"
            ],
            "sourceDisplayName"=> "The Seasoned Mom",
            "ingredients"=> [
                "boneless skinless chicken breasts",
                "ranch salad dressing mix",
                "Alfredo sauce",
                "chopped bacon",
                "provolone cheese",
                "fresh parsley"
            ],
            "id"=> "Dump-and-Bake-Smothered-Chicken-with-Bacon-1927958",
            "smallImageUrls"=> [
                "https://lh3.googleusercontent.com/Cd__pjomfz1RHEwo_9nPmaQM6ppS404MgMM329_uDNZzfo0ykpmFQVCClqeAux51R3irZcFYv1JNNkx1VWQVi4Y=s90"
            ],
            "recipeName"=> "Dump-and-Bake Smothered Chicken with Bacon",
            "totalTimeInSeconds"=> 2400,
            "attributes"=> [
                "course"=> [
                    "Main Dishes"
                ]
            ],
            "flavors"=> null,
            "rating"=> 4
        ],
        [
            "imageUrlsBySize"=> [
                "90"=> "https://lh3.googleusercontent.com/C6D-gRY098_W14hVFAyvijzCdQ1LJim37lkXe5zlcwuwnST1cQw8Emr5zKkrd1Lz3lN7pm3Tp2eyjm-yLWYA4yY=s90-c"
            ],
            "sourceDisplayName"=> "Cookie Rookie",
            "ingredients"=> [
                "bacon",
                "yellow onion",
                "garlic",
                "green beans",
                "black pepper",
                "kosher salt",
                "red pepper flakes",
                "water",
                "bourbon whiskey",
                "dark brown sugar"
            ],
            "id"=> "Skillet-Bourbon-Bacon-Green-Beans-1928194",
            "smallImageUrls"=> [
                "https://lh3.googleusercontent.com/QnqEeM-84d46B4oezuQHemULde558klfZAMsAQhtZ_H3PBITQ4Ojw8jnPivrsKAtSvdwAqTBwazIotEYunUbJA=s90"
            ],
            "recipeName"=> "Skillet Bourbon Bacon Green Beans",
            "totalTimeInSeconds"=> 1200,
            "attributes"=> [
                "course"=> [
                    "Side Dishes"
                ]
            ],
            "flavors"=> [
                "piquant"=> 0.16666666666666666,
                "meaty"=> 0.16666666666666666,
                "bitter"=> 0.16666666666666666,
                "sweet"=> 0.5,
                "sour"=> 0.5,
                "salty"=> 0.8333333333333334
            ],
            "rating"=> 4
        ]
    ];

require_once("connect.php");

//INSERT INTO `ingredient_meta`(`ID`, `name`) VALUES ([value-1],[value-2])


//INSERT INTO `ingredients`(`ingred_id`, `recipe_id`, `count_type`, `count`) VALUES ([value-1],[value-2],[value-3],[value-4])

//INSERT INTO `recipes`(`ID`, `name`, `author`, `url`, `picture_url`, `added`, `modified`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
foreach($recipes as $recipe) {
    $insertQuery = "INSERT INTO `recipes`(`name`, `author`, `url`, `picture_url`) VALUES (" . $recipe['matches']['recipeName'] . "," . $recipe['matches']['sourceDisplayName'] . ",[value-4],[value-5])";
}