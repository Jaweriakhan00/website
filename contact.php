<?php
function clean_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
    
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = clean_input($_POST['name'] ??'');
    $email = clean_input($_POST['email']??'');
    $message = clean_input($_POST['message']??'');


    echo "name:" . $name . "<br>";
    echo "email:" . $email . "<br>";
     echo "message:" . n12br ($meassge);
}
else{
    echo "please submit the form using POST";
}

?>