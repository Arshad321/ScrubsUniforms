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
                                        <h4 class="mb-sm-0">Loyality Rules</h4>
                                    </div>
                                    
                                </div>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Loyality Points</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Loyality Rules</a></li>
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
                                                        <label class="form-label" for="source">Select A Source:</label>
                                                        <select name="source" id="source" class="form-control select-checkbox"> 
                                                                <option value="">Select A Source</option>

                                                                <option value="">Purchase Amount</option>
                                                                <option value="">Collection</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Enter The Amount:</label>
                                                            <input type="text" placeholder="1000" class="form-control"/>
                                                    </div>
                                                    <hr class="mt-2">
                                                    <h4>Product</h4>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Loyality Points:</label>
                                                        <input type="text" placeholder="2" class="form-control"/>
                                              
                                                     </div>

                                                     
                                                    <div class="col-md-2 mb-3 pt-2">
                                                        <label class="form-label" for=""></label>
                                                        <button type="submit" class="btn btn-primary d-block">Save</button>
                                                    </div>
                                            </div>
                                        </form>
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