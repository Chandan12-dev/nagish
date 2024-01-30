import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


window.copyToClipboard = function(id) {
    // Get the text field
    var copyText = id;
    //console.log(copyText);
    const input = document.createElement('input');
       // Select the text field
        input.value = copyText;

        document.body.appendChild(input);
        input.select();
        // Alert the copied text
        if(document.execCommand('copy')) {
            // alert('Licence Copied');
            $('#successMessageToast').text('Licence Copied');
            $('#toast-warning').addClass('hidden');
            $('#toast-danger').addClass('hidden');
            $('#toast-success').removeClass('hidden');
            $('#toast-success').removeClass('opacity-0');
            document.body.removeChild(input);
        }
}

window.updateList = function() {
    document.getElementById("updateForm").style.display = "block";
}


window.removePreviewbtnicon = function() {
    var customfiluploadedlink = document.getElementById("customfiluploadedlink");
    var previewContainer = document.getElementById("preview-button-icon");
    var hideContainer = document.getElementById("hideonpreview");
    hideContainer.style.display = "block";
    previewContainer.style.display = "none";
    customfiluploadedlink.value = '';
}

window.buttoncolor = function(event) {
    var pickedcolor = event.target.value;
    console.log(pickedcolor);
    var spancolorpicked = document.getElementById("colorpicked");
    var inputcolorpicked = document.getElementById("colorpickedinput");
    var iconcolorpicked = document.getElementsByClassName("icon-bg-color");
    spancolorpicked.style.backgroundColor = pickedcolor;
    for (var i = 0; i < iconcolorpicked.length; i++) {
        iconcolorpicked[i].style.backgroundColor = pickedcolor;
    }
    inputcolorpicked.value = pickedcolor;
}

window.buttonSize = function(event) {
    if(event.target.checked == true){
        var pickedSize = event.target.value;
        var iconcolorsize = document.getElementsByClassName("icon-bg-color");
        for (var i = 0; i < iconcolorsize.length; i++) {
            iconcolorsize[i].style.width = pickedSize+'px';
            iconcolorsize[i].style.height = pickedSize+'px';
            iconcolorsize[i].style.padding = (pickedSize / 5)+'px';
        }
    }
}

window.buttonShape = function(event) {
    if(event.target.checked == true){
        var buttonShaped = event.target.value;
        var iconcolorsize = document.getElementsByClassName("icon-bg-color");
        for (var i = 0; i < iconcolorsize.length; i++) {
            switch(buttonShaped) {
                case 'square':
                    iconcolorsize[i].style.borderTopLeftRadius  = '0px';
                    iconcolorsize[i].style.borderBottomLeftRadius  = '0px';
                    iconcolorsize[i].style.borderBottomRightRadius  = '0px';
                    iconcolorsize[i].style.borderTopRightRadius  = '0px';
                    break;
                case 'square_rounded':
                    iconcolorsize[i].style.borderTopLeftRadius  = '10px';
                    iconcolorsize[i].style.borderBottomLeftRadius  = '10px';
                    iconcolorsize[i].style.borderBottomRightRadius  = '10px';
                    iconcolorsize[i].style.borderTopRightRadius  = '10px';
                    break;
                case 'half_left_circle':
                    iconcolorsize[i].style.borderTopLeftRadius  = '100%';
                    iconcolorsize[i].style.borderBottomLeftRadius  = '100%';
                    iconcolorsize[i].style.borderBottomRightRadius  = '0px';
                    iconcolorsize[i].style.borderTopRightRadius  = '0px';
                    break;
                case 'half_right_circle':
                    iconcolorsize[i].style.borderTopLeftRadius  = '0px';
                    iconcolorsize[i].style.borderBottomLeftRadius  = '0px';
                    iconcolorsize[i].style.borderBottomRightRadius  = '100%';
                    iconcolorsize[i].style.borderTopRightRadius  = '100%';
                    break;
                default:
                    iconcolorsize[i].style.borderTopLeftRadius  = '100%';
                    iconcolorsize[i].style.borderBottomLeftRadius  = '100%';
                    iconcolorsize[i].style.borderBottomRightRadius  = '100%';
                    iconcolorsize[i].style.borderTopRightRadius  = '100%';
            }
        }
    }
}

window.ContrastColor = function(event){
    var pickedcolor = event.target.value;
    event.target.nextElementSibling.value = pickedcolor;
}

ClassicEditor
		.create(document.querySelector('#widgetSettingEditor'),{
            updateSourceElementOnDestroy: true
        }).then( editor => {
            window.editor = editor;
        } )
		.catch(error => {
		console.error(error);
		});
window.showWidgetData = function(ev){
    var url = $(ev).attr("data-action");
    var id = $(ev).attr("data-id");
    console.log(url);
    $.ajax({
        type:'GET',
        url:url,
        dataType:'json',
        data:{
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function() {
            $(ev).find(".widget-setting-bt").html('<svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/></svg> Widget Settings');
        },
        success:function(response){
            $("#main-tab").click();
            var webSettingData = response.data;
            var webSetting = JSON.parse(webSettingData.widgetsetting.data);
            console.log(webSetting);
            $("#WebsiteSettingFormSubmission").attr("data-id",webSettingData.widgetsetting.id);
            $("#websettingSite").text(webSettingData.name);
            $('input[name="site_id"]').val(id);
            
            SetUpdateWebsettingData(webSetting);
            setTimeout(() => {
                $(ev).next(".widgetModalBtn").click();
            }, 1500);

        },
        error: function(response){
            $(ev).find(".widget-setting-bt").html('Widget Settings');
            $('#warningMessageToast').text(response.data);
            $('#toast-success').addClass('hidden');
            $('#toast-danger').addClass('hidden');
            $('#toast-warning').removeClass('hidden');
            $('#toast-warning').removeClass('opacity-0');
        },
        complete: function() {
            $(ev).find(".widget-setting-bt").html('Widget Settings');
        }
    });
}

window.SetUpdateWebsettingData = function(widgetsetting){
    // main tab settings data added
    $('input[name="widgetsetting[main][close_button_title]"]').val(widgetsetting.main.close_button_title);
    $('input[name="widgetsetting[main][accessibility_statement_button]"]').val(widgetsetting.main.accessibility_statement_button);

    $('textarea[name="widgetsetting[main][accessibility_statement_content]"]').val(widgetsetting.main.accessibility_statement_content);
    window.editor.setData(widgetsetting.main.accessibility_statement_content);
    
    $('input[name="widgetsetting[main][clear_cookies_title]"]').val(widgetsetting.main.clear_cookies_title);
    $('input[name="widgetsetting[main][greyscale_images_button_title]"]').val(widgetsetting.main.greyscale_images_button_title);
    $('input[name="widgetsetting[main][invert_button_title]"]').val(widgetsetting.main.invert_button_title);
    $('input[name="widgetsetting[main][adhd_button_title]"]').val(widgetsetting.main.adhd_button_title);
    $('input[name="widgetsetting[main][cognitive_disability_profile_button_title]"]').val(widgetsetting.main.cognitive_disability_profile_button_title);
    $('input[name="widgetsetting[main][mute_volume_title]"]').val(widgetsetting.main.mute_volume_title);

    // Button tab settings data added
    if(widgetsetting.button.show_sidebar_left == true){
        $('input[name="widgetsetting[button][show_sidebar_left]"]').attr('checked', true);
    }else{
        $('input[name="widgetsetting[button][show_sidebar_left]"]').removeAttr('checked');
    }
    
    
    $('input[name="widgetsetting[button][button_color]"]').val(widgetsetting.button.button_color);
    $('input#colorPallete').val(widgetsetting.button.button_color);
    
    $('select[name="widgetsetting[button][button_color_type]"] option').removeAttr("selected");
    $('select[name="widgetsetting[button][button_color_type]"] option[value="'+widgetsetting.button.button_color_type+'"]').attr("selected", true);

    $('input[name="widgetsetting[button][desktop][button_size]"]').prop("checked", false);
    $('input[name="widgetsetting[button][desktop][button_size]"][value="'+widgetsetting.button.desktop.button_size+'"]').click();

    $('input[name="widgetsetting[button][desktop][shape_type]"]').prop("checked", false);
    $('input[name="widgetsetting[button][desktop][shape_type]"][value="'+widgetsetting.button.desktop.shape_type+'"]').click();

    $('input[name="widgetsetting[button][button_icon]"]').prop("checked", false);
    $('input[name="widgetsetting[button][button_icon]"][value="'+widgetsetting.button.button_icon+'"]').prop("checked", true);
    
    if(widgetsetting.button.button_icon == "button_icon_file"){
        $("#customfiluploadedlink").val(widgetsetting.button.button_icon_file);
        $("img#preview-button-icon-img").attr("src", widgetsetting.button.button_icon_file);
        $("#hideonpreview").hide();
        $("#preview-button-icon").css("display", "flex");
    }else{
        $("#customfiluploadedlink").val('');
        $("img#preview-button-icon-img").attr("src", '');
        $("#hideonpreview").show();
        $("#preview-button-icon").css("display", "none");
    }
    if(widgetsetting.button.desktop.custom_logo_position == true){
        if($('input[name="widgetsetting[button][desktop][custom_logo_position]"]').is(":checked") == false){
            $('input[name="widgetsetting[button][desktop][custom_logo_position]"]').click();
        }
    }else if($('input[name="widgetsetting[button][desktop][custom_logo_position]"]').is(":checked") == true){
        $('input[name="widgetsetting[button][desktop][custom_logo_position]"]').click();
    }
    $('input[name="widgetsetting[button][desktop][logoposition]"]').prop("checked", false);
    $('input[name="widgetsetting[button][desktop][logoposition]"][value="'+widgetsetting.button.desktop.logoposition+'"]').prop("checked", true);
    Object.keys(widgetsetting.button.desktop.position).forEach(function(i){
        $('input[name="widgetsetting[button][desktop][position]['+i+'][distance]"]').val(widgetsetting.button.desktop.position[i].distance);
        $('select[name="widgetsetting[button][desktop][position]['+i+'][from]"] option').removeAttr("selected");
        $('select[name="widgetsetting[button][desktop][position]['+i+'][from]"] option[value="'+widgetsetting.button.desktop.position[i].from+'"]').attr("selected", true);
    });

    $('input[name="widgetsetting[button][hide_on_mobile]"]').prop("checked",widgetsetting.button.hide_on_mobile);

    // button for mobile view

    $('input[name="widgetsetting[button][mobile][button_size]"]').prop("checked", false);
    $('input[name="widgetsetting[button][mobile][button_size]"][value="'+widgetsetting.button.mobile.button_size+'"]').prop("checked", true);

    $('input[name="widgetsetting[button][mobile][shape_type]"]').prop("checked", false);
    $('input[name="widgetsetting[button][mobile][shape_type]"][value="'+widgetsetting.button.mobile.shape_type+'"]').prop("checked", true);

    if(widgetsetting.button.mobile.custom_logo_position == true){
        if($('input[name="widgetsetting[button][mobile][custom_logo_position]"]').is(":checked") == false){
            $('input[name="widgetsetting[button][mobile][custom_logo_position]"]').click();
        }
    }else if($('input[name="widgetsetting[button][mobile][custom_logo_position]"]').is(":checked") == true){
        $('input[name="widgetsetting[button][mobile][custom_logo_position]"]').click();
    }
    $('input[name="widgetsetting[button][mobile][logoposition]"]').prop("checked", false);
    $('input[name="widgetsetting[button][mobile][logoposition]"][value="'+widgetsetting.button.desktop.logoposition+'"]').prop("checked", true);
    Object.keys(widgetsetting.button.mobile.position).forEach(function(i){
        $('input[name="widgetsetting[button][mobile][position]['+i+'][distance]"]').val(widgetsetting.button.desktop.position[i].distance);
        $('select[name="widgetsetting[button][mobile][position]['+i+'][from]"] option').removeAttr("selected");
        $('select[name="widgetsetting[button][mobile][position]['+i+'][from]"] option[value="'+widgetsetting.button.mobile.position[i].from+'"]').attr("selected", true);
    });


    // Modern Layout Tab settings
    $('input[name="widgetsetting[layout][enable_i18n_support]"]').prop("checked",widgetsetting.layout.enable_i18n_support);

    $('input[name="widgetsetting[layout][vision_impaired_profile_title]"]').val(widgetsetting.layout.vision_impaired_profile_title);
    $('input[name="widgetsetting[layout][vision_impaired_profile_desciption]"]').val(widgetsetting.layout.vision_impaired_profile_desciption);
    $('input[name="widgetsetting[layout][adjust_background_colors_title]"]').val(widgetsetting.layout.adjust_background_colors_title);
    $('input[name="widgetsetting[layout][adjust_title_colors_title]"]').val(widgetsetting.layout.adjust_title_colors_title);
    $('input[name="widgetsetting[layout][adjust_text_colors_title]"]').val(widgetsetting.layout.adjust_text_colors_title);
    $('input[name="widgetsetting[layout][adjust_link_colors]"]').val(widgetsetting.layout.adjust_link_colors);
    $('input[name="widgetsetting[layout][keyboard_navigation_description]"]').val(widgetsetting.layout.keyboard_navigation_description);
    $('input[name="widgetsetting[layout][underline_links_description]"]').val(widgetsetting.layout.underline_links_description);
    $('input[name="widgetsetting[layout][highlight_links_description]"]').val(widgetsetting.layout.highlight_links_description);
    $('input[name="widgetsetting[layout][images_greyscale_description]"]').val(widgetsetting.layout.images_greyscale_description);
    $('input[name="widgetsetting[layout][invert_colors_description]"]').val(widgetsetting.layout.invert_colors_description);
    $('input[name="widgetsetting[layout][remove_animations_description]"]').val(widgetsetting.layout.remove_animations_description);
    $('input[name="widgetsetting[layout][remove_styles_description]"]').val(widgetsetting.layout.remove_styles_description);
    $('input[name="widgetsetting[layout][highlight_titles_description]"]').val(widgetsetting.layout.highlight_titles_description);
    $('input[name="widgetsetting[layout][images_description]"]').val(widgetsetting.layout.images_description);
    $('input[name="widgetsetting[layout][large_cursor]"]').val(widgetsetting.layout.large_cursor);
    $('input[name="widgetsetting[layout][monochrome_description]"]').val(widgetsetting.layout.monochrome_description);
    $('input[name="widgetsetting[layout][sepia_description]"]').val(widgetsetting.layout.sepia_description);
    $('input[name="widgetsetting[layout][inspector_description]"]').val(widgetsetting.layout.inspector_description);
    $('input[name="widgetsetting[layout][letter_spacing_description]"]').val(widgetsetting.layout.letter_spacing_description);
    $('input[name="widgetsetting[layout][word_spacing_description]"]').val(widgetsetting.layout.word_spacing_description);
    $('input[name="widgetsetting[layout][line_height_description]"]').val(widgetsetting.layout.line_height_description);
    $('input[name="widgetsetting[layout][adhd_profile_description]"]').val(widgetsetting.layout.adhd_profile_description);
    $('input[name="widgetsetting[layout][cognitive_disability_profile_description]"]').val(widgetsetting.layout.cognitive_disability_profile_description);
    $('input[name="widgetsetting[layout][mute_volume_description]"]').val(widgetsetting.layout.mute_volume_description);
    $('input[name="widgetsetting[layout][hide_images_description]"]').val(widgetsetting.layout.hide_images_description);
    $('input[name="widgetsetting[layout][table_of_contents]"]').val(widgetsetting.layout.table_of_contents);
    $('input[name="widgetsetting[layout][dark_light_color_scheme_title]"]').val(widgetsetting.layout.dark_light_color_scheme_title);
    $('input[name="widgetsetting[layout][color_adjustment_settings]"]').val(widgetsetting.layout.color_adjustment_settings);

    // Fonts Tab settings
    $('input[name="widgetsetting[fonts][letter_spacing_title]"]').val(widgetsetting.fonts.letter_spacing_title);
    $('input[name="widgetsetting[fonts][word_spacing_title]"]').val(widgetsetting.fonts.word_spacing_title);
    $('input[name="widgetsetting[fonts][line_height_title]"]').val(widgetsetting.fonts.line_height_title);
    $('input[name="widgetsetting[fonts][reset_font_size_title]"]').val(widgetsetting.fonts.reset_font_size_title);
    $('select[name="widgetsetting[fonts][font_family]"] option').removeAttr("selected");
    $('select[name="widgetsetting[fonts][font_family]"] option[value="'+widgetsetting.fonts.font_family+'"]').attr("selected", true);

    // contrast Tab settings
    $('input[name="widgetsetting[contrast][color_button_title]"]').val(widgetsetting.contrast.color_button_title);

    $(".deleteColors").click();
    if(widgetsetting.contrast.contrast_variations == true){
        if($('input[name="widgetsetting[contrast][contrast_variations]"]').is(":checked") == false){
            $('input[name="widgetsetting[contrast][contrast_variations]"]').click();
        }
        Object.keys(widgetsetting.contrast.contrast_variations_colors
            ).forEach(function(i){
            $("#addContrastColor").click();
            setTimeout(function(){
                $('input[name="widgetsetting[contrast][contrast_variations_colors]['+i+'][backgroundcolor]"]').attr("value",widgetsetting.contrast.contrast_variations_colors[i].backgroundcolor);
                $('input[name="widgetsetting[contrast][contrast_variations_colors]['+i+'][textcolor]"]').attr("value",widgetsetting.contrast.contrast_variations_colors[i].textcolor);
                $('input[name="widgetsetting[contrast][contrast_variations_colors]['+i+'][title]"]').attr("value",widgetsetting.contrast.contrast_variations_colors[i].title);
            }, 1000);
        });
    }else if($('input[name="widgetsetting[contrast][contrast_variations]"]').is(":checked") == true){
        $('input[name="widgetsetting[contrast][contrast_variations]"]').click();
    }

    $('input[name="widgetsetting[contrast][monochrome_mode_title]"]').val(widgetsetting.contrast.monochrome_mode_title);
    $('input[name="widgetsetting[contrast][sepia_mode_title]"]').val(widgetsetting.contrast.sepia_mode_title);

    // Styles Tab settings
    $('input[name="widgetsetting[styles][large_mouse_cursor_title]"]').val(widgetsetting.styles.large_mouse_cursor_title);
    $('input[name="widgetsetting[styles][remove_animations_title]"]').val(widgetsetting.styles.remove_animations_title);

    // Links Tab settings
    $('input[name="widgetsetting[links][underline_links_title]"]').val(widgetsetting.links.underline_links_title);
    $('input[name="widgetsetting[links][highlight_links_title]"]').val(widgetsetting.links.highlight_links_title);

    // Content Tab settings
    $('input[name="widgetsetting[content][hide_images_title]"]').val(widgetsetting.content.hide_images_title);
    $('input[name="widgetsetting[content][display_image_description_title]"]').val(widgetsetting.content.display_image_description_title);
    $('textarea[name="widgetsetting[content][table_content_title]"]').val(widgetsetting.content.table_content_title);

    // Advance Tab settings
    $('input[name="widgetsetting[advancedsetting][enable_web_speach_api]"]').prop("checked", widgetsetting.advancedsetting.enable_web_speach_api);
    $('input[name="widgetsetting[advancedsetting][nagish_email]"]').val(widgetsetting.advancedsetting.nagish_email);

    $('input[name="widgetsetting[advancedsetting][report_problem_title]"]').val(widgetsetting.advancedsetting.report_problem_title);
        $('input[name="widgetsetting[advancedsetting][report_problem_close_button_title]"]').val(widgetsetting.advancedsetting.report_problem_close_button_title);
        $('input[name="widgetsetting[advancedsetting][popup_title]"]').val(widgetsetting.advancedsetting.popup_title);
        $('input[name="widgetsetting[advancedsetting][mail_to]"]').val(widgetsetting.advancedsetting.mail_to);
    if(widgetsetting.advancedsetting.enable_Report_problem == true){
        if($('input[name="widgetsetting[advancedsetting][enable_Report_problem]"]').is(":checked") == false){
            $('input[name="widgetsetting[advancedsetting][enable_Report_problem]"]').click();
        }
    }else if($('input[name="widgetsetting[advancedsetting][enable_Report_problem]"]').is(":checked") == true){
        $('input[name="widgetsetting[advancedsetting][enable_Report_problem]"]').click();
    }
}

/*------------------------------------------
    --------------------------------------------
    Form Submit Event
    --------------------------------------------
    --------------------------------------------*/
$('#WebsiteSettingFormSubmission').submit(function(e) {
    e.preventDefault();

    var actionurl = $(this).attr("action");
    var formid = $(this).attr("data-id");
    var url = actionurl+formid;
    console.log(url);
    let formData = new FormData(this);
    $.ajax({
        type:'POST',
        url: url,
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {
            $("button#svgbuttonsubmit").html('<svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"/></svg> Saving');
        },
        success: (response) => {
            console.log(response);
            $('#successMessageToast').text('Settings updated successfully');
            $('#toast-warning').addClass('hidden');
            $('#toast-danger').addClass('hidden');
            $('#toast-success').removeClass('hidden');
            $('#toast-success').removeClass('opacity-0');
        },
        error: function(response){
            $("button#svgbuttonsubmit").html('<svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> Save settings');

            $('#warningMessageToast').text(response.data);
            $('#toast-success').addClass('hidden');
            $('#toast-danger').addClass('hidden');
            $('#toast-warning').removeClass('hidden');
            $('#toast-warning').removeClass('opacity-0');
        },
        complete: function() {
            setTimeout(() => {
                $("button#svgbuttonsubmit").html('<svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> Saved');

                setTimeout(() => {
                    $("button#svgbuttonsubmit").html('<svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> Save settings');
                }, 1000);
            }, 2000);
        }
    });
    
});


