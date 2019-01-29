<!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>XO</title>
        </head>
        <body>
            <form method="POST" action="index.php">
             <?php 
                //   forloop to create more boxes
              for ($id = 1; $id <= 9; $id++){      
                // if statement to break and arrange the boxes
                if($id === 4 or $id === 7) print "<br>";
                // the box containing the input  
                print "<input name ='$id' type ='text' size ='8'>";
                // value checking from inputs and printing out a value in a case it's not empty
                if(isset($_POST['submit']) and !empty($_POST[$id])){
                    // checking if the value is X or O
                    if($_POST[$id] == "x" or  $_POST[$id] == "o"){
                    //  keep the value inside the box
                      print "value='$_POST[$id]'";  
                    }
                    else{
                       $error = true; 
                    };
                };
              };
            ?>
            </form>
           
            
        </body>
        
        
    </html>