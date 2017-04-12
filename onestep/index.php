<?php
/*
* @copyright	Copyright (C) 2008 - 2009 All rights reserved.
* @license		
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// get params
$randomtext	  		= $this->params->get('randomtext');
$app                = JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams     = $app->getTemplate(true)->params;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/template.css" type="text/css" />
<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/ie.css" type="text/css" />
<![endif]-->
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLWNXT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TLWNXT');</script>
<!-- End Google Tag Manager -->
<div id="OSsiteWrap">
  <div id="OStopBlue"><jdoc:include type="modules" name="OStop" style="raw" /></div>
  <div id="OSlogoWrap">
    <div id="OScatchPhrase"><jdoc:include type="modules" name="OScatchPhrase" style="raw" /></div>
    <div id="OSlogo"><img src="templates/<?php echo $this->template ?>/images/OSHC-logo.png" width="436" height="229" alt="One Step Home Care logo" /></div>
  </div>
  <div id="OSphoneCall">
  	<jdoc:include type="modules" name="OSphoneCall" style="raw" />
    <div class="btr"></div>
    <div class="bbr"></div>
  </div>
  <div id="OScontentRed">
    <div id="OSleftModule"><jdoc:include type="modules" name="OSleft" style="raw" /></div>
    <div id="OScontentWrap">
      <div id="OSrightModule">
      	<jdoc:include type="modules" name="OSright" style="OSright" />
    	<div class="btl"></div>
	    <div class="bbl"></div>
      </div>
      <div id="OScontentArea">
        <?php if ($randomtext == 1) : ?>
          <jdoc:include type="modules" name="OSrandom" style="raw" />
        <?php elseif ($randomtext == 2) : ?>
          <jdoc:include type="modules" name="OSrandom" style="raw" />
          <jdoc:include type="message" />
          <jdoc:include type="component" />
		<?php else : ?>
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        <?php endif; ?>
      </div>
      <div class="clr"></div>
      <div class="itl"></div>
      <div class="ibl"></div>
    </div>
    <div class="clr"></div>
  </div>
  
  <div id="OSfooterWrap">
    <div id="OSfooterText"><jdoc:include type="modules" name="OSfooter" style="raw" /></div>
    <div class="btr"></div>
    <div class="bbr"></div>
  </div>
  <div id="OSpageCurl"><img src="templates/<?php echo $this->template ?>/images/OS-page-curl.png" width="99" height="99" alt="page curl image" /></div>
</div>
</body>
</html>
