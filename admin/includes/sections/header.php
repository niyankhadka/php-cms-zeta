<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Top Header</div>
                <div class="card-body">
                
                    <?php
                    
        if(isset($_POST['update'])){
            
            $title_text = $_POST['title_text'];
            $bg_title_text = $_POST['bg_title_text'];
            $subtitle_text = $_POST['subtitle_text'];
            $post_date = date('d-m-y');

        $query = "UPDATE top_header SET 
        
                    title_text = '{$title_text}' ,
                    bg_title_text = '{$bg_title_text}' ,
                    subtitle_text = '{$subtitle_text}' ,
                    top_header_date = now()  
                    
                    WHERE top_header_id = 1";
        $select_query = mysqli_query($connection , $query);
        confirmQuery($select_query);
       
        }

?>


                        <form action="" method="post">
                <?php
                            
                $query1_value = "SELECT * FROM top_header WHERE top_header_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $title_text_value = $rows['title_text'];
                    $bg_title_text_value = $rows['bg_title_text'];
                    $subtitle_text_value = $rows['subtitle_text'];
                    $top_header_date = $rows['top_header_date'];
                    
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Top Header Title</label>
                                <input name="title_text" type="text" class="form-control" value="<?php echo $title_text_value; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-1">Top Header Bg-Title </label>
                                <input name="bg_title_text" type="text" class="form-control" value="<?php echo $bg_title_text_value; ?>">
                            </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Top Header Subtitle</label>
                                <input name="subtitle_text" type="text" class="form-control cc-name valid" value="<?php echo $subtitle_text_value; ?>">
                                <span class="help-block field-validation-valid"></span>
                            </div>
                            
                            <div class="card-title">
                                <h3 class="text-center title-2">Last Updated Date: <?php echo $top_header_date; ?></h3>
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
