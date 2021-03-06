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
                            <h4>Tentang Weducate</h4>
                        </div>
                        <div class="content-before-footer">
                            <p>Weducate merupakan suatu <em>Social Project</em> dalam bentuk penyediaan media untuk <em>sharing</em> berbagai ilmu yang berkaitan dengan perkembangan teknologi informasi. <a target="_blank" href="http://localhost/weducate/tentang-kami/" style="color: #fff;">Selengkapnya...</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title-before-footer">
                            <h4>Weducate</h4>
                        </div>
                        <div class="content-before-footer">
                            <p>Universitas Paramadina<br />
                            Jl. Gatot Soebroto Kav. 97<br />
                            Mampang, Jakarta Selatan 12790<br />
                            T. +62-21-7918-1188</p>
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
	            		<p style="font-family: 'Open Sans', arial;">&copy; 2013 Tim Pengembang Weducate | Privasi &amp; Aturan | Term of Services</p>            
	            	</div>
        		</div>
            </div>
    	
    	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/engine_slider1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/engine_slider1/script.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if (gravatarAccounts.length > 0) {
                for (var i = 0; i < gravatarAccounts.length; i++) {
                    appendGravatar(gravatarAccounts[i]);
                }
            }
        });
    </script>

    <!-- Modal Forms -->
    <div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-login">
                <!-- <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel" style="color:#ffffff;">Login</h4>
                </div> -->
                <div class="modal-body">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo-white.png" style="width:50%;"/>
                    <form name="loginform" id="loginform" action="http://localhost/weducate/wp-login.php" method="post">
                        <div class="form-group">
                            <label for="user_login" class="label-form-login" style="color: #ebebeb;">Username<br>
                            <input type="text" name="log" id="user_login" class="form-control" value="" size="20"></label>
                        </div>
                        <div class="form-group">
                            <label for="user_pass" style="color: #ebebeb;">Password<br>
                            <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20"></label>
                        </div>
                            <!-- <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p> -->
                        <p class="submit" style="text-align: center;">
                            <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-warning" value="Log In">
                            <input type="hidden" name="redirect_to" value="http://localhost/weducate/wp-admin/">
                            <input type="hidden" name="testcookie" value="1">
                        </p>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></button>
                </div> -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    

    <div class="modal fade" id="profileInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</body>
</html>