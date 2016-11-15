<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>New Post</h1>
        <form action="<?=  base_url()?>index.php/blog/new_post/" method="post">
          <div class="form_settings">
            <p><span>Title</span><input class="" type="text" name="post_title" value="" /></p>
            <p><span>Description</span><textarea class="textarea" rows="15" cols="50" name="post"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Publish" /></p>
          </div>
        </form>
    </div>
</div>