
                          <h3 class="title-5 m-b-35">Comments</h3>
                           <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
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
                                                   <th>User</th>
                                                   <th>Comment</th>
                                                   <th>Status</th>
                                                   <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           <?php
               
                    $query = "SELECT * FROM comments ORDER BY comment_id DESC";
                    $select_comments = mysqli_query($connection , $query);
                        while($comments_rows = mysqli_fetch_assoc($select_comments)){
                            $comment_id = $comments_rows['comment_id'];
                            $comment_post_id = $comments_rows['comment_post_id'];
                            $comment_user = $comments_rows['comment_user'];
                            $comment_user_role = $comments_rows['comment_user_role'];
                            $comment_email = $comments_rows['comment_email'];
                            $comment_subject = $comments_rows['comment_subject'];
                            $comment_message = $comments_rows['comment_message'];
                            $comment_status = $comments_rows['comment_status'];
                            $comment_year = $comments_rows['comment_year'];
                            $comment_month = $comments_rows['comment_month'];
                            $comment_day = $comments_rows['comment_day'];
                            ?>
                                           
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><div class="table-data__info">
                                                            <h6><?php echo $comment_user; ?></h6>
                                                          
                                                                <p style="font-size:12px; margin-left:-7px"><?php echo $comment_user_role; ?></p>
<!--
                                                                <p style="font-size:12px; margin-left:0px"><?php echo "(User)"; ?></p>
                                                                <p style="font-size:12px; margin-left:-12px"><?php echo "(Member)"; ?></p>
-->
                                                            
                                                        </div>
                                                </td>
                                                <td class="desc"><?php echo $comment_message; ?></td>
                                                <td>
                                                   <div class="rs-select2--trans rs-select2--sm status--process">
                                                            <select class="js-select2" name="property" onchange="window.location.href=this.value;">
                                                                <?php if($comment_status == 0){ ?>
                                                        <option value="" selected="selected" disabled>Disapproved</option>
                                                        <option value="comments.php?update_cmt_status_id=<?php echo $comment_id; ?>&status=1&post=<?php echo $comment_post_id; ?>">Approve</option>
                                                                <?php } else{ ?>
                                                        <option value="" selected="selected" disabled>Approved</option>
                                                        <option value="comments.php?update_cmt_status_id=<?php echo $comment_id; ?>&status=0&post=<?php echo $comment_post_id; ?>">Disapprove</option>
                                                                <?php } ?>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                    </div>
                                                </td>
                                                <td class="text-uppercase"><?php echo $comment_day . " " . $comment_month . " " . $comment_year; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <a style="margin-right:5px" href="comments.php?delete=<?php echo $comment_id; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete Comment">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                        <a href="../post.php?p_id=<?php echo $comment_post_id; ?>" target="_blank">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="View Commented Post">
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
                                
                                if(isset($_GET['delete'])){
                                    $delete_comment_id = $_GET['delete'];
                                    delete_comment($delete_comment_id , $comment_post_id , $comment_status);
                                }
                                
                                ?>
                               
                            </div>
                        </div>