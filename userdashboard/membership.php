<?php include("includes/compatibility.php"); ?>
<?php include("includes/style.php"); ?>
</head>

<body data-sidebar="dark">
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
                                <h4 class="mb-sm-0">Membership</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Export</a></li>
                                        <li class="breadcrumb-item">
                                            <div class="dropdown d-inline-block user-dropdown">
                                                <button type="button" class="btn header-item waves-effect"
                                                    style="padding-top: 0; height: 100%;" id="page-header-user-dropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="d-none d-xl-inline-block ms-1">More actions</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-user-line align-middle me-1"></i> Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Create
                                                order</a> </li>
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
                                                <li>
                                                    <a class="nav-link fw-bold" href="#">+</a>
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
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Status</th>
                                                                    <th>Plan</th>
                                                                    <th>Billing</th>
                                                                    <th>Paid</th>
                                                                    <th>Scince</th>
                                                                    <th style="width: 120px;">Actions</th>
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
                                                                        <a href="#" class="text-dark">
                                                                            <span class="fw-bold">Colin wood</span>
                                                                        </a>
                                                                    </td>
                                                                    <td> cw@gmail.com</td>
                                                                    <td> Active </td>
                                                                    <td> Super Plan </td>
                                                                    <td> Free</td>
                                                                    <td> --</td>
                                                                    <td> Jun - 12 - 2024</td>
                                                                    <td class="d-flex justify-content-between">
                                                                        <a href="./edit-membership.php"
                                                                            class="btn btn-primary btn-small mx-2">Edit</a>
                                                                        <a href="./edit-membership.php"
                                                                            class="btn btn-primary btn-small  mx-2">View</a>
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
                                                                        <a href="./order-details.php" class="text-dark">
                                                                            <span class="fw-bold">Colin wood</span>
                                                                        </a>
                                                                    </td>
                                                                    <td> cw@gmail.com</td>
                                                                    <td> Active </td>
                                                                    <td> Super Plan </td>
                                                                    <td> Free</td>
                                                                    <td> --</td>
                                                                    <td> Jun - 12 - 2024</td>
                                                                    <td class="d-flex justify-content-between">
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small mx-2">Edit</a>
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small  mx-2">View</a>
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
                                                                        <a href="./order-details.php" class="text-dark">
                                                                            <span class="fw-bold">Colin wood</span>
                                                                        </a>
                                                                    </td>
                                                                    <td> cw@gmail.com</td>
                                                                    <td> Active </td>
                                                                    <td> Super Plan </td>
                                                                    <td> Free</td>
                                                                    <td> --</td>
                                                                    <td> Jun - 12 - 2024</td>
                                                                    <td class="d-flex justify-content-between">
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small mx-2">Edit</a>
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small  mx-2">View</a>
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
                                                                        <a href="./order-details.php" class="text-dark">
                                                                            <span class="fw-bold">Colin wood</span>
                                                                        </a>
                                                                    </td>
                                                                    <td> cw@gmail.com</td>
                                                                    <td> Active </td>
                                                                    <td> Super Plan </td>
                                                                    <td> Free</td>
                                                                    <td> --</td>
                                                                    <td> Jun - 12 - 2024</td>
                                                                    <td class="d-flex justify-content-between">
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small mx-2">Edit</a>
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small  mx-2">View</a>
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
                                                                        <a href="./order-details.php" class="text-dark">
                                                                            <span class="fw-bold">Colin wood</span>
                                                                        </a>
                                                                    </td>
                                                                    <td> cw@gmail.com</td>
                                                                    <td> Active </td>
                                                                    <td> Super Plan </td>
                                                                    <td> Free</td>
                                                                    <td> --</td>
                                                                    <td> Jun - 12 - 2024</td>
                                                                    <td class="d-flex justify-content-between">
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small mx-2">Edit</a>
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small  mx-2">View</a>
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
                                                                        <a href="./order-details.php" class="text-dark">
                                                                            <span class="fw-bold">Colin wood</span>
                                                                        </a>
                                                                    </td>
                                                                    <td> cw@gmail.com</td>
                                                                    <td> Active </td>
                                                                    <td> Super Plan </td>
                                                                    <td> Free</td>
                                                                    <td> --</td>
                                                                    <td> Jun - 12 - 2024</td>
                                                                    <td class="d-flex justify-content-between">
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small mx-2">Edit</a>
                                                                        <a href="./order-details.php"
                                                                            class="btn btn-primary btn-small  mx-2">View</a>
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
                                                                    <th>order</th>
                                                                    <th>Date</th>
                                                                    <th>Customer</th>
                                                                    <th>Channel</th>
                                                                    <th>Total</th>
                                                                    <th>Payment Status</th>
                                                                    <th>Fullfliment Status</th>
                                                                    <th>Items</th>
                                                                    <th>Delivery Status</th>
                                                                    <th>Delivery Method</th>
                                                                    <th style="width: 120px;">Action</th>
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
                                                                        <span class="fw-bold">#1575</span>
                                                                    </td>
                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>
                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-primary primary-badge font-size-12">
                                                                            in Transit</div>
                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>
                                                                    <td>yesterday at 1:15 pm</td>
                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-primary primary-badge font-size-12">
                                                                            in Transit</div>
                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>
                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-primary primary-badge font-size-12">
                                                                            in Transit</div>
                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <span class="fw-bold">#1575</span>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <a href="#" class='text-dark'> <span
                                                                                class="fw-bold">#1575</span></a>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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
                                                                        <span class="fw-bold">#1575</span>
                                                                    </td>


                                                                    <td>yesterday at 1:15 pm</td>

                                                                    <td>
                                                                        Shakeel Bickle
                                                                    </td>
                                                                    <td>
                                                                        Online store
                                                                    </td>
                                                                    <td>
                                                                        $79.98
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            <span class="list-dot"></span>Paid</div>

                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-warning warning-badge font-size-12">
                                                                            <span class="list-undot"></span>unfullfilled
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="fw-bold">
                                                                            2 Itmes
                                                                        </div>
                                                                    </td>
                                                                    <td>

                                                                    </td>
                                                                    <td>
                                                                        Economy
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="badge badge-soft-secondary font-size-12">
                                                                            Refund</div>
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