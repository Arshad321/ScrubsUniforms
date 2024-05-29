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
                                <h4 class="mb-sm-0">Add Product</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Add Product</li>
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

                                    <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                        <ul class="twitter-bs-wizard-nav">
                                            <li class="nav-item">
                                                <a href="#basic-info" class="nav-link" data-bs-toggle="tab">
                                                    <span class="step-number">01</span>
                                                    <span class="step-title">Basic Info</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#product-img" class="nav-link" data-bs-toggle="tab">
                                                    <span class="step-number">02</span>
                                                    <span class="step-title">Product Img</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#metadata" class="nav-link" data-bs-toggle="tab">
                                                    <span class="step-number">03</span>
                                                    <span class="step-title">Meta Data</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end ul -->
                                        <div class="tab-content twitter-bs-wizard-tab-content">
                                            <div class="tab-pane" id="basic-info">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="card">
                                                                <h4 class="card-title">Basic Information</h4>
                                                                <p class="card-title-desc">Fill all information below
                                                                </p>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="productname">Product
                                                                        Name</label>
                                                                    <input id="productname" name="productname"
                                                                        type="text" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="productdesc">Product
                                                                        Description</label>
                                                                    <!-- <textarea class="form-control" id="productdesc" rows="5"></textarea> -->
                                                                    <textarea id="elm1" name="area"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <h4 class="card-title mb-2">Price</h4>
                                                                <div class="row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label"
                                                                            for="price">Price</label>
                                                                        <input id="price" name="price" type="text"
                                                                            class="form-control" placeholder="$ 0.00">
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label" for="price">Compare-at
                                                                            Price</label>
                                                                        <input id="price" name="price" type="text"
                                                                            class="form-control" placeholder="$ 0.00">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <h4 class="card-title mb-2">Schedule Sale</h4>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                    <input type="checkbox" id="switch7" switch="info">
                                                                            <label for="switch7" data-on-label="Yes" data-off-label="No" onclick="toggleSales ()"></label>
                                                                    </div>
                                                                    <div id="showSales" class="col-12 d-none"
                                                                        style="display: flex; flex-wrap: wrap; gap: 20px;">
                                                                        <div class="col-md-3 mb-3">
                                                                            <label class="form-label" for="">Start
                                                                                Date</label>
                                                                            <input id="s_date" name="price" type="date"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3 mb-3">
                                                                            <label class="form-label" for="">Start
                                                                                Time</label>
                                                                            <input id="s_time" name="price" type="time"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3 mb-3">
                                                                            <label class="form-label" for="">End
                                                                                Date</label>
                                                                            <input id="e_date" name="price" type="date"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3 mb-3">
                                                                            <label class="form-label" for="">End
                                                                                Time</label>
                                                                            <input id="e_time" name="price" type="time"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3 mb-3">
                                                                            <label class="form-label"
                                                                                for="price">Discount Type</label>
                                                                            <select class="form-control select2">
                                                                                <option>Select</option>
                                                                                <option value="">Percent </option>
                                                                                <option value="">Amount</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3 mb-3">
                                                                            <label class="form-label"
                                                                                for="">Percentage/Amount</label>
                                                                            <input name="price" type="text"
                                                                                placeholder="20% / $20"
                                                                                class="form-control">
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="taxCal mb-3">
                                                                                <input type="checkbox" checked>
                                                                                <p>Charge tax on this product</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label" for="price">Cost per
                                                                            item</label>
                                                                        <input id="price" name="price" type="text"
                                                                            class="form-control" placeholder="$ 0.00">
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label"
                                                                            for="price">Profit</label>
                                                                        <input id="price" name="price" type="text"
                                                                            class="form-control" placeholder="$ 0.00"
                                                                            disabled>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label"
                                                                            for="price">Margin</label>
                                                                        <input id="price" name="price" type="text"
                                                                            class="form-control" placeholder="$ 0.00"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <h4 class="card-title mb-2">Inventory</h4>
                                                                <div class="taxCal mb-3">
                                                                    <input type="checkbox" checked>
                                                                    <p>Track quantity</p>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <h4 class="card-title mb-2">Quantity</h4>
                                                                    <label for="">Dallas Texas</label>
                                                                    <input type="text" placeholder="0"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <div class="taxCal mb-3">
                                                                        <input type="checkbox" checked>
                                                                        <p>Continue selling when out of stock</p>
                                                                    </div>
                                                                    <div class="taxCal mb-3">
                                                                        <input type="checkbox" checked>
                                                                        <p>This product has a SKU or barcode</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <h4 class="card-title mb-2">Shipping</h4>
                                                                <p class="card-title-desc">Physical Product</p>
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-12">
                                                                        <p>Ready-to-pack product dimensions</p>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-3">
                                                                            <label for="">Length</label>
                                                                            <input type="text" placeholder=""
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label for="">Width</label>
                                                                            <input type="text" placeholder=""
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label for="">Height</label>
                                                                            <input type="text" placeholder=""
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label for="">select size form</label>
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">cm</option>
                                                                                <option value="">in</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-3">
                                                                            <label for="">Weight</label>
                                                                            <input type="text" placeholder=""
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label for="">select Wight form</label>
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">kg</option>
                                                                                <option value="">lb</option>
                                                                                <option value="">oz</option>
                                                                                <option value="">g</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <div class="col-md-5">
                                                                            <label for="">Default package (Used for
                                                                                single-item orders containing this
                                                                                product)</label>
                                                                            <select name="" id="" class="form-control">
                                                                                <option value="">Add Packges</option>
                                                                                <option value="">Custom</option>
                                                                                <option value="">Scrubs Uniforms
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-2">
                                                                <h4 class="card-title mb-2">Upload Size Chart</h4>
                                                                <div class="input-group">
                                                                    <input type="file" class="form-control "
                                                                        id="customFile">
                                                                </div>
                                                            </div>
                                                            <div class="card mb-2">
                                                                <h4 class="card-title mb-2">Discountinue Variant</h4>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label for="">Sizes</label>
                                                                        <select name="" id="" class="form-control">
                                                                            <option value="">XS</option>
                                                                            <option value="">S</option>
                                                                            <option value="">M</option>
                                                                            <option value="">L</option>
                                                                            <option value="">XL</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="">Colors</label>
                                                                        <select name="" id="" class="form-control">
                                                                            <option value="">Black</option>
                                                                            <option value="">White</option>
                                                                            <option value="">Blue</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2"> <a href="javascript:;"
                                                                            class="btns_blue">Add</a></div>
                                                                </div>
                                                                <br><br><br>
                                                                <h4 class="card-title mb-2">Next Availablity Variant
                                                                    Date</h4>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label for="">Sizes</label>
                                                                        <select name="" id="" class="form-control">
                                                                            <option value="">XS</option>
                                                                            <option value="">S</option>
                                                                            <option value="">M</option>
                                                                            <option value="">L</option>
                                                                            <option value="">XL</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="">Colors</label>
                                                                        <select name="" id="" class="form-control">
                                                                            <option value="">Black</option>
                                                                            <option value="">White</option>
                                                                            <option value="">Blue</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="">Schedule</label>
                                                                        <input type="datetime-local" id="" name=""
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="col-md-2"> <a href="javascript:;"
                                                                            class="btns_blue">Add</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-2">
                                                                <h4 class="card-title mb-2">Variants</h4>
                                                                <!-- <a href="#" class=" mb-2">+ Add Options like Size or color</a> -->
                                                                <div class="variation_options">
                                                                    <div>
                                                                        <label for="">Size</label>
                                                                        <input type="text" placeholder="Value"
                                                                            id="item-size">
                                                                        <span id="add-size">Add Item</span>
                                                                        <ul id="size-list"> </ul>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">Colors</label>
                                                                        <input type="text" placeholder="Value"
                                                                            id="item-color">
                                                                        <span id="add-color">Add Item</span>
                                                                        <ul id="color-list"> </ul>
                                                                    </div>
                                                                    <div>
                                                                        <label for="">Style</label>
                                                                        <input type="text" placeholder="Value"
                                                                            id="item-style">
                                                                        <span id="add-style">Add Item</span>
                                                                        <ul id="style-list"> </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-2">
                                                                <div class="variations_list table-responsive">
                                                                    <table
                                                                        class="table table-centered product_table datatable dt-responsive nowrap"
                                                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th style="width: 20px;">
                                                                                    <div class="form-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            id="ordercheck">
                                                                                        <label
                                                                                            class="form-check-label mb-0"
                                                                                            for="ordercheck">&nbsp;</label>
                                                                                    </div>
                                                                                </th>
                                                                                <th>Variant</th>
                                                                                <th>Price</th>
                                                                                <th>Available</th>
                                                                                <th>On Hand</th>
                                                                                <th>SKU</th>
                                                                                <th>Vendor</th>
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
                                                                                        <label
                                                                                            class="form-check-label mb-0"
                                                                                            for="ordercheck1">&nbsp;</label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="text-dark fw-bold">
                                                                                        <label class="picture"
                                                                                            for="picture__input"
                                                                                            tabIndex="0">
                                                                                            <span
                                                                                                class="picture__image"></span>
                                                                                        </label>
                                                                                        <input type="file"
                                                                                            name="picture__input"
                                                                                            id="picture__input">
                                                                                        <span>XXS / Black</span>
                                                                                    </a>
                                                                                </td>
                                                                                <td><input type="text" class="p_price"
                                                                                        value="43.99"></td>
                                                                                <td><input type="text" class="p_qyt"
                                                                                        value="200"></td>
                                                                                <td><input type="text" class="p_on_hand"
                                                                                        value="0"></td>
                                                                                <td><span class="p_sku">4399</span></td>
                                                                                <td><span
                                                                                        class="p_vender">Dickies</span>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="me-3 text-primary"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="Edit"><i
                                                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="text-danger"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="Delete"><i
                                                                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card">
                                                                <h4 class="card-title">Status</h4>
                                                                <select name="" id="">
                                                                    <option value="">Active</option>
                                                                    <option value="">Draft</option>
                                                                </select>
                                                            </div>
                                                            <div class="card">
                                                                <h4 class="card-title">Product organization</h4>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="manufacturername">Vendor</label>
                                                                    <input id="manufacturername" name="manufacturername"
                                                                        type="text" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="manufacturername">Product Type</label>
                                                                    <input id="manufacturername" name="manufacturername"
                                                                        type="text" placeholder="e.g Top, Bottm"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        class="control-label">Category</label>
                                                                    <select class="form-control select2">
                                                                        <option>Select</option>
                                                                        <option value="EL">Electronic</option>
                                                                        <option value="FA">Fashion</option>
                                                                        <option value="FI">Fitness</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        class="control-label">Collection</label>
                                                                    <select class="form-control select2">
                                                                        <option>Select</option>
                                                                        <option value="TO">Touchscreen</option>
                                                                        <option value="CF">Call Function</option>
                                                                        <option value="NO">Notifications
                                                                        </option>
                                                                        <option value="FI">Fitness</option>
                                                                        <option value="OU">Outdoor</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        class="control-label">Tags</label>
                                                                    <select class="form-control select2">
                                                                        <option>Select</option>
                                                                        <option value="TO">Touchscreen</option>
                                                                        <option value="CF">Call Function</option>
                                                                        <option value="NO" selected>Notifications
                                                                        </option>
                                                                        <option value="FI" selected>Fitness</option>
                                                                        <option value="OU">Outdoor</option>
                                                                    </select>
                                                                </div>
                                                                <!-- <div class="mb-3">
                                                                    <label class="form-label"
                                                                        class="control-label">Collection</label>

                                                                    <select
                                                                        class="select2 form-control select2-multiple"
                                                                        multiple="multiple"
                                                                        data-placeholder="Choose ...">
                                                                        <option value="TO">Touchscreen</option>
                                                                        <option value="CF">Call Function</option>
                                                                        <option value="NO" selected>Notifications
                                                                        </option>
                                                                        <option value="FI" selected>Fitness</option>
                                                                        <option value="OU">Outdoor</option>
                                                                    </select>
                                                                </div> -->
                                                                <!-- <div class="mb-3">
                                                                    <label class="form-label"
                                                                        class="control-label">Tags</label>

                                                                    <select
                                                                        class="select2 form-control select2-multiple"
                                                                        multiple="multiple"
                                                                        data-placeholder="Choose ...">
                                                                        <option value="TO">Touchscreen</option>
                                                                        <option value="CF">Call Function</option>
                                                                        <option value="NO" selected>Notifications
                                                                        </option>
                                                                        <option value="FI" selected>Fitness</option>
                                                                        <option value="OU">Outdoor</option>
                                                                    </select>
                                                                </div> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="product-img">
                                                <h4 class="card-title">Product Images</h4>
                                                <p class="card-title-desc">Upload product image</p>
                                                <div id="dropzone" class="dropzone">
                                                    <form action="/" method="post">
                                                        <!-- <div class="fallback">
                                                            <input name="file" type="file" multiple />
                                                        </div> -->


                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i
                                                                    class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                            </div>

                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                </div>
                                            </div>
                                            </form>
                                            <div class="tab-pane" id="metadata">
                                                <h4 class="card-title">Meta Data</h4>
                                                <p class="card-title-desc">Fill all information below</p>

                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="metatitle">Meta
                                                                    title</label>
                                                                <input id="metatitle" name="metatitle" type="text"
                                                                    class="form-control">
                                                            </div>

                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="metakeywords">Meta
                                                                    Keywords</label>
                                                                <input id="metakeywords" name="metakeywords" type="text"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="metadescription">Meta
                                                            Description</label>
                                                        <textarea class="form-control" id="metadescription"
                                                            rows="5"></textarea>
                                                    </div>
                                                </form>

                                                <div class="text-center mt-4">
                                                    <button type="submit"
                                                        class="btn btn-primary me-2 waves-effect waves-light">Save
                                                        Changes</button>
                                                    <button type="submit"
                                                        class="btn btn-light waves-effect">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="#">Previous</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
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
        $(document).ready(() => {
            $("#add-size").on("click", () => {
                $("#size-list").append("<li>" + $("#item-size").val() + "</li>");
                $("#item-size").val('');
            });
            $("#add-color").on("click", () => {
                $("#color-list").append("<li>" + $("#item-color").val() + "</li>");
                $("#item-color").val('');
            });
            $("#add-style").on("click", () => {
                $("#style-list").append("<li>" + $("#item-style").val() + "</li>");
                $("#item-style").val('');
            });
        });
        Dropzone.autoDiscover = false;


        $(document).ready(function () {

            var zdrop = new Dropzone('#dropzone', {
                url: 'https://httpbin.org/post',
                maxFilesize: 30,
                addRemoveLinks: true,
                removeFilePromise: function () {
                    return new Promise((resolve, reject) => {
                        let rand = Math.floor(Math.random() * 3)
                        console.log(rand);
                        if (rand == 0) reject('didnt remove properly');
                        if (rand > 0) resolve();
                    });
                }
            });
        });

        let ShowSales = document.getElementById('showSales');
        function toggleSales() {
            if (ShowSales.classList.contains('d-none')) {
                ShowSales.classList.remove('d-none');
                ShowSales.classList.add('d-flex');
            } else {
                ShowSales.classList.add('d-none');
            }
        }





    </script>

</body>

</html>