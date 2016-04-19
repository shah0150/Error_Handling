<?php
require('log.php'); 
 if(isset($_POST["name"])){
                                    $_SESSION["name"] = $_POST["name"];
                                    logOutput("name is" . $_POST['name']);
                                }
                                
                                
                                if(isset($_POST["email"])){
                                    $_SESSION["email"] = $_POST["email"];
                                }
                                
                                
                                
logOutput("session var is: " .  $_SESSION["name"] .   $_SESSION["email"]);
?>