<?php include("header.php"); ?>

<div style="margin-top:70px;" class="rows">
	<div class="col-sm-4"></div>

		<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">LOGIN</h4>
                                    <p class="category">Welcome to App</p>
                                </div>
                                <div class="card-content">
                                    
										<form method="POST" action="#">		        

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">person</i>
													</span>
													<div class="form-group label-floating">
													<label class="control-label">Enter your email</label>
													<input type="email" name="email" class="form-control">
												</div>
												</div>


												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock</i>
													</span>
													<div class="form-group label-floating">
													<label class="control-label">Enter your password</label>
													<input type="password" name="password" class="form-control">
												</div>
												</div>

												



											<!--Forgot password-->
											<a href="#">Forgot Password?</a>

											&nbsp;&nbsp;

											<!--Register-->
												<a href="#">Register Here</a>

											<br/><br/>

											<!-- <a class="pull-right btn btn-sm btn-default" href="/register">New Member? Signup</a> -->

											<button type="submit" class="btn btn-sm btn-primary">
												<icon class="fa fa-sign-in"></icon> Login
											</button>
													
										</form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</div>
<span class="clearfix"></span>

<br><br><br><br><br><br><br><br><br>
<?php include("footer.php"); ?>