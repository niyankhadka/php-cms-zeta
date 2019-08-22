<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Footer Copy Rights</div>
                <div class="card-body">
                
                    <?php
                    
        if(isset($_POST['update'])){
            
            $footer_copyright_text = $_POST['footer_copyright_text'];
            $post_date = date('d-m-y');

        $query = "UPDATE footer_copyright SET 
        
                    footer_copyright_text = '{$footer_copyright_text}' ,
                    footer_copyright_date = now()  
                    
                    WHERE footer_copyright_id = 1";
        $select_query = mysqli_query($connection , $query);
        confirmQuery($select_query);
       
        }

?>


                        <form action="" method="post">
                <?php
                            
                $query1_value = "SELECT * FROM footer_copyright WHERE footer_copyright_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $footer_copyright_text_value = $rows['footer_copyright_text'];
                    $footer_copyright_date = $rows['footer_copyright_date'];
                    
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Copy Rights Text</label>
                                <input name="footer_copyright_text" type="text" class="form-control" value="<?php echo $footer_copyright_text_value; ?>">
                            </div>
                            
                            <div class="card-title">
                                <h3 class="text-center title-2">Last Updated Date: <?php echo $footer_copyright_date; ?></h3>
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
