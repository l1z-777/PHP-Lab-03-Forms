<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sending Hidden Data</title>
    </head>
    <body>

        <?php

        #Use IF-Else statements to intialise variables 
        #and to produce a response
        if (!empty ($_POST['comment'])) {
            $comment = $_POST['comment'];
        }
        else {
            $comment = NULL;
            echo 'Error! Please go back and enter a comment!'; ?>
            <form method="POST" action="task-3-page.php">
            <input type="submit" name="back_button" value="Back">

        <?php }
        #Statements to initialise variables if the
        #hidden form field values have been set
        $time = (!isset ($_POST['time'])) ? NULL: $_POST['time'];
        $user = (!isset ($_POST['user'])) ? NULL: $_POST['user'];

        #Statements to output valid data:
        if (($comment != NULL)) {
            echo "<p>Feedback recieved! Thank you ". $_SESSION['name'] . "! You will recieve more information about the course you enrolled on, at ". $_SESSION['email'] . "<br><i> \"$comment\"<br><i><br></p>";
        }
        ?>

    </body>
</html>

