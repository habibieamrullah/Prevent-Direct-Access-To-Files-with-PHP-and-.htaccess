<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <img src="loader.php?file=batt.jpg">
        
        <video width="320" height="240" controls>
          <source src="loader.php?file=movie.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>

        <?php
        
        if(isset($_POST["pass"])){
            if($_POST["pass"] == "123"){
                $_SESSION["fileloader"] = "123";
            }else{
                echo "Not authorized!";
            }
        }
        
        ?>
        
        <form method="post">
            <label>Login</label>
            <input name="pass">
            <input value="Submit" type="submit">
        </form>
        
        <?php
        if(isset($_SESSION["fileloader"])){
            echo "<a href='?logout'>Logout</a>";
        }
        
        if(isset($_GET["logout"])){
            session_destroy();
            ?>
            <script>
                location.href="index.php";
            </script>
            <?php
        }
        ?>
    </body>
</html>