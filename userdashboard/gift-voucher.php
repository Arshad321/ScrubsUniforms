<?php include("includes/compatibility.php"); ?>
<?php include("includes/style.php"); ?>
</head>
<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include("includes/header.php"); ?>
        <?php include("includes/left-sidebar.php"); ?>
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <div class="page-title-left">
                                    <div class="status d-flex">
                                        <h4 class="mb-sm-0">Gift Voucher</h4>
                                    </div>
                                </div>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Refund</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit</a></li>
                                        <li class="breadcrumb-item">
                                            <div class="dropdown d-inline-block user-dropdown">
                                                <button type="button" class="btn header-item waves-effect"
                                                    style="padding-top: 0; height: 100%;" id="page-header-user-dropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="d-none d-xl-inline-block ms-1">More actions</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-user-line align-middle me-1"></i> Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row prod_upload_card">
                        <div class="col-lg-12">
                        <h5>Hello, Jhone Due</h5>
                            <div class="card-body-header mt-3">
                                <button class="btn warning-btn mb-3">Membership #123456789123</button>
                            </div> 
                            <div class="card mb-3">
                                <div class="card-body card-c">
                                       <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <img src="./assets/images/product/vip.jpg" class="img-fluid border-radius-20" alt="">
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Weekly Membership </h3>
                                                <p>Next Renewal Date : <b> Jan - 01 - 2024</b>
                                                <br>
                                                Membership Duration : <b> 1 Week</b>
                                            </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <div>
                                                    <span class="btn btn-info mb-2"> Active </span> 
                                                </div>
                                                <div>
                                                <a href="#" class="btn btn-primary btn-small"> See more details </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="card-body-header mt-3">
                                <button class="btn warning-btn mb-3">Membership #123456789123</button>
                            </div> 
                            <div class="card mb-3">
                                <div class="card-body card-c">
                                       <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <img src="./assets/images/product/vip.jpg" class="img-fluid border-radius-20" alt="">
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Weekly Monthly </h3>
                                                <p>Next Renewal Date : <b> Jan - 01 - 2024</b>
                                                <br>
                                                Membership Duration : <b> 1 Monthly</b>
                                            </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <div>
                                                    <span class="btn btn-info mb-2"> Active </span> 
                                                </div>
                                                <div>
                                                <a href="#" class="btn btn-primary btn-small"> See more details </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="card-body-header mt-3">
                                <button class="btn warning-btn mb-3">Membership #12345672323233</button>
                            </div> 
                            <div class="card mb-3">
                                <div class="card-body card-c">
                                       <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <img src="./assets/images/product/vip.jpg" class="img-fluid border-radius-20" alt="">
                                            </div>
                                            <div class="col-lg-5">
                                                <h3>Yearly Membership </h3>
                                                <p>Next Renewal Date : <b> Jan - 01 - 2024</b>
                                                <br>
                                                Membership Duration : <b> 1 Yearly</b>
                                            </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <div>
                                                    <span class="btn btn-info mb-2"> Active </span> 
                                                </div>
                                                <div>
                                                <a href="#" class="btn btn-primary btn-small"> See more details </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include('includes/footer.php') ?>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
    <!-- END layout-wrapper -->
    <?php include('includes/right-sidebar.php') ?>
    <?php include('includes/scripts.php') ?>
    <script src="assets/js/app.js"></script>

<script src="assets/libs/select2/js/select2.min.js"></script>
<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/ecommerce-add-product.init.js"></script>
</body>

</html>