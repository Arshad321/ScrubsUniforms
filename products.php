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
                                <h4 class="mb-sm-0">Products</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">All Products</li>
                                    </ol>
                                </div>

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
                                                    <a class="nav-link p-3 fw-bold" href="#">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="#">Draft</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="#">Archive</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="#">Copy To Draft</a>
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
                                                <a href="ecommerce-add-product.php" class="fw-bold">Add Product</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="produts_tags">
                                                <select name="" id="">
                                                    <option value="">Vendors</option>
                                                </select>
                                                <select name="" id="">
                                                    <option value="">Tagged</option>
                                                </select>
                                                <select name="" id="">
                                                    <option value="">Collection</option>
                                                </select>
                                                <select name="" id="">
                                                    <option value="">Product Type</option>
                                                </select>
                                                <select name="" id="">
                                                    <option value="">Status</option>
                                                </select>
                                                <select name="" id="">
                                                    <option value="">Sales Chanel</option>
                                                </select>
                                                <select name="" id="">
                                                    <option value="">Publishing Error</option>
                                                </select>
                                                <!-- <select name="" id="">
                                                        <option value="">Gift Card</option>
                                                    </select> -->
                                                <a href="gift-card.php">Gift Card</a>

                                                <!-- <a href="#">Clear All</a> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <div class="prodSearchBar">
                                                <input type="text" placeholder="Search All Product">
                                                <button><img src="assets/images/search-solid.svg" alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-centered product_table datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox" class="form-check-input" id="ordercheck">
                                                            <label class="form-check-label mb-0" for="ordercheck">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Product</th>
                                                    <th>Inventory</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Download</th>
                                                    <th>Vendor</th>
                                                    <th>Publish Date</th>
                                                    <th style="width: 120px;">Action</th>
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
                                                        <a href="javascript: void(0);" class="text-dark fw-bold">
                                                            <img src="assets/images/product/img-1.png" alt="">
                                                            <span>Advance - V-Nect Top</span>
                                                        </a>
                                                    </td>


                                                    <td>354 In Stock for 77 Variants</td>

                                                    <td>
                                                        Top
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-success font-size-12">Active</div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-light btn-rounded">Download <i class="mdi mdi-download ms-2"></i></button>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark fw-bold">
                                                            Dickies
                                                        </div>

                                                    </td>
                                                    <td>
                                                        04 Apr, 2023
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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
                                                        <a href="javascript: void(0);" class="text-dark fw-bold">
                                                            <img src="assets/images/product/img-1.png" alt="">
                                                            <span>Advance - V-Nect Top</span>
                                                        </a>
                                                    </td>


                                                    <td>354 In Stock for 77 Variants</td>

                                                    <td>
                                                        Top
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-warning font-size-12">Darft</div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-light btn-rounded">Download <i class="mdi mdi-download ms-2"></i></button>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark fw-bold">
                                                            Dickies
                                                        </div>

                                                    </td>
                                                    <td>
                                                        04 Apr, 2023
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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
                                                        <a href="javascript: void(0);" class="text-dark fw-bold">
                                                            <img src="assets/images/product/img-1.png" alt="">
                                                            <span>Advance - V-Nect Top</span>
                                                        </a>
                                                    </td>


                                                    <td>354 In Stock for 77 Variants</td>

                                                    <td>
                                                        Top
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-soft-danger font-size-12">Archive</div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-light btn-rounded">Download <i class="mdi mdi-download ms-2"></i></button>
                                                    </td>
                                                    <td>
                                                        <div class="text-dark fw-bold">
                                                            Dickies
                                                        </div>

                                                    </td>
                                                    <td>
                                                        04 Apr, 2023
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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