<div class="col-lg-4">
					<div class="blog_sidebar">
						
						<!-- Search -->
						<div class="sidebar_section">
							<div class="sidebar_search">
								<form action="search.php" method="post">
									<div id="search_form" class="search_form">
										<input id="blog_search" type="search" placeholder="enter keywords" data-error="Valid keywords required." name="search">
										<button id="search_submit" type="submit" class="search_submit_btn trans_300" value="Submit" name="submit">
											<img src="uploads/search.png" alt="">
										</button>
									</div>
								</form>
							</div>
						</div>
						
						<!-- Recent Posts -->
						<div class="sidebar_section">
							<div class="sidebar_recent">
								<div class="sidebar_title">recent posts</div>
								
								<?php
                $query_recent = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_id DESC limit 3";
                $select_recent_posts_query = mysqli_query($connection , $query_recent);
                $check_recent_rows = mysqli_num_rows($select_recent_posts_query);
                if($check_recent_rows > 0){
                while($posts_recent_rows = mysqli_fetch_assoc($select_recent_posts_query)){
                    $post_id = $posts_recent_rows['post_id'];
                    $post_title = $posts_recent_rows['post_title'];
                   
                    $post_image = $posts_recent_rows['post_image'];
                    $post_status = $posts_recent_rows['post_status'];
                    
                    $post_year = $posts_recent_rows['post_year'];
                    $post_month = $posts_recent_rows['post_month'];
                    $post_day = $posts_recent_rows['post_day'];
                        
                ?>

								<!-- Recent Post -->
								<div class="recent_post d-flex flex-row justify-content-start">
									<div class="recent_post_image">
										<a href="post.php?p_id=<?php echo $post_id; ?>"><img src="uploads/thumbs/sidebar/<?php echo $post_image; ?>" alt="" style="height: 80px; width: 80px;"></a>
									</div>
									<div class="recent_post_content">
										<h4 class="recent_post_title"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h4>
										<span class="recent_post_date"><?php echo $post_month . " " . $post_day . ", " . $post_year; ?> </span>
									</div>
								</div>
								<?php 
                                    }
                            }else{
                                ?>
                                <div class="recent_post d-flex flex-row justify-content-start">
									<div class="recent_post_content">
										<h4 class="recent_post_title">No post found.</h4>
									</div>
								</div>
                        <?php
                        }
                        ?>
							</div>
						</div>

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_categories">
								<div class="sidebar_title">categories</div>
								
								<ul>
								
								<?php
                                $query = "SELECT * FROM categories";
                                $select_query = mysqli_query($connection , $query);
                                    $check_cat_rows = mysqli_num_rows($select_query);
                                    if($check_cat_rows > 0){
                                        $query_post = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_id DESC limit 3";
                                        $select_posts_query = mysqli_query($connection , $query_post);
                                        $check_post_rows = mysqli_num_rows($select_posts_query);
                                        if($check_post_rows > 0){
                                while($row = mysqli_fetch_array($select_query)){
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                                ?>
								
									<li><a href="category.php?category=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a></li>
									
									<?php
                                }
                                        }else{
                                            ?>
                                        <div class="recent_post_content">
                                            <h4 class="recent_post_title">Post doesn't exist to assign category.</h4>
                                        </div>
                                            <?php
                                        }
                                    }else{
                                    ?>
                                    
                                    <div class="recent_post_content">
										<h4 class="recent_post_title">No category Found.</h4>
									</div>
                                   
                                    <?php
                                    }
                                    ?>
									
								</ul>

							</div>
						</div>

						<!-- Tabs -->
						<div class="sidebar_section">
							<div class="sidebar_tabs">

								<!-- Tabs Nav -->
								<div class="tabs_container">
									<ul class="tabs">
										<li class="tab active" data-active-tab="tab_1"><span>popular</span></li>
										<li class="tab" data-active-tab="tab_2"><span>comments</span></li>
									</ul>
								</div>
								
								<!-- Tab Containers -->
								<div id="tab_1" class="tab_container active">

									<!-- Popular -->
									<div class="sidebar_popular">
                                        
                                        <?php
                                        
                                        $query_pop = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_comment_count DESC limit 3";
                                        $query_pop_post = mysqli_query($connection , $query_pop);
                                        $check_pop_post_rows = mysqli_num_rows($query_pop_post);
                                        if($check_pop_post_rows > 0){
                                            while($row = mysqli_fetch_assoc($query_pop_post)){
                                                $post_id = $row['post_id'];
                                                $post_title = $row['post_title'];
                                                $post_image = $row['post_image'];
                                                $post_year = $row['post_year'];
                                                $post_month = $row['post_month'];
                                                $post_day = $row['post_day'];
                                        
                                        ?>

										<!-- Popular Post -->
										<div class="popular_post d-flex flex-row justify-content-start">
											<div class="popular_post_image">
												<a href="post.php?p_id=<?php echo $post_id; ?>"><img src="uploads/thumbs/sidebar/<?php echo $post_image; ?>" alt="" style="height: 80px; width: 80px;"></a>
											</div>
											<div class="popular_post_content">
												<h4 class="popular_post_title"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h4>
												<span class="popular_post_date"><?php echo $post_month . " " . $post_day . "," . $post_year; ?></span>
											</div>
										</div>
										
										<?php
                                            }
                                        }else{
                                        ?>
                                           
                                            <div class="recent_post_content">
                                                <h4 class="recent_post_title">No Post Found.</h4>
                                            </div>
                                            
                                        <?php
                                        }
                                        ?>

									</div>
								</div>

								<div id="tab_2" class="tab_container">
									
									<!-- Comments -->
									<div class="sidebar_comments">
										
										<?php
                                        
                                        $query_comment = "SELECT * FROM comments HAVING comment_status = 1 ORDER BY comment_id DESC LIMIT 3";
                                        $select_query = mysqli_query($connection , $query_comment);
                                        $check_rows = mysqli_num_rows($select_query);
                                        if($check_rows > 0){
                                            while($rows = mysqli_fetch_assoc($select_query)){
                                                $comment_message = $rows['comment_message'];
                                                $comment_user = $rows['comment_user'];
                                                $comment_year = $rows['comment_year'];
                                                $comment_month = $rows['comment_month'];
                                                $comment_day = $rows['comment_day'];
                                        ?>
										
										<!-- Comment -->
										<div class="comment d-flex flex-row justify-content-start">
											<div class="comment_icon">
												<i class="far fa-comment"></i>
											</div>
											<div class="comment_content">
												<p class="comment_text"><?php echo $comment_message; ?></p>
												<div class="comment_meta">
													<span>by <?php echo $comment_user; ?></span>
													<span><?php echo $comment_month . " " . $comment_day . " " . $comment_year; ?></span>
												</div>
											</div>
										</div>

										<?php
                                            }
                                        }else{
                                            ?>
                                            <div class="recent_post_content">
                                                <h4 class="recent_post_title">No Comment Found.</h4>
                                            </div>
                                            <?php
                                        }
                                            
                                        ?>

										
									</div>
								</div>

							</div>
						</div>

						
						<!-- Gallery -->

						<div class="sidebar_section">
							<div class="sidebar_gallery">
								<div class="sidebar_title">gallery</div>

								<ul class="gallery_items">

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="uploads/gallery_1_large.jpg">
											<img src="uploads/gallery_1.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="uploads/gallery_2_large.jpg">
											<img src="uploads/gallery_2.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="uploads/gallery_3_large.jpg">
											<img src="uploads/gallery_3.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="uploads/gallery_4_large.jpg">
											<img src="uploads/gallery_4.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="uploads/gallery_5_large.jpg">
											<img src="uploads/gallery_5.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="uploads/gallery_6_large.jpg">
											<img src="uploads/gallery_6.jpg" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Quote -->

						<div class="sidebar_section">
							<div class="sidebar_quote">
								<div class="sidebar_title">quote of the day</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur neque non.</p>
							</div>
						</div>

						<!-- Slider -->

						<div class="sidebar_section">
							<div class="sidebar_slider_container">
								<div class="sidebar_title">slider</div>
								<div class="owl-carousel owl-theme sidebar_slider">

									<!-- Slider Item -->
									<div class="owl-item sidebar_slider_item">
										<div class="sidebar_slider_item_background" style="background-image:url(uploads/sidebar_slider_1.jpg)"></div>
									</div>

									<!-- Slider Item -->
									<div class="owl-item sidebar_slider_item">
										<div class="sidebar_slider_item_background" style="background-image:url(uploads/sidebar_slider_2.jpg)"></div>
									</div>

									<!-- Slider Item -->
									<div class="owl-item sidebar_slider_item">
										<div class="sidebar_slider_item_background" style="background-image:url(uploads/sidebar_slider_3.jpg)"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>