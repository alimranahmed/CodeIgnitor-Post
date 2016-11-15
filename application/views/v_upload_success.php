<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Your file was successfully uploaded</h1>
        <ul>

            <?php foreach($upload_data as $key => $value)
            {?>
            <li> <?=$key?> : <?=$value?></li>
            <?php 
            }?>
        </ul>
        <p><a href="<?=  base_url()?>index.php/upload/">Upload another file</a></p>
    </div>
</div>