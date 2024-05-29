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
                                    <div class="status d-flex">
                                        <h4 class="mb-sm-0">#1575</h4>
                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                        <div class="badge badge-soft-danger font-size-12">Unfulfilled</div>
                                    </div>
                                    <p class='mb-0 pt-1'>January 31, 2024</p>
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
                                        <div class="location">
                                            <p class="mb-1">location</p>
                                            <h4>Dallas Texas</h4>
                                        </div>
                                        <div class="order-product-detail">
                                            <div class="order-product-img">
                                                <img src="./assets/images/dummy-product.jpg" alt="">
                                            </div>
                                            <div class="order-product-title">
                                                <h3>Zoe Alexandra - Women's Greenwich Hi-Rise Straight Leg Solid Scrub
                                                    Pant [1]</h3>
                                                <div class="skus">
                                                    <div class="badge badge-soft-secondary font-size-12">TALL / L /
                                                        Pewter
                                                    </div>
                                                    </br>
                                                    <span>SKU: 3027T</span>
                                                </div>
                                            </div>
                                            <div class="order-product-calculation">
                                                <span>$47.99&nbsp;x&nbsp;1</span>
                                            </div>
                                            <div class="order-product-result">
                                                <span>$47.99</span>
                                            </div>
                                        </div>
                                        <div class="order-product-detail">
                                            <div class="order-product-img">
                                                <img src="./assets/images/dummy-product.jpg" alt="">
                                            </div>
                                            <div class="order-product-title">
                                                <h3>Zoe Alexandra - Women's Greenwich Hi-Rise Straight Leg Solid Scrub
                                                    Pant [1]</h3>
                                                <div class="skus">
                                                    <div class="badge badge-soft-secondary font-size-12">TALL / L /
                                                        Pewter
                                                    </div>
                                                    </br>
                                                    <span>SKU: 3027T</span>
                                                </div>
                                            </div>
                                            <div class="order-product-calculation">
                                                <span>$47.99&nbsp;x&nbsp;1</span>
                                            </div>
                                            <div class="order-product-result">
                                                <span>$47.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-plc-btns d-flex text-end justify-content-end flex-wrap">
                                        <button class="btn btn-light waves-effect me-2">Fullfill items</button>
                                        <button class="btn btn-primary waves-effect">Create shipping labels</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body card-c">
                                    <div class="card-header-wrp">
                                        <div class="card-body-header">
                                            <div class="badge badge-soft-secondary secondary-card-btn"><i
                                                    class="fa-solid fa-check-to-slot"></i></span>Paid</div>
                                        </div>
                                    </div>
                                    <div class="order-detail-m">
                                        <div class="order-product-detail align-items-center order-product-detail-c">
                                            <div class="detail-item">
                                                <h5>Sub total</h5>
                                                <p class="btn">2 items</p>
                                            </div>
                                            <h5>$47.99&nbsp;x&nbsp;1</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c">
                                            <div class="detail-item">
                                                <h5>Discount</h5>
                                                <p class="btn">Freeship24</p>
                                            </div>
                                            <h5>-$8.99&nbsp;x&nbsp;1</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c ">
                                            <div class="detail-item">
                                                <h5>Shipping</h5>
                                                <p class="btn">Economy (0.499kg)</p>
                                            </div>
                                            <h5>$8.99&nbsp;x&nbsp;1</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c border-b-gray">
                                            <div class="detail-item">
                                                <h5>Total</h5>
                                                <!-- <p class="btn">Economy (0.499kg)</p> -->
                                            </div>
                                            <h5>$47.99&nbsp;x&nbsp;1</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c py-3 ">
                                            <div class="detail-item">
                                                <h5>paid by costumer</h5>
                                                <!-- <p class="btn">Economy (0.499kg)</p> -->
                                            </div>
                                            <h5>$8.99&nbsp;x&nbsp;1</h5>
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
                            <div class="card ">
                                <div class="note">
                                    <div class="note-head">
                                        <h5>note</h5>
                                        <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                    </div>
                                    <h5 class="text-secondary">no notes from costumers</h5>
                                </div>
                            </div>
                            <div class="card">
                                <div class="costumer-d">
                                    <div class="note-head">
                                        <h5>Costumer</h5>
                                        <button class="btn"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                    <div class="order-product-title">
                                        <h3>Zoe Alexandra</h3>
                                        <p>1 Order</p>
                                    </div>
                                    <div class="note-head">
                                        <h5>Contact information</h5>
                                        <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                    </div>
                                    <div class="note-head">
                                        <div class="order-product-title">
                                            <h3>Example@xyz.com</h3>
                                        </div>
                                        <button class="btn"><i class="fa-regular fa-clipboard"></i></button>
                                    </div>
                                    <div class="note-head">
                                        <h5>Shipping address</h5>
                                        <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                    </div>
                                    <div class="note-head">
                                        <h5>Zoe Alexandra</h5>
                                        <button class="btn"><i class="fa-regular fa-clipboard"></i></button>
                                    </div>
                                    <p>701 Wembley Van</p>
                                    <p>Cheasepeake VA 23322</p>
                                    <p>United State</p>
                                    <p>+12345678</p>
                                    <h5>billing address</h5>
                                    <h5 class="text-secondary">same as shipping address</h5>



                                </div>
                            </div>
                            <div class="card">
                                <div class="protect">
                                    <div class="protect-head">
                                        <i class="fa-solid fa-wallet"></i>
                                        <h5>Shpoify Protect</h5>
                                    </div>
                                    <p class='py-2'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore,
                                        commodi! Eum minima obcaecati quidem voluptatibus odit? Laboriosam dolorum
                                        dolore vero?</p>
                                    <a href="#" class='text-primary text-decoration-underline'>Learn more</a>
                                    <a href="#" class='text-primary text-decoration-underline mt-3 d-block'>View
                                        Indicators</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="note-head">
                                    <h5>Tags</h5>
                                    <button class="btn"><i class="fa-solid fa-pen"></i></button>
                                </div>
                                <input type="text" class="tag-input">
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