<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Section 3</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Home About</h3>
                    </div>
                    <hr>

                    <?php
                    
        if(isset($_POST['update_section3'])){
            
            $section3_title = $_POST['section3_title'];
            $section3_description = $_POST['section3_description'];
            $section3_bg_text = $_POST['section3_bg_text'];
            
            $section3_pb_text1 = $_POST['section3_pb_text1'];
            $section3_pb_text2 = $_POST['section3_pb_text2'];
            $section3_pb_text3 = $_POST['section3_pb_text3'];
            $section3_pb_text4 = $_POST['section3_pb_text4'];
            
            $section3_pb_value1 = $_POST['section3_pb_value1'];
            $section3_pb_value2 = $_POST['section3_pb_value2'];
            $section3_pb_value3 = $_POST['section3_pb_value3'];
            $section3_pb_value4 = $_POST['section3_pb_value4'];
            
            $post_date = date('d-m-y');
           
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["signature"]["name"]);
$upload_signature_name = basename($_FILES["signature"]["name"]);
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
if ($_FILES["signature"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["signature"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["signature"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_signature_name)){
                        $query_signature_image_value = "SELECT * FROM home_section3 WHERE section3_id = 1";
                        $select_signature_image_value = mysqli_query($connection , $query_signature_image_value);
                        while($row = mysqli_fetch_array($select_signature_image_value)){
                            $upload_signature_name = $row['section3_signature'];
                        }
                    }
            
$target_file = $target_dir . basename($_FILES["bg_image"]["name"]);
$upload_bg_image_name = basename($_FILES["bg_image"]["name"]);
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
if ($_FILES["bg_image"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["bg_image"]["tmp_name"], $target_file)) {
        $uploadMessage26 = "The file ". basename( $_FILES["bg_image"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage27 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_bg_image_name)){
                        $query_bg_image_value = "SELECT * FROM home_section3 WHERE section3_id = 1";
                        $select_bg_image_value = mysqli_query($connection , $query_bg_image_value);
                        while($row = mysqli_fetch_array($select_bg_image_value)){
                            $upload_bg_image_name = $row['section3_bg_image'];
                        }
                    }


        $query1 = "UPDATE home_section3 SET 
        
                    section3_title = '{$section3_title}' ,
                    section3_description = '{$section3_description}' ,
                    section3_signature = '{$upload_signature_name}' ,
                    section3_bg_text = '{$section3_bg_text}' ,
                    section3_bg_image = '{$upload_bg_image_name}' ,
                    section3_pb_text1 = '{$section3_pb_text1}' ,
                    section3_pb_value1 = '{$section3_pb_value1}' ,
                    section3_pb_text2 = '{$section3_pb_text2}' ,
                    section3_pb_value2 = '{$section3_pb_value2}' ,
                    section3_pb_text3 = '{$section3_pb_text3}' ,
                    section3_pb_value3 = '{$section3_pb_value3}' ,
                    section3_pb_text4 = '{$section3_pb_text3}' ,
                    section3_pb_value4 = '{$section3_pb_value3}' ,
                    section3_date = now()  
                    
                    WHERE section3_id = 1";
        $section3_query1 = mysqli_query($connection , $query1);
        confirmQuery($section3_query1);
            

            
        }

?>


                        <form action="" method="post" enctype="multipart/form-data">
                <?php
                            
                $query1_value = "SELECT * FROM home_section3 WHERE section3_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $section3_rows = mysqli_fetch_assoc($query_select1_value);
                    
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
                            <div class="form-group">
                                <label class="control-label mb-1">About Title</label>
                                <input name="section3_title" type="text" class="form-control" value="<?php echo $section3_title_value; ?>">
                            </div>
                            
                            <div class="form-group has-success">
                                <label class="control-label mb-1">About Description</label>
                                <input name="section3_description" type="text" class="form-control cc-name valid" value="<?php echo $section3_description_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Signature</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $upload_signature_name_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="signature" class="form-control-file">
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
                            
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Background Text</label>
                                <input name="section3_bg_text" type="text" class="form-control cc-name valid" value="<?php echo $section3_bg_text_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Background Image</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $upload_bg_image_name_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="bg_image" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
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
                                        <label class="control-label mb-1">Progress Bar Text 1</label>
                                        <input name="section3_pb_text1" class="form-control cc-exp" value="<?php echo $section3_pb_text1; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Progress Bar Value 1</label>
                                    <div class="input-group">
                                        <input name="section3_pb_value1" class="form-control cc-cvc" value="<?php echo $section3_pb_value1; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                       
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Progress Bar Text 2</label>
                                        <input name="section3_pb_text2" class="form-control cc-exp" value="<?php echo $section3_pb_text2; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Progress Bar Value 2</label>
                                    <div class="input-group">
                                        <input name="section3_pb_value2" class="form-control cc-cvc" value="<?php echo $section3_pb_value2; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                     
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Progress Bar Text 3</label>
                                        <input name="section3_pb_text3" class="form-control cc-exp" value="<?php echo $section3_pb_text3; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Progress Bar Value 3</label>
                                    <div class="input-group">
                                        <input name="section3_pb_value3" class="form-control cc-cvc" value="<?php echo $section3_pb_value3; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                           
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Progress Bar Text 4</label>
                                        <input name="section3_pb_text4" class="form-control cc-exp" value="<?php echo $section3_pb_text4; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Progress Bar Value 4</label>
                                    <div class="input-group">
                                        <input name="section3_pb_value4" class="form-control cc-cvc" value="<?php echo $section3_pb_value4; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <button id="" type="submit" name="update_section3" class="btn btn-lg btn-info btn-block">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
