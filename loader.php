<?php
session_start();
if(isset($_GET["file"])){
    if(isset($_SESSION["fileloader"])){
        readfile($_GET["file"]);
    }else{
        echo "You Are Not authorized!";
    }
}else{
    echo "You Are Not authorized!";
}