$(document).ready(function(){
    $("#setImage").fancybox({

        'width'				: '55%',

        'height'			: '80%',

        'hideOnOverlayClick': false, 

        'autoScale'			: false,

        'transitionIn'		: 'elastic',

        'transitionOut'		: 'elastic',

        'type'				: 'iframe',

        'href' : site_url+'index.php/uploads'

    });

});

tinyMCE.init({
    mode : "specific_textareas",
    editor_selector : "mceEditor",
    theme : 'ribbon',
    content_css : site_url+'assets/js/tiny_mce/themes/ribbon/skins/default/content.css',
    height: 600,
    width : 774,
    convert_urls : false, 
    plugins : 'bestandsbeheer,tabfocus,advimagescale,loremipsum,image_tools,embed,tableextras,style,table,inlinepopups,searchreplace,contextmenu,paste,wordcount,advlist,autosave',
    inlinepopups_skin : 'ribbon_popup',
    

    theme_ribbon_tab1 : {
        title : "Start",
        items : [
        ["paste"], 
        ["justifyleft,justifycenter,justifyright,justifyfull",
        "bullist,numlist",
        "|",
        "bold,italic,underline",
        "outdent,indent"], 
        ["paragraph", "heading1", "heading2", "heading3"],
        ["search", "|", "replace", "|", "removeformat"]]
    },
                                    

                                    
    theme_ribbon_tab2 : {
        title : "Insert",
        items : [["tabledraw"],
     
        ["embed"],
        ["link", "|", "unlink", "|", "anchor"],
        ["loremipsum", "|", "charmap", "|", "hr"]]
    },
                
    theme_ribbon_tab3 : {
        title : "Source",
        source : true
                    
    },
                
        theme_ribbon_tab4 : {  
        	title : "Image",
             bind :  "img",
             items : [["image_float_left", "image_float_right", "image_float_none"],
                       ["image_alt"],
                     ["image_width_plus", "|", "image_width_min", "|", "image_width_original"],     
                     ["image_edit", "|", "image_remove"]]
    }


});

/*
tinyMCE.init({

    // General options

    mode : "specific_textareas",
    editor_selector : "mceEditor",

    theme : 'ribbon',
    content_css : 'css/editor.css'

/*
    plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",



    // Theme options

    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,blockquote,|,bullist,numlist,|,link,unlink,|,justifyleft,justifycenter,justifyright,justifyfull",

    theme_advanced_buttons2 : "formatselect, forecolor,pastetext,pasteword,|,undo,redo,|anchor,image,code",

   
    theme_advanced_toolbar_location : "top",

    theme_advanced_toolbar_align : "left",

    theme_advanced_statusbar_location : "bottom",

    theme_advanced_resizing : true,



    // Example content CSS (should be your site CSS)

    content_css : "css/content.css",



    // Drop lists for link/image/media/template dialogs

    template_external_list_url : "lists/template_list.js",

    external_link_list_url : "lists/link_list.js",

    external_image_list_url : "lists/image_list.js",

    media_external_list_url : "lists/media_list.js",



    // Style formats

    style_formats : [

    {
        title : 'Bold text',
        inline : 'b'
    },


    {
        title : 'Red text',
        inline : 'span',
        styles : {
            color : '#ff0000'
        }
    },

    {
        title : 'Red header',
        block : 'h1',
        styles : {
            color : '#ff0000'
        }
    },

    {
        title : 'Example 1',
        inline : 'span',
        classes : 'example1'
    },

    {
        title : 'Example 2',
        inline : 'span',
        classes : 'example2'
    },

    {
        title : 'Table styles'
    },

    {
        title : 'Table row 1',
        selector : 'tr',
        classes : 'tablerow1'
    }

    ],



    formats : {

        alignleft : {
            selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
            classes : 'left'
        },

        aligncenter : {
            selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
            classes : 'center'
        },

        alignright : {
            selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
            classes : 'right'
        },

        alignfull : {
            selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
            classes : 'full'
        },

        bold : {
            inline : 'span',
            'classes' : 'bold'
        },

        italic : {
            inline : 'span',
            'classes' : 'italic'
        },

        underline : {
            inline : 'span',
            'classes' : 'underline',
            exact : true
        },

        strikethrough : {
            inline : 'del'
        }

    },



    // Replace values for the template plugin

    template_replace_values : {

        username : "Some User",

        staffid : "991234"

    }

});
*/