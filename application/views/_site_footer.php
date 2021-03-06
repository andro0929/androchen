<script src="<?=base_url("/js/jquery-1.8.3.min.js")?>"></script>
<script src="<?=base_url("/js/bootstrap.min.js")?>"></script>
<script>
	// mark navbar selected item
	$("#navbar-<?=$selector?>").addClass("selected");

	$("#translation").mouseover(function() {
		$("#translation").animate({"right": "+=20px"}, "fast");
	})
	$("#translation").mouseout(function() {
		$("#translation").animate({"right": "-=20px"}, "fast");
	})
	
	$("#translation").click(function() {
		if($("#content_zh").is(":visible")) {
			$("#content_zh").slideToggle('slow', function() {
				$("#content_en").slideToggle('slow', function() {
				});
			});
		}
		else {
			$("#content_en").slideToggle('slow', function() {
				$("#content_zh").slideToggle('slow', function() {
				});
			});
		}
	});
</script>

<div id="footer-inner">
    <div id="footer-content">
	    <a href='<?=site_url("/")?>'>Andro Chen</a> © Since November, 2012
    </div>      
</div>
<script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-36082223-1']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>
