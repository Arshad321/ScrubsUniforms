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
                                <div class="page-title-left">
                                    <h4>Gift Card</h4>
                                </div>

                                <!-- <div class="page-title-right">
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
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-user-line align-middle me-1"></i> Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row prod_upload_card">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body card-c">
                                    <div class="order-detail-m">
                                        <div class="location">
                                            <h4>•••• •••• •••• xjcx</h4>
                                        </div>
                                        <div class="gift-recipt-wrp p-3 d-flex justify-content-between">
                                            <div class="expiry d-flex flex-column">
                                                <span class='text-dark fw-bold fs-5 m-0'>Expiry date</span>
                                                <span>Doesn't expire</span>
                                            </div>
                                            <div class="reciept d-flex flex-column">
                                                <span class='text-dark fw-bold fs-5 m-0'>Recipient</span>
                                                <span>None</span>
                                            </div>
                                            <div class="gift d-flex flex-column">
                                                <img src="assets/images/gift-card-1f1f48211af3.svg" alt="">
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body card-c">
                                    <div class="gift-recipt-wrp p-3 d-flex justify-content-between">
                                        <div class="expiry d-flex flex-column">
                                            <span>Current balance</span>
                                            <span class='text-dark fw-bold fs-4'>$10.00 USD</span>
                                        </div>
                                        <div class="reciept d-flex flex-column">
                                            <span>Initial balance</span>
                                            <span class='text-dark fw-bold fs-4'>$10.00 USD</span>
                                        </div>
                                        <div class="gift d-flex flex-column">
                                            <!-- <img src="assets/images/gift-card-1f1f48211af3.svg" alt=""> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-c">
                                <div class="comment">
                                    <div class="user-img">
                                        <p>IL</p>
                                    </div>
                                    <div class="text">
                                        <textarea name="" id="" cols="50" rows="3" class="w-100"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                </div>
                                <div class="comment-opts">
                                    <div class="icons-opts">
                                        <button class="btn">
                                            <i class="fa-regular fa-face-smile"></i></button>
                                        <button class="btn">
                                            <i class="fa-solid fa-at"></i>
                                        </button>
                                        <button class="btn">
                                            <i class="fa-solid fa-hashtag"></i>
                                        </button>
                                        <button class="btn">
                                            <i class="fa-solid fa-paperclip"></i>
                                        </button>
                                    </div>
                                    <button class="comment-post">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="note-head">
                                    <div class="d-flex flex-column">
                                        <div class="expiry d-flex flex-column">
                                            <span class='text-dark fw-bold fs-5 m-0'>Created by</span>
                                            <span>Muhammad Faizan</span>
                                        </div>
                                        <div class="expiry d-flex flex-column pt-3">
                                            <span class='text-dark fw-bold fs-5 m-0'>Customers</span>
                                        </div>
                                    </div>
                                </div>
                                <form class="app-search d-none d-lg-block">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="ri-search-line"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="card">
                                <div class="note-head">
                                    <div class="expiry d-flex flex-column pt-3">
                                        <span class='text-dark fw-bold fs-5 m-0'>Notes</span>
                                        <span class=''>No notes</span>
                                    </div>
                                    <button class="btn"><i class="fa-solid fa-pen"></i></button>
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
<style>
    .page-title-left>.status {
        gap: 10px !important;
    }

    .timeline:before {
        display: none !important;
    }
</style>

</html>