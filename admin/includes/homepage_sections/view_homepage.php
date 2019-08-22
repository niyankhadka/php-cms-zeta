<div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                     
                                       <thead>
                                            <tr>
                                                <th class="text-center">Section 1</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Description</th>
                                                <th class="text-center">Banner Image</th>
                                                <th class="text-center">Button Text</th>
                                                <th class="text-center">Updated Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                       
                                              <?php 
                                                
                                                $query1 = "SELECT * FROM home_section1";
                                                $query_select1 = mysqli_query($connection , $query1);
                                                confirmQuery($query_select1);
                                                $count1 = 1;
                                                while($section1_rows = mysqli_fetch_assoc($query_select1)){
                    
                                                $section1_slider_title = $section1_rows['section1_title'];
                                                $section1_slider_subtitle = $section1_rows['section1_subtitle'];
                                                $section1_slider_description = $section1_rows['section1_description'];
                    
                                                $upload_slider_name = $section1_rows['section1_image'];
                                                $section1_slider_button_text = $section1_rows['section1_button_text'];
                                                $section1_slider_button_link = $section1_rows['section1_button_link'];
                                                $section1_slider_date = $section1_rows['section1_date'];
                                                
                                                
                                    
                                                ?>
                                              
                                              
                                               <td class="text-center">Slider <?php echo $count1 ;?></td>
                                               <td class="text-center"><?php echo $section1_slider_title; ?></td>
                                               <td class="text-center"><?php echo $section1_slider_subtitle; ?></td>
                                                <td class="desc text-center"><?php echo substr($section1_slider_description, 0 , 10); ?>...</td>
                                                <td><a href="../images/uploads/<?php echo $upload_slider_name; ?>" target="_blank"><img src='../images/uploads/<?php echo $upload_slider_name; ?>'></a></td>
                                                <td class="desc text-center"><?php echo $section1_slider_button_text; ?></td>
                                                <td><?php echo $section1_slider_date; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          <a href="homepage.php?source=section1">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                              </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="spacer"></tr>
                                            </tbody>
                                            <?php
                                                $count1++;    } 
                                            ?>
                                            <thead>
                                            <tr>
                                                <th class="text-center">Section 2</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th class="text-center">Updated Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                               <?php 
                                                
                                                $query2 = "SELECT * FROM home_section2";
                                                $query_select2 = mysqli_query($connection , $query2);
                                                confirmQuery($query_select2);
                                                $count2 = 1;
                                                while($section2_rows = mysqli_fetch_assoc($query_select2)){
                    
                                                $section2_title = $section2_rows['section2_title'];
                                                $section2_description = $section2_rows['section2_description'];
                    
                                                $upload_icon_name = $section2_rows['section2_icon'];
                                                
                                                $section2_date = $section2_rows['section2_date'];
                                                
                                                
                                    
                                                ?>
                                              
                                              
                                               <td class="text-center">Feature: <?php echo $count2;?></td>
                                               <td class="text-center"><?php echo $section2_title; ?></td>
                                               <td class="desc text-center"><?php echo substr($section2_description, 0 , 10); ?>...</td>
                                                <td class="text-center"><?php echo $section2_date; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          <a href="homepage.php?source=section2">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                              </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="spacer"></tr>
                                            </tbody>
                                            <?php
                                                $count2++;    } 
                                            ?>
                                            
                                            <thead>
                                            <tr>
                                                <th class="text-center">Section 3</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th class="text-center">Background Text</th>
                                                <th class="text-center">Background Image</th>
                                                <th class="text-center">Updated Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                       
                                              <?php 
                                                
                                                $query3 = "SELECT * FROM home_section3";
                                                $query_select3 = mysqli_query($connection , $query3);
                                                confirmQuery($query_select3);
                                                $section3_rows = mysqli_fetch_assoc($query_select3);
                    
                                                $section3_title = $section3_rows['section3_title'];
                                                $section3_description = $section3_rows['section3_description'];
                    
                                                $section3_signature = $section3_rows['section3_signature'];
                                                $section3_bg_text = $section3_rows['section3_bg_text'];
                                                $section3_bg_image = $section3_rows['section3_bg_image'];
                                                $section3_date = $section3_rows['section3_date'];
                                                
                                    
                                                ?>
                                              
                                              
                                               <td class="text-center">About </td>
                                               <td class="text-center"><?php echo $section3_title; ?></td>
                                               <td class="desc text-center"><?php echo substr($section3_description , 0 , 10); ?>...</td>
                                                <td class="text-center"><?php echo $section3_bg_text; ?></td>
                                                <td><img src='../images/uploads/<?php echo $section3_bg_image; ?>'></td>
                                                <td><?php echo $section3_date; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          <a href="homepage.php?source=section3">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                              </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="spacer"></tr>
                                            </tbody>
                                            
                                            <thead>
                                            <tr>
                                                <th class="text-center">Section 4</th>
                                                <th>Title</th>
                                                <th class="text-center">Background Title</th>
                                                <th class="text-center">Client Image</th>
                                                <th class="text-center">Client Name</th>
                                                <th class="text-center">Client Role</th>
                                                <th class="text-center">Updated Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow"> 
                                       
                                              <?php 
                                                
                                                $query4 = "SELECT * FROM home_section4";
                                                $query_select4 = mysqli_query($connection , $query4);
                                                confirmQuery($query_select4);
                                                $count1 = 1;
                                                while($section4_rows = mysqli_fetch_assoc($query_select4)){
                    
                                                $section4_title = $section4_rows['section4_title'];
                                                $section4_bg_title = $section4_rows['section4_bg_title'];
                    
                                                $section4_client_image = $section4_rows['section4_client_image'];
                                                $section4_client_name = $section4_rows['section4_client_name'];
                                                $section4_client_role = $section4_rows['section4_client_role'];
                                                $section4_client_view = $section4_rows['section4_client_view'];
                                                $section4_date = $section4_rows['section4_date'];
                                                
                                                
                                    
                                                ?>
                                              
                                              
                                               <td class="text-center">Client <?php echo $count1 ;?></td>
                                               <td class="text-center"><?php echo $section4_title; ?></td>
                                               <td class="text-center"><?php echo $section4_bg_title; ?></td>
                                                
                                                <td><a href="../images/uploads/<?php echo $section4_client_image; ?>" target="_blank"><img src='../images/uploads/<?php echo $section4_client_image; ?>'></a></td>
                                                <td class="text-center"><?php echo $section4_client_name; ?></td>
                                                <td class="text-center"><?php echo $section4_client_role; ?></td>
                                                <td><?php echo $section4_date; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          <a href="homepage.php?source=section4">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                              </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="spacer"></tr>
                                            </tbody>
                                            <?php
                                                $count1++;    } 
                                            ?>
                                            
                                            <thead>
                                            <tr>
                                                <th class="text-center">Section 5</th>
                                                <th class="text-center">Background Image</th>
                                                <th class="text-center">Button Text</th>
                                                
                                                
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th class="text-center">Icon Image</th>
                                                <th class="text-center">Updated Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                       
                                              <?php 
                                                
                                                $query5 = "SELECT * FROM home_section5";
                                                $query_select5 = mysqli_query($connection , $query5);
                                                confirmQuery($query_select5);
                                                $count1 = 1;
                                                while($section5_rows = mysqli_fetch_assoc($query_select5)){
                                                    
                                                $section5_bg_image = $section5_rows['section5_bg_image'];
                                                $section5_button_text = $section5_rows['section5_button_text'];
                                                $section5_button_link = $section5_rows['section5_button_link'];
                                                    
                                                $section5_title = $section5_rows['section5_title'];
                                                $section5_description = $section5_rows['section5_description'];
                                                $section5_icon = $section5_rows['section5_icon'];
                                                
                                                $section5_slider_date = $section5_rows['section5_date'];
                                                
                                                
                                    
                                                ?>
                                              
                                              
                                               <td class="text-center">Services <?php echo $count1 ;?></td>
                                               <?php if(!empty($section5_bg_image)){ ?>
                                               <td><a href="../images/uploads/<?php echo $section5_bg_image; ?>" target="_blank"><img src='../images/uploads/<?php echo $section5_bg_image; ?>'></a></td>
                                               <?php }else echo "<td></td>"; ?>
                                               <td class="desc text-center"><?php echo $section5_button_text; ?></td>
                                               
                                               <td class="text-center"><?php echo $section5_title; ?></td>
                                                <td class="desc text-center"><?php echo substr($section5_description, 0 , 10); ?>...</td>
                                                <td><a href="../images/uploads/<?php echo $section5_icon; ?>" target="_blank"><img src='../images/uploads/<?php echo $section5_icon; ?>'></a></td>
                                                
                                                <td><?php echo $section1_slider_date; ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                          <a href="homepage.php?source=section5">
                                                           <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                              </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="spacer"></tr>
                                            </tbody>
                                            <?php
                                                $count1++;    } 
                                            ?>
                                            
                                    </table>
                                </div>