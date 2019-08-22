<?php

function confirmQuery($result){
    global $connection;
    if(!$result){
        die("Query Failed. " . mysqli_error($connection));
    }
}



//* Example of usage:
// * 
// * <code>
// * require_once 'create_thumbnail.php';
// * 
// * $success = createThumbnail(__DIR__.DIRECTORY_SEPARATOR.'image.jpg', __DIR__.DIRECTORY_SEPARATOR.'image_thumb.jpg', 60, 60, array(255,255,255)); // creates a thumbnail called image_thumb.jpg with 60x60 in size and with a white background
// * 
// * echo $success ? 'thumbnail was created' : 'something went wrong';
// * </code>
// * 
// * @author Pedro Pinheiro (https://github.com/pedroppinheiro).
// * @param string $filepath The image's complete path. Example: C:\xampp\htdocs\project\image.jpg
// * @param string $thumbpath The path to create the thumbnail + name of the thumbnail. Example: C:\xampp\htdocs\project\image_thumbnail.jpg
// * @param int $thumbnail_width Width of the thumbnail. Only integers allowed.
// * @param int $thumbnail_height Height of the thumbnail. Only integers allowed.
// * @param int[int] | 'transparent' An array containing the values of red, green, and blue to be used as the image's background color, or use the string 'transparent' to define the background as transparent (only applicable to png images). This parameter is optional, so if no value is provided, then the default background will be black.
// * @return boolean Returns true if the thumbnail was created successfully, false otherwise.
// */

function createThumbnail($filepath, $thumbpath, $thumbnail_width, $thumbnail_height, $background=false) {
    global $connection;
    list($original_width, $original_height, $original_type) = getimagesize($filepath);
    if ($original_width > $original_height) {
        $new_width = $thumbnail_width;
        $new_height = intval($original_height * $new_width / $original_width);
    } else {
        $new_height = $thumbnail_height;
        $new_width = intval($original_width * $new_height / $original_height);
    }
    $dest_x = intval(($thumbnail_width - $new_width) / 2);
    $dest_y = intval(($thumbnail_height - $new_height) / 2);
    if ($original_type === 1) {
        $imgt = "ImageGIF";
        $imgcreatefrom = "ImageCreateFromGIF";
    } else if ($original_type === 2) {
        $imgt = "ImageJPEG";
        $imgcreatefrom = "ImageCreateFromJPEG";
    } else if ($original_type === 3) {
        $imgt = "ImagePNG";
        $imgcreatefrom = "ImageCreateFromPNG";
    } else {
        return false;
    }
    $old_image = $imgcreatefrom($filepath);
    $new_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height); // creates new image, but with a black background
    // figuring out the color for the background
    if(is_array($background) && count($background) === 3) {
      list($red, $green, $blue) = $background;
      $color = imagecolorallocate($new_image, $red, $green, $blue);
      imagefill($new_image, 0, 0, $color);
    // apply transparent background only if is a png image
    } else if($background === 'transparent' && $original_type === 3) {
      imagesavealpha($new_image, TRUE);
      $color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
      imagefill($new_image, 0, 0, $color);
    }
    imagecopyresampled($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
    $imgt($new_image, $thumbpath);
    return file_exists($thumbpath);
}



function add_cat(){
    global $connection;
                            if(isset($_POST['add'])){
                                    $cat_title = $_POST['cat_title'];
                
                                    if($cat_title == "" || empty($cat_title)){
                                    echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											Failed to Add Category.
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>";
                                    }else{
                    
                                    $query = "INSERT INTO categories(cat_title) VALUE('{$cat_title}')";
                                    $create_category_query = mysqli_query($connection , $query);
                                    echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>
											<span class='badge badge-pill badge-success'>Success</span>
											Category Added Successfully. 
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>";
                    
                                    confirmQuery($create_category_query);
                                        }
                                    }
}



function showAll_cat(){
    global $connection;
    
    $query = "SELECT * FROM categories ORDER BY cat_title";
                                $select_categories = mysqli_query($connection , $query);
                                confirmQuery($select_categories);
                                $count = 1;
                                while($cat_rows = mysqli_fetch_assoc($select_categories)){
                                $cat_id = $cat_rows['cat_id'];
                                $cat_title = $cat_rows['cat_title'];
                                
                                ?>
                                
                                            <tr class="tr-shadow">
                                                
                                                <td><?php echo $count; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $cat_title; ?></span>
                                                </td>
                                                
                                                <td>
                                                   
                                                   <div class="table-data-feature">
                                                        <a style="margin-right:5px" href="posts.php?source=categories&update=<?php echo $cat_id; ?>">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                              
                                                        <a href="posts.php?source=categories&delete=<?php echo $cat_id; ?>">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php 
                                            $count++;    }
                                            
    
}

function delete_cat(){
    global $connection;
    
    if(isset($_GET['delete'])){
                           $del_cat_id = $_GET['delete'];
                            $query = "DELETE FROM categories WHERE cat_id = {$del_cat_id}";
                            $detele_query = mysqli_query($connection , $query);
                            header("Location: posts.php?source=categories");
                        }
    
}

function delete_post(){
    global $connection;
    if(isset($_GET['delete'])){
                            $del_post_id = $_GET['delete'];
                            $query = "DELETE FROM posts WHERE post_id = {$del_post_id}";
                            $detele_query = mysqli_query($connection , $query);
                            header("Location: posts.php");
                        }
}

function comment_status($comment_id , $status , $post_id){
    global $connection;
    
                            $query = "UPDATE comments SET comment_status = '{$status}' WHERE comment_id = '$comment_id'";
                            $comment_query = mysqli_query($connection , $query);
                            
                        if($status == 1){
                            $post_comment_query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                            $post_comment_query .= "WHERE post_id = $post_id ";
                            $update_comment_count = mysqli_query($connection , $post_comment_query);  
                            }else{
                            $post_comment_query = "UPDATE posts SET post_comment_count = post_comment_count - 1 ";
                            $post_comment_query .= "WHERE post_id = $post_id ";
                            $update_comment_count = mysqli_query($connection , $post_comment_query);
                            }
                            header ("Location: comments.php");
                        
}

function delete_comment($comment_id , $post_id , $status){
    global $connection;
                            
                            $query = "DELETE FROM comments WHERE comment_id = {$comment_id}";
                            $detele_query = mysqli_query($connection , $query);
                            if($status == 1){
                            $post_comment_query = "UPDATE posts SET post_comment_count = post_comment_count - 1 ";
                            $post_comment_query .= "WHERE post_id = $post_id ";
                            $update_comment_count = mysqli_query($connection , $post_comment_query);
                            }
                            header("Location: comments.php");
                        
}

function post_status($post_id , $status){
    global $connection;
    
                            $query = "UPDATE posts SET post_status = '{$status}' WHERE post_id = '$post_id'";
                            $post_query = mysqli_query($connection , $query);
                            header ("Location: posts.php");
                        
}

function demo(){
    global $connection;
    echo "Demo function";
}



?>