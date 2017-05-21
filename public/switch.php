<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
        echo "It's Monday!";
        break;
     case 2:
		echo "It's Tuesday!";
		break;
     case 3:
     	echo "It's Wednesday!";
     	break;
	 case 4:
		echo "It's Thursday!";
		break;
     case 5:
     	echo "It's Friday!";
     	break;
   	 case 6:
		echo "It's Saturday!";
		break;
     case 7:
     	echo "It's Sunday!";
     	break;
 }

?>