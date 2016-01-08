<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
	</head>
	<body>
		<?php
                //echo 'Hello World';
		//echo 'hi there';
                $temp = 'Jim';
                //echo 'Hi, my name is';
                //echo $temp;
                $temp = 'geek';
                //echo "I am a";
                //echo$temp;
                $temp = 10;
                //echo 'My level is';
                //echo $temp;
                
                $name = 'Jim';
                $what = 'geek';
                $level = 10;
                //echo 'Hi, my name is ' .$name. ', and I am a level ' .$level. ' ' .
                //        $what;
                
                $hoursworked = $_GET['hours'];
                $rate = 12;
                
                if($hoursworked > 40) {
                    $total = $hoursworked * $rate * 1.5;
                } else {
                    $total = $hoursworked * $rate;
                }
                
                //echo 'Hi, my name is ' .$name. ', and I am a level ' .$level. ' ' .
                //        $what . '. ';
                
                //echo ($total > 0) ? 'You owe me ' . $total : "You're welcome";
		
                
                ?>
	</body>
</html>