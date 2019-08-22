<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Section 5</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Home Services</h3>
                    </div>
                    <hr>

                    <?php
                    
        if(isset($_POST['update_section5'])){
            
            $section5_button_text = $_POST['section5_button_text'];
            $section5_button_link = $_POST['section5_button_link'];
            
            $section5_title1 = $_POST['section5_title1'];
            $section5_title2 = $_POST['section5_title2'];
            $section5_title3 = $_POST['section5_title3'];
            $section5_title4 = $_POST['section5_title4'];
            $section5_title5 = $_POST['section5_title5'];
            $section5_title6 = $_POST['section5_title6'];
            
            $section5_description1 = $_POST['section5_description1'];
            $section5_description2 = $_POST['section5_description2'];
            $section5_description3 = $_POST['section5_description3'];
            $section5_description4 = $_POST['section5_description4'];
            $section5_description5 = $_POST['section5_description5'];
            $section5_description6 = $_POST['section5_description6'];
            
            $post_date = date('d-m-y');
           
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_bg_image"]["name"]);
$upload_section5_bg_image_name = basename($_FILES["section5_bg_image"]["name"]);
$uploadOk0 = 1;
//$uploadMessage11 = "";
$uploadMessage02 = "";
$uploadMessage03 = "";
$uploadMessage04 = "";
$uploadMessage05 = "";
$uploadMessage06 = "";
$uploadMessage07 = "";
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
    $uploadMessage02 = "Sorry, file already exists. ";
    $uploadOk0 = 0;
}
// Check file size
if ($_FILES["section5_bg_image"]["size"] > 1000000) {
    $uploadMessage03 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk0 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadMessage04 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
    $uploadOk0 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk0 == 0) {
    $uploadMessage05 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_bg_image"]["tmp_name"], $target_file)) {
        $uploadMessage06 = "The file ". basename( $_FILES["section5_bg_image"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage07 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_bg_image_name)){
                        $query_section5_bg_image_value = "SELECT * FROM home_section5 WHERE section5_id = 1";
                        $select_section5_bg_image_value = mysqli_query($connection , $query_section5_bg_image_value);
                        while($row = mysqli_fetch_array($select_section5_bg_image_value)){
                            $upload_section5_bg_image_name = $row['section5_bg_image'];
                        }
                    }

        $query0 = "UPDATE home_section5 SET 
        
                    section5_bg_image = '{$upload_section5_bg_image_name}' ,
                    section5_button_text = '{$section5_button_text}' ,
                    section5_button_link = '{$section5_button_link}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 1";
        $section5_query0 = mysqli_query($connection , $query0);
        confirmQuery($section5_query0);
            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_icon1"]["name"]);
$upload_section5_icon1_name = basename($_FILES["section5_icon1"]["name"]);
$uploadOk1 = 1;

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
if ($_FILES["section5_icon1"]["size"] > 1000000) {
    $uploadMessage13 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "svg" ) {
    $uploadMessage14 = "Sorry, only JPG, JPEG, PNG , SVG & GIF files are allowed. ";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    $uploadMessage15 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_icon1"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["section5_icon1"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_icon1_name)){
                        $query_section5_icon1_value = "SELECT * FROM home_section5 WHERE section5_id = 1";
                        $select_section5_icon1_value = mysqli_query($connection , $query_section5_icon1_value);
                        while($row = mysqli_fetch_array($select_section5_icon1_value)){
                            $upload_section5_icon1_name = $row['section5_icon'];
                        }
                    }

        $query1 = "UPDATE home_section5 SET 
        
                    section5_title = '{$section5_title1}' ,
                    section5_description = '{$section5_description1}' ,
                    section5_icon = '{$upload_section5_icon1_name}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 1";
        $section5_query1 = mysqli_query($connection , $query1);
        confirmQuery($section5_query1);       

            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_icon2"]["name"]);
$upload_section5_icon2_name = basename($_FILES["section5_icon2"]["name"]);
$uploadOk2 = 1;

$uploadMessage22 = "";
$uploadMessage23 = "";
$uploadMessage24 = "";
$uploadMessage25 = "";
$uploadMessage26 = "";
$uploadMessage27 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage22 = "Sorry, file already exists. ";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["section5_icon2"]["size"] > 1000000) {
    $uploadMessage23 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "svg" ) {
    $uploadMessage24 = "Sorry, only JPG, JPEG, PNG , SVG & GIF files are allowed. ";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
    $uploadMessage25 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_icon2"]["tmp_name"], $target_file)) {
        $uploadMessage26 = "The file ". basename( $_FILES["section5_icon2"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage27 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_icon2_name)){
                        $query_section5_icon2_value = "SELECT * FROM home_section5 WHERE section5_id = 2";
                        $select_section5_icon2_value = mysqli_query($connection , $query_section5_icon2_value);
                        while($row = mysqli_fetch_array($select_section5_icon2_value)){
                            $upload_section5_icon2_name = $row['section5_icon'];
                        }
                    }

        $query2 = "UPDATE home_section5 SET 
        
                    section5_title = '{$section5_title2}' ,
                    section5_description = '{$section5_description2}' ,
                    section5_icon = '{$upload_section5_icon2_name}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 2";
        $section5_query2 = mysqli_query($connection , $query2);
        confirmQuery($section5_query2);
            
            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_icon3"]["name"]);
$upload_section5_icon3_name = basename($_FILES["section5_icon3"]["name"]);
$uploadOk3 = 1;

$uploadMessage32 = "";
$uploadMessage33 = "";
$uploadMessage34 = "";
$uploadMessage35 = "";
$uploadMessage36 = "";
$uploadMessage37 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage32 = "Sorry, file already exists. ";
    $uploadOk3 = 0;
}
// Check file size
if ($_FILES["section5_icon3"]["size"] > 1000000) {
    $uploadMessage33 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk3 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "svg" ) {
    $uploadMessage34 = "Sorry, only JPG, JPEG, PNG , SVG & GIF files are allowed. ";
    $uploadOk3 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk3 == 0) {
    $uploadMessage35 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_icon3"]["tmp_name"], $target_file)) {
        $uploadMessage36 = "The file ". basename( $_FILES["section5_icon3"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage37 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_icon3_name)){
                        $query_section5_icon3_value = "SELECT * FROM home_section5 WHERE section5_id = 3";
                        $select_section5_icon3_value = mysqli_query($connection , $query_section5_icon3_value);
                        while($row = mysqli_fetch_array($select_section5_icon3_value)){
                            $upload_section5_icon3_name = $row['section5_icon'];
                        }
                    }

        $query3 = "UPDATE home_section5 SET 
        
                    section5_title = '{$section5_title3}' ,
                    section5_description = '{$section5_description3}' ,
                    section5_icon = '{$upload_section5_icon3_name}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 3";
        $section5_query3 = mysqli_query($connection , $query3);
        confirmQuery($section5_query3);
            
            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_icon4"]["name"]);
$upload_section5_icon4_name = basename($_FILES["section5_icon4"]["name"]);
$uploadOk4 = 1;

$uploadMessage42 = "";
$uploadMessage43 = "";
$uploadMessage44 = "";
$uploadMessage45 = "";
$uploadMessage46 = "";
$uploadMessage47 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage42 = "Sorry, file already exists. ";
    $uploadOk4 = 0;
}
// Check file size
if ($_FILES["section5_icon4"]["size"] > 1000000) {
    $uploadMessage43 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk4 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "svg" ) {
    $uploadMessage44 = "Sorry, only JPG, JPEG, PNG , SVG & GIF files are allowed. ";
    $uploadOk4 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk4 == 0) {
    $uploadMessage45 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_icon4"]["tmp_name"], $target_file)) {
        $uploadMessage46 = "The file ". basename( $_FILES["section5_icon4"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage47 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_icon4_name)){
                        $query_section5_icon4_value = "SELECT * FROM home_section5 WHERE section5_id = 4";
                        $select_section5_icon4_value = mysqli_query($connection , $query_section5_icon4_value);
                        while($row = mysqli_fetch_array($select_section5_icon4_value)){
                            $upload_section5_icon4_name = $row['section5_icon'];
                        }
                    }

        $query4 = "UPDATE home_section5 SET 
        
                    section5_title = '{$section5_title4}' ,
                    section5_description = '{$section5_description4}' ,
                    section5_icon = '{$upload_section5_icon4_name}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 4";
        $section5_query4 = mysqli_query($connection , $query4);
        confirmQuery($section5_query4);
            
            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_icon5"]["name"]);
$upload_section5_icon5_name = basename($_FILES["section5_icon5"]["name"]);
$uploadOk5 = 1;

$uploadMessage52 = "";
$uploadMessage53 = "";
$uploadMessage54 = "";
$uploadMessage55 = "";
$uploadMessage56 = "";
$uploadMessage57 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage52 = "Sorry, file already exists. ";
    $uploadOk5 = 0;
}
// Check file size
if ($_FILES["section5_icon5"]["size"] > 1000000) {
    $uploadMessage53 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk5 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "svg" ) {
    $uploadMessage54 = "Sorry, only JPG, JPEG, PNG , SVG & GIF files are allowed. ";
    $uploadOk5 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk5 == 0) {
    $uploadMessage55 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_icon5"]["tmp_name"], $target_file)) {
        $uploadMessage56 = "The file ". basename( $_FILES["section5_icon5"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage57 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_icon5_name)){
                        $query_section5_icon5_value = "SELECT * FROM home_section5 WHERE section5_id = 5";
                        $select_section5_icon5_value = mysqli_query($connection , $query_section5_icon5_value);
                        while($row = mysqli_fetch_array($select_section5_icon5_value)){
                            $upload_section5_icon5_name = $row['section5_icon'];
                        }
                    }

        $query5 = "UPDATE home_section5 SET 
        
                    section5_title = '{$section5_title5}' ,
                    section5_description = '{$section5_description5}' ,
                    section5_icon = '{$upload_section5_icon5_name}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 5";
        $section5_query5 = mysqli_query($connection , $query5);
        confirmQuery($section5_query5);
            
            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["section5_icon6"]["name"]);
$upload_section5_icon6_name = basename($_FILES["section5_icon6"]["name"]);
$uploadOk6 = 1;

$uploadMessage62 = "";
$uploadMessage63 = "";
$uploadMessage64 = "";
$uploadMessage65 = "";
$uploadMessage66 = "";
$uploadMessage67 = "";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    $uploadMessage62 = "Sorry, file already exists. ";
    $uploadOk6 = 0;
}
// Check file size
if ($_FILES["section5_icon6"]["size"] > 1000000) {
    $uploadMessage63 = "Sorry, your file is too large. Must be smaller than 1 Mb. ";
    $uploadOk6 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "svg" ) {
    $uploadMessage64 = "Sorry, only JPG, JPEG, PNG , SVG & GIF files are allowed. ";
    $uploadOk6 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk6 == 0) {
    $uploadMessage65 = "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["section5_icon6"]["tmp_name"], $target_file)) {
        $uploadMessage66 = "The file ". basename( $_FILES["section5_icon6"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage67 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_section5_icon6_name)){
                        $query_section5_icon6_value = "SELECT * FROM home_section5 WHERE section5_id = 6";
                        $select_section5_icon6_value = mysqli_query($connection , $query_section5_icon6_value);
                        while($row = mysqli_fetch_array($select_section5_icon6_value)){
                            $upload_section5_icon6_name = $row['section5_icon'];
                        }
                    }

        $query6 = "UPDATE home_section5 SET 
        
                    section5_title = '{$section5_title6}' ,
                    section5_description = '{$section5_description6}' ,
                    section5_icon = '{$upload_section5_icon6_name}' ,
                    section5_date = now()  
                    
                    WHERE section5_id = 6";
        $section5_query6 = mysqli_query($connection , $query6);
        confirmQuery($section5_query6);
            
            
            

            
            
            
        }

?>

                        <form action="" method="post" enctype="multipart/form-data">
                <?php
                            
                $query0_value = "SELECT * FROM home_section5 WHERE section5_id = 1";
                $query_select0_value = mysqli_query($connection , $query0_value);
                $section5_rows = mysqli_fetch_assoc($query_select0_value);
                    
                    $section5_bg_image = $section5_rows['section5_bg_image'];
                    $section5_button_text_value = $section5_rows['section5_button_text'];
                    $section5_button_link_value = $section5_rows['section5_button_link'];
                
                ?>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Background Image</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_bg_image; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_bg_image" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
                                        if(isset($uploadMessage02)) echo $uploadMessage02;
                                        if(isset($uploadMessage03)) echo $uploadMessage03;
                                        if(isset($uploadMessage04)) echo $uploadMessage04;
                                        if(isset($uploadMessage05)) echo $uploadMessage05;
                                        if(isset($uploadMessage06)) echo $uploadMessage06;
                                        if(isset($uploadMessage07)) echo $uploadMessage07;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Button Text</label>
                                        <input name="section5_button_text" class="form-control cc-exp" value="<?php echo $section5_button_text_value; ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-1">Button Link</label>
                                    <div class="input-group">
                                        <input name="section5_button_link" class="form-control cc-cvc" value="<?php echo $section5_button_link_value; ?>">
                                    </div>
                                </div>
                            </div>
                        
                        

                        <div class="card-title">
                            <h3 class="text-center title-2">Service 1</h3>
                        </div>
                        <hr>
                <?php
                            
                $query1_value = "SELECT * FROM home_section5 WHERE section5_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $section5_rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $section5_title1_value = $section5_rows['section5_title'];
                    $section5_description1_value = $section5_rows['section5_description'];
                    $section5_icon1 = $section5_rows['section5_icon'];
                
                ?>
                     
                            <div class="form-group">
                                <label class="control-label mb-1">Service Title 1</label>
                                <input name="section5_title1" type="text" class="form-control" value="<?php echo $section5_title1_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Service Description 1</label>
                                <input name="section5_description1" type="text" class="form-control cc-name valid" value="<?php echo $section5_description1_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Service Icon 1</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_icon1; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_icon1" class="form-control-file">
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
                            <hr>
                            
                            <div class="card-title">
                            <h3 class="text-center title-2">Service 2</h3>
                        </div>
                        <hr>
                <?php
                            
                $query2_value = "SELECT * FROM home_section5 WHERE section5_id = 2";
                $query_select2_value = mysqli_query($connection , $query2_value);
                $section5_rows = mysqli_fetch_assoc($query_select2_value);
                    
                    $section5_title2_value = $section5_rows['section5_title'];
                    $section5_description2_value = $section5_rows['section5_description'];
                    $section5_icon2 = $section5_rows['section5_icon'];
                
                ?>
                     
                            <div class="form-group">
                                <label class="control-label mb-1">Service Title 2</label>
                                <input name="section5_title2" type="text" class="form-control" value="<?php echo $section5_title2_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Service Description 2</label>
                                <input name="section5_description2" type="text" class="form-control cc-name valid" value="<?php echo $section5_description2_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Service Icon 2</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_icon2; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_icon2" class="form-control-file">
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
                            <hr>
                            
                            <div class="card-title">
                            <h3 class="text-center title-2">Service 3</h3>
                        </div>
                        <hr>
                <?php
                            
                $query3_value = "SELECT * FROM home_section5 WHERE section5_id = 3";
                $query_select3_value = mysqli_query($connection , $query3_value);
                $section5_rows = mysqli_fetch_assoc($query_select3_value);
                    
                    $section5_title3_value = $section5_rows['section5_title'];
                    $section5_description3_value = $section5_rows['section5_description'];
                    $section5_icon3 = $section5_rows['section5_icon'];
                
                ?>
                     
                            <div class="form-group">
                                <label class="control-label mb-1">Service Title 3</label>
                                <input name="section5_title3" type="text" class="form-control" value="<?php echo $section5_title3_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Service Description 3</label>
                                <input name="section5_description3" type="text" class="form-control cc-name valid" value="<?php echo $section5_description3_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Service Icon 3</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_icon3; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_icon3" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
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
                            <hr>
                            
                            <div class="card-title">
                            <h3 class="text-center title-2">Service 4</h3>
                        </div>
                        <hr>
                <?php
                            
                $query4_value = "SELECT * FROM home_section5 WHERE section5_id = 4";
                $query_select4_value = mysqli_query($connection , $query4_value);
                $section5_rows = mysqli_fetch_assoc($query_select4_value);
                    
                    $section5_title4_value = $section5_rows['section5_title'];
                    $section5_description4_value = $section5_rows['section5_description'];
                    $section5_icon4 = $section5_rows['section5_icon'];
                
                ?>
                     
                            <div class="form-group">
                                <label class="control-label mb-1">Service Title 4</label>
                                <input name="section5_title4" type="text" class="form-control" value="<?php echo $section5_title4_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Service Description 4</label>
                                <input name="section5_description4" type="text" class="form-control cc-name valid" value="<?php echo $section5_description4_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Service Icon 4</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_icon4; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_icon4" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
                                        if(isset($uploadMessage42)) echo $uploadMessage42;
                                        if(isset($uploadMessage43)) echo $uploadMessage43;
                                        if(isset($uploadMessage44)) echo $uploadMessage44;
                                        if(isset($uploadMessage45)) echo $uploadMessage45;
                                        if(isset($uploadMessage46)) echo $uploadMessage46;
                                        if(isset($uploadMessage47)) echo $uploadMessage47;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="card-title">
                            <h3 class="text-center title-2">Service 5</h3>
                        </div>
                        <hr>
                <?php
                            
                $query5_value = "SELECT * FROM home_section5 WHERE section5_id = 5";
                $query_select5_value = mysqli_query($connection , $query5_value);
                $section5_rows = mysqli_fetch_assoc($query_select5_value);
                    
                    $section5_title5_value = $section5_rows['section5_title'];
                    $section5_description5_value = $section5_rows['section5_description'];
                    $section5_icon5 = $section5_rows['section5_icon'];
                
                ?>
                     
                            <div class="form-group">
                                <label class="control-label mb-1">Service Title 5</label>
                                <input name="section5_title5" type="text" class="form-control" value="<?php echo $section5_title5_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Service Description 5</label>
                                <input name="section5_description5" type="text" class="form-control cc-name valid" value="<?php echo $section5_description5_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Service Icon 5</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_icon5; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_icon5" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
                                        if(isset($uploadMessage52)) echo $uploadMessage52;
                                        if(isset($uploadMessage53)) echo $uploadMessage53;
                                        if(isset($uploadMessage54)) echo $uploadMessage54;
                                        if(isset($uploadMessage55)) echo $uploadMessage55;
                                        if(isset($uploadMessage56)) echo $uploadMessage56;
                                        if(isset($uploadMessage57)) echo $uploadMessage57;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="card-title">
                            <h3 class="text-center title-2">Service 6</h3>
                        </div>
                        <hr>
                <?php
                            
                $query6_value = "SELECT * FROM home_section5 WHERE section5_id = 6";
                $query_select6_value = mysqli_query($connection , $query6_value);
                $section5_rows = mysqli_fetch_assoc($query_select6_value);
                    
                    $section5_title6_value = $section5_rows['section5_title'];
                    $section5_description6_value = $section5_rows['section5_description'];
                    $section5_icon6 = $section5_rows['section5_icon'];
                
                ?>
                     
                            <div class="form-group">
                                <label class="control-label mb-1">Service Title 6</label>
                                <input name="section5_title6" type="text" class="form-control" value="<?php echo $section5_title6_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Service Description 6</label>
                                <input name="section5_description6" type="text" class="form-control cc-name valid" value="<?php echo $section5_description6_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Service Icon 6</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section5_icon6; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="section5_icon6" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
                                        if(isset($uploadMessage62)) echo $uploadMessage62;
                                        if(isset($uploadMessage63)) echo $uploadMessage63;
                                        if(isset($uploadMessage64)) echo $uploadMessage64;
                                        if(isset($uploadMessage65)) echo $uploadMessage65;
                                        if(isset($uploadMessage66)) echo $uploadMessage66;
                                        if(isset($uploadMessage67)) echo $uploadMessage67;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            
                            
                            <div>
                                <button id="" type="submit" name="update_section5" class="btn btn-lg btn-info btn-block">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
