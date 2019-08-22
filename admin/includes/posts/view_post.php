<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">View All Posts</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Bulk Actions</option>
                                                <option value="">Publish</option>
                                                <option value="">Draft</option>
                                                <option value="">Delete</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        
                                        <button class="btn btn-warning">
                                            <i class="fa fa-star"></i>
                                            Apply</button>
<!--
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
-->
                                    </div>
                                    <div class="table-data__tool-right">
                                       <a href="posts.php?source=add_post">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add post</button>
                                        </a>
<!--
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
-->
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                   <th>Author</th>
                                                   <th>Title</th>
                                                   <th>Category</th>
                                                   <th>Status</th>
                                                   <th>Comments</th>
                                                   <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           <?php
               
                    $query = "SELECT * FROM posts ORDER BY post_id DESC";
                    $select_posts = mysqli_query($connection , $query);
                        while($post_rows = mysqli_fetch_assoc($select_posts)){
                            $post_id = $post_rows['post_id'];
                            $post_author = $post_rows['post_author'];
                            $post_title = $post_rows['post_title'];
                            $post_category_id = $post_rows['post_category_id'];
                            $post_status = $post_rows['post_status'];
                            $post_comments_count = $post_rows['post_comment_count'];
                            $post_year = $post_rows['post_year'];
                            $post_month = $post_rows['post_month'];
                            $post_day = $post_rows['post_day'];
                            ?>
                                           
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><?php echo $post_author; ?></td>
                                                <td>
                                                    <span class="title"><?php echo $post_title; ?></span>
                                                </td>
                                                
                                                <?php
                                                    
                                                    $query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                                                    $select_categories = mysqli_query($connection , $query);
                                                    confirmQuery($select_categories);
                                                    $cat_rows = mysqli_fetch_assoc($select_categories);
                                                    $cat_title = $cat_rows['cat_title'];
                            
                                                ?>
                                                
                                                
                                                <td class="desc"><?php echo $cat_title; ?></td>
                                                <td>
                                                    <select class="js-select2" name="property" onchange="window.location.href=this.value;">
                                                        <?php if($post_status == 0){ ?>
                                                            <option value="" selected="selected" disabled>Draft</option>
                                                            <option value="posts.php?source=status&update_post_status_id=<?php echo $post_id; ?>&status=1">Publish</option>
                                                        <?php } else{ ?>
                                                            <option value="" selected="selected" disabled>Published</option>
                                                            <option value="posts.php?source=status&update_post_status_id=<?php echo $post_id; ?>&status=0">Draft</option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </td>
                                                <td><?php echo $post_comments_count; ?></td>
                                                <td class="text-uppercase"><?php echo $post_day . " " . $post_month . " " . $post_year; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <a style="margin-right:5px" href="posts.php?source=edit_post&p_id=<?php echo $post_id; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit Post">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        </a>
                                                        <a style="margin-right:5px" href="posts.php?delete=<?php echo $post_id; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete Post">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                        <a href="../post.php?p_id=<?php echo $post_id; ?>" target="_blank">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Post">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <?php
                                                    }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                                
                                <?php
                                    delete_post();
                                ?>
                                
                            </div>
                        </div>