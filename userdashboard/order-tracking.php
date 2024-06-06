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
                                <h4 class="mb-sm-0">Order Tracking</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Order</a></li>
                                        <li class="breadcrumb-item active">Order Tracking</li>
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
                                            <div class="card">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label" for="orderID">Enter Your Order
                                                            ID</label>
                                                        <input id="orderID" name="productname" type="text"
                                                            placeholder="#1575" class="form-control">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label" for="email">Enter Your Email</label>
                                                        <input id="email" name="email" type="text" class="form-control"
                                                            placeholder="jhonesmith@gmail.com">
                                                    </div>
                                                    <div class="col-md-2 mb-3 pt-2">
                                                        <label class="form-label" for=""></label>
                                                        <button type="submit" class="btn btn-primary d-block">Submit
                                                            </buttona>
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
                    <div class="row prod_upload_card">
                        <div class="col-lg-12">
                            <div class="card pt-2 pb-0">
                                <div class="card-body">
                                    <div class="row justify-content-center align-items-center text-center">
                                        <div class="col-lg-3 border pt-3">
                                            <h5>ORDER PLACED</h5>
                                            <P>14 JAN</P>
                                        </div>
                                        <div class="col-lg-3 border pt-3">
                                            <h5>TOTAL</h5>
                                            <P>$79.88</P>
                                        </div>
                                        <div class="col-lg-3 border pt-3">
                                            <h5>SHIP TO</h5>
                                            <P>EMLY MORGAN</P>
                                        </div>
                                        <div class="col-lg-3 border pt-3">
                                            <h5>ORDER NUMBER</h5>
                                            <P>#1575</P>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a href="#orderplaced" class="nav-link" data-bs-toggle="tab">
                                                    <span class="step-number"><i class="fa-solid fa-check"></i></span>
                                                    <span class="step-title"> Order Placed <br> 14 Jan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dispach" class="nav-link" data-bs-toggle="tab">
                                                    <span class="step-number"><i class="fa-solid fa-truck"></i></span>
                                                    <span class="step-title">Dispatch <br> 14 Jan</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#delivered" class="nav-link" data-bs-toggle="tab">
                                                    <span class="step-number"><i class="fa-solid fa-gift"></i></span>
                                                    <span class="step-title">Delivered <br> 17 jan to 19 jan</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end ul -->
                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                            <!-- Tabs 1 -->
                                            <div class="tab-pane" id="orderplaced">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="card-body card-c">
                                                            <div class="order-detail-m">
                                                                <div
                                                                    class="order-product-detail border-bottom-0 border-top-0">
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
                                                                                            class="rounded-2" width="70"
                                                                                            height="40" alt="product">
                                                                                    </td>
                                                                                    <td>Zoe Alexandra - Women's
                                                                                        Greenwich Hi-Rise Straight</td>
                                                                                    <td> 3027T</td>
                                                                                    <td> April 1, 2024 at 1:15 pm </td>
                                                                                    <td> 2 Item </td>
                                                                                    <td> $79.98</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <img src="./assets/images/dummy-product.jpg"
                                                                                            class="rounded-2" width="70"
                                                                                            height="40" alt="product">
                                                                                    </td>
                                                                                    <td>Zoe Alexandra - Women's
                                                                                        Greenwich Hi-Rise Straight</td>
                                                                                    <td> 3027T</td>
                                                                                    <td> April 1, 2024 at 1:15 pm </td>
                                                                                    <td> 2 Item </td>
                                                                                    <td> $79.98</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="order-product-detail align-items-center order-product-detail-c">
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
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="costumer-d p-3 order-detail-m">
                                                            <div class="note-head">
                                                                <h5>Billing Address</h5>
                                                                <button class="btn"><i class="fa-solid fa-pen"
                                                                        aria-hidden="true"></i></button>
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
                                                        <div class="costumer-d p-3 order-detail-m">
                                                            <div class="note-head">
                                                                <h5>Shipping Address</h5>
                                                                <button class="btn"><i class="fa-solid fa-pen" aria-hidden="true"></i></button>
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

                                                </div>
                                            </div>
                                            <!-- Tabs 2 -->
                                            <div class="tab-pane" id="dispach">
                                            <div class="row">
                                                    <div class="col-lg-4">
                                                        <h3>SHIPPING INFORMATION</h3>
                                                        <div class="costumer-d p-3 order-detail-m">
                                                            <div class="note-head">
                                                                <h5>Shipping Address</h5>
                                                                <button class="btn"><i class="fa-solid fa-pen" aria-hidden="true"></i></button>
                                                            </div>
                                                            <div class="order-product-title">
                                                                <p><b> Fullfliment status </b>: <span>Unfulfilled</span> <br>
                                                                    <span>Jhone smith</span>
                                                                    <br>
                                                                    <span>
                                                                    3614 SW H K Dodgen Loop, Temple, TX 76504, USA

                                                                    </span>
                                                                </p>
                                                                <h5>Courier : UPS</h5>
                                                                <p> <b>Tracking Link : </b> <a href="">https://upstracking.com/htrdc</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=3614%20SW%20H%20K%20Dodgen%20Loop+(ScrubsUniforms)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Tabs 3 -->
                                            <div class="tab-pane" id="delivered">
                                               <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="pb-3 pt-3">SHIPPING DETAILS</h4> 
                                                    <div class="timeline position-relative">
                                                        <p>Latest Update Jan 15 - 2024</p>
                                                        <div class="timeline-items">
                                                            <div class="item-text">
                                                                <div class="dot"></div>
                                                                <h5>Delivered - OAKLAND CA USA
                                                                </h5>
                                                            </div>
                                                            <p class="btn">11:49 pm</p>
                                                        </div>
                                                        <div class="timeline-items">
                                                            <div class="item-text">
                                                                <div class="dot"></div>
                                                                <h5>Out for delivery - OAKLAND CA USA</h5>
                                                            </div>
                                                            <p class="btn">1:49 pm</p>
                                                        </div>
                                                        <div class="timeline-items">
                                                            <div class="item-text">
                                                                <div class="dot"></div>
                                                                <h5>Arrival Scan - OAKLAND CA USA</h5>
                                                            </div>
                                                            <p class="btn">11:49 pm</p>
                                                        </div>
                                                        <div class="timeline-items">
                                                            <div class="item-text">
                                                                <div class="dot"></div>
                                                                <h5>Departure Scan - OAKLAND CA USA</h5>
                                                            </div>
                                                            <p class="btn">2:00 pm</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                  <h4>Courier :</h4> 
                                                  <p> <img width="68" height="68" src="https://img.icons8.com/color/68/fedex.png" alt="fedex"/>

</p>
                                                  <h5>Tracking Number :</h5> 
                                                  <p> #18737358735</p>

                                                  <h5>Package Content :</h5> 
                                                  <p> 2x - Zoe Alexandra - Women's Greenwich Hi-Rise Straight</p>
                                                  
                                               </div>   
                                               <div class="col-md-6">
                                                    <h4 class="pb-3 pt-3">PACKAGE LOCATION</h4>  
                                                    <P>OAKLAND CA USA</P>
                                                    <hr>
                                                   <p> <b>Sign By</b>  - <i class="fa-solid fa-signature"></i> Handrix</p>
                                              
                                                   <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=3614%20SW%20H%20K%20Dodgen%20Loop+(ScrubsUniforms)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                                                </div>   
                                               </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container-fluid -->

<style>
    .timeline::before {
    display: none;
}
</style>

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