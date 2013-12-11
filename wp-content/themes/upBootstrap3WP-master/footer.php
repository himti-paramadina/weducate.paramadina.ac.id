<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>

	</div><!-- #content -->
		
		<div class="before-footer">

			<div class="container">
				<div class="row">
            		<div class="col-md-4">
            			<div class="title-before-footer">
            				<h4>Artiel Terkini</h4>
            			</div>
            			<div class="content-before-footer">            			
	            			<p>
	            				Pro Kontra UU ITE</br>
	            				Evolusi E-Commerce</br>
	            				Profil Ruby on Rail</br>
	            				Dampak Negatif Gadget
	            			</p>
	            		</div>
            		</div>

            		<div class="col-md-4">
            			<div class="title-before-footer">
            				<h4>Artikel Terpopuler</h4>
            			</div>
            			<div class="content-before-footer">
	            			<p>
	            				Pro Kontra UU ITE</br>
	            				Evolusi E-Commerce</br>
	            				Profil Ruby on Rail</br>
	            				Dampak Negatif Gadget
	            			</p>
	            		</div>
            		</div>

            		<div class="col-md-4">
            			<div class="title-before-footer">
            				<h4>Credits</h4>
            			</div>
            			<div class="content-before-footer">
	            			<a href="https://www.paramadina.ac.id/index.php?option=com_content&view=category&layout=blog&id=47&Itemid=121&lang=en">Prodi Teknik Informatika</a><br>
	            			<a href="https://www.paramadina.ac.id/">Universitas Paramadina</a><br>
	            			<a href="#">Copyright Weducate</a><br>
	            			<a href="http://wordpress.org/">Powered by Wordpress</a>	            			
            			</div>
            		</div>
            	</div>
            </div>   


        	<div class="footer">
        		<div class="container">
        			<div class="row">
	            		<p>&copy; weducate 2013 | Privasi & aturan | Term of service</p>            
	            	</div>
        		</div>
            </div>
    	
    	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/engine_slider1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/engine_slider1/script.js"></script>

    <!-- Modal Forms -->
    <div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-login">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel" style="color:#ffffff;">Login</h4>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo-white.png" style="width:50%;"/>
                    <form name="loginform" id="loginform" action="http://localhost/weducate/wp-login.php" method="post">
                        <p>
                            <label for="user_login" class="label-form-login">Username<br>
                            <input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
                        </p>
                        <p>
                            <label for="user_pass" class="label-form-login">Password<br>
                            <input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
                        </p>
                            <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
                        <p class="submit">
                            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
                            <input type="hidden" name="redirect_to" value="http://localhost/weducate/wp-admin/">
                            <input type="hidden" name="testcookie" value="1">
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
</html>