<html>
    <head>
        <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}"/>
    </head>
<body>
    <div class="container">
        <section id="formHolder">
     
           <div class="row">
     
              <!-- Brand Box -->
              <div class="col-sm-6 brand">
     
                 <div class="heading">
                    <h2>InstaApp</h2>
                    <p>Your Right Choice</p>
                 </div>
     
                 <div class="success-msg">
                    <p>Great! <br>You are one of our members now</p>
                    <a href="#" class="profile">Your Profile</a>
                 </div>
              </div>
     
     
              <!-- Form Box -->
              <div class="col-sm-6 form">
     
                 <!-- Login Form -->
                 <div class="login form-peice">
                    <form class="login-form" action="{{ route('login') }}" method="post">
                     {{ csrf_field() }}
                       <div class="form-group">
                          <label for="loginemail">Email Adderss</label>
                          <input type="email" name="email" id="loginemail" required>
                       </div>
     
                       <div class="form-group">
                          <label for="loginPassword">Password</label>
                          <input type="password" name="password" id="loginPassword" required>
                       </div>
     
                       <div class="CTA">
                          <input type="submit" value="Login">
                          <a href="#" class="switch">I'm New</a>
                       </div>
                    </form>
                 </div><!-- End Login Form -->
     
     
                 <!-- Signup Form -->
                 <div class="signup form-peice switched">
                    <form class="signup-form" action="{{ route('register') }}" method="POST">
                     {{ csrf_field() }}
     
                       <div class="form-group">
                          <label for="name">Full Name</label>
                          <input type="text" name="name" id="name" class="name" required>
                          <span class="error"></span>
                       </div>
     
                       <div class="form-group">
                          <label for="email">Email Adderss</label>
                          <input type="email" name="email" id="email" class="email" required>
                          <span class="error"></span>
                       </div>
     
                       <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password" class="pass" required>
                          <span class="error"></span>
                       </div>
     
                       <div class="form-group">
                          <label for="passwordCon">Confirm Password</label>
                          <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" required>
                          <span class="error"></span>
                       </div>
     
                       <div class="CTA">
                          <input type="submit" value="register" id="submit">
                          <a href="#" class="switch">I have an account</a>
                       </div>
                    </form>
                 </div><!-- End Signup Form -->
              </div>
           </div>
     
        </section>
     
    </div>
    <script src='{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js')}}'></script>
    <script src='{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}'></script>
    <script src="{{asset('js/login.js')}}"></script>
     
</body>
</html>
