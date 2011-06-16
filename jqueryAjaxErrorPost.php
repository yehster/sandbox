<?php
if (isset($_REQUEST["error"]))
{
    if($_REQUEST["error"]==="Error")
    {
        $return['error'] = true;
        $return['msg']= 'error';
        throw new Exception("Throwing Error!");
    }
    
}

echo "Hello World!";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
