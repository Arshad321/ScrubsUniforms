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
                                    <button class="btn btn-light waves-effect me-2"><i class="fa-solid fa-arrow-left"></i> Refund</button> 
                                    <!-- ORDER #1575 -->
                                    </div>
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
                                            Ottawa ON K2P 2L8 Canada
                                        </div>
                                    </div>
                                    <div class="order-detail-m">
                                        <div class="order-product-detail border-bottom-0 border-top-0">
                                            <div class="table-responsive" style="width: 100%;">
                                                <table
                                                    class="table table-centered product_table datatable dt-responsive nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>PRODUCT</th>
                                                            <th></th>
                                                            <th>SKU</th>
                                                            
                                                            <th>QUANTITY</th>
                                                            <th>TOTAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <td>
                                                                <img src="./assets/images/dummy-product.jpg"
                                                                    class="rounded-2" width="70" height="40"
                                                                    alt="product">
                                                            </td>
                                                            <td>Zoe Alexandra - Women's Greenwich Hi-Rise Straight</td>
                                                            <td> 3027T</td>
                                                            
                                                            <td> 2 Item </td>
                                                            <td> $79.98</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <p class="px-4">Refund Items will be removed from the orders</p>
                                        <hr>
                                        <div class="form-checkbox px-4 py-4">
                                          <input type="checkbox" class="form-check-input" id="ordercheck1" checked>
                                           <label class="form-check-label mb-0" for="ordercheck1">Restoke Itms</label>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body card-c">
                                        <div class="card-body-header">
                                           <h5>Reason For Refund Order</h5>
                                        </div>

                                        <form action="">
                                            <textarea name="reasonrefund"  id="reasonrefund" class="form-control" palceholder="Enter the reason For refund order"></textarea>
                                            <p class="pt-2">Only you and other staff can see this reason</p>
                                        </form>
                                </div>
                            </div>
                            <p class="text-center">Learn more about <a href="#"> refunding orders</a></p>
                        </div>

                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="costumer-d">
                                    <div class="note-head">
                                        <h5>Summary</h5>
                                    </div>
                                    <div class="order-product-title">
                                            <div class="order-product-detail align-items-center order-product-detail-c">
                                                <div class="detail-item">
                                                    <b>Sub total <br> <span>1 items</span></b>
                                                   
                                                </div>
                                                <h5>$79.98&nbsp;x&nbsp;2</h5>
                                            </div>
                                           <br>
                                       
                                        <div class="align-items-center order-product-detail-c ">
                                            <div class="detail-item">
                                                <b>Tax</b>
                                            </div>
                                            <h5>$1.98&nbsp;x&nbsp;2</h5>
                                        </div>
                                        <div class="align-items-center order-product-detail-c py-4 border-b-gray border-top-100">
                                            <div class="detail-item">
                                                <h5>Refund Total</h5>
                                            </div>
                                            <h5>$79.99&nbsp;x&nbsp;1</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                <div class="costumer-d">
                                    <div class="note-head">
                                        <h5>Refund Amount</h5>
                                       
                                    </div>
                                    <form action="">
                                    <div class="order-product-title">
                                        <p><b> (For Testing ) Bugus getway</b>: <span>xxxxx9857</span> <br></p>
                                        <input type="text" placeholder="$79.99" class="form-control">
                                        <br>
                                        <p>$79.99 Available for refund</p>
                                    </div>
                                </div> 
                                <hr>
                                <button class="btn btn-primary waves-effect">Refund <span>$79.99 </span></button>
                                <div class="form-checkbox px-4 py-4">
                                          <input type="checkbox" class="form-check-input" id="ordercheck1" checked>
                                           <label class="form-check-label mb-0" for="ordercheck1">Send <a href="#"> Notification</a> to the customer</label>
                                </div>
                                </form>
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