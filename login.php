<?php require_once('header.php'); ?>

<div class="row content">
	<div class="row">
        <div class="account-wall">
            <div id="my-tab-content" class="tab-content">
				<div class="tab-pane active" id="login">
					<form class="form-signin" action="" method="">
						<div class="form-group row">
					      	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					      	<div class="col-sm-10">
					        	<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					      	<div class="col-sm-10">
					       	 	<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<div class="offset-sm-2 col-sm-10">
					        	<button type="submit" class="btn btn-primary">Sign In</button>
					        	<a href="#register" class="btn btn-primary">Sign Up</a>
					      	</div>
					    </div>
           			</form>
				</div>
				<div class="tab-pane" id="register">
					<form class="form-signin" action="" method="">
						<div class="form-group row">
					      	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					      	<div class="col-sm-10">
					        	<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					      	<div class="col-sm-10">
					       	 	<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<div class="offset-sm-2 col-sm-10">
					        	<button type="submit" class="btn btn-primary">Sign Up</button>
					        	<a href="#login" class="btn btn-primary">Sign In</a>
					      	</div>
					    </div>
					</form>
				</div>
			</div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>