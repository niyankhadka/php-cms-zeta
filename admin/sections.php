<?php include "includes/admin_header.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Sections Setting</h3>
                                
                                <?php 
                                
                                if(isset($_GET['source'])){
                                    $source = $_GET['source'];
                                }else{
                                    $source = '';
                                }
                                switch($source){
                                        case 'header';
                                        include "includes/sections/header.php";
                                        break;
                                        
                                        case 'footer_widget';
                                        include "includes/sections/footer_widget.php";
                                        break;
                                        
                                        case 'footer_copyright';
                                        include "includes/sections/footer_copyright.php";
                                        break;
                                        
                                        case 'social_links';
                                        include "includes/sections/social_links.php";
                                        break;
                                       
                                    default:
                                        echo "Unvalid Query String Passed";
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