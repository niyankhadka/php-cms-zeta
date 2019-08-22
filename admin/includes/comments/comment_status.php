<?php

if(isset($_GET['update_cmt_status_id'])){
    $update_comment_id = $_GET['update_cmt_status_id'];
    $update_comment_status = $_GET['status'];
    $update_comment_post = $_GET['post'];
    
     comment_status($update_comment_id , $update_comment_status , $update_comment_post);
   
    
}

?>