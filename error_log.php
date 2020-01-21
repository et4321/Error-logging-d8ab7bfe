
<?php
    session_start();
?>

<html>

    <head>
        <title>Try/Catch</title>
    </head>

    <body>
        <form method="POST">
            <input type="number" name="number">
            <input type="submit" name="send">
        </form>

        <?php

        try{
            if(isset($_POST["number"])){
                $_SESSION["number"] = $_POST["number"];
            
                if ($_SESSION["number"] > 10){
                    throw new Exception("Number is larger than 10");
                }

                if ($_SESSION["number"] < 1){
                    throw new Exception("number is smaller than 1");
                }
                
                else {
                    echo"Your number is:" . $_SESSION["number"];
                }
            } 
        }
        catch (Exception $error) {
            error_log($error->getMessage().PHP_EOL, 3, "errors.log");
        }
        ?>


    </body>
</html>


