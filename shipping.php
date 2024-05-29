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
                                <h4 class="mb-sm-0">Shipping Labels</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <div class="dropdown d-inline-block user-dropdown">
                                                <button type="button" class="btn header-item waves-effect"
                                                    style="padding-top: 0; height: 100%;" id="page-header-user-dropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="d-none d-xl-inline-block ms-1">Pickups and
                                                        manifests</span>
                                                    <!-- <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> -->
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
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                        aria-controls="profile-tab-pane" aria-selected="false">Purchased
                                                        today</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                                                        aria-controls="contact-tab-pane" aria-selected="false">Not
                                                        printed</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                                                        aria-controls="contact-tab-pane"
                                                        aria-selected="false">Printed</button>
                                                </li>
                                            </ul>
                                            <div class="filters">
                                                <div class="search">
                                                    <button class="btn">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                    <button class="btn">
                                                        <i class="fa-solid fa-filter"></i>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="btn"> <i
                                                            class="fa-solid fa-table-columns"></i></button>
                                                </div>
                                                <div>
                                                    <i class="fa-solid fa-arrows-up-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-tab-pane"
                                                    role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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
                                                                    <th>Order</th>
                                                                    <th>Label Purchase Date</th>
                                                                    <th>Items</th>
                                                                    <th>Package</th>
                                                                    <th>Weight</th>
                                                                    <th>Cost</th>
                                                                    <th>Shipping Services</th>
                                                                    <th>Label Status</th>
                                                                    <th>Delivery Status</th>
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                                        <a href="./order-detail.php"
                                                                            class="text-dark"><span
                                                                                class="fw-bold">#1575</span>
                                                                            <span>Thomas Matchett Fort Worth, TX</span>
                                                                        </a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                       <div class="d-flex align-items-center" style="gap: 20px">
                                                                       <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            2</div>
                                                                        <div class="fw-bold">
                                                                            Multiple itmes
                                                                        </div>
                                                                       </div>

                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="fw-bold">
                                                                                grey bag
                                                                            </div>
                                                                            <div>
                                                                                12 x 9 x 0.75 in
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        0.9 Lb
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            $5.52
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center" style="gap: 15px">
                                                                        <div>
                                                                            <img src="./assets/images/carrier-usps.svg" style="width: 20px;" alt="">
                                                                        </div>
                                                                        <div>
                                                                            <span class="fw-bold" style="margin-bottom: 0px;">Group Advantage</span>
                                                                            <a href="javascript: void(0);" class="text-dark">420761319300110570802923211354</a>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Printed</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            No status yet
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
                                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                    aria-labelledby="profile-tab" tabindex="0">
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
                                                                    <th>Order</th>
                                                                    <th>Label Purchase Date</th>
                                                                    <th>Items</th>
                                                                    <th>Package</th>
                                                                    <th>Weight</th>
                                                                    <th>Cost</th>
                                                                    <th>Shipping Services</th>
                                                                    <th>Label Status</th>
                                                                    <th>Delivery Status</th>
                                                                </tr>  
                                                            </thead>
                                                            <tbody>
                                                       
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
                                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                    aria-labelledby="contact-tab" tabindex="0">
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
                                                                    <th>Order</th>
                                                                    <th>Label Purchase Date</th>
                                                                    <th>Items</th>
                                                                    <th>Package</th>
                                                                    <th>Weight</th>
                                                                    <th>Cost</th>
                                                                    <th>Shipping Services</th>
                                                                    <th>Label Status</th>
                                                                    <th>Delivery Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                        
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
                                                <div class="tab-pane fade" id="tab-pane" role="tabpanel"
                                                    aria-labelledby="disabled-tab" tabindex="0">
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
                                                                    <th>Order</th>
                                                                    <th>Label Purchase Date</th>
                                                                    <th>Items</th>
                                                                    <th>Package</th>
                                                                    <th>Weight</th>
                                                                    <th>Cost</th>
                                                                    <th>Shipping Services</th>
                                                                    <th>Label Status</th>
                                                                    <th>Delivery Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                          
                                                            </tbody>
                                                        </table>
                                                        <div class="order-t-footer">
                                                            <div class="pages-count">
                                                                <p>Showing 1 to 10 of 11 entries</p>
                                                            </div>
                                                            <div class="pagination">
                                                                <button class="btn">
                                                                    <i class="fas fa-solid fa-chevron-left"></i>
                                                                </button>
                                                                <button class="btn">
                                                                    <i class="fas fa-solid fa-chevron-right"></i>
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