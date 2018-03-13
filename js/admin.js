function wb_copy(shortcode) {
if (document.selection) { 
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(shortcode));
    range.select().createTextRange();
    document.execCommand("Copy"); 

} else if (window.getSelection) {
    var range = document.createRange();
     range.selectNode(document.getElementById(shortcode));
     window.getSelection().addRange(range);
     document.execCommand("Copy");
     alert("Text copied") 
}}

jQuery(function() {
	
     jQuery('#sortContainer').sortable();
	 jQuery('#sortContainer2').sortable();
	
	jQuery('details summary').each(function(){
        jQuery(this).nextAll().wrapAll('<div id="wrap"></div>');
    });
jQuery('details').attr('open','').find('#wrap').css('display','none');
jQuery('details summary').click(function(e) {
    e.preventDefault();
    jQuery(this).siblings('div#wrap').slideToggle(function(){
        jQuery(this).parent('details').toggleClass('open');
    });
});
	
	jQuery('input.wb_limit').on('change', function (e) {
		
    if (jQuery('input.wb_limit:checked').length > 3) {
		
        jQuery(this).prop('checked', false);
		
    }
		
    });
	
	jQuery('#sortContainer input').on('change', function (e) {
		
    if ( jQuery('input[name="be"]:checked').val() ) {
		
        jQuery('#h_1').show(1000);
		
    }else{
		
		jQuery('#h_1').hide(1000);
		
	}
		
	if ( jQuery('input[name="fe"]:checked').val() ) {
		
        jQuery('#h_2').show(1000);
		
    }else{
		
		jQuery('#h_2').hide(1000);
		
	}
		
	if ( jQuery('input[name="bb"]:checked').val() ) {
		
        jQuery('#h_3').show(1000);
		
    }else{
		
		jQuery('#h_3').hide(1000);
		
	}
		
	if ( jQuery('input[name="di"]:checked').val() ) {
		
        jQuery('#h_5').show(1000);
		
    }else{
		
		jQuery('#h_5').hide(1000);
		
	}
		
	if ( jQuery('input[name="pk"]:checked').val() ) {
		
        jQuery('#h_4').show(1000);
		
    }else{
		
		jQuery('#h_4').hide(1000);
		
	}
		
    });
	
	if ( jQuery('input[name="be"]:checked').val() ) {
		
        jQuery('#h_1').show(1000);
		
    }else{
		
		jQuery('#h_1').hide(1000);
		
	}
		
	if ( jQuery('input[name="fe"]:checked').val() ) {
		
        jQuery('#h_2').show(1000);
		
    }else{
		
		jQuery('#h_2').hide(1000);
		
	}
		
	if ( jQuery('input[name="bb"]:checked').val() ) {
		
        jQuery('#h_3').show(1000);
		
    }else{
		
		jQuery('#h_3').hide(1000);
		
	}
		
	if ( jQuery('input[name="di"]:checked').val() ) {
		
        jQuery('#h_5').show(1000);
		
    }else{
		
		jQuery('#h_5').hide(1000);
		
	}
		
	if ( jQuery('input[name="pk"]:checked').val() ) {
		
        jQuery('#h_4').show(1000);
		
    }else{
		
		jQuery('#h_4').hide(1000);
		
	}

});

function wb_getlist() {
	jQuery.each($('#sortContainer').find('input'), function() {
		jQuery("#wb_list").val(jQuery("#wb_list").val()+jQuery(this).val()+',');
    });
	jQuery.each($('#sortContainer2').find('input'), function() {
		jQuery("#wb_list2").val(jQuery("#wb_list2").val()+jQuery(this).val()+',');
    });
}