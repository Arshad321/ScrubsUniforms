    <?php include("includes/compatibility.php"); ?>
    <?php include("includes/style.php"); ?>
    </head>
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
                                    <h4 class="mb-sm-0">Add Sub Variant</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Add Sub Variant</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row prod_upload_card">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-pane" id="basic-info">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="card wrapper">
                                                            <table class="table table-centered product_table datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th style="width: 20px;">
                                                                            <div class="form-checkbox">
                                                                                <input type="checkbox" class="form-check-input" id="ordercheck">
                                                                                <label class="form-check-label mb-0" for="ordercheck">&nbsp;</label>
                                                                            </div>
                                                                        </th>
                                                                        <th>Variant image</th>
                                                                        <th>Sub Variant</th>
                                                                        <th width="40%">Parent Varaint</th>
                                                                        <th>Status</th>
                                                                        <th style="width: 120px;">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="blank_sub_variant">
                                                                        <td>
                                                                            <div class="form-checkbox">
                                                                                <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                                <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                                            </div>
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                                <img src="assets/images/product/img-1.png" alt="">
                                                                            </a> 
                                                                        </td>


                                                                        <td><input id="productname" name="productname" type="text" class="form-control"></td>
                                                                        
                                                                        <td>
                                                                            <select class="select2 form-control select2-multiple"
                                                                            multiple="multiple" data-placeholder="Choose ...">
                                                                                <optgroup label="Sizes">
                                                                                    <option value="S">Small</option>
                                                                                    <option value="M">Medium</option>
                                                                                </optgroup>
                                                                                <optgroup label="Colors">
                                                                                    <option value="black">Black</option>
                                                                                    <option value="white">White</option>
                                                                                    <option value="blue">Blue</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-soft-success font-size-12">Active</div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="javascript:void(0);" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit" ><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="results"></tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="javascript:;" class="btn btn-primary waves-effect waves-light clone">Add Sub Variant Row</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <h4 class="card-title">Status</h4>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Active</option>
                                                                <option value="">Draft</option>
                                                            </select>
                                                            <br>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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

        <script>
            $('.wrapper').on('click', '.remove', function() {
              $('.remove').closest('.wrapper').find('.blank_sub_variant').not(':last').last().remove();
            });
            $('.wrapper').on('click', '.clone', function() {
              $('.clone').closest('.wrapper').find('.blank_sub_variant').last().clone().appendTo('table > tbody');
            });
        </script>

    </body>
</html>
