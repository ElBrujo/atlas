<?php
/**
 * Atlas
 */
$sitename = ossn_site_settings('site_name');
$sitelanguage = ossn_site_settings('language');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $sitename;
} else {
    $title = $sitename;
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $sitelanguage; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title; ?></title>
   
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Red Social para triangulación por intereses.">
    <meta name="author" content="a0110100110010110">
    
    
    <link rel="icon" href="<?php echo ossn_add_cache_to_url(ossn_theme_url().'images/favicon.ico');?>" type="image/x-icon" />
	
    <?php echo ossn_fetch_extend_views('ossn/endpoint'); ?>
    <?php echo ossn_fetch_extend_views('ossn/site/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/js/head'); ?>
    </script>
</head>

<body>
	<div class="ossn-page-loading-annimation">
    		<div class="ossn-page-loading-annimation-inner">
            	<div class="ossn-loading"></div>
            </div>
    </div>

	<div class="ossn-halt ossn-light"></div>
	<div class="ossn-message-box"></div>
	<div class="ossn-viewer"></div>
    
    <div class="opensource-socialnetwork">
    	<?php echo ossn_plugin_view('theme/page/elements/sidebar');?>
    	 <div class="ossn-page-container">
			  <?php echo ossn_plugin_view('theme/page/elements/topbar');?>
			  
			  
          <div class="ossn-inner-page">    
  	  	
  	  
  	  	
  	  	
  	  		  <?php echo $contents; ?>
          </div>    
		</div>

   </div>
    <?php echo ossn_fetch_extend_views('ossn/page/footer'); ?>   
<svg class="cursor" width="140" height="140" viewBox="0 0 140 140" style="z-index:9000;">
            <defs>
                <filter id="filter-1" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
                    <feTurbulence type="fractalNoise" baseFrequency="0" numOctaves="10" result="warp"></feTurbulence>
                    <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="60" in="SourceGraphic" in2="warp"></feDisplacementMap>
                </filter>
            </defs>
            <circle class="cursor__inner" cx="70" cy="70" r="60"></circle>
        </svg>

        <script src="/themes/atlas/plugins/default/js/round.js"></script>
</body>
</html>
