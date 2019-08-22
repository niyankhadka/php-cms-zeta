<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Footer Widget</div>
                <div class="card-body">
                  
                    <?php
                    
        if(isset($_POST['update'])){
            
            $title = $_POST['title'];
            $bg_title = $_POST['bg_title'];
            $description = $_POST['description'];
            $button_text = $_POST['button_text'];
            $button_link = $_POST['button_link'];
            $post_date = date('d-m-y');
           
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["bg_image"]["name"]);
$upload_bg_image_name = basename($_FILES["bg_image"]["name"]);
$uploadOk1 = 1;
//$uploadMessage11 = "";
$uploadMessage12 = "";
$uploadMessage13 = "";
$uploadMessage14 = "";
$uploadMessage15 = "";
$uploadMessage16 = "";
$uploadMessage17 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage12 = "Sorry, file already exists. ";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["bg_image"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["bg_image"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["bg_image"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
            
           if(empty($upload_bg_image_name)){
                        $query_bg_image_value = "SELECT * FROM footer_widget WHERE footer_widget_id = 1";
                        $select_bg_image_value = mysqli_query($connection , $query_bg_image_value);
                        while($row = mysqli_fetch_array($select_bg_image_value)){
                            $upload_bg_image_name = $row['footer_widget_bg_image'];
                        }
                    }

        $query = "UPDATE footer_widget SET 
        
                    footer_widget_title = '{$title}' ,
                    footer_widget_bg_title = '{$bg_title}' ,
                    footer_widget_description = '{$description}' ,
                    footer_widget_bg_image = '{$upload_bg_image_name}' ,
                    footer_widget_button_text = '{$button_text}' ,
                    footer_widget_button_link = '{$button_link}' ,
                    footer_widget_date = now()  
                    
                    WHERE footer_widget_id = 1";
        $select1_query = mysqli_query($connection , $query);
        confirmQuery($select1_query);
        
        }

?>

                        <form action="" method="post" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <label class="control-label mb-1">Title</label>
                                <input name="title" type="text" class="form-control" value="<?php echo $title_value; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">BG -Title</label>
                                <input name="bg_title" type="text" class="form-control" value="<?php echo $bg_title_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Description</label>
                                <input name="description" type="text" class="form-control cc-name valid" value="<?php echo $description_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload BG Image</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $bg_image_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="bg_image" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
                                        if(isset($uploadMessage12)) echo $uploadMessage12;
                                        if(isset($uploadMessage13)) echo $uploadMessage13;
                                        if(isset($uploadMessage14)) echo $uploadMessage14;
                                        if(isset($uploadMessage15)) echo $uploadMessage15;
                                        if(isset($uploadMessage16)) echo $uploadMessage16;
                                        if(isset($uploadMessage17)) echo $uploadMessage17;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Button Text</label>
                                        <input name="button_text" class="form-control cc-exp" value="<?php echo $button_text_value; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Button Link</label>
                                    <div class="input-group">
                                        <input name="button_link" class="form-control cc-cvc" value="<?php echo $button_link_value; ?>">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="" type="submit" name="update" class="btn btn-lg btn-info btn-block">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
