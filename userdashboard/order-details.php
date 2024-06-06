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
                                        <h4 class="mb-sm-0">ORDER #1575</h4>

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
                                            <button class='btn warning-btn'>Unfulfilled (2)</button>
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
                                    <div class="order-detail-m">
                                        <div class="order-product-detail border-bottom-0 border-top-0">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-centered product_table datatable dt-responsive nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>PRODUCT</th>
                                                            <th></th>
                                                            <th>SKU</th>
                                                            <th>PRICE</th>
                                                            <th>QUANTITY</th>
                                                            <th>TOTAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="./assets/images/dummy-product.jpg"
                                                                    class="rounded-2" width="70" height="40"
                                                                    alt="product">
                                                            </td>
                                                            <td>Zoe Alexandra - Women's Greenwich Hi-Rise Straight</td>
                                                            <td> 3027T</td>
                                                            <td> April 1, 2024 at 1:15 pm </td>
                                                            <td> 2 Item </td>
                                                            <td> $79.98</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="./assets/images/dummy-product.jpg"
                                                                    class="rounded-2" width="70" height="40"
                                                                    alt="product">
                                                            </td>
                                                            <td>Zoe Alexandra - Women's Greenwich Hi-Rise Straight</td>
                                                            <td> 3027T</td>
                                                            <td> April 1, 2024 at 1:15 pm </td>
                                                            <td> 2 Item </td>
                                                            <td> $79.98</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="order-product-detail align-items-center order-product-detail-c">
                                            <div class="detail-item">
                                                <b>Sub total</b>
                                                <p class="btn">2 items</p>
                                            </div>
                                            <h5>$79.98&nbsp;x&nbsp;2</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c">
                                            <div class="detail-item">
                                                <b>Discount</b>
                                                <!-- <p class="btn">Freeship24</p> -->
                                            </div>
                                            <h5>-$1.98&nbsp;x&nbsp;2</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c ">
                                            <div class="detail-item">
                                                <b>Shipping</b>
                                                <p class="btn">Economy (0.499kg)</p>
                                            </div>
                                            <h5>$79.98&nbsp;x&nbsp;2</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c ">
                                            <div class="detail-item">
                                                <b>Tax</b>
                                            </div>
                                            <h5>$1.98&nbsp;x&nbsp;2</h5>
                                        </div>
                                        <div
                                            class="align-items-center order-product-detail-c py-4 border-b-gray border-top-100">
                                            <div class="detail-item">
                                                <h5>Total</h5>
                                            </div>
                                            <h5>$79.99&nbsp;x&nbsp;1</h5>
                                        </div>
                                    </div>
                                    <div class="order-plc-btns d-flex text-end justify-content-end flex-wrap">
                                        <button class="btn btn-light waves-effect me-2">Fullfill items</button>
                                        <button class="btn btn-primary waves-effect">Change shipping </button>
                                    </div>
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
                                        <h5>Billing Address</h5>
                                        <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                    </div>
                                    <div class="order-product-title">
                                        <p><b> Payment status </b>: <span>Paid</span> <br>
                                            <span>Jhone smith</span>
                                            <br>
                                            <span>
                                                151 O' Connor Street
                                                Ottawa ON K2P 2L8 Canada
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="costumer-d">
                                    <div class="note-head">
                                        <h5>Shipping Address</h5>
                                        <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                    </div>
                                    <div class="order-product-title">
                                        <p><b> Fullfliment status </b>: <span>Unfulfilled</span> <br>
                                            <span>Jhone smith</span>
                                            <br>
                                            <span>
                                                151 O' Connor Street
                                                Ottawa ON K2P 2L8 Canada
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-plc-btns d-flex text-end justify-content-end flex-wrap">
                                        <a href="./return.php" class="btn btn-light waves-effect me-2">Return</a>
                                        <a href="./refund.php" class="btn btn-primary waves-effect">Refund </a>
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
</body>

</html>