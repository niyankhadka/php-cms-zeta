<?php include "includes/admin_header.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Posts</h3>
                                
                                <?php 
                                
                                if(isset($_GET['source'])){
                                    $source = $_GET['source'];
                                }else{
                                    $source = '';
                                }
                                switch($source){
                                        case 'add_post';
                                        include "includes/posts/add_post.php";
                                        break;
                                        
                                        case 'edit_post';
                                        include "includes/posts/edit_post.php";
                                        break;
                                        
                                        case 'categories';
                                        include "includes/posts/categories.php";
                                        break;
                                        
                                        case 'status';
                                        include "includes/posts/post_status.php";
                                        break;
                                       
                                    default:
                                        include "includes/posts/view_post.php";
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