$(document).ready(function(){
	$(".side-nav a").click(function() {
	    $(this).addClass('active').siblings().removeClass('active');
		});
});


function toggleMenu(){
			var elm = document.getElementById('chhidden');

			elm.checked = !elm.checked;
	}

$(document).ready(function(){
	$(".ajax-call").loadingbar({
	  target: "#loadingbar-frame",
	  replaceURL: false,
	  direction: "right",
	 
	  /* Default Ajax Parameters.  */
	  async: true, 
	  complete: function(xhr, text) {},
	  cache: true,
	  error: function(xhr, text, e) {},
	  global: true,
	  headers: {},
	  statusCode: {},
	  success: function(data, text, xhr) {},
	  dataType: "html",
	  done: function(data) {}
	});
});