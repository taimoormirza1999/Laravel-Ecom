@extends('layout')

@section('content')
      <!--breadcrumbs area start-->
      <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

	<section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Login now</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur similique deleniti pariatur enim cumque eum</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Enter your Email">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">Password</label>
                                            <input type="password"name="password" id="password" placeholder="Enter your password">
                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">Remember me</label>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit">Login Account</button>
                                        </div>
                                        <a href="/forget-password">Forget Password?</a>
                                        <a href="/signup">Not Account Yet?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection