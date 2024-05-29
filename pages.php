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
                                <h4 class="mb-sm-0">Pages</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="add-pages.php">Add page</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="order-table">
                                        <div class="order-tabs">
                                            <ul class="nav nav-tabs nav-tabs-custom" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                                        aria-controls="home-tab-pane" aria-selected="true">All</button>
                                                </li>

                                            </ul>
                                        </div>
                                        <div>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-tab-pane"
                                                    role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                    <div class="table-head-top d-flex  align-items-center">
                                                        <div class="col-md-9">
                                                            <form class="app-search d-none d-lg-block">
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control w-100"
                                                                        placeholder="Search...">
                                                                    <span class="ri-search-line"></span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-center">
                                                            <div class="selectors-wrp d-flex">
                                                                <div class="">
                                                                    <select class="form-control select2">
                                                                        <option>Visiblity</option>
                                                                        <option value="EL">Electronic</option>
                                                                        <option value="FA">Fashion</option>
                                                                        <option value="FI">Fitness</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="">
                                                                <select class="form-control select2">
                                                                    <option>Sort</option>
                                                                    <option value="EL">Electronic</option>
                                                                    <option value="FA">Fashion</option>
                                                                    <option value="FI">Fitness</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-centered product_table datatable dt-responsive nowrap"
                                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th style="width:-1px;">
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck">&nbsp;</label>
                                                                        </div>
                                                                    </th>
                                                                    <th>Showing 20 Blog Posts</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-checkbox">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="ordercheck1">
                                                                            <label class="form-check-label mb-0"
                                                                                for="ordercheck1">&nbsp;</label>
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <div class='d-flex align-items-center'
                                                                            style='gap: 10px'>
                                                                            <div class="d-flex flex-column">
                                                                                <a href="javascript: void(0);"
                                                                                    class="text-dark fw-bold">Easy returns</a>
                                                                               <p style="color: #636e75"class="mb-0">Returns & Exchanges Thank you for shopping at www.scrubsuniforms.com where our goal is your complete satisfaction. If for any reason you are not co...</p>
                                                                               <p style="color: #636e75"class="mb-0">11 Jan at 1:09 pm</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                       

                                                            </tbody>
                                                        </table>
                                                        <div class="order-t-footer">
                                                            <div class="pages-count">
                                                                <p>Showing 1 to 10 of 11 entries</p>
                                                            </div>
                                                            <div class="pagination">
                                                                <button class="btn">
                                                                    <i class="fa-solid fa-chevron-left"></i>
                                                                </button>
                                                                <button class="btn">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

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
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php include('includes/right-sidebar.php') ?>
    <?php include('includes/scripts.php') ?>
</body>

</html>