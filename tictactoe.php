<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title></title>
	</head>
	<body>
		<?php
                class Game {
                    var $position;
                    function _construct($squares) {
                        $this->position = str_split($squares);
                    }
                }
                
                function winner($token) {
                    $result = false;
                    for($row = 0; $row < 3; $row ++) {
                        if((($this->position[$row * 3]) == $token) &&
                        (($this->position[$row * 3 + 1]) == $token) &&
                        (($this->position[$row * 3 + 2]) == $token)) {
                            $result = true;
                        }
                        for($col = 0; $col < 3; $col++) {
                            if($row == $col) {
                                if($this->position[$row * 2 + $col * 2] == $token) {
                                $result = true;
                                }
                                if($this->position[$row + $col] = $token) {
                                    $result = true;
                                }
                            }
                        }
                    }
                    for($col = 0; $col < 3; $col++) {
                        if((($this->pos[$col]) == $token) &&
                        (($this->pos[$col + 3]) == $token) &&
                        (($this->pos[$col + 6]) == $token)) {
                            return true;
                        }
                    }
                }
                
                function display() {
                    echo '<table cols = "3" style = "font-size:large; font-weight: bold">';
                    echo '<tr>'; //open the first row
                    for($pos = 0; $pos < 9; $pos++) {
                        echo $this->show_cell($pos);
                        if($pos % 3 == 2) {
                           echo '</tr><tr>'; //start a new row for the next square
                        }
                    }
                    echo '</tr>'; //close the last row
                    echo '</table>'; //close the table
                }
                
                function show_cell($which) {
                    $token = $this->position[$which];
                    //deal with easy case
                    if ($token <> '-')
                        return '<td>'.$token.'</td>';
                    // now the hard case
                    $this->newposition = $this->position;
                    $this->newposition[$which] = 'o';
                    $move = implode($this->newposition); //
                    $link = '?board='.$move;
                    return '<td><a href="'.$link.'">-</a></td>';
                }
                
                function pick_move() {
                    for($pos = 0; $pos <= 8; $pos++) {
                        if($this->position[$pos] == '-') {
                           $this->position[$pos] = 'x';
                        }
                        else
                            echo 'Your Move, Buddy';
                    }
                }
                
                //Main Game Logic                
                $squares = $_GET['board'];

                echo "Welcome to George, the evil Tic-Tac-Toe Game.";
                
                if($squares == null) {
                    $squares = '---------';
                
                    
                }
                $game = new Game($squares);
                
                if($game->winner('x'))
                    echo 'You win. Lucky guesses!';
                else if ($game->winner('o'))
                    echo 'I win. Muahahahaha';
                else
                    echo 'No winner yet, but you are losing.';
                
                ?>
	</body>
</html>