<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- ini dari login.html yang ada di frontend-->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
                    <!-- LOGIN -->
                    <!-- LOGIN -->
				</div>
			</div>
		</div>
	</section>
    <section class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                        <div class="card-body">
                            <form method="POST" action="./admin/member-controller.php">
                                <div class="form-floating mb-3">
                                    <label for="inputEmail">Username or Email</label>
                                    <input id="text" name="username" type="text" class="form-control" required>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="inputPassword">Password</label>
                                    <input id="text1" name="password" type="password" class="form-control" required>
                                </div>
                                <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="./?url=register">Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>