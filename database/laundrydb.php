<?php

    $list = $conn->query("SELECT * FROM laundry_list order by status asc, id asc ");
	while($row=$list->fetch_assoc()):

        $date = date("M d, Y",strtotime($row['date_created']));

        $row = $row['queue'];
        // $rowid = $row['id'];
        // $rowid = $row['id'];

        $ucwords = ucwords($row['customer_name']);

        // if($row['status'] == 0):
        //     $pend = "Pending";
            
        //     elseif($row['status'] == 1) :
        //         $proc = "Processing";
            
        //     elseif($row['status'] == 2) :
        //         $rtc = "Ready to be Claim";
            
        //     elseif($row['status'] == 3) :
        //         $clm = "Claimed";
    
        // endif;



    endwhile;

?>