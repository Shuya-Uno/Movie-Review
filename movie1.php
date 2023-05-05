<?php
session_start();

$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Check username and password information

if (($_SESSION['username'] == 'Joe') and 
    ($_SESSION['userpass'] == '12345')) {
        $_SESSION['authuser'] = 1;
    }

else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();
}


//stores session variables

/*session start needs to be at the top of the code when 
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