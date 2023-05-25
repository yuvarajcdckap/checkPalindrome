<?php
function palindrome($string){
    if($string===""){return "please give correct input to check";}
    else if(strrev($string)===$string){return "true";}
    else{return "false";}
}
echo palindrome('malayalam');

?>
