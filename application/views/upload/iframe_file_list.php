<html>
<head>
	<title>Gallery</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/media.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js" ></script>

</head>
<body id="media-upload">
    <div id="media-upload-header">
<ul id='sidemenu'>
    	<li id='tab-type'><a href='<?php echo site_url('uploads');?>' >From Computer</a></li>
    <li id='tab-library'><a href='<?php echo site_url('uploads/gallery');?>' class='current'>Media Library</a></li>
</ul>
	</div>
<form id="filter" action="<?php echo site_url('uploads/gallery')?>" method="get">

<ul class="subsubsub">


    <li>
        <a href="#">Images <span class="count">(<span id="image-counter"><?php echo count($gallerys);?></span>)</span></a>
    </li>
</ul>

<div class="tablenav">


<div class="alignleft actions">
<select name="m">


    <?php if(count($year_month)>0):?>
        <?php foreach($year_month as $yr):?>
            <option value="<?php echo $yr->year?>-<?php echo $yr->month;?>"><?php echo date("F",mktime(0,0,0,($yr->month)+1,0,0) ); ?>(<?php echo $yr->year;?>)</option>
        <?php endforeach;?>
    <?php endif;?>
</select>

<input type="submit" name="post-query-submit" id="post-query-submit" class="button-secondary" value="Filter »">
</div>

<br class="clear">
</div>
</form>

<br class="clear">
<div id="media-items">

<?php if(count($gallerys)>0):?>
<?php foreach ($gallerys as $gallery) : ?>

<div id='media-item-6' class='media-item child-of-4 preloaded'>
<div class='progress hidden'>
	<div class='bar'></div>
</div>
<div id='media-upload-error-6' class='hidden'></div><div class='filename hidden'></div>
	<img class="pinkynail toggle" src="<?php echo base_url()?>/uploads/<?php echo $gallery->file;?>" alt="">
	
	<a class='toggle describe-toggle-on' data="<?php echo $gallery->id_attach;?>" href='#'>Show</a>
	<a class='toggle describe-toggle-off' href='#'>Hide</a>
	<input type='hidden' id="id-image-<?php echo $gallery->id_attach?>" value='<?php echo $gallery->id_attach; ?>' />
	<div class='filename new'><span class='title'><?php echo $gallery->name;?></span></div>
	<table class="slidetoggle describe startclosed" style="display: none; " id="slidetoggle-<?php echo $gallery->id_attach;?>">
        <thead class="media-item-info" id="media-head-5">
        <tr valign="top">
            <td class="A1B1" id="thumbnail-head-5">
            <p><img class="thumbnail" width="100" id="file-<?php echo $gallery->id_attach; ?>" src="<?php echo base_url();?>/uploads/<?php echo $gallery->file;?>" alt=""></p>
             </td>
            <td>
            <p><strong>File name:</strong> <?php echo $gallery->name;?></p>
            <p><strong>File type:</strong> <?php echo $gallery->type;?></p>
   
		</td></tr>

        </thead>
        <tbody>
        <tr><td colspan="2" class="imgedit-response" id="imgedit-response-5"></td></tr>
        <tr><td style="display:none" colspan="2" class="image-editor" id="image-editor-5"></td></tr>
        <tr class="post_title form-required">
            <th valign="top" scope="row" class="label"><label for="name"><span class="alignleft">Title</span><span class="alignright"><abbr title="required" class="required">*</abbr></span><br class="clear"></label></th>
            <td class="field"><input type="text" class="text" id="name-<?php echo $gallery->id_attach?>" name="name" value="<?php echo $gallery->name;?>" aria-required="true"></td>
        </tr>
        <tr class="image_alt">
            <th valign="top" scope="row" class="label"><label for="alternate"><span class="alignleft">Alternate Text</span><br class="clear"></label></th>
            <td class="field"><input type="text" class="text" id="alternate-<?php echo $gallery->id_attach?>" name="alternate" value="<?php echo $gallery->alternate;?>"><p class="help">Alt text for the image, e.g. “The Mona Lisa”</p></td>
        </tr>
        <tr class="post_excerpt">
            <th valign="top" scope="row" class="label"><label for="caption"><span class="alignleft">Caption</span><br class="clear"></label></th>
            <td class="field"><input type="text" class="text" id="caption-<?php echo $gallery->id_attach?>" name="caption" value="<?php echo $gallery->caption;?>"></td>
        </tr>
        <tr class="post_content">
            <th valign="top" scope="row" class="label"><label for="description"><span class="alignleft">Description</span><br class="clear"></label></th>
            <td class="field"><textarea id="description-<?php echo $gallery->id_attach?>" name="description"><?php echo $gallery->description;?></textarea></td>
        </tr>
      
        <tr class="align">
            <th valign="top" scope="row" class="label"><label for="align"><span class="alignleft">Alignment</span><br class="clear"></label></th>
            <td class="field"><input type="radio" name="align<?php echo $gallery->id_attach?>" class="image-align-<?php echo $gallery->id_attach?>" value="none" checked="checked"><label for="image-align-none" class="align image-align-none-label">None</label>
            <input type="radio" name="align<?php echo $gallery->id_attach?>" class="image-align-<?php echo $gallery->id_attach?>" value="left"><label for="image-align-left" class="align image-align-left-label">Left</label>
            <input type="radio" name="align<?php echo $gallery->id_attach?>" class="image-align-<?php echo $gallery->id_attach?>" value="center"><label for="image-align-center" class="align image-align-center-label">Center</label>
            <input type="radio"  name="align<?php echo $gallery->id_attach?>" class="image-align-<?php echo $gallery->id_attach?>" value="right"><label for="image-align-right" class="align image-align-right-label">Right</label></td>
        </tr>
        <tr class="image-size">
            <th valign="top" scope="row" class="label"><label for="image-size"><span class="alignleft">Size</span><br class="clear"></label></th>
            <td class="field"><div class="image-size-item"><input type="radio" name="image-size<?php echo $gallery->id_attach?>" class="image-size-<?php echo $gallery->id_attach?>" value="thumbnail"><label for="image-size-thumbnai">Thumbnail</label> <label for="image-size-thumbnail" class="help">(150&nbsp;×&nbsp;150)</label></div>
            <div class="image-size-item"><input name="image-size<?php echo $gallery->id_attach?>" type="radio"  class="image-size-<?php echo $gallery->id_attach?>" value="medium" checked="checked"><label for="image-size-medium">Medium</label> <label for="image-size-medium" class="help">(300&nbsp;×&nbsp;168)</label></div>
            <div class="image-size-item"><input name="image-size<?php echo $gallery->id_attach?>" type="radio"  class="image-size-<?php echo $gallery->id_attach?>" value="large"><label for="image-size-large">Large</label> <label for="image-size-large" class="help">(584&nbsp;×&nbsp;327)</label></div>
            <div class="image-size-item"><input name="image-size<?php echo $gallery->id_attach?>" type="radio"  class="image-size-<?php echo $gallery->id_attach?>" value="full"><label for="image-size-full">Full Size</label> <label for="image-size-full" class="help">(1366&nbsp;×&nbsp;768)</label></div></td>
        </tr>
        <tr class="submit"><td></td><td class="savesend">
            <button class="insert-image" data="<?php echo $gallery->id_attach?>" class="button" >Insert into Post</button> 
           <a href="#" class="del-link" >Delete</a>

        </tr>
    </tbody>
    </table>
</div>
	
    

<div class='progress hidden'>
	<div class='bar'></div>
</div>

<?php endforeach;?>
<?php endif;?>
</div>
<script type="text/javascript">
$(document).ready(function(){

	$('.describe-toggle-on').click(function(){

		id= $(this).attr('data');

		$('#slidetoggle-'+id).slideToggle('slow');



	});

	 $(".insert-image").click(function(){                    
                id = $(this).attr('data');
                src = $('#file-'+id).attr('src');
                name = $('#name-'+id).val();
                alternate = $('#alternate-'+id).val();
                description = $('#description-'+id).val();
                caption = $('#caption-'+id).val();
                insert_id =$('#id-image-'+id).val();
                size = $('.image-size-'+id+':checked').val();
                align = $('.image-align-'+id+':checked').val();
                size_m = '';
                switch(size){
                     case 'thumbnail' : 
                     size_m = 150;
                    break;
                     case 'medium' : 
                     size_m = 300;
                    break;
                     case 'large' : 
                     size_m = 584;
                    break;
                    
                    default :
                     size_m = 300;
                    break;

                }
                align_m = '';
                 switch(align){
                     case 'none' : 
                     align_m = ' ';
                    break;
                     case 'left' : 
                      align_m = ' float_left ';
                    break;
                     case 'center' : 
                      align_m = ' display_block ';
                    break;
                     case 'right' : 
                     align_m = ' float_right '
                    break;
                    default :
                     align_m ='';
                    break;

                }
                data_kirim =({'name':name,'alternate':alternate,'description': description,'caption':caption,'insert_id':insert_id});
                $.ajax({
                    url : '<?php echo site_url("uploads/edit")?>',
                    data : data_kirim,
                    type : 'POST',
                    success : function (msg){
                        window.parent.tinyMCE.execCommand('mceInsertContent',false,'<img src="'+src+'" class="'+align_m+'" width="'+size_m+'" />');
                        parent.$.fancybox.close();
                       
                    }

                })
               // alert(name+alternate+description+caption);
            }); 

})

</script>
</body>
</html>