<?php

require 'rb.php';
R::setup( 'mysql:host=localhost;dbname=robin','root', '' ); 
$new = R::dispense('new');
/*$new->import( $_POST);*/ 
$new->Name =( $_POST['field'] );
$new->Email = ( $_POST['email'] ); 
$new->Address =( $_POST['address']); 
$new->Phone = ( $_POST['phone'] ); 
$new->Sex = ( $_POST ['sex'] );
$new->LicenseNo = ( $_POST ['LicenseNumber'] );
$new->Country = ( $_POST ['country'] ); 	
R::store($new);
echo "Succesfully added on record";
?>