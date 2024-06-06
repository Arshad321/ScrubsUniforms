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
                                        <h4 class="mb-sm-0">Reawards Edit</h4>
                                        <p></p>
                                    </div>
                                    
                                </div>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Reawards Points</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Reawards Rules</a></li>
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
                                                <li><a class="dropdown-item" href="#">Details</a></li>
                                                <li><a class="dropdown-item" href="#">Cancel</a></li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                        <form action="">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-3">
                                                        <label class="form-label" for="source">Select A Source:</label>
                                                        <select name="source" id="source" class="form-control select-checkbox"> 
                                                                <option value="">Money Off</option>
                                                                <option value="">Percentage Off</option>
                                                                <option value="">Free Shipping</option>
                                                                <option value="">Free Product Voucher</option>
                                                                <option value="">Product Discount Voucher</option>
                                                                <option value="">Cart widget setting</option>
                                                               
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Reawards Cost:</label>
                                                            <input type="text" placeholder="1000" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Reawards Description:</label>
                                                            <textarea type="text" placeholder="Description" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-checkbox">
                                                             <input type="checkbox" class="form-check-input"  id="ordercheck1">
                                                              <label class="form-check-label mb-0" for="ordercheck1">This Reawards require additional information from the customer</label>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12 mb-3">
                                                        <label class="form-label" for="orderID">Additional info required:</label>
                                                            <textarea type="text" placeholder="Name here" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-checkbox">
                                                             <input type="checkbox" class="form-check-input"  id="ordercheck1">
                                                              <label class="form-check-label mb-0" for="ordercheck1">Limit the number of time each customer can redeem</label>
                                                             
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12 mb-3">
                                                        <div class="form-checkbox">
                                                            
                                                              <label class="form-check-label mb-0" for="ordercheck1">Limit the number of time all customer can redeem</label>
                                                              <input type="text" placeholder="500" class="form-control"/>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12 mb-3">
                                                        <div class="form-checkbox">
                                                            
                                                              <label class="form-check-label mb-0" for="ordercheck1">Limit per customer</label>
                                                              <input type="text" placeholder="1" class="form-control"/>
                                                         </div>
                                                     </div>
                                                    <hr class="mt-2">
                                                   
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