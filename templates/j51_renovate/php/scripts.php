<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );?>

<!-- Hornav Responsive Menu -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/responsive-nav/responsive-nav.js" charset="utf-8"></script>

<!-- Hornav Dropdown -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/dropdown.js" charset="utf-8"></script>
<script type="text/javascript" >
window.addEvent('domready', function() {
	var myMenu = new MenuMatic();
});
</script>

<!--[if lte IE 7]>
<style  type="text/css">
#ie6msg{border:3px solid #eee;  background:#fff; padding:20px;color:#000; margin:100px auto; width: 600px;}
#ie6msg h4{margin: 8px; padding:0;}
#ie6msg p{margin: 8px; padding:0;}
#ie6msg p a.getie7{font-weight:bold; color:#006;}
#ie6msg p a.ie6expl{font-weight:bold; color:#006;}
#body_bg {display:none;}
</style>
<div id="ie6msg">
<h4>Did you know that your browser is out of date?</h4>
      <p>The site you are visiting can only be viewed using a modern browser. Please upgrade your browser to increase safety and your browsing experience. We strongly recommend upgrading to either <a href="http://www.getfirefox.com/">Firefox</a>, <a href="http://www.opera.com/">Opera</a>, <a href="http://www.apple.com/safari/">Safari</a>, <a href="http://www.google.com/chrome">Google Chrome</a>, or a more recent version of <a href="http://www.microsoft.com/windows/downloads/ie/getitnow.mspx">Internet Explorer</a>.</p>
<![endif]-->
