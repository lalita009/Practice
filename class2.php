
<!-- Leap year is a year which occurs once every four years.
 -->
	<!-- <?php

	$year = 2016;
	if($year%4 ==0){
	echo"this is a leap year";
	}
	else{
	echo"this is not leap year";
	}

	?> -->

<!-- 
Even numbers those which are divisible by 2 like 2, 4, 6, 8 and those which are not divisible by 2 are odd numbers like 1, 3, 5, 7. -->

<!-- 
<?php
      $check1 = 5;
      $check2 = 6;
      if($check1%3 == 0) {
        echo "$check1 is Even number <br/>";
        
      } else {
        echo "$check1 is Odd number <br/>";
      }

      if($check2%3 == 0) {
        echo "$check2 is Even number";
      } else {
        echo "$check2 is Odd number";
      }
    ?>  -->


<!--     To find the sum of numbers, simply add all the digits.
 -->
<?php
    
      $num = 12345;
      $rem = 0;
      $sum = 0;
      for($i = 0; $i <= strlen($num); $i++) {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = $num/10;
      }
      echo "Sum of digits is $sum";
      
    ?> 