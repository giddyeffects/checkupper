<?php

/**
 * Function to check if a string starts with an upper-case letter A-Z
 * @author Gideon Nyaga <mwangidz@gmail.com>
 * @version 1.0.0
 * @param string $string
 * @return bool True or False
 */
function startsWithUpper($string){
//    if (is_string($string)){
//        return (preg_match('/^[A-Z]/', $string))?true:false;
//    }
//    else {
//        return false;
//    }
    
    return (is_string($string))? ((preg_match('/^[A-Z]/', $string))?true:false) : false;
}
$msg = "";
if (isset($_REQUEST['submit'])){
    $msg = (startsWithUpper($_POST['string']))?$_POST['string']." starts with an Upper Case": $_POST['string']." doesn't start with an upper case";
}
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Check Upper Case</title>
    </head>
    <body>
        <div><?=$msg?></div>
        <form method="post" action="checkUpper.php">
            Enter string: <input name="string" id="string" type="text"/>
            <input name="submit" type="submit" />
        </form> 
    </body>
</html>
