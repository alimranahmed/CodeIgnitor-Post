<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Upload File</h1>
        <?php
        echo $error;
        echo form_open_multipart('upload/upload_file');
        $data_form = array(
            'name' => 'userfile'
        );
        echo form_upload($data_form);
        echo form_submit('', 'Upload');
        echo form_close();
        ?>
    </div>
</div>