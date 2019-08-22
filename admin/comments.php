<?php include "includes/admin_header.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                
                            <?php
                                
                                if(isset($_GET['status'])){
                                    $status = $_GET['status'];
                                }else{
                                    $status = "";
                                }
                                
                                switch($status){
                                    case '1';
                                        include "includes/comments/comment_status.php";
                                        break;
                                        
                                    case '0';
                                        include "includes/comments/comment_status.php";
                                        break;
                                        
                                    default:
                                        include "includes/comments/view_comments.php";
                                        break;
                                }
                                
                            ?>
                                
                                
                                
                                
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        
                        
<?php include "includes/admin_footer.php"; ?>