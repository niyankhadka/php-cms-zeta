<?php

if(isset($_GET['p_id'])){
    $edit_post_id = $_GET['p_id'];
}



if(isset($_POST['update_post'])){
                    $post_title = $_POST['title'];
                    
                    $post_category_id = $_POST['post_category'];
                    $post_author = $_POST['author'];
                    $post_status = $_POST['post_status'];
        
                    $post_tags = $_POST['post_tags'];
                    $post_content = $_POST['post_content'];
    
                    $post_year = date('Y');
                    $post_month = date('M');
                    $post_day = date('d');
    
    
    $target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$upload_image_name = basename($_FILES["image"]["name"]);
$uploadOk1 = 1;
$uploadMessage11 = "";
$uploadMessage12 = "";
$uploadMessage13 = "";
$uploadMessage14 = "";
$uploadMessage15 = "";
$uploadMessage16 = "";
$uploadMessage17 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//
    if(isset($_POST['image'])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
       $uploadOk3 = 1;
    } else {
        $uploadMessage11 = "File is not an image. ";
        $uploadOk1 = 0;
    }
    }

// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage12 = "Sorry, file already exists. ";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 1000000) {
    $uploadMessage13 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadMessage14 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    $uploadMessage15 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        
        $thumb_post_dir = "../uploads/thumbs/post/";
        createThumbnail($target_dir.basename( $_FILES["image"]["name"]) , $thumb_post_dir.basename( $_FILES["image"]["name"]) , 365 , 365 );
        
        $thumb_sidebar_dir = "../uploads/thumbs/sidebar/";
        createThumbnail($target_dir.basename( $_FILES["image"]["name"]) , $thumb_sidebar_dir.basename( $_FILES["image"]["name"]) , 63 , 63 );
        
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
    
                    if(empty($upload_image_name)){
                        $query = "SELECT * FROM posts WHERE post_id = $edit_post_id";
                        $select_image = mysqli_query($connection , $query);
                        while($row = mysqli_fetch_array($select_image)){
                            $upload_image_name = $row['post_image'];
                        }
                    }
    
                    
                    $query = "UPDATE posts SET 
                    post_title = '{$post_title}' ,
                    post_category_id = '{$post_category_id}' ,
                    post_author = '{$post_author}' ,
                    post_status = '{$post_status}' ,
                    post_image = '{$upload_image_name}' ,
                    post_tags = '{$post_tags}' ,
                    
                    post_year = '{$post_year}' ,
                    post_month = '{$post_month}' ,
                    post_day = '{$post_day}' ,
                    
                    post_content = '{$post_content}' 
                    
                    WHERE post_id = {$edit_post_id} ";
                    
                    $update_post = mysqli_query($connection , $query);
                    confirmQuery($update_post);
    
    
                    echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>
											<span class='badge badge-pill badge-success'>Success</span>
											Post Updated Successfully. <a href='../post.php?p_id={$edit_post_id}' target='_blank'>View Post</a> or <a href='posts.php'>Edit More Posts</a>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>";
                }



?>

                            <div class="col-lg-12">
                                <div class="card">
                                   
                            <?php
               
                    $query = "SELECT * FROM posts WHERE post_id = {$edit_post_id}";
                    $select_posts = mysqli_query($connection , $query);
                        $post_rows = mysqli_fetch_assoc($select_posts);
                            $post_author_value = $post_rows['post_author'];
                            $post_title_value = $post_rows['post_title'];
                            $post_category_id_value = $post_rows['post_category_id'];
                            $post_status_value = $post_rows['post_status'];
                            $post_image_value = $post_rows['post_image'];
                            $post_tags_value = $post_rows['post_tags'];
                            $post_content_value = $post_rows['post_content'];
                            $post_year_value = $post_rows['post_year'];
                            $post_month_value = $post_rows['post_month'];
                            $post_day_value = $post_rows['post_day'];
                            ?>
                                   
                                    <div class="card-header">
                                        <label>You are Editing </label> 
                                        <?php 
                                        if(!empty($post_title_value)) 
                                            echo "'<strong>$post_title_value</strong>' Post. Last Updated/Added on: <span class='status--process'>$post_year_value $post_month_value $post_day_value</span>"; 
                                        ?>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Post Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="title" class="form-control" value="<?php echo $post_title_value; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="" class=" form-control-label">Select Categories</label>
                                                </div>
                                                <div class="col col-md-9">
                                                   <select name="post_category" id="" class="form-control-sm form-control">
                                                      
                                                      <?php
                                                       $query_cat = "SELECT * FROM categories WHERE cat_id = $post_category_id_value";
                                                                    $select_category = mysqli_query($connection , $query_cat);
                                                                    confirmQuery($select_category);
                                                                        $cat_row = mysqli_fetch_assoc($select_category);
                                                                        $cat_title1 = $cat_row['cat_title'];
                                                       ?>
                                                     
                                                       <option value="<?php echo $post_category_id_value; ?>"><?php echo $cat_title1; ?> </option>
                                                      
                                                       <?php
                                                            //updating category code starts 
                                                                    $query = "SELECT * FROM categories";
                                                                    $select_categories = mysqli_query($connection , $query);
                                                                    confirmQuery($select_categories);
                                                                        while($cat_rows = mysqli_fetch_assoc($select_categories)){
                                                                            $cat_id = $cat_rows['cat_id'];
                                                                            $cat_title = $cat_rows['cat_title'];
                                                        ?>


                                                                            <option value="<?php echo $cat_id; ?>"><?php echo $cat_title; ?> </option>
                                                            <?php                

                                                                        }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Post Author</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="author" class="form-control" value="<?php echo $post_author_value; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="selectSm" class=" form-control-label">Post Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="post_status" id="SelectLm" class="form-control-sm form-control">
                                                       <?php
                                                        if($post_status_value == 0){
                                                            ?>
                                                        <option value="0">Draft</option>
                                                        <option value="1">Published</option>
                                                        <?php 
                                                            }
                                                        if($post_status_value == 1){
                                                        ?>
                                                        <option value="1">Published</option>
                                                        <option value="0">Draft</option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Post Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                                    <br>
                                                
                                                    <?php 
                                        if(!empty($uploadMessage11)){ echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											$uploadMessage11
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                         if(!empty($uploadMessage12)){ echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											$uploadMessage12
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                         if(!empty($uploadMessage13)){ echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											$uploadMessage13
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                         if(!empty($uploadMessage14)){ echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											$uploadMessage14
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                         if(!empty($uploadMessage15)){ echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											$uploadMessage15
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                         if(!empty($uploadMessage16)){ echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>
											<span class='badge badge-pill badge-success'>Success</span>
											 $uploadMessage16
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                         if(!empty($uploadMessage17)){ echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											$uploadMessage17
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>"; }
                                        
                                        ?>
                                                    
                                                    <img src="../uploads/thumbs/post/<?php echo $post_image_value; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Post Tags</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="post_tags" class="form-control" value="<?php echo $post_tags_value; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Post Content</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="post_content" id="" rows="9" class="form-control"><?php echo $post_content_value; ?></textarea>
                                                </div>
                                            </div>
                                              
                                              <div class="card-footer">
                                       <button id="" type="submit" name="update_post" class="btn btn-lg btn-info ">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                                       <button id="" type="reset" name="reset" class="btn btn-lg btn-danger ">
                                      <i class="fas fa-ban fa-lg"></i>&nbsp;
                                      <span id="">Reset</span>
                                </button>
<!--
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
-->
                                    </div>
                                              
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
