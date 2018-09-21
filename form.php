
<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <form action="<? echo $_SERVER[PHP_SELF]; ?>" method="POST">
            Name:<input type="text" name="name">   
            Age:<input type="text" name="age" >
            <input type="submit" value="send">
            
        </form>
    </body>
</html>

<?php

 if(isset($_POST['name']) && !empty($_POST['name'])) {
      echo "Hola " .$_POST['name']; 
 } else {
      echo "Introduce el nombre";
 }
