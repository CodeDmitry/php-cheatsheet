<?php
    # | The script prints the difference in days between $date2 and $date1.
    
    $date1 = new DateTime("february 24, 2022 EST");    
    $date2 = new DateTime("september 21, 2022 EST");
    
    # | Note: originally was $date2->diff($date1)->format("%a")
    echo $date2->diff($date1)->days;        
?>
