<html>
<head>
    <title>Upload File</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/media.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js" ></script>

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/includes/styles/global.css"> -->
</head>
<body id="media-upload">
    <div id="media-upload-header">
<ul id='sidemenu'>
    <li id='tab-type'><a href='<?php echo site_url('uploads');?>' class='current'>From Computer</a></li>
    <li id='tab-library'><a href='<?php echo site_url('uploads/gallery');?>'>Media Library</a></li>
</ul>
</div>

<?php echo form_open_multipart('uploads/upload','','id="image-form" class="media-upload-form type-form validate html-uploader"'); ?>
<br>


<h3 class="media-title">Add media files from your computer</h3>


<div id="media-upload-notice"></div>
<div id="media-upload-error">

<?php
if (!empty($error)):
    echo "<p>" . $error . "</p>";
endif;
?>
<div id="html-upload-ui" class="hide-if-js">
    <p id="async-upload-wrap">
        <label class="screen-reader-text" for="async-upload">Upload</label>
        <input type="file" name="userfile" id="async-upload" />
        <input type="submit" name="html-upload" id="html-upload" class="btn" value="Upload"  />      
    </p>
    <div class="clear"></div>
  

<span class="max-upload-size">Maximum upload file size: 2MB.</span>
    <span class="after-file-upload">After a file has been uploaded, you can add titles and descriptions.</span>
</div>
<!--
iki tambahan nek wes ke upload

-->

<?php echo form_close(); ?>





<?php if (!empty($success_upload)): ?>
<?php $this->load->view('upload/iframe_file_success')?>
<?php endif;?>
</body>
</html>
