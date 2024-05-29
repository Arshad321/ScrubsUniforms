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
                                    <h4 class="mb-sm-0">Collections</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">All Collections</li>
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
                                                    <a href="add-category.php" class="fw-bold">Add Category</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <div class="prodSearchBar">
                                                    <input type="text" placeholder="Search All Product">
                                                    <button><img src="assets/images/search-solid.svg" alt=""></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered product_table datatable dt-responsive nowrap category_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck">
                                                                <label class="form-check-label mb-0" for="ordercheck">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Title</th>
                                                        <th>Products</th>
                                                        <th>Product Conditions</th>
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
                                                                <label class="picture" for="picture__input" tabIndex="0">
                                                                    <span class="picture__image">Logo</span>
                                                                </label>
                                                                <input type="file" name="picture__input" id="picture__input">
                                                                <span>Top</span>
                                                            </a> 
                                                        </td>
                                                        <td>8</td>
                                                        <td>
                                                            Prodict Tag is equal to Top
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit" ><i class="mdi mdi-pencil font-size-18"></i></a>
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
                                                                <label class="picture" for="picture__input" tabIndex="0">
                                                                    <span class="picture__image">Logo</span>
                                                                </label>
                                                                <input type="file" name="picture__input" id="picture__input">
                                                                <span>Bottom</span>
                                                            </a> 
                                                        </td>
                                                        <td>8</td>
                                                        <td>
                                                            Prodict Tag is equal to Bottom
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit" ><i class="mdi mdi-pencil font-size-18"></i></a>
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
                                                                <label class="picture" for="picture__input" tabIndex="0">
                                                                    <span class="picture__image">Logo</span>
                                                                </label>
                                                                <input type="file" name="picture__input" id="picture__input">
                                                                <span>Short</span>
                                                            </a> 
                                                        </td>
                                                        <td>8</td>
                                                        <td>
                                                            Prodict Tag is equal to Short
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit" ><i class="mdi mdi-pencil font-size-18"></i></a>
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
