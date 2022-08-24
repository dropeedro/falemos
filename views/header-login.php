<link rel="stylesheet" href="./css/header.css">

<div class="logo-container">
    <div class="logo-img"></div>
    <a href="home.php">
        <img src="images/logo.jpeg" width="100px">
    </a>
</div>
<div class="header-buttons container">
    <div class="login-student">
        <div class="button button--mimas" data-bs-toggle="modal" data-bs-target="#loginModal">
            <span>Learn Now</span>
        </div>
    </div>
</div>

<!-- modal login -->
<div class="modal fade" id="loginModal" aria-hidden="true" aria-labelledby="loginModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
        <!-- login menu -->
        <div class="login-content">
             <div class="menu-login">
                <div class="login-title">
                    <h1>Learn Now!</h1>
                </div>
                <div class="form-login">
                    <div class="input-email">
                        <input class="form-control email" placeholder="Email">
                    </div>
                    <div class="input-pass">
                        <input type="password" class="form-control pass" placeholder="Password">
                    </div>
                    <div class="input-btn-login">
                       <a href="student.php"><button class="btn btn-send">Log In</button></a> 
                    </div>
                </div>
                <div class="form-sign-up">
                    <div class="sign-up">
                        <p>You don't have an account? &nbsp;<button class="btn sign-up-link" data-bs-target="#modalSignUp" data-bs-toggle="modal">Sign up here</button></p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalSignUp" aria-hidden="true" aria-labelledby="modalSignUpToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="login-content">
             <div class="menu-login">
                <div class="login-title">
                    <h1>Sign in!</h1>
                </div>
                <div class="form-login">
                    <div class="row g-3">
                        <div class="input-name col-md-6">
                            <input class="form-control name" placeholder="Name">
                        </div>
                        <div class="input-last-name col-md-6">
                            <input class="form-control name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-email">
                            <input class="form-control email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-pass col">
                            <input type="password" class="form-control pass" placeholder="Password">
                        </div>
                        <div class="input-pass-2 col">
                            <input type="password" class="form-control pass-2" placeholder="Repeat password">
                        </div>
                    </div>
                    <div class="input-address">
                        <input class="form-control address" placeholder="Address">
                    </div>
                    <div class="row g-3">
                        <div class="col-sm">
                            <input type="text" class="form-control state" placeholder="State" aria-label="State">
                        </div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control city" placeholder="City" aria-label="City">
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-phone">
                            <input class="form-control phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="input-language">
                        <select class="form-control language">
                            <option selected disabled>Language</option>
                            <option>English</option>
                            <option>Spanish</option>
                            <option>Portuguese</option>
                        </select>
                    </div>
                    <button class="btn btn-send">
                        Sign in
                    </button>
                </div>
                <div class="form-sign-up">
                    <div class="sign-up">
                        <p>Do you already have an account? &nbsp;<button class="btn sign-up-link" data-bs-target="#loginModal" data-bs-toggle="modal">Login here</button></p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>