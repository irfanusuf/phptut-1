
<?php    

$x = 5;       // DECALRING A VARIABLE       X = 5    WHERE 5 IS (data type = INTEGER) 
$y = 10.5;     // DECLARING A VARIABLE      Y= 10.5  WHICH IS A DECIMAL HERE CALLED AS FLOAT
$txt = "Hello world!";     // DECLARING A VARIABLE   TXT = HELLO WORLD    IS A STRING
$txt1 = "10.5";     // DECLARING A VARIABLE   TXT = 10.5 here is string (data type)
$txt2 = "PHP is";
$txt3 = "my world";



$z = $x + $y ;       // variable z is doing algebra here and  variable x is accesible here.
$e = $txt1 ." ". $txt2 ." ". $txt3;     // variable e doing concatenation



echo "$z" ;  
echo "<br>";

echo "$e" ; 


echo "<br>";


function jibran($x = 8) {
echo "<p>Variable x inside function is: $x</p>";// variable x = 5 is not availble here but x=8 is available
} 
jibran(); 


$Post_requestArr = array("username"=>"irfan usuf", "email"=>"irfanusuf33@gmail.com", "password"=>"12334253");



echo $Post_request [username];
echo $Post_request [email];
echo $Post_request [password];



// $GetArr = (name = > name  ,  name => email , name => password)    /// input feild 
// $GetArr = (name = > irfan ,  name => irfanusuf33@gamil.com  name => ester)   /// after filling data 



// // get or post 
// $assocaitedArr = (name=> irfan , email => irfanusuf33@gamil.com,  password=> ester)



 
?>  







