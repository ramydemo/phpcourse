<?php
   if( $_REQUEST["name"] || $_REQUEST["age"] ) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";
      exit();
   }

   $date_array = getdate();
   
   foreach ( $date_array as $key => $val ){
      print "$key = $val<br />";
   }
   
   $formated_date  = "Today's date: ";
   $formated_date .= $date_array['mday'] . "/";
   $formated_date .= $date_array['mon'] . "/";
   $formated_date .= $date_array['year'];
   
   print $formated_date;
?>

<html>
   <body>
      
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
