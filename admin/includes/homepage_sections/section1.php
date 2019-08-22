<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Section 1</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Home Banner</h3>
                    </div>
                    <hr>

                    <?php
                    
        if(isset($_POST['update_section1'])){
            
            $section1_slider1_title = $_POST['section1_slider1_title'];
            $section1_slider2_title = $_POST['section1_slider2_title'];
            $section1_slider3_title = $_POST['section1_slider3_title'];
            $section1_slider1_subtitle = $_POST['section1_slider1_subtitle'];
            $section1_slider2_subtitle = $_POST['section1_slider2_subtitle'];
            $section1_slider3_subtitle = $_POST['section1_slider3_subtitle'];
            $section1_slider1_description = $_POST['section1_slider1_description'];
            $section1_slider2_description = $_POST['section1_slider2_description'];
            $section1_slider3_description = $_POST['section1_slider3_description'];
            $section1_slider1_button_text = $_POST['section1_slider1_button_text'];
            $section1_slider2_button_text = $_POST['section1_slider2_button_text'];
            $section1_slider3_button_text = $_POST['section1_slider3_button_text'];
            $section1_slider1_button_link = $_POST['section1_slider1_button_link'];
            $section1_slider2_button_link = $_POST['section1_slider2_button_link'];
            $section1_slider3_button_link = $_POST['section1_slider3_button_link'];
            $post_date = date('d-m-y');
           
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["slider1"]["name"]);
$upload_slider1_name = basename($_FILES["slider1"]["name"]);
$uploadOk1 = 1;
//$uploadMessage11 = "";
$uploadMessage12 = "";
$uploadMessage13 = "";
$uploadMessage14 = "";
$uploadMessage15 = "";
$uploadMessage16 = "";
$uploadMessage17 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//
//    $check = getimagesize($_FILES["slider1"]["tmp_name"]);
//    if($check !== false) {
//       $uploadOk3 = 1;
//    } else {
//        $uploadMessage11 = "File is not an image. ";
//        $uploadOk1 = 0;
//    }

// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage12 = "Sorry, file already exists. ";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["slider1"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["slider1"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["slider1"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_slider1_name)){
                        $query_slider1_image_value = "SELECT * FROM home_section1 WHERE section1_id = 1";
                        $select_slider1_image_value = mysqli_query($connection , $query_slider1_image_value);
                        while($row = mysqli_fetch_array($select_slider1_image_value)){
                            $upload_slider1_name = $row['section1_image'];
                        }
                    }

        $query = "UPDATE home_section1 SET 
        
                    section1_title = '{$section1_slider1_title}' ,
                    section1_subtitle = '{$section1_slider1_subtitle}' ,
                    section1_description = '{$section1_slider1_description}' ,
                    section1_image = '{$upload_slider1_name}' ,
                    section1_button_text = '{$section1_slider1_button_text}' ,
                    section1_button_link = '{$section1_slider1_button_link}' ,
                    section1_date = now()  
                    
                    WHERE section1_id = 1";
        $section1_slider1_query = mysqli_query($connection , $query);
        confirmQuery($section1_slider1_query);
        
            
$target_file = $target_dir . basename($_FILES["slider2"]["name"]);
$upload_slider2_name = basename($_FILES["slider2"]["name"]);
$uploadOk2 = 1;
//$uploadMessage21 = "";
$uploadMessage22 = "";
$uploadMessage23 = "";
$uploadMessage24 = "";
$uploadMessage25 = "";
$uploadMessage26 = "";
$uploadMessage27 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

//    $check = getimagesize($_FILES["slider2"]["tmp_name"]);
//    if($check !== false) {
//       $uploadOk2 = 1;
//    } else {
//        $uploadMessage21 = "File is not an image. ";
//        $uploadOk2 = 0;
//    }

// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage22 = "Sorry, file already exists. ";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["slider2"]["size"] > 1000000) {
    $uploadMessage23 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadMessage24 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
    $uploadMessage25 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["slider2"]["tmp_name"], $target_file)) {
        $uploadMessage26 = "The file ". basename( $_FILES["slider2"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage27 = "Sorry, there was an error uploading your file.";
    }
}

            
            if(empty($upload_slider2_name)){
                        $query_slider2_image_value = "SELECT * FROM home_section1 WHERE section1_id = 2";
                        $select_slider2_image_value = mysqli_query($connection , $query_slider2_image_value);
                        while($row = mysqli_fetch_array($select_slider2_image_value)){
                            $upload_slider2_name = $row['section1_image'];
                        }
                    }
            
        $query = "UPDATE home_section1 SET 
        
                    section1_title = '{$section1_slider2_title}' ,
                    section1_subtitle = '{$section1_slider2_subtitle}' ,
                    section1_description = '{$section1_slider2_description}' ,
                    section1_image = '{$upload_slider2_name}' ,
                    section1_button_text = '{$section1_slider2_button_text}' ,
                    section1_button_link = '{$section1_slider2_button_link}' ,
                    section1_date = now()  
                    
                    WHERE section1_id = 2";
        $section1_slider2_query = mysqli_query($connection , $query);
        confirmQuery($section1_slider2_query);
            
            
            
$target_file = $target_dir . basename($_FILES["slider3"]["name"]);
$upload_slider3_name = basename($_FILES["slider3"]["name"]);
$uploadOk3 = 1;
//$uploadMessage31 = "";
$uploadMessage32 = "";
$uploadMessage33 = "";
$uploadMessage34 = "";
$uploadMessage35 = "";
$uploadMessage36 = "";
$uploadMessage37 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

//    $check = getimagesize($_FILES["slider3"]["tmp_name"]);
//    if($check !== false) {
//       $uploadOk3 = 1;
//    } else {
//        $uploadMessage31 = "File is not an image. ";
//        $uploadOk3 = 0;
//    }

// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage32 = "Sorry, file already exists. ";
    $uploadOk3 = 0;
}
// Check file size
if ($_FILES["slider3"]["size"] > 1000000) {
    $uploadMessage33 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk3 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadMessage34 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
    $uploadOk3 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk3 == 0) {
    $uploadMessage35 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["slider3"]["tmp_name"], $target_file)) {
        $uploadMessage36 = "The file ". basename( $_FILES["slider3"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage37 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_slider3_name)){
                        $query_slider3_image_value = "SELECT * FROM home_section1 WHERE section1_id = 3";
                        $select_slider3_image_value = mysqli_query($connection , $query_slider3_image_value);
                        while($row = mysqli_fetch_array($select_slider3_image_value)){
                            $upload_slider3_name = $row['section1_image'];
                        }
                    }

        $query = "UPDATE home_section1 SET 
        
                    section1_title = '{$section1_slider3_title}' ,
                    section1_subtitle = '{$section1_slider3_subtitle}' ,
                    section1_description = '{$section1_slider3_description}' ,
                    section1_image = '{$upload_slider3_name}' ,
                    section1_button_text = '{$section1_slider3_button_text}' ,
                    section1_button_link = '{$section1_slider3_button_link}' ,
                    section1_date = now()  
                    
                    WHERE section1_id = 3";
        $section1_slider3_query = mysqli_query($connection , $query);
        confirmQuery($section1_slider3_query);
            
            
        }

?>


                        <div class="card-title">
                            <h3 class="text-center title-2">Slider 1</h3>
                        </div>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                <?php
                            
                $query1_value = "SELECT * FROM home_section1 WHERE section1_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $section1_rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $section1_slider1_title_value = $section1_rows['section1_title'];
                    $section1_slider1_subtitle_value = $section1_rows['section1_subtitle'];
                    $section1_slider1_description_value = $section1_rows['section1_description'];
                    
                    $upload_slider1_name_value = $section1_rows['section1_image'];
                    $section1_slider1_button_text_value = $section1_rows['section1_button_text'];
                    $section1_slider1_button_link_value = $section1_rows['section1_button_link'];
                
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Header Title 1</label>
                                <input name="section1_slider1_title" type="text" class="form-control" value="<?php echo $section1_slider1_title_value; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Header Sub-Title 1</label>
                                <input name="section1_slider1_subtitle" type="text" class="form-control" value="<?php echo $section1_slider1_subtitle_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Header Description 1</label>
                                <input name="section1_slider1_description" type="text" class="form-control cc-name valid" value="<?php echo $section1_slider1_description_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Banner Image 1</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $upload_slider1_name_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="slider1" class="form-control-file">
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
                                        <label class="control-label mb-1">Button Text 1</label>
                                        <input name="section1_slider1_button_text" class="form-control cc-exp" value="<?php echo $section1_slider1_button_text_value; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Button Link 1</label>
                                    <div class="input-group">
                                        <input name="section1_slider1_button_link" class="form-control cc-cvc" value="<?php echo $section1_slider1_button_link_value; ?>">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-title">
                                <h3 class="text-center title-2">Slider 2</h3>
                            </div>
                            <hr>

                           
                <?php
                $query2_value = "SELECT * FROM home_section1 WHERE section1_id = 2";
                $query_select2_value = mysqli_query($connection , $query2_value);
                $section1_rows = mysqli_fetch_assoc($query_select2_value);
                    
                    $section2_title_value = $section1_rows['section1_title'];
                    $section2_subtitle_value = $section1_rows['section1_subtitle'];
                    $section2_description_value = substr($section1_rows['section1_description'], 0 , 100);
                    
                    $section2_image_value = $section1_rows['section1_image'];
                    $section2_button_text_value = $section1_rows['section1_button_text'];
                    $section2_button_link_value = $section1_rows['section1_button_link'];
                
                ?>
                           
                           
                            <div class="form-group">
                                <label class="control-label mb-1">Header Title 2</label>
                                <input name="section1_slider2_title" type="text" class="form-control" value="<?php echo $section2_title_value; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Header Sub-Title 2</label>
                                <input name="section1_slider2_subtitle" type="text" class="form-control" value="<?php echo $section2_subtitle_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Header Description 2</label>
                                <input name="section1_slider2_description" type="text" class="form-control cc-name valid" value="<?php echo $section2_description_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Banner Image 2</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section2_image_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="slider2" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage21)) echo $uploadMessage21;
                                        if(isset($uploadMessage22)) echo $uploadMessage22;
                                        if(isset($uploadMessage23)) echo $uploadMessage23;
                                        if(isset($uploadMessage24)) echo $uploadMessage24;
                                        if(isset($uploadMessage25)) echo $uploadMessage25;
                                        if(isset($uploadMessage26)) echo $uploadMessage26;
                                        if(isset($uploadMessage27)) echo $uploadMessage27;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Button Text 2</label>
                                        <input name="section1_slider2_button_text" class="form-control cc-exp" value="<?php echo $section2_button_text_value; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Button Link 2</label>
                                    <div class="input-group">
                                        <input name="section1_slider2_button_link" class="form-control cc-cvc" value="<?php echo $section2_button_link_value; ?>">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-title">
                                <h3 class="text-center title-2">Slider 3</h3>
                            </div>
                            <hr>

                <?php
                $query3_value = "SELECT * FROM home_section1 WHERE section1_id = 3";
                $query_select3_value = mysqli_query($connection , $query3_value);
                $section1_rows = mysqli_fetch_assoc($query_select3_value);
                    
                    $section3_title_value = $section1_rows['section1_title'];
                    $section3_subtitle_value = $section1_rows['section1_subtitle'];
                    $section3_description_value = substr($section1_rows['section1_description'], 0 , 100);
                    
                    $section3_image_value = $section1_rows['section1_image'];
                    $section3_button_text_value = $section1_rows['section1_button_text'];
                    $section3_button_link_value = $section1_rows['section1_button_link'];
                
                ?>
                           
                           
                            <div class="form-group">
                                <label class="control-label mb-1">Header Title 3</label>
                                <input name="section1_slider3_title" type="text" class="form-control" value="<?php echo $section3_title_value; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Header Sub-Title 3</label>
                                <input name="section1_slider3_subtitle" type="text" class="form-control" value="<?php echo $section3_subtitle_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Header Description 3</label>
                                <input name="section1_slider3_description" type="text" class="form-control cc-name valid" value="<?php echo $section3_description_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Banner Image 3</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section3_image_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="slider3" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage31)) echo $uploadMessage31;
                                        if(isset($uploadMessage32)) echo $uploadMessage32;
                                        if(isset($uploadMessage33)) echo $uploadMessage33;
                                        if(isset($uploadMessage34)) echo $uploadMessage34;
                                        if(isset($uploadMessage35)) echo $uploadMessage35;
                                        if(isset($uploadMessage36)) echo $uploadMessage36;
                                        if(isset($uploadMessage37)) echo $uploadMessage37;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Button Text 3</label>
                                        <input name="section1_slider3_button_text" class="form-control cc-exp" value="<?php echo $section3_button_text_value; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Button Link 3</label>
                                    <div class="input-group">
                                        <input name="section1_slider3_button_link" class="form-control cc-cvc" value="<?php echo $section3_button_link_value; ?>">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button id="" type="submit" name="update_section1" class="btn btn-lg btn-info btn-block">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
