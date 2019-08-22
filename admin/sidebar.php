<?php include "includes/admin_header.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                        <div class="row">
                            
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Sidebar Setting</h3>
                                
                                <?php 
                                
                                if(isset($_GET['source'])){
                                    $source = $_GET['source'];
                                }else{
                                    $source = '';
                                }
                                switch($source){
                                        case 'gallery';
                                        include "includes/sidebar/gallery.php";
                                        break;
                                        
                                        case 'quote';
                                        include "includes/sidebar/quote.php";
                                        break;
                                        
                                        case 'slider';
                                        include "includes/sidebar/slider.php";
                                        break;
                                        
                                        
                                    default:
                                        echo "Unvalid Query String Passed";
                                }
                                
                                 ?>
                                
                                
                                
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        
                        
<?php include "includes/admin_footer.php"; ?>