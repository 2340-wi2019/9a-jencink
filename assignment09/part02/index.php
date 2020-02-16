<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "Josh",
            "Apollo",
            "Artemis",
            "Not putting things in order"
        );
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->
        <ol>
            <?php
                $counter = 0;
                while ($counter < count ($my_favorite_things) ){
                    ?><li><?php
                    print $my_favorite_things[$counter];
                    $counter++;
                    ?></li><?php
                }
            ?>
        </ol>

    </body>

