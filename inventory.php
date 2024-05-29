<?php include("includes/compatibility.php"); ?>
<?php include("includes/style.php"); ?>
</head>
<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include("includes/header.php"); ?>
        <?php include("includes/left-sidebar.php"); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Inventory</h4>
                                
                            </div>
                        </div>
                    </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body  pt-0">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                                    <li class="nav-item">
                                                        <a class="nav-link fw-bold p-3 active" href="#">All</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link p-3 fw-bold" href="#">+</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6 text-right">
                                                <div class="prd_exports mb-4">
                                                    <a href="#" class="fw-bold">Export</a>
                                                    <a href="#" class="fw-bold">Import</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table class="table table-centered product_table datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck">
                                                                <label class="form-check-label mb-0" for="ordercheck">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Product</th>
                                                        <th>SKU</th>
                                                        <th>Unavailable</th>
                                                        <th>Committed</th>
                                                        <th>Available</th>
                                                        <th>On hand</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class='d-flex align-items-center' style='gap: 10px'>
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                <img src="assets/images/product/img-1.png" alt="">
                                                            </a> 
                                                            <div class="d-flex flex-column">
                                                            <a href="javascript: void(0);" class="text-dark fw-bold">Dynamix - Men's V-Neck Print Top</a>
                                                                <span class="claps-text badge badge-soft-secondary font-size-12">REGULAR / 5XL / Good Days Plaid</span>
                                                            </div>
                                                            </div>
                                                        </td>


                                                        <td>1123A</td>
                                                        
                                                        <td>
                                                            0
                                                        </td>
                                                        <td>
                                                           0
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td>
                                                        <td>
                                                            <input class="table-number" type="number" >
                                                        </td> 
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
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
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    <?php include('includes/right-sidebar.php') ?>
     <?php include('includes/scripts.php') ?>
   
    </body>
</html>
