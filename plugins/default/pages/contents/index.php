<?php
/**
 * Atlas
 */
?>

<style>
.topbar {
	.col-x-1;
}
.topbar .site-name {
width: 100%;
text-align: center;
}
</style>

<div class="atlas-logo col-x-1 center-block" style="margin-bottom:20px;"></div>
<div class="row ossn-page-contents">


<div class="col-m-12 center-block navegador">
		 <table class="atlas-table">

			<td style="vertical-align: top;">
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

				</td>

				<td >

				<?php

				$contents = ossn_view_form('signup', array(
	        					'id' => 'ossn-home-signup',
	        				'action' => ossn_site_url('action/user/register')
		   	 	));

				echo ossn_plugin_view('widget/view', array(
							'title' => ossn_print('create:account'),
							'contents' => $contents,
				));
				?>

			</td>
		</table></div>

		<div class="col-m-12 center-block mobile">
		<table class="atlas-table">
		<tr><td>

							 <?php
				 $contents = ossn_view_form('login2', array(
									 'id' => 'ossn-login',
									 'action' => ossn_site_url('action/user/login'),
						 ));
				 echo ossn_plugin_view('widget/view', array(
							 'title' => ossn_print('site:login'),
							 'contents' => $contents,
				 ));

				 ?> </td></tr>
		<tr ><td>
				 <?php

				 $contents = ossn_view_form('signup', array(
										 'id' => 'ossn-home-signup',
									 'action' => ossn_site_url('action/user/register')
					 ));

				 echo ossn_plugin_view('widget/view', array(
							 'title' => ossn_print('create:account'),
							 'contents' => $contents,
				 ));
				 ?>
			 </td></tr>
				</table>

       </div>
   </div>
 	</div>
