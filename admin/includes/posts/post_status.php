<?php

if(isset($_GET['update_post_status_id'])){
    $update_post_id = $_GET['update_post_status_id'];
    $update_post_status = $_GET['status'];
    
     post_status($update_post_id , $update_post_status);
   
    
}

?>