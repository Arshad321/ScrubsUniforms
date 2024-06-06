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
                                        <h4 class="mb-sm-0">Edit Membership Plan</h4>

                                    </div>
                                    <p class='mb-0 pt-1'>April 1, 2024 at 1:15 pm</p>
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
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body card-c">
                                    <div class="card-header-wrp">
                                        <div class="card-body-header">
                                            <h5>Plan Title</h5>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle p-0 list-btn" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                        <form action="">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label class="form-label" for="orderID">Select A Plan</label>
                                                        <select name="" id="" class="form-control select-checkbox"> 
                                                                <option value="">Silver</option>
                                                                <option value="">Gold</option>
                                                                <option value="">Premium</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Select a Purchase</label>
                                                            <select name="" id="" class="form-control select-checkbox">
                                                                    <option value="">Subscribe Monthly</option>
                                                                    <option value="">Subscribe Quarterly </option>
                                                                    <option value="">Subscribe Yearly</option>
                                                            </select>
                                                    </div>
                                                    <hr class="mt-2">
                                                    <h4>Product</h4>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Select a Product</label>
                                                            <select class="form-control select2">
                                                                <option>Select</option>
                                                                <option value="EL">Electronic</option>
                                                                <option value="FA">Fashion</option>
                                                                <option value="FI">Fitness</option>
                                                            </select>                                                
                                                     </div>

                                                     <hr class="mt-2">
                                                    <div class="col-md-12">
                                                    <h4 class="mb-3">  Discount and delivery</h4>
                                                    <div class="taxCal mb-1">
                                                        <input type="checkbox" checked="">
                                                        <p>Other Discount</p>
                                                    </div>
                                                    <div class="taxCal mb-1">
                                                        <input type="checkbox" checked="">
                                                        <p>Percentage Off %</p>
                                                    </div>
                                                    <div class="taxCal mb-1">
                                                        <input type="checkbox" checked="">
                                                        <p>Amount Off</p>
                                                    </div>
                                                    <div class="taxCal mb-1">
                                                        <input type="checkbox" checked="">
                                                        <p>Flat Rate</p>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-2 mb-3 pt-2">
                                                        <label class="form-label" for=""></label>
                                                        <button type="submit" class="btn btn-primary d-block">Submit</button>
                                                    </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            <div class="timeline">
                                <p>Today</p>
                                <div class="timeline-items">
                                    <div class="item-text">
                                        <div class="dot"></div>
                                        <h5>Order confirmation email was sent to Tyraysha Peterson (Raysha14@aol.com).
                                        </h5>
                                    </div>
                                    <p class="btn">11.49 pm</p>
                                </div>
                                <div class="timeline-items">
                                    <div class="item-text">
                                        <div class="dot"></div>
                                        <h5>$78.68 USD was added to your payout</h5>
                                    </div>
                                    <p class="btn">11.49 pm</p>
                                </div>
                                <div class="timeline-items">
                                    <div class="item-text">
                                        <div class="dot"></div>
                                        <h5>$78.68 USD was added to your payout</h5>
                                    </div>
                                    <p class="btn">11.49 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="costumer-d">
                                    <div class="note-head">
                                        <h5>Summery</h5>
                                        <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                    </div>
                                    <div class="order-product-title">
                                    <h5>Silver 30</h5>
                                            <span>Delivery every month</span>
                                            <br>
                                            <span>
                                              Techtical blog Code Silver 30
                                            </span>
                                        </p>
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