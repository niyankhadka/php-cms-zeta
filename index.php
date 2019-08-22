<?php include "includes/db.php"; ?>
<?php include "includes/home_header.php"; ?>
<!-- Hero Slider -->

<div class="home">
    <div class="hero_slider_container slider_prlx">
        <div class="owl-carousel owl-theme hero_slider">

            <!-- Slider Item -->
            
            
            <?php
                $query = "SELECT * FROM home_section1";
                $query_select = mysqli_query($connection , $query);
                while($section1_rows = mysqli_fetch_assoc($query_select)){
                    
                    $section1_slider_title = $section1_rows['section1_title'];
                    $section1_slider_subtitle = $section1_rows['section1_subtitle'];
                    $section1_slider_description = $section1_rows['section1_description'];
                    
                    $upload_slider_image = $section1_rows['section1_image'];
                    $section1_slider_button_text = $section1_rows['section1_button_text'];
                    $section1_slider_button_link = $section1_rows['section1_button_link'];
                
                ?>
            
            
            <div class="owl-item main_slider_item">
                <div class="main_slider_item_bg" style="background-image:url(uploads/images/<?php echo $upload_slider_image; ?>)"></div>
                <div class="main_slider_shapes"><img src="uploads/main_slider_shapes.png" alt="" style="width: 100% !important;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col slider_content_col">
                            <div class="main_slider_content">
                                   
                                    <h1><?php echo $section1_slider_title; ?></h1>
                                    <h1><span><?php echo $section1_slider_subtitle; ?></span></h1>
                                    <p><?php echo $section1_slider_description; ?> </p>
                                    
                                    <div class="button discover_button">
                                        <a href="../<?php echo $section1_slider_button_link; ?>" class="d-flex flex-row align-items-center justify-content-center" target="_blank"><?php echo $section1_slider_button_text; ?><img src="uploads/arrow_right.svg" alt=""></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            
            <?php
                }
            ?>
            
            
        </div>

        <!-- Slider Dots -->

        <div class="main_slider_dots">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul id="main_slider_custom_dots" class="main_slider_custom_dots">
                            <li class="main_slider_custom_dot active">01.</li>
                            <li class="main_slider_custom_dot">02.</li>
                            <li class="main_slider_custom_dot">03.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Dots -->

        <div class="main_slider_nav_left main_slider_nav">
            <i class="fas fa-chevron-left trans_300"></i>
        </div>

        <div class="main_slider_nav_right main_slider_nav">
            <i class="fas fa-chevron-right trans_300"></i>
        </div>

    </div>
</div>

<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="home_social">
			<?php include "includes/sociallinks.php" ?>
		</ul>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row align-items-end">

            <!-- Features Item -->
            
            <?php
                $query2 = "SELECT * FROM home_section2";
                $query_select2 = mysqli_query($connection , $query2);
                while($section2_rows = mysqli_fetch_assoc($query_select2)){
                    
                    $section2_title = $section2_rows['section2_title'];
                    $section2_description = $section2_rows['section2_description'];
                    
                    $upload_icon = $section2_rows['section2_icon'];
                
                ?>
            <div class="col-lg-4 features_col">
                <div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
                    
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="uploads/images/<?php echo $upload_icon; ?>" alt="">
                    </div>
                    <h3><?php echo $section2_title; ?></h3>
                    <p><?php echo $section2_description; ?></p>
                </div>
            </div>
<?php } ?>
            

        </div>
    </div>
</div>

<!-- About -->

<div class="about prlx_parent">
    
           <?php
                            
                $query3_value = "SELECT * FROM home_section3 WHERE section3_id = 1";
                $query_select3_value = mysqli_query($connection , $query3_value);
                $section3_rows = mysqli_fetch_assoc($query_select3_value);
                    
                    $section3_title_value = $section3_rows['section3_title'];
                    $section3_description_value = $section3_rows['section3_description'];
                    $upload_signature_name_value = $section3_rows['section3_signature'];
                            
                    $section3_bg_text_value = $section3_rows['section3_bg_text'];
                    $upload_bg_image_name_value = $section3_rows['section3_bg_image'];
                            
                    $section3_pb_text1 = $section3_rows['section3_pb_text1'];
                    $section3_pb_value1 = $section3_rows['section3_pb_value1'];
                    
                    $section3_pb_text2 = $section3_rows['section3_pb_text2'];
                    $section3_pb_value2 = $section3_rows['section3_pb_value2'];
                            
                    $section3_pb_text3 = $section3_rows['section3_pb_text3'];
                    $section3_pb_value3 = $section3_rows['section3_pb_value3'];
                            
                    $section3_pb_text4 = $section3_rows['section3_pb_text4'];
                    $section3_pb_value4 = $section3_rows['section3_pb_value4'];
                            
                
                ?>
    
    <div class="about_background prlx" style="background-image:url(uploads/images/<?php echo $upload_bg_image_name_value; ?>)"></div>
    <div class="about_shapes"><img src="uploads/about_shapes.png" alt=""></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center section_title">
                <h2><?php echo $section3_title_value;?><span><?php echo $section3_bg_text_value; ?></span></h2>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <div class="about_text">
                    <p><?php echo $section3_description_value; ?></p>
                    <img src="uploads/signiture.png" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="skills_container">
                    <ul class="progress_bar_container col_12 clearfix">
                        <li class="pb_item">
                            <div id="skill_1_pbar" class="skill_bars" data-perc="<?php echo $section3_pb_value1; ?>" data-name="skill_1_pbar"></div>
                            <h5><?php echo $section3_pb_text1; ?></h5>
                        </li>
                        <li class="pb_item">
                            <div id="skill_2_pbar" class="skill_bars" data-perc="<?php echo $section3_pb_value2; ?>" data-name="skill_2_pbar"></div>
                            <h5><?php echo $section3_pb_text2; ?></h5>
                        </li>
                        <li class="pb_item">
                            <div id="skill_3_pbar" class="skill_bars" data-perc="<?php echo $section3_pb_value3; ?>" data-name="skill_3_pbar"></div>
                            <h5><?php echo $section3_pb_text3; ?></h5>
                        </li>
                        <li class="pb_item">
                            <div id="skill_4_pbar" class="skill_bars" data-perc="<?php echo $section3_pb_value4; ?>" data-name="skill_4_pbar"></div>
                            <h5><?php echo $section3_pb_text4; ?></h5>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Testimonials -->

<div class="testimonials">
    <div class="container">
        <div class="row">
           
           <?php
                            
                $query4_value = "SELECT * FROM home_section4 WHERE section4_id = 1";
                $query_select4_value = mysqli_query($connection , $query4_value);
                $section4_rows = mysqli_fetch_assoc($query_select4_value);
                    
                    $section4_title_value = $section4_rows['section4_title'];
                    $section4_bg_title_value = $section4_rows['section4_bg_title'];
                    
                ?>
           
           
            <div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
                <h2><?php echo $section4_title_value; ?><span><?php echo $section4_bg_title_value; ?></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="testimonials_container">
                    <div class="testimonials_container_inner"></div>

                    <!-- Testimonials Slider -->

                    <div class="owl-carousel owl-theme testimonials_slider">

                       
                       <?php
                            
                $query4_value = "SELECT * FROM home_section4";
                $query_select4_value = mysqli_query($connection , $query4_value);
                while($section4_rows = mysqli_fetch_assoc($query_select4_value)){
                    
                    $section4_client_image_value = $section4_rows['section4_client_image'];
                    $section4_client_name_value = $section4_rows['section4_client_name'];
                    $section4_client_role_value = $section4_rows['section4_client_role'];
                    $section4_client_view_value = $section4_rows['section4_client_view'];
                    
                ?>
                       
                        <!-- Testimonials Item -->
                        <div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="testimonials_content">
                                <div class="test_user_pic"><img src="uploads/images/<?php echo $section4_client_image_value; ?>" alt=""></div>
                                <div class="test_name"><?php echo $section4_client_name_value; ?></div>
                                <div class="test_title"><?php echo $section4_client_role_value; ?></div>
                                <div class="test_quote">"</div>
                                <p><?php echo $section4_client_view_value; ?></p>
                            </div>
                        </div>
                        <?php
                }
                        ?>
                        
                    </div>

                </div>
            </div>

            <!-- Testimonials Slider Navigation -->

            <div class="test_slider_nav test_slider_nav_left d-flex flex-column justify-content-center align-items-center trans_200">
                <i class="fas fa-chevron-left trans_200"></i>
            </div>

            <div class="test_slider_nav test_slider_nav_right d-flex flex-column justify-content-center align-items-center trans_200">
                <i class="fas fa-chevron-right trans_200"></i>
            </div>

        </div>
    </div>
</div>

<!-- Services -->

<div class="services prlx_parent">
    <!-- artist: https://unsplash.com/@nativemello -->
    
    
            <?php
                            
                $query5_value = "SELECT * FROM home_section5 WHERE section5_id = 1";
                $query_select5_value = mysqli_query($connection , $query5_value);
                $section5_rows = mysqli_fetch_assoc($query_select5_value);
                    
                    $section5_bg_image_value = $section5_rows['section5_bg_image'];
                    $section5_button_text_value = $section5_rows['section5_button_text'];
                    $section5_button_link_value = $section5_rows['section5_button_link'];
                    
                ?>
    
    
    <div class="services_background prlx" style="background-image:url(uploads/images/<?php echo $section5_bg_image_value; ?>)"></div>
    <div class="services_shapes"><img src="uploads/services_shapes.png" alt=""></div>

    <div class="container">
        <div class="row">

           
               <?php
                            
                $query5_value = "SELECT * FROM home_section5";
                $query_select5_value = mysqli_query($connection , $query5_value);
                while($section5_rows = mysqli_fetch_assoc($query_select5_value)){
                    
                    $section5_title_value = $section5_rows['section5_title'];
                    $section5_description_value = $section5_rows['section5_description'];
                    $section5_icon_value = $section5_rows['section5_icon'];
                    
                ?>
           
           
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="uploads/images/<?php echo $section5_icon_value; ?>" alt="">
                </div>
                <h3><?php echo $section5_title_value; ?></h3>
                <p><?php echo $section5_description_value; ?></p>
            </div>
            <?php 
                }
            ?>
        </div>

        <div class="row">
            <div class="col text-center">
                <div class="button services_button">
                    <a href="<?php echo $section5_button_link_value; ?>" class="d-flex flex-row align-items-center justify-content-center" target="_blank">
							<?php echo $section5_button_text_value; ?><img src="uploads/arrow_right.svg" alt="">
						</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contact -->



<!-- Footer -->
<?php include "includes/home_footer.php"; ?>
