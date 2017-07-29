$(document).ready(function(){
	$('#add-cstm').click(function(){
		// $('.cstm-btn').addClass('cstm-after');
		$('#cancel-cstm').css("display","inline-block");
		$('#inpt-cstm').css({"display":"inline-block","transition":".5s"});
		$('#add-cstm').css("display","none");
		// var windowWidth = $(window).width();
	});
	$('#cancel-cstm').click(function(){
		// $('.cstm-btn').removeClass('cstm-after');
		$('#add-cstm').css("display","inline-block");
		$('#inpt-cstm').css("display","none");
		$('#cancel-cstm').css("display","none");
		$('#inpt-cstm').val('');
	});
	$('#newshrt').click(function(){
		$('form#frm').show();
		$('#inpt-cstm').val('');
		$('#url').val('');
		$('#hasil_short').hide();
		$('#add-cstm').css("display","inline-block");
		$('#inpt-cstm').css("display","none");
		$('#cancel-cstm').css("display","none");
	});
});

// Post AJAX
$(document).ready(function(){


// var php_var =  $('input#jsparse').val();
	 $( '#frm' ).submit( function() {
    // var actions = $( '#frm' ).attr( 'action' );
    var frmAction = $('#frm').attr('action');
    var loading = '<i class="fa fa-spinner fa-spin"></i> Please wait..';
    
    $( 'button#submit' ).html(loading);
    $.post( frmAction, $( '#frm' ).serialize(), function( res ) {
    	var obj = $.parseJSON(res);
    	// alert(obj['base']);

        if (obj['msg'] == 'url') {
        	$( 'button#submit' ).html("SHORTEN");
        	$( '#notif' ).hide();
        	$('form#frm').hide();
        	$('#hasil_short').css("display","inline-block");
        	$('#short_res').val(obj['base']+obj['isi']);
        	$('#long_res').html(obj['long'].substr(0,70)+'. . .');
        }
        if (obj['msg'] == 'err') {
        	// console.log('error');
        	$('#hasil_short').hide();
        	$('#notif').show().html('<div>'+obj['isi']+'</div>').delay( 1400 ).hide( 400 );
        	$( 'button#submit' ).html("SHORTEN");
        }
    });
    return false;
 	 });

});
