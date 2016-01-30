<div class="login-bg">
    <div class="container">
        <div class="form-wrapper">
            <?php  $attributes = array('class' => 'form-signin wow fadeInUp', 'id' => 'loginform');
                echo form_open('verifylogin',$attributes); ?>
                <h2 class="form-signin-heading">sign in now</h2>
                <?php echo validation_errors(); ?>
                <div class="login-wrap">
                    <input type="text" id="username" name="username" class="form-control" placeholder="User ID" autofocus>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your e-mail address below to reset your password.</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-success" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

            </form>
        </div>
    </div>
</div>