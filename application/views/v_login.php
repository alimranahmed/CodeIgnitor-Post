<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Login</h1>
        <form action="<?=  base_url()?>index.php/users/login/" method="post">
            <div class="form_settings">
                <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Hmm, we don\'t recognize you. Please try again.</div><br>';
                    }?>
                <p><span>Username</span><input class="" type="text" name="username" value="" /></p>
                <p><span>Password</span><input class="" type="password" name="password" value="" /></p>
                <p><span>User Type</span>
                    <select class="form-control" name="user_type">
                    <option value="admin">Admin</option>
                    <option value="author">Author</option>
                    <option value="user" selected>User</option>
                </select>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Login" /></p>
            </div>
        </form>
    </div>
</div>