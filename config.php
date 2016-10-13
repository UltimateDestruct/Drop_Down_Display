<?Php

 $dbhost = 'localhost';
 $dbname = 'dropdowndisplay';  
 $dbuser = 'root';                  
 $dbpass = 'password';                  
 
 try{
  
  $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 }catch(PDOException $ex){
  
  die($ex->getMessage());
 }