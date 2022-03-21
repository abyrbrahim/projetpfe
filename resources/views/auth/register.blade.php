
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from exon.arsaland.com/html/pages/auth/register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 13:01:11 GMT -->
<head>
        <title>Exon Admin Dashboard Template</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="icon" type="image/png" href="../../assets/favicon.png">
        <link rel="apple-touch-icon" href="../../assets/apple-touch-icon.png">

        <link rel="stylesheet" href="../../css/vendor.css">

        <!-- Fontawesome -->
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
        <!-- Dosis & Poppins Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;523;600;700;800&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../../layouts/layout-1/css/app.css">
        <link rel="stylesheet" href="../../css/auth.css">
    </head>

    <body>

		<div id="app" class="login-page register-1">

			<!-- Login Panel -->
			<div class="panel">
				<div class="row no-gutters">

					<div class="col-md-6 col-form">

						<div class="panel-body panel-form">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
							<div class="form-row">
								<div class="form-group col-md-6">
									<div class="input-group input-group-merged">
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
									</div>
								</div>
								<div class="form-group col-md-6">
									<input id="last name" type="text" class="form-control @error('last name') is-invalid @enderror" name="last name" value="{{ old('last name') }}" required autocomplete="last name" autofocus placeholder="Last name">

                                @error('last name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								<div class="form-group col-md-6">
									<div class="input-group input-group-merged">
										<input type="text" class="form-control" id="inputNumber" placeholder="Phone Number">
										<div class="input-group-append">
											<span class="input-group-text bg-white">
												<i class="fas fa-phone"></i>
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                            </div>
								</div>
							</div>


							<div class="form-group">
								<div class="custom-control custom-checkbox custom-checkbox-2">
									<input type="checkbox" class="custom-control-input" id="remember-me">
									<label class="custom-control-label pt-1" for="remember-me">I agree with the <a href="#" class="font-weight-600">terms of services</a></label>
								</div>
							</div>


							<div class="form-group form-group-btns text-center mb-0">
								<div class="row no-gutters">
									<div class="col-md-6">
										<button type="button" class="btn btn-block btn-lg btn-primary">{{ __('Register') }}</button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-block btn-lg btn-outline-secondary">Back</button>
									</div>
								</div>
							</div>


							<div class="separator dashed my-5 text-muted">
								<span class="bar"></span>
								<span>You can also try</span>
							</div>


							<div class="form-group form-group-btns">
								<div class="row no-gutters">
									<div class="col-md-6">
										<button type="button" class="btn-block btn btn-has-icon btn-icon-split btn-outline-google">
											<span class="icon"><i class="fab fa-google"></i></span>
											<span>Sign up with Google</span>
										</button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn-block btn btn-has-icon btn-icon-split btn-outline-facebook">
											<span class="icon"><i class="fab fa-facebook"></i></span>
											<span>Sign up with Facebook</span>
										</button>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col-md-6">

						<div class="panel-body panel-image" style="background-image: url('../../assets/auth/caleb-george-5sF6NrB1MEg-unsplash-760x700.jpg');">

						</div>

					</div>

				</div><!-- .row -->
			</div><!-- / Login Panel -->

		</div>

        <script src="../../js/vendor.js"></script>
		<script src="../../js/app.js"></script>

    </body>

<!-- Mirrored from exon.arsaland.com/html/pages/auth/register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 13:01:12 GMT -->
</html>
