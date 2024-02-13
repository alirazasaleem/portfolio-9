
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Animate Scroll JS -->
  <script src="<?php echo X_ADMIN_CDN;?>themes/10/js/jquery-animate-scroll.js" charset="utf-8"></script>
  <!-- Custom JS -->
  <script src="<?php echo X_ADMIN_CDN;?>themes/10/js/bespider.js" charset="utf-8"></script>
  <script>
	window.setActiveMenu = function(v){
		$('#navbar ul li').each(function( index ) {
		    $(this).find("a").removeClass('active');
		});
		$(v).addClass('active');
	}
   </script>
<?php get_footer($x_css,$x_js);?>
</body>

</html>
