<!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>XO</title>
        </head>
        <body>
            <form method="POST" action="index.php">
             <?php 
            //  adding error default variable
            $error = false; $x_wins = false; $o_wins = false; $count = 0;
                //   forloop to create more boxes
              for ($id = 1; $id <= 9; $id++){      
                // if statement to break and arrange the boxes
                if($id === 4 or $id === 7) print "<br>";
                // the box containing the input  
                print "<input name ='$id' type ='text' size ='8'";
                // value checking from inputs and printing out a value in a case it's not empty
                if(isset($_POST['submit']) and !empty($_POST[$id])){
                    // checking if the value is X or O
                    if($_POST[$id] == "x" or  $_POST[$id] == "o"){
                        // later insertion of count variable and a counter
                        $count += 1;
                    //  keep the value inside the box
                      print "value='$_POST[$id]' readonly>";  
                    //   associating the fields with the user input. working with data and teaching the programm the winning conditions by using forloops
                        // horizontal loop
                        for($a = 1, $b = 2, $c = 3; $a <=7, $b <= 8, $c <= 9; $a+=3, $b+=3, $c+=3){
                            // if statement to check if a winning condition is on the horizontal line
                            if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c]){
                                // determining the winner and printing out the winning message
                                if($_POST[$a] == "x"){
                                    $x_wins = true;
                                } 
                                // we already checked if $a is equal to $b and $c
                                elseif($post[$a] == "o"){
                                    $o_wins = true;
                                }
                            }
                        }
                        for($a = 1, $b = 4, $c = 7; $a <= 3, $b <= 6, $c <= 9; $a+=1, $b+=1, $c+=1){
                            // if statement to check if a winning condition is on the vertical line
                            if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c]){
                                // determining the winner and printing out the winning message
                                if($_POST[$a] == "x"){
                                    $x_wins = true;
                                } 
                                // we already checked if $a is equal to $b and $c
                                elseif($post[$a] == "o"){
                                    $o_wins = true;
                                }
                            }
                        }
                        for($a = 1, $b = 5, $c = 9; $a <= 3, $b <= 5, $c >= 7; $a+=2, $b+=0, $c-=2){
                            // if statement to check if a winning condition is on the cross line
                            if($_POST[$a] == $_POST[$b] and $_POST[$b] == $_POST[$c]){
                                // determining the winner and printing out the winning message
                                if($_POST[$a] == "x"){
                                    $x_wins = true;
                                } 
                                // we already checked if $a is equal to $b and $c
                                elseif($post[$a] == "o"){
                                    $o_wins = true;
                                }
                            }
                        } 
                    }
                    else{
                       $error = true; 
                    }
                }
                else {
                    print ">";
                }
              };
            ?>
            <p><input type="submit" name="submit"/></p>
            </form>
           
           <!--adding feedback-->
           <?php
           if($o_wins){
               print "Player O wins";
           } elseif($x_wins) {
               print "Player X wins";
           } elseif($count == 9 and !$o_wins and !$x_wins){
               print "Draw";
           } else {
               print "Please enter X and O values";
           }
           
           ?>
           <a href="https://php-manywounds.c9users.io/IntroToPhp/tic/Sourcefiles/index.php">Try again</a>
        </body>
        
        
    </html>