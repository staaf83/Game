<?php 
require_once "../drivers/config.php";
       $query = "SELECT * FROM chat ORDER BY date DESC";
       $run = $link->query($query);    
           while($row = $run->fetch_array()) :
              
          

echo '
<div  id="ff" style=" direction: ltr; word-wrap: break-word; width: 95vw;">
   <span style="color: gold; float: left;">'. date("H:i", strtotime($row["date"])).'</span>
   <span style="color: green; float: left;">'. $row["name"] .':</span>
   <span style=" color: silver;">'.$row["msg"].'</span>
</div>
';
endwhile; ?>