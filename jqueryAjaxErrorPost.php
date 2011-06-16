<?php
if (isset($_REQUEST["error"]))
{
    if($_REQUEST["error"]==="Error")
    {
        throw new Exception("Throwing Error!");
    }
    
}

echo "Hello World!";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
