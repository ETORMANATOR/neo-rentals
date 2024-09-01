<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>  
<?php $this->load->view('template_header');?>

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?=base_url("assets/modules/login/images/neo-rentals-logo.png")?>" alt="IMG">
                </div>

                <form class="login100-form validate-form">

                    <div class="wrap-input100 validate-input" data-validate="Valid number is required">
                        <input class="input100" type="text" name="phone" placeholder="Phone Number" maxlength="11">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div>
                        <center><span class="text-danger d-none" id="msg-fail"></span></center>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="<?=base_url();?>forgotpassword">
                            <u>Password</u>?

                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->
    <script src="<?=base_url();?>assets/modules/login/js/login/main.js"></script>

</body>

</html>