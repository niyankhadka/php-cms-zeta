<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
                               <h3 class="title-5 m-b-35">Category Section</h3>
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Category</h3>
                                        </div>
                                        <hr>
                                        
                                        <?php
                                        
                                            add_cat();
                                        
                                        ?>
                                        
                                        <form action="" method="post">
    
                                            <div class="form-group has-success">
                                                <label for="" class="control-label mb-1">Category Name</label>
                                                <input id="" name="cat_title" type="text" class="form-control cc-name valid" >
                                                
                                            </div>
                                            
                                            <div>
                                                <button id="" type="submit" class="btn btn-lg btn-info btn-block" name="add">
                                                    <i class="fa fa-upload fa-lg"></i>&nbsp;
                                                    <span id="">Add</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>    
                          
                          <?php
                        if(isset($_GET['update'])){
                            $update_cat_id = $_GET['update'];
                            
                        
                        ?>
                           
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Category</h3>
                                        </div>
                                        <hr>
                                        
                                        <?php
                                        
                                        if(isset($_POST['update'])){
                                            $cat_title = $_POST['cat_title'];
                                            if($cat_title == "" || empty($cat_title)){
                                    echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
											<span class='badge badge-pill badge-danger'>Failed</span>
											Failed to Update Category.
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>";
                                    }else{
                    
                                    $query = "UPDATE categories SET cat_title = '{$cat_title}' WHERE cat_id = {$update_cat_id}";
                                    $update_category_query = mysqli_query($connection , $query);
                                    echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>
											<span class='badge badge-pill badge-success'>Success</span>
											Category Updated Successfully. 
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>";
                    
                                    confirmQuery($update_category_query);
                                        }
                                    }
                                        
                            
                                        ?>
                                        <form action="" method="post">
    
                                            <div class="form-group has-success">
                                               
                                               <?php
                                                $query = "SELECT * FROM categories WHERE cat_id = $update_cat_id ";
                                                $select_query = mysqli_query($connection , $query);
                                                $row = mysqli_fetch_array($select_query);
                                                $cat_title_value = $row['cat_title'];
                            
                                                ?>
                                               
                                                <label for="" class="control-label mb-1">Category Name</label>
                                                <input id="" name="cat_title" type="text" class="form-control cc-name valid" value="<?php echo $cat_title_value; ?>" >
                                                
                                            </div>
                                            
                                            <div>
                                                <button id="" type="submit" name="update" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-upload fa-lg"></i>&nbsp;
                                                    <span id="">Update</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                
                            </div>
                            
                                        
                            
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                               
                                <h3 class="title-5 m-b-35">All Categories</h3>
                                <div class="table-data__tool">
                                    
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                               
                                                <th>S.N.</th>
                                                <th>Category Name</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            
                                        <?php
                                
                                            showAll_cat();
                                            
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <?php
                            
                            delete_cat();
                            
                        ?>
                        
