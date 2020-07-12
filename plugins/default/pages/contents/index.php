<?php
/**
 * Atlas
 */
?>

	<div class="atlas-logo col-x-1 center-block"></div>

<div class="row ossn-page-contents">
<div class="col-x-1 d-flex justify-content-center">
		 <table class="atlas-table center-block">
			
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

				<td>

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
       </table>   		
       </div>     
   </div>	
