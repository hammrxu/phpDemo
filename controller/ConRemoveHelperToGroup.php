<?php
    $request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
    include "../Config/db.php";
    
    // echo $sql;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "Delete from ct_group_helper where helper_id_fk = ".$request['helper_id']." AND group_id_fk =". $request['group_id'];
   
    $result = $conn->query($sql);

?>