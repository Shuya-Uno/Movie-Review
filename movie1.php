<?php
setcookie('username', 'Joe', time() + 60);
session_start();
$_SESSION['authuser'] = 1;

//stores session variables

/*session start and set cookie need to be at 
the top of the code when 
deployed on actual server*/
?>


<html>
    <head>
        <title>Find my Favorite Movie!</title>
    </head>
    <body>
        <?php
        $myfavmovie = urlencode('Life of Brian');

        echo "<a href=\"moviesite.php?favmovie=$myfavmovie\">";
        echo 'Click here to see information about my favorite movie!';
        echo '</a>';
        ?>    
    </body>
</html>