<div class="contact prlx_parent">
    <!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
    
    <?php
                            
                $query1_value = "SELECT * FROM footer_widget WHERE footer_widget_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $title_value = $rows['footer_widget_title'];
                    $bg_title_value = $rows['footer_widget_bg_title'];
                    $description_value = $rows['footer_widget_description'];
                    
                    $bg_image_value = $rows['footer_widget_bg_image'];
                    $button_text_value = $rows['footer_widget_button_text'];
                    $button_link_value = $rows['footer_widget_button_link'];
                
                ?>
    
    
    <div class="contact_background prlx" style="background-image: url(uploads/images/<?php echo $bg_image_value; ?>);"></div>
    <div class="contact_shapes"><img src="uploads/contact_shape.png" alt=""></div>
    <div class="container">

        <div class="row">
           <div class="col-lg-6 offset-lg-3 text-center section_title contact_title">
                <h2><?php echo $title_value; ?><span><?php echo $bg_title_value; ?></span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center contact_text">
                <p><?php echo $description_value; ?></p>
                <div class="button contact_button">
                    <a href="<?php echo $button_link_value; ?>" class="d-flex flex-row align-items-center justify-content-center"><?php echo $button_text_value; ?><img src="uploads/arrow_right.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
    

    <footer class="footer">
		<div class="container">
			<div class="row footer_content d-flex flex-sm-row flex-column align-items-center">
				<div class="col-sm-6 cr text-sm-left text-center">
				
				<?php
                            
                $query1_value = "SELECT * FROM footer_copyright WHERE footer_copyright_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $footer_copyright_text_value = $rows['footer_copyright_text'];
                    
                ?>
				
					<p><?php echo $footer_copyright_text_value; ?> | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https:facebook.com/nirajan.khadka.10" target="_blank">Ni-Yan Khadka</a>
</p>
				</div>
				<div class="col-sm-6 text-sm-right text-center">
					<div class="footer_social_container">
					<ul class="footer_social">
						<?php include "includes/sociallinks.php" ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>