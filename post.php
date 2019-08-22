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
						<h1>Blog</h1>
						<span>read the news</span>
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
    
                if(isset($_GET['p_id'])){
                    $current_post_id = $_GET['p_id'];
                }
                
    
                $query = "SELECT * FROM posts WHERE post_id = $current_post_id";
                $select_posts_query = mysqli_query($connection , $query);
                $posts_rows = mysqli_fetch_assoc($select_posts_query);
                    
                    $post_title = $posts_rows['post_title'];
                    $post_author = $posts_rows['post_author'];
                   
                    $post_image = $posts_rows['post_image'];
                    $post_content = $posts_rows['post_content'];
                    $post_comment_count = $posts_rows['post_comment_count'];
                    $post_category_id = $posts_rows['post_category_id'];
                   
                    
                    $post_year = $posts_rows['post_year'];
                    $post_month = $posts_rows['post_month'];
                    $post_day = $posts_rows['post_day'];
                    
                   
                        
                ?>
						<!-- Blog Post -->
						<article class="blog_post">
							<div class="blog_post_image">
								<div class="blog_post_image_background" style="background-image:url(uploads/images/<?php echo $post_image?>)"></div>
							</div>
							<div class="date_box d-flex flex-column align-items-center justify-content-center">
								<span><?php echo $post_day . " " . $post_month . " " . $post_year; ?></span>
							</div>
							<h3 class="blog_post_title"><?php echo $post_title; ?></h3>
							<div class="blog_post_meta">
                                <span class="blog_post_author"><a href="#"><?php echo $post_author; ?></a></span>
								
								<?php
                                    
                                    $query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                                    $select_categories = mysqli_query($connection , $query);
                                    
                                     $cat_rows = mysqli_fetch_assoc($select_categories);
                                     $cat_id = $cat_rows['cat_id'];
                                     $cat_title = $cat_rows['cat_title'];
                                    
                                ?>
                                <span class="blog_post_category"><a href="category.php?category=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a></span>
								<span class="blog_post_comments"><?php echo $post_comment_count; ?> comments</span>
							</div>
							<div class="blog_post_text">
								<p><?php echo $post_content; ?></p>
							</div>

							<!-- Blog Post Comments -->

									<?php
                                    
                                    $query = "SELECT * FROM comments WHERE comment_status = 1 AND comment_post_id = $current_post_id";
                                    $select_comments = mysqli_query($connection , $query);
                                    $check_rows = mysqli_num_rows($select_comments);
                                    if($check_rows > 0){
                                        
                                    ?>
				            <div class="blog_post_comments">
				                <div class="blog_post_subtitle comments_subtitle">comments</div>
								
								<!-- Comments -->
								<div class="blog_post_comments_container">

									<!-- Comment -->
									
									<?php
                                        while($comments_rows = mysqli_fetch_assoc($select_comments)){
                                            $comment_id = $comments_rows['comment_id'];
                                            $comment_post_id = $comments_rows['comment_post_id'];
                                            $comment_user = $comments_rows['comment_user'];
                                            $comment_email = $comments_rows['comment_email'];
                                            $comment_subject = $comments_rows['comment_subject'];
                                            $comment_message = $comments_rows['comment_message'];
                                            $comment_status = $comments_rows['comment_status'];
                                            $comment_year = $comments_rows['comment_year'];
                                            $comment_month = $comments_rows['comment_month'];
                                            $comment_day = $comments_rows['comment_day'];
                                    
                                    ?>
									
									<div class="blog_post_comment d-flex flex-row">
										<div class="blog_post_comment_image"><img src="uploads/blog_post_comment_1.jpg" alt=""></div>
										<div class="blog_post_comment_content">
											<div class="blog_post_comment_meta">
												<div class="blog_post_comment_name"><a href="#"><?php echo $comment_user; ?></a></div>
												<div class="blog_post_comment_date"><?php echo $comment_day . ' ' . $comment_month . '. ' . $comment_year?></div>
											</div>
											<div class="blog_post_comment_text">
												<p><?php echo $comment_message; ?></p>
											</div>
<!--
											<a href="blog_post.html" class="blog_post_link">reply
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
												<polygon id="arrow_poly_1" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
												</svg>
											</a>
-->
										</div>
									</div>
									<?php
                                           }
                                    ?>
								</div>
                            </div>
								<?php
                                    }else{        
                                ?>
                            <div class="blog_post_comments">
				                <div class="blog_post_subtitle comments_subtitle">Write Comment</div>
							</div>
                            <?php
                                    }
                            ?>
							
							<?php
                            
                            if(isset($_POST['submit'])){
                                $comment_name = $_POST['comment_name'];
                                $comment_email = $_POST['comment_email'];
                                $comment_subject = $_POST['comment_subject'];
                                $comment_message = $_POST['comment_message'];
                                $comment_year = date('Y');
                                $comment_month = date('M');
                                $comment_day = date('d');
                                
                                $query = "INSERT INTO comments(
                                            comment_post_id , 
                                            comment_user , 
                                            comment_user_role , 
                                            comment_email , 
                                            comment_subject , 
                                            comment_message , 
                                            comment_status , 
                                            comment_year , 
                                            comment_month , 
                                            comment_day
                                            )";
                                $query .= "VALUES(
                                            $current_post_id , 
                                            '$comment_name' , 
                                            'subscriber' , 
                                            '$comment_email' , 
                                            '$comment_subject' , 
                                            '$comment_message' ,
                                            1 , 
                                            $comment_year , 
                                            '$comment_month' , 
                                            $comment_day
                                            )";
                                
                                $create_comment_query = mysqli_query($connection , $query);
                                if(!$create_comment_query){
                                    echo "Query Failed." . mysqli_error($connection);
                                }
                                
                                $post_comment_query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                                $post_comment_query .= "WHERE post_id = $current_post_id ";
                                $update_comment_count = mysqli_query($connection , $post_comment_query);
                                if(!$update_comment_count){
                                    echo "Query Failed." . mysqli_error($connection);
                                }
                                
                            }
                            
                            ?>
							
							
							<!-- Reply -->
							<div class="blog_post_reply">
								<form id="reply_form" action="" method="post">
									<div>
										<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Name" required="required" name="comment_name">
										<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="E-mail" required="required" name="comment_email">
										<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Subject" required="required" name="comment_subject">
										<textarea id="reply_form_message" class="text_field reply_form_message" placeholder="Message" rows="4" name="comment_message"></textarea>
									</div>
									<div>
										<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit" name="submit">
											send<img src="images/arrow_right.svg" alt="">
										</button>
									</div>

								</form>
							</div>
							
						</article>

					</div>
				</div>
				
				<!-- Sidebar -->
				<?php include "includes/sidebar.php"; ?>

			</div>
		</div>
	</div>

	<!-- Contact -->

<?php include "includes/pages_footer.php"; ?>