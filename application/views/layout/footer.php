</div>
<footer>
    <div class="container">
        <p>&copy; MEDfolio 2017</p>
        <div class="socmed">
          <a href="http://instagram.com/"><img src="<?php echo base_url();?>assets/img/ig.png"></a>
          <a href="http://twitter.com/"><img src="<?php echo base_url();?>assets/img/twitter.png"></a>
          <a href="http://line.me"><img src="<?php echo base_url();?>assets/img/line.png"></a>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/loadingbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/ips.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/front.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>

<script type="text/javascript">
	$(function() {
    new Clipboard('#btn-shrt');
	});	
</script>
<script type="text/javascript">
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
</script>

</body>
</html>