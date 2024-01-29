<?php

$con=new mySqli('localhost','root','','crudoparations');


if($con){
    echo "Connection successfull";
}else{
    die(mySqli_error($con));
};


?>