<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Section 2</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Home Feature</h3>
                    </div>
                    <hr>

                    <?php
                    
        if(isset($_POST['update_section2'])){
            
            $section2_title1 = $_POST['section2_title1'];
            $section2_title2 = $_POST['section2_title2'];
            $section2_title3 = $_POST['section2_title3'];
            $section2_description1 = $_POST['section2_description1'];
            $section2_description2 = $_POST['section2_description2'];
            $section2_description3 = $_POST['section2_description3'];
            
            $post_date = date('d-m-y');
           
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["icon1"]["name"]);
$upload_icon1_name = basename($_FILES["icon1"]["name"]);
$uploadOk1 = 1;
$uploadMessage11 = "";
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
if ($_FILES["icon1"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["icon1"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["icon1"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_icon1_name)){
                        $query_icon1_name_value = "SELECT * FROM home_section2 WHERE section2_id = 1";
                        $select_icon1_name_value = mysqli_query($connection , $query_icon1_name_value);
                        while($row = mysqli_fetch_array($select_icon1_name_value)){
                            $upload_icon1_name = $row['section2_icon'];
                        }
                    }

        $query1 = "UPDATE home_section2 SET 
        
                    section2_title = '{$section2_title1}' ,
                    section2_description = '{$section2_description1}' ,
                    section2_icon = '{$upload_icon1_name}' ,
                    section2_date = now()  
                    
                    WHERE section2_id = 1";
        $section2_query1 = mysqli_query($connection , $query1);
        confirmQuery($section2_query1);
        
            
$target_file = $target_dir . basename($_FILES["icon2"]["name"]);
$upload_icon2_name = basename($_FILES["icon2"]["name"]);
$uploadOk2 = 1;
$uploadMessage21 = "";
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
if ($_FILES["icon2"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["icon2"]["tmp_name"], $target_file)) {
        $uploadMessage26 = "The file ". basename( $_FILES["icon2"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage27 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_icon2_name)){
                        $query_icon2_name_value = "SELECT * FROM home_section2 WHERE section2_id = 2";
                        $select_icon2_name_value = mysqli_query($connection , $query_icon2_name_value);
                        while($row = mysqli_fetch_array($select_icon2_name_value)){
                            $upload_icon2_name = $row['section2_icon'];
                        }
                    }

        $query2 = "UPDATE home_section2 SET 
        
                    section2_title = '{$section2_title2}' ,
                    section2_description = '{$section2_description2}' ,
                    section2_icon = '{$upload_icon2_name}' ,
                    section2_date = now()  
                    
                    WHERE section2_id = 2";
        $section2_query2 = mysqli_query($connection , $query2);
        confirmQuery($section2_query2);
            
            
            
$target_file = $target_dir . basename($_FILES["icon3"]["name"]);
$upload_icon3_name = basename($_FILES["icon3"]["name"]);
$uploadOk3 = 1;
$uploadMessage31 = "";
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
if ($_FILES["icon3"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["icon3"]["tmp_name"], $target_file)) {
        $uploadMessage36 = "The file ". basename( $_FILES["icon3"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage37 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_icon3_name)){
                        $query_icon3_name_value = "SELECT * FROM home_section2 WHERE section2_id = 3";
                        $select_icon3_name_value = mysqli_query($connection , $query_icon3_name_value);
                        while($row = mysqli_fetch_array($select_icon3_name_value)){
                            $upload_icon3_name = $row['section2_icon'];
                        }
                    }

        $query3 = "UPDATE home_section2 SET 
        
                    section2_title = '{$section2_title3}' ,
                    section2_description = '{$section2_description3}' ,
                    section2_icon = '{$upload_icon3_name}' ,
                    section2_date = now()  
                    
                    WHERE section2_id = 3";
        $section2_query3 = mysqli_query($connection , $query3);
        confirmQuery($section2_query3);
            
            
        }

?>


                        <div class="card-title">
                            <h3 class="text-center title-2">Feature 1</h3>
                        </div>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                <?php
                            
                $query1_value = "SELECT * FROM home_section2 WHERE section2_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $section2_rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $section2_title1_value = $section2_rows['section2_title'];
                    $section2_description1_value = $section2_rows['section2_description'];
                    
                    $upload_icon1_name_value = $section2_rows['section2_icon'];
                
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Feature Title 1</label>
                                <input name="section2_title1" type="text" class="form-control" value="<?php echo $section2_title1_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Feature Description 1</label>
                                <input name="section2_description1" type="text" class="form-control cc-name valid" value="<?php echo $section2_description1_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Feature Icon 1</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $upload_icon1_name_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="icon1" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
                                        if(isset($uploadMessage11)) echo $uploadMessage11;
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
                                <h3 class="text-center title-2">Feature 2</h3>
                            </div>
                            <hr>

                           
                <?php
                            
                $query2_value = "SELECT * FROM home_section2 WHERE section2_id = 2";
                $query_select2_value = mysqli_query($connection , $query2_value);
                $section2_rows = mysqli_fetch_assoc($query_select2_value);
                    
                    $section2_title2_value = $section2_rows['section2_title'];
                    $section2_description2_value = $section2_rows['section2_description'];
                    
                    $upload_icon2_name_value = $section2_rows['section2_icon'];
                
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Feature Title 2</label>
                                <input name="section2_title2" type="text" class="form-control" value="<?php echo $section2_title2_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Feature Description 2</label>
                                <input name="section2_description2" type="text" class="form-control cc-name valid" value="<?php echo $section2_description2_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Feature Icon 2</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $upload_icon2_name_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="icon2" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
                                        if(isset($uploadMessage21)) echo $uploadMessage21;
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
                                <h3 class="text-center title-2">Feature 3</h3>
                            </div>
                            <hr>

                <?php
                            
                $query3_value = "SELECT * FROM home_section2 WHERE section2_id = 3";
                $query_select3_value = mysqli_query($connection , $query3_value);
                $section2_rows = mysqli_fetch_assoc($query_select3_value);
                    
                    $section2_title3_value = $section2_rows['section2_title'];
                    $section2_description3_value = $section2_rows['section2_description'];
                    
                    $upload_icon3_name_value = $section2_rows['section2_icon'];
                
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Feature Title 3</label>
                                <input name="section2_title3" type="text" class="form-control" value="<?php echo $section2_title3_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Feature Description 3</label>
                                <input name="section2_description3" type="text" class="form-control cc-name valid" value="<?php echo $section2_description3_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Upload Feature Icon 3</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $upload_icon3_name_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="icon3" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
                                        if(isset($uploadMessage31)) echo $uploadMessage31;
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

                            <div>
                                <button id="" type="submit" name="update_section2" class="btn btn-lg btn-info btn-block">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
