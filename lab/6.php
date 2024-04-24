<?php
$age=20;
if(is_int($age)) {
    echo "is integet\n";
}
else{
    echo "not integer\n";
}
if($age<18){
    echo "Access Denaied";
}

else{
    echo "registration successfully completed";
}
?>