<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Section 4</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Home Testimonials</h3>
                    </div>
                    <hr>

                    <?php
                    
        if(isset($_POST['update_section4'])){
            
            $section4_title = $_POST['section4_title'];
            $section4_bg_title = $_POST['section4_bg_title'];
            
            $client1_name = $_POST['client1_name'];
            $client1_role = $_POST['client1_role'];
            $client1_view = $_POST['client1_view'];
            
            $client2_name = $_POST['client2_name'];
            $client2_role = $_POST['client2_role'];
            $client2_view = $_POST['client2_view'];
            
            $client3_name = $_POST['client3_name'];
            $client3_role = $_POST['client3_role'];
            $client3_view = $_POST['client3_view'];
            
            $post_date = date('d-m-y');
           
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["client1_image"]["name"]);
$upload_client1_image_name = basename($_FILES["client1_image"]["name"]);
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
if ($_FILES["client1_image"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["client1_image"]["tmp_name"], $target_file)) {
        $uploadMessage16 = "The file ". basename( $_FILES["client1_image"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage17 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_client1_image_name)){
                        $query_client1_image_value = "SELECT * FROM home_section4 WHERE section4_id = 1";
                        $select_client1_image_value = mysqli_query($connection , $query_client1_image_value);
                        while($row = mysqli_fetch_array($select_client1_image_value)){
                            $upload_client1_image_name = $row['section4_client_image'];
                        }
                    }
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["client2_image"]["name"]);
$upload_client2_image_name = basename($_FILES["client2_image"]["name"]);
$uploadOk2 = 1;
//$uploadMessage11 = "";
$uploadMessage22 = "";
$uploadMessage23 = "";
$uploadMessage24 = "";
$uploadMessage25 = "";
$uploadMessage26 = "";
$uploadMessage27 = "";
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
    $uploadMessage22 = "Sorry, file already exists. ";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["client2_image"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["client2_image"]["tmp_name"], $target_file)) {
        $uploadMessage26 = "The file ". basename( $_FILES["client2_image"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage27 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_client2_image_name)){
                        $query_client2_image_value = "SELECT * FROM home_section4 WHERE section4_id = 2";
                        $select_client2_image_value = mysqli_query($connection , $query_client2_image_value);
                        while($row = mysqli_fetch_array($select_client2_image_value)){
                            $upload_client2_image_name = $row['section4_client_image'];
                        }
                    }
            
            
$target_dir = "../uploads/images/";
$target_file = $target_dir . basename($_FILES["client3_image"]["name"]);
$upload_client3_image_name = basename($_FILES["client3_image"]["name"]);
$uploadOk3 = 1;
//$uploadMessage11 = "";
$uploadMessage32 = "";
$uploadMessage33 = "";
$uploadMessage34 = "";
$uploadMessage35 = "";
$uploadMessage36 = "";
$uploadMessage37 = "";
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
    $uploadMessage32 = "Sorry, file already exists. ";
    $uploadOk3 = 0;
}
// Check file size
if ($_FILES["client3_image"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["client3_image"]["tmp_name"], $target_file)) {
        $uploadMessage36 = "The file ". basename( $_FILES["client3_image"]["name"]). " has been uploaded.";
    } else {
        $uploadMessage37 = "Sorry, there was an error uploading your file.";
    }
}
            
            if(empty($upload_client3_image_name)){
                        $query_client3_image_value = "SELECT * FROM home_section4 WHERE section4_id = 3";
                        $select_client3_image_value = mysqli_query($connection , $query_client3_image_value);
                        while($row = mysqli_fetch_array($select_client3_image_value)){
                            $upload_client3_image_name = $row['section4_client_image'];
                        }
                    }
            


        $query1 = "UPDATE home_section4 SET 
        
                    section4_title = '{$section4_title}' ,
                    section4_bg_title = '{$section4_bg_title}' ,
                    section4_client_name = '{$client1_name}' ,
                    section4_client_role = '{$client1_role}' ,
                    section4_client_view = '{$client1_view}' ,
                    section4_client_image = '{$upload_client1_image_name}' ,
                    section4_date = now()  
                    
                    WHERE section4_id = 1";
        $section4_query1 = mysqli_query($connection , $query1);
        confirmQuery($section4_query1);
            

            $query2 = "UPDATE home_section4 SET 
        
                  
                    section4_client_name = '{$client2_name}' ,
                    section4_client_role = '{$client2_role}' ,
                    section4_client_view = '{$client2_view}' ,
                    section4_client_image = '{$upload_client2_image_name}' ,
                    section4_date = now()  
                    
                    WHERE section4_id = 2";
        $section4_query2 = mysqli_query($connection , $query2);
        confirmQuery($section4_query2);
            
            
            $query3 = "UPDATE home_section4 SET 
        
                  
                    section4_client_name = '{$client3_name}' ,
                    section4_client_role = '{$client3_role}' ,
                    section4_client_view = '{$client3_view}' ,
                    section4_client_image = '{$upload_client3_image_name}' ,
                    section4_date = now()  
                    
                    WHERE section4_id = 3";
        $section4_query3 = mysqli_query($connection , $query3);
        confirmQuery($section4_query3);
            
        }

?>


                        <form action="" method="post" enctype="multipart/form-data">
                <?php
                            
                $query1_value = "SELECT * FROM home_section4 WHERE section4_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $section4_rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $section4_title_value = $section4_rows['section4_title'];
                    $section4_bg_title_value = $section4_rows['section4_bg_title'];
                            
                    $section4_client1_image_value = $section4_rows['section4_client_image'];     
                    $section4_client1_name_value = $section4_rows['section4_client_name'];
                    $section4_client1_role_value = $section4_rows['section4_client_role'];       
                    $section4_client1_view_value = $section4_rows['section4_client_view'];
                   
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Testimonial Title</label>
                                <input name="section4_title" type="text" class="form-control" value="<?php echo $section4_title_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Testimonial Background Title</label>
                                <input name="section4_bg_title" type="text" class="form-control" value="<?php echo $section4_bg_title_value; ?>">
                            </div>
                            
                            <div class="card-title">
                                <h3 class="text-center title-2">Client 1</h3>
                            </div>
                            <hr>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Client 1 Image</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section4_client1_image_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="client1_image" class="form-control-file">
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
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Client 1 Name</label>
                                <input name="client1_name" type="text" class="form-control" value="<?php echo $section4_client1_name_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Client 1 Role</label>
                                <input name="client1_role" type="text" class="form-control" value="<?php echo $section4_client1_role_value; ?>">
                            </div>
                            
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Client 1 Views</label>
                                <input name="client1_view" type="text" class="form-control cc-name valid" value="<?php echo $section4_client1_view_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            
                            <hr>
                            <div class="card-title">
                                <h3 class="text-center title-2">Client 2</h3>
                            </div>
                            <hr>
                            
                <?php
                            
                $query2_value = "SELECT * FROM home_section4 WHERE section4_id = 2";
                $query_select2_value = mysqli_query($connection , $query2_value);
                $section4_rows = mysqli_fetch_assoc($query_select2_value);
                            
                    $section4_client2_image_value = $section4_rows['section4_client_image'];     
                    $section4_client2_name_value = $section4_rows['section4_client_name'];
                    $section4_client2_role_value = $section4_rows['section4_client_role'];       
                    $section4_client2_view_value = $section4_rows['section4_client_view'];
                   
                ?>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Client 2 Image</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section4_client2_image_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="client2_image" class="form-control-file">
                                    <label class="form-control-label">
                                       <?php 
//                                        if(isset($uploadMessage11)) echo $uploadMessage11;
                                        if(isset($uploadMessage22)) echo $uploadMessage22;
                                        if(isset($uploadMessage23)) echo $uploadMessage23;
                                        if(isset($uploadMessage24)) echo $uploadMessage24;
                                        if(isset($uploadMessage25)) echo $uploadMessage25;
                                        if(isset($uploadMessage26)) echo $uploadMessage26;
                                        if(isset($uploadMessage27)) echo $uploadMessage12;
                                        ?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Client 2 Name</label>
                                <input name="client2_name" type="text" class="form-control" value="<?php echo $section4_client2_name_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Client 2 Role</label>
                                <input name="client2_role" type="text" class="form-control" value="<?php echo $section4_client2_role_value; ?>">
                            </div>
                            
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Client 2 Views</label>
                                <input name="client2_view" type="text" class="form-control cc-name valid" value="<?php echo $section4_client2_view_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            
                            <hr>
                            <div class="card-title">
                                <h3 class="text-center title-2">Client 3</h3>
                            </div>
                            <hr>
                            
                <?php
                            
                $query3_value = "SELECT * FROM home_section4 WHERE section4_id = 3";
                $query_select3_value = mysqli_query($connection , $query3_value);
                $section4_rows = mysqli_fetch_assoc($query_select3_value);
                            
                    $section4_client3_image_value = $section4_rows['section4_client_image'];     
                    $section4_client3_name_value = $section4_rows['section4_client_name'];
                    $section4_client3_role_value = $section4_rows['section4_client_role'];       
                    $section4_client3_view_value = $section4_rows['section4_client_view'];
                   
                ?>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Client 3 Image</label>
                                    <img class="img-responsive" src="../uploads/images/<?php echo $section4_client3_image_value; ?>">
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" name="client3_image" class="form-control-file">
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
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Client 3 Name</label>
                                <input name="client3_name" type="text" class="form-control" value="<?php echo $section4_client3_name_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Client 3 Role</label>
                                <input name="client3_role" type="text" class="form-control" value="<?php echo $section4_client3_role_value; ?>">
                            </div>
                            
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Client 3 Views</label>
                                <input name="client3_view" type="text" class="form-control cc-name valid" value="<?php echo $section4_client3_view_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            
                            <div>
                                <button id="" type="submit" name="update_section4" class="btn btn-lg btn-info btn-block">
                                      <i class="fas fa-upload fa-lg"></i>&nbsp;
                                      <span id="">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
