<?php include("includes/compatibility.php"); ?>
    <?php include("includes/style.php"); ?>
    </head>
<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <!-- Begin page -->
<div id="layout-wrapper">
     <!-- nazox -->

<body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="./index.php" class="authentication-logo">
                                                        <img src="assets/images/logo-dark.png" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                                        <img src="assets/images/logo-light.png" alt="" height="20" class="auth-logo logo-light mx-auto">
                                                    </a>
                                                </div>
    
                                                <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                                <p class="text-muted">Sign in to continue to Scrubsuniforms.</p>
                                            </div>

                                            <div class="p-2 mt-5">
                                                <form class="" action="./index.php">
                    
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                        <label for="username" class="fw-semibold">Username</label>
                                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                                    </div>
                            
                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                        <label for="userpassword">Password</label>
                                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                    </div>
                            
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                                        <label class="form-check-label" for="customControlInline">Remember me</label>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <a href="#" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p>Don't have an account ? <a href="./signup.php" class="fw-medium text-primary"> Register </a> </p>
                                                <p>© <script>document.write(new Date().getFullYear())</script> Scrubsuniforms. Crafted with <i class="mdi mdi-heart text-danger"></i> by ....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('includes/scripts.php') ?>
        
        </body>
    </html>