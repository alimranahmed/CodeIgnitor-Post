<div id="site_content">
    <div id="content">
    <!-- insert the page content here -->
        <?php if(!isset($post))
            {echo "This page was accessed incorrectly";}
            else //display the post
            {?>
                <h2><?=$post['post_title']?></h2>
                <p><?=$post['post']?></p>
                
                <hr>
                <h3>Comments</h3>
    <?php       //if there is comments then print the comments
                if(count($comments) > 0)
                {
                    foreach ($comments as $row)
                    {?>
                <p><strong><?=$row['username']?></strong> said at <?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br>
                <?=$row['comment'];?></p><hr>
            <?php   }
                }
                else //when there is no comment
                {
                    echo "<p>Currently, there are no comment.</p>";
                }
                
                if($this->session->userdata('user_id'))//if user is loged in, display comment box
                {?>
                    <form action="<?=  base_url()?>index.php/comments/add_comment/<?=$post['post_id']?>" method="post">
                        <div class="form_settings">
                            <p>
                                <span>Comment</span>
                                <textarea class="textarea" rows="8" cols="100" name="comment"></textarea>
                            </p>
                            <p style="padding-top: 15px">
                                <span>&nbsp;</span>
                                <input class="submit" type="submit" name="add" value="Add comment" />
                            </p>
                        </div>
                    </form>
               <?php 
               
                }
                else {//if no user is loged in, then show the loged in button
                ?>
                <a href="<?=  base_url()?>index.php/users/login">Login to comment</a>
        <?php    }
            }?>   
    </div>
</div>