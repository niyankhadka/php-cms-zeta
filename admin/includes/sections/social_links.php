<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Social Links</div>
                <div class="card-body">
                
                    <?php
                    
        if(isset($_POST['update'])){
            
            $pinterest = $_POST['pinterest'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];
            $dribble = $_POST['dribble'];
            $behance = $_POST['behance'];
            $linkedin = $_POST['linkedin'];
            $post_date = date('d-m-y');

        $query = "UPDATE social_links SET 
        
                    pinterest = '{$pinterest}' ,
                    facebook = '{$facebook}' ,
                    twitter = '{$twitter}' ,
                    dribble = '{$dribble}' ,
                    behance = '{$behance}' ,
                    linkedin = '{$linkedin}' ,
                    social_links_date = now()  
                    
                    WHERE social_links_id = 1";
        $select_query = mysqli_query($connection , $query);
        confirmQuery($select_query);
       
        }

?>


                        <form action="" method="post">
                <?php
                            
                $query1_value = "SELECT * FROM social_links WHERE social_links_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $pinterest_value = $rows['pinterest'];
                    $facebook_value = $rows['facebook'];
                    $twitter_value = $rows['twitter'];
                    $dribble_value = $rows['dribble'];
                    $behance_value = $rows['behance'];
                    $linkedin_value = $rows['linkedin'];
                    $social_links_date = $rows['social_links_date'];
                    
                ?>
                            <div class="form-group">
                                <label class="control-label mb-1">Pinterest Link</label>
                                <input name="pinterest" type="text" class="form-control" value="<?php echo $pinterest_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Facebook Link</label>
                                <input name="facebook" type="text" class="form-control" value="<?php echo $facebook_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Twitter Link</label>
                                <input name="twitter" type="text" class="form-control" value="<?php echo $twitter_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Dribble Link</label>
                                <input name="dribble" type="text" class="form-control" value="<?php echo $dribble_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Behance Link</label>
                                <input name="behance" type="text" class="form-control" value="<?php echo $behance_value; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label mb-1">Linkedin Link</label>
                                <input name="linkedin" type="text" class="form-control" value="<?php echo $linkedin_value; ?>">
                            </div>
                            
                            <div class="card-title">
                                <h3 class="text-center title-2">Last Updated Date: <?php echo $social_links_date; ?></h3>
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
