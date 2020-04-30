<?php 
$string = 'A man, a plan, a canal: Panama';
echo $string  = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
if ( strtolower($string) == strtolower( strrev($string) ) ){
      echo 'Palindrome string';
}else{      
	 echo 'Not a palindrome string';
}die;

?>


<form action="self" method ="post">
	<input type="number" name="num">
	<input type="submit" name="Submit" value="Submit">	
</form>


<?php

  if($_POST){

    $num = $_POST['num'];
    if( $num <= 1690){
          $i = 1;    
          $counter = 1;  	
          while ($num > $counter) 
          { 
            $i++;
              if ( ($i%2== 0) || ($i%3== 0) || ($i%5== 0) ){
              $counter++; 				    		
              }
          } 
          echo $i; 
    }else{
      echo "please enter less number";
    }
  }

?>
