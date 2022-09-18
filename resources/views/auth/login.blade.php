@extends('auth.auth_master')

@section('content')
	<!-- Page -->
	<div class="page">

		<div class="main-container container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{ asset('cms/assets/images/logo/2020.svg') }}"
								class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex">
											<a href="index.html"><img src="{{ asset('cms/assets/images/logo/2020.svg') }}"
													class="sign-favicon-a ht-40" alt="logo">
												<img src="{{ asset('cms/assets/images/logo/2020.svg') }}"
													class="sign-favicon-b ht-40" alt="logo">
											</a>
											<h1 class="main-logo1 ms-1 me-0 my-auto tx-28"></h1>
										</div>
										<div class="card-sigin">
											<div class="main-signup-header">
												<h2>Welcome back!</h2>
												<h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
													<div class="form-group">
														<label>Email</label>

                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
													</div>
													<div class="form-group">
														<label>Password</label>

                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" autocomplete="current-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
													</div><button class="btn btn-main-primary btn-block">Sign
														In</button>
													<div class="row row-xs">

													</div>
												</form>
												<div class="main-signin-footer mt-5">
													<p>
                                                      @if (Route::has('password.request'))
                                                        <a  href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </p>
													<p>Don't have an account? <a href="{{ route('register') }}">Create an
															Account</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>

	</div>
	<!-- End Page -->
    @endsection
