<?php
    session_start();

    //check to see if user has logged in with a valid password
    if ($_SESSION['authuser'] != 1){
        echo 'Sorry, but you don\'t have permission to view this page!';
        exit();
    }
?>

<html>
    <head>
        <title>
            My Movie Site
            <?php
                if (isset($_GET['favmovie'])){
                    echo ' - ';
                    echo $_GET['favmovie'];
                }
            ?>
        </title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        
        <?php

            $favmovies = array(
                'Life of Brian',
                'Stripes',
                'Office Space',
                'The Holy Grail',
                'Matrix',
                'Terminator 2',
                'Star Trek Ⅳ',
                'Close Encounters of the Third Kind',
                'Sixteen Candles',
                'Caddyshack'
            );

            if (isset($_GET['favmovie'])){
                echo 'Welcome to our site, ';
                echo $_SESSION['username'];
                echo '! <br />';
                
                echo 'My favorite movie is ';
                echo $_GET['favmovie'];
                echo '<br />';

                $movierate = 5;

                echo 'My movie rating for this movie is: ';
                echo $movierate;
            }
            else {

                echo 'My top 10 favorite movies are:<br/>';

                if (isset($_GET['sorted'])){
                    sort($favmovies);
                }

                
                echo '<ol>';

                foreach($favmovies as $movie){
                    echo '<li>';
                    echo $movie;
                    echo '</li>';
                }

                echo '</ol>';
                
            }

            // if & else in PHP lets a site display data depending on who the user is / user action.
            // One site can have mutiple faces, in terms of the contents it chooses to display.
        ?>
    </body>
</html>