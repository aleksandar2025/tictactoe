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
              };
            ?>
            </form>
           
            
        </body>
        
        
    </html>