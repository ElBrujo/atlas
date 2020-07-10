<?php
/**
 * Atlas
 */
?>

	<div style="overflow:hidden;box-shadow: 0px 10px 20px #000;border:2px dashed #222;border-radius:100px;margin-left:102px;margin-right:102px;margin-top:-10px;margin-bottom:15px;height:150px;background:#000000dd url(<?php echo ossn_theme_url(); ?>images/logo_animated.svg)no-repeat;background-size:90px;background-position: center;z-index:1000;"></div>

<div class="row ossn-page-contents">
		<div >
            <?php
			$contents = ossn_view_form('login2', array(
            		'id' => 'ossn-login',
           			'action' => ossn_site_url('action/user/login'),
        	));
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('site:login'),
						'contents' => $contents,
			));
			?>
 	   </div>   
            			
       </div>     
</div>	
