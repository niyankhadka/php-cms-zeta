<?php include "includes/admin_header.php"; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Home Page Setting</h3>
                                
                                <?php 
                                
                                if(isset($_GET['source'])){
                                    $source = $_GET['source'];
                                }else{
                                    $source = '';
                                }
                                switch($source){
                                        case 'section1';
                                        include "includes/homepage_sections/section1.php";
                                        break;
                                        
                                        case 'section2';
                                        include "includes/homepage_sections/section2.php";
                                        break;
                                        
                                        case 'section3';
                                        include "includes/homepage_sections/section3.php";
                                        break;
                                        
                                        case 'section4';
                                        include "includes/homepage_sections/section4.php";
                                        break;
                                        
                                        case 'section5';
                                        include "includes/homepage_sections/section5.php";
                                        break;
                                        
                                    default:
                                        include "includes/homepage_sections/view_homepage.php";
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