
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
                    
                            if(!empty($pinterest_value)){ ?>
							<li><a href="<?php echo $pinterest_value; ?>"><i class="fab fa-pinterest trans_300"></i></a></li>
							<?php } 
                            if(!empty($facebook_value)){
                            ?>
							<li><a href="<?php echo $facebook_value; ?>"><i class="fab fa-facebook-f trans_300"></i></a></li>
							<?php } 
                            if(!empty($twitter_value)){
                            ?>
							<li><a href="<?php echo $twitter_value; ?>"><i class="fab fa-twitter trans_300"></i></a></li>
							<?php } 
                            if(!empty($dribble_value)){
                            ?>
							<li><a href="<?php echo $dribble_value; ?>"><i class="fab fa-dribbble trans_300"></i></a></li>
							<?php } 
                            if(!empty($behance_value)){
                            ?>
							<li><a href="<?php echo $behance_value; ?>"><i class="fab fa-behance trans_300"></i></a></li>
							<?php } 
                            if(!empty($linkedin_value)){
                            ?>
							<li><a href="<?php echo $linkedin_value; ?>"><i class="fab fa-linkedin-in trans_300"></i></a></li>
							<?php } ?>
       
   