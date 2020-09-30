<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>
        Register by VGC
    </title>
    <!-- Font Icon -->
    <link href="{{ asset('login-register\fonts\material-icon\css\material-design-iconic-font.min.css') }}" rel="stylesheet"> </link>
    <!-- Main css -->
    <link href="{{ asset('login-register\css\style.css') }}" rel="stylesheet">
</link>
</meta>
</meta>
<style type="text/css">
    .warning {
        background-color: red;
        color: white;
        border-radius: 10px;

    }
</style>
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">
                            Sign up
                        </h2>
                        <form action="{{ route('register.user') }}" class="register-form" id="register-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">
                                    <i class="zmdi zmdi-account material-icons-name">
                                    </i>
                                </label>
                                <input class="@error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" type="text" value="{{ old('name') }}"/>
                                @error('name')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <i class="zmdi zmdi-email">
                                    </i>
                                </label>
                                <input class="@error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" type="email" value="{{ old('email') }}"/>
                                @error('email')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="password">
                                    <i class="zmdi zmdi-lock">
                                    </i>
                                </label>
                                <input class="@error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" type="password"/>
                                @error('password')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="re-pass">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('re_pass') is-invalid @enderror" id="re_pass" name="re_pass" placeholder="Repeat your password" type="password"/>
                                @error('re_pass')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="birthday-pass">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('birthday') is-invalid @enderror" id="birthday" name="birthday" placeholder="Your Birthday" type="date"/>
                                @error('birthday')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="gender">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('gender') is-invalid @enderror" id="gender" name="gender" placeholder="Your Gender" type="text" value="{{ old('gender') }}"  />
                                @error('gender')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="address">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('address') is-invalid @enderror" id="address" name="address" placeholder="Your Address" type="text" value="{{ old('address') }}"/>
                                @error('address')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="district">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('district') is-invalid @enderror" id="district" name="district" placeholder="Your District" type="text" value="{{ old('district') }}"/>
                                @error('district')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="city">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('city') is-invalid @enderror" id="city" name="city" placeholder="Your City" type="text" value="{{ old('city') }}"/>
                                @error('city')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="CMTND">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('CMTND') is-invalid @enderror" id="CMTND" name="CMTND" placeholder="Your CMTND" type="text" value="{{ old('CMTND') }}"/>
                                @error('CMTND')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="phone">
                                    <i class="zmdi zmdi-lock-outline">
                                    </i>
                                </label>
                                <input class="@error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Your Phone" type="text" value="{{ old('phone') }}"/>
                                @error('phone')
                                <div class="warning">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <input class="agree-term" id="agree-term" name="agree-term" type="checkbox"/>
                                <label class="label-agree-term" for="agree-term">
                                    <span>
                                        <span>
                                        </span>
                                    </span>
                                    I agree all statements in
                                    <a class="term-service" href="#">
                                        Terms of service
                                    </a>
                                </label>
                            </div>
                            <div class="form-group form-button">
                                <input class="form-submit" id="signup" name="signup" type="submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure>
                            <img alt="sing up image" src="{{ asset('login-register/images/signup-image.jpg') }}"/>
                        </figure>
                        <a class="signup-image-link" href="{{ route('admin.login') }}">
                            I am already member
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="{{ asset('login-register\vendor\jquery\jquery-ui.min.js') }}">
    </script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>