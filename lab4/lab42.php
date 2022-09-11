<?php
$numeroFact = $_POST['factorial'];
$fact = 1;
      for( $i = 1; $i <= $numeroFact; $i++ ) {
        $fact *= $i; 
      }

      echo "<br/> El valor factorial es ". $fact;