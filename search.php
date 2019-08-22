<?php include "includes/db.php"; ?>
<?php include "includes/pages_header.php"; ?>

	<!-- Page Top -->

	<div class="home prlx_parent">

		<!-- Parallax Background -->
		<div class="home_background prlx" style="background-image:url(uploads/blog_background.jpg)"></div>
		<div class="services_page_shapes" style="background-image:url(uploads/services_page_shapes.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="home_content">
					
					<?php 
                        $search = "";
                        if(isset($_POST['submit'])){
                            
                             $search = $_POST['search'];
                        }  
                        
                        ?>
					
						<h1>Searched for : <strong style='color:#ff4200;'><?php if(!empty($search)){ echo $search;} else{ echo 'No keyword found';} ?></strong></h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="home_social">
			<?php include "includes/sociallinks.php" ?>
		</ul>
	</div>	

	<!-- Blog Content -->

	<div class="blog_content">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					<div class="blog_main_content">
						
						<!-- Blog Post -->
						
						<?php
                if(!empty($search)){
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' OR post_title LIKE '%$search%' OR post_content LIKE '%$search%' OR post_year LIKE '%$search%' OR post_month LIKE '%$search%' OR post_day LIKE '%$search%'";
                $search_query = mysqli_query($connection , $query);
                $check_rows = mysqli_num_rows($search_query);
            if($check_rows > 0){
                while($posts_rows = mysqli_fetch_assoc($search_query)){
                    $post_id = $posts_rows['post_id'];
                    $post_title = $posts_rows['post_title'];
                    $post_author = $posts_rows['post_author'];
                   
                    $post_image = $posts_rows['post_image'];
                    $post_content = substr($posts_rows['post_content'], 0 , 100);
                    $post_status = $posts_rows['post_status'];
                    $post_category_id = $posts_rows['post_category_id'];
                    $post_comment_count = $posts_rows['post_comment_count'];
                    
                    $post_year = $posts_rows['post_year'];
                    $post_month = $posts_rows['post_month'];
                    $post_day = $posts_rows['post_day'];
                    
                    if($post_status === '1'){
                        
                ?>
						
						<article class="blog_post">
							<div class="blog_post_image">
								<a href="post.php?p_id=<?php echo $post_id; ?>"><div class="blog_post_image_background" style="background-image:url(uploads/images/<?php echo $post_image; ?> )"></div></a>
							</div>
							<div class="date_box d-flex flex-column align-items-center justify-content-center">
								<span><?php echo $post_day . " " . $post_month . " " . $post_year; ?></span>
							</div>
							<h3 class="blog_post_title"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h3>
							<div class="blog_post_meta">
								<span class="blog_post_author">by <a href="#"><?php echo $post_author; ?></a></span>
								<?php
                                    
                                    $query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                                    $select_categories = mysqli_query($connection , $query);
                                    
                                     $cat_rows = mysqli_fetch_assoc($select_categories);
                                     $cat_title = $cat_rows['cat_title'];
                                    
                                ?>
                                <span class="blog_post_category"><a href="category.php?category=<?php echo $post_category_id; ?>"><?php echo $cat_title; ?></a></span>
								<span class="blog_post_comments"><?php echo $post_comment_count; ?> comments</span>
							</div>
							<div class="blog_post_text">
								<p><?php echo $post_content; ?></p>
							</div>
							<a href="post.php?p_id=<?php echo $post_id; ?>" class="blog_post_link">read more
								<svg version="1.1" id="Layer_1" x="0px" y="0px"
									 width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
								<polygon id="arrow_poly_1" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "/>
								</svg>
							</a>
						</article>
                        <?php
                    }
                }
            }else{
                echo "<h2 class=''>No post found searched for <strong style='color:#ff4200;'>{$search}</strong>.</h2>";
            }
                }else{
                echo "<h2 class=''>No search keyword typed. Try somethingelse . . .</h2>";
            }
                        ?>

					</div>
                    <?php
                    if(isset($check_rows)){
                    if($check_rows > 0){
                    
                    ?>
					<div class="blog_nav">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>
					<?php }
                    }
                    ?>
				</div>
				
				<!-- Sidebar -->
				<?php include "includes/sidebar.php"; ?>

			</div>
		</div>
	</div>

	<!-- Contact -->
<?php include "includes/pages_footer.php"; ?>