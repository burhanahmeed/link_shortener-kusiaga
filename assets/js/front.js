function myToggle(x) {
    x.classList.toggle("change");
}


function openIP(elm,ip){
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("ipfield");
	for (var i = 0 ; i <tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("ipbtn");
	for (var i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace("active", "");

		}
	document.getElementById(ip).style.display="block";
	elm.currentTarget.className += " active";	
}

$(document).ready(function(){
	$("#ips").click(function(){
		$("#ipkfield").addClass("ipkf-back");
		// $("#ipkfield").removeClass("ipk-1");
		$("#ipsfield").removeClass("ipsf-back");
	});
	$("#ipk").click(function(){
		$("#ipsfield").addClass("ipsf-back");
		$("#ipkfield").removeClass("ipkf-back");
	});
});

// $(document).ready(function(){
// 	$(".ipbtn").on('click','input', function(){
// 		$('.navigasi input.active').removeClass('active');
// 		$(this).addClass('active');
// 		return false;
// 	});
// });

$(document).ready(function(){
	$('#add-cstm').click(function(){
		// $('.cstm-btn').addClass('cstm-after');
		$('#cancel-cstm').css("display","block");
		$('#inpt-cstm').css({"opacity":"1","width":"200px","transition":"width .4s"});
		$('#add-cstm').css("display","none");
		var windowWidth = $(window).width();
	if (windowWidth < 360) {
		$('#inpt-cstm').css({"opacity":"1","width":"150px","transition":"width .4s"});	
	}
	});
	$('#cancel-cstm').click(function(){
		// $('.cstm-btn').removeClass('cstm-after');
		$('#add-cstm').css("display","block");
		$('#inpt-cstm').css({"opacity":"0","width":"0","transition":"width .4s"});
		$('#cancel-cstm').css("display","none");
		$('#inpt-cstm').val('');
	});
});

// function copyShort(elm){
// 	var $temp = $("<input>");
// 	 $("body").append($temp);
// 	 $temp.val($(elm).text()).select();
// 	 document.execCommand("copy");
// 	 $temp.remove();
// }

// Post AJAX
$(document).ready(function(){
	// var submitbtn = $('#sbmt');
	// var form = $(this);
	// var action_ajax = "shortener/short_ajax";
	
	// $( '#frm' ).submit(function(event){
	// 	event.preventDefault();
	// 	var inner = $('<div class="error"><i class="fa fa-refresh fa-spin"></i> Wait..</div>');
	// 	inner.insertBefore($('#frm'));

	// 	$.ajax({
	// 		type:"POST",
	// 		url:action_ajax,
	// 		async: false,
	// 		dataType:"json",
	// 		data: $('#frm').serialize(),
	// 		success: function(res){
	// 			alert(obj['msg']);
	// 			if (res.msg == 'url') {
	// 	        	// console.log('ini url');
	// 	        	$('#ajax_short_url').html('<div>'+res+'</div>');
	// 	        }
	// 	        if (res.msg == 'err') {
	// 	        	// console.log('error');
	// 	        	// $(loading).hide();
	// 	        	$('#notif').html('<div>'+res+'</div>').delay( 1000 ).hide( 400 );
	// 	        }
	// 		},
	// 	});
	// });

var php_var =  $('input#jsparse').val();
	 $( '#frm' ).submit( function() {
    // var actions = $( '#frm' ).attr( 'action' );
    var action_ajax = "shortener/short_ajax";
    var loading = '<div class="error"><i class="fa fa-refresh fa-spin"></i> Wait..</div>';
    
    $( '#notif' ).show().html(loading);
    $.post( action_ajax, $( '#frm' ).serialize(), function( res ) {
    	var obj = $.parseJSON(res);
    	// alert(obj['base']);

        if (obj['msg'] == 'url') {
        	// console.log('ini url');
        	$( '#notif' ).hide();
        	$('#ajax_short_url').show().html('<div class="form-short shrt">'+
		'<p style="margin: 80px 0 0 0;">Your Link Result : </p>'+
		'<p><input id="short_res" type="text" readonly onfocus="javascript:select()"  value="'+obj['base']+obj['isi']+'" style="cursor: text; text-align:centre"><button id="btn-shrt" data-clipboard-target="#short_res">Copy</button></p>'+
		'</div>');
        }
        if (obj['msg'] == 'err') {
        	// console.log('error');
        	$('#ajax_short_url').hide();
        	$('#notif').html('<div>'+obj['isi']+'</div>').delay( 1000 ).hide( 400 );
        }
    });
    return false;
 	 });

 	// $( '#frm' ).submit( function() {
  //   var actions = "shortener/short_ajax";
  //   $( '#notif' ).show().html( '<div>Please wait..</div>' );
  //   $.post( actions, $( '#frm' ).serialize(), function( data ) {
  //     $( '#notif' ).html( '<div>' + data + '</div>' ).delay( 1000 ).hide( 400 );
  //     // $('#notif').hide();
  //   });
  //   return false;
  // });

});