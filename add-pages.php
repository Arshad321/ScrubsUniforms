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
                                    <h4>Add Blog Post</h4>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row prod_upload_card">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body card-c">
                                    <div class="mb-3">
                                        <label class="form-label" for="productname">Title</label>
                                        <input id="productname" name="productname" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="productdesc">Content</label>
                                        <!-- <textarea class="form-control" id="productdesc" rows="5"></textarea> -->
                                        <textarea id="elm1" name="area"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="card card-c">
                                <div class="d-flex flex-column">
                                    <div class="gift-recipt-wrp p-3 d-flex justify-content-between">
                                        <div class="expiry d-flex flex-column">
                                            <span class='text-dark fw-bold fs-5'>Search engine listing preview</span>
                                        </div>
                                        <div class="reciept d-flex flex-column">
                                            <span class='d-block text-dark fw-bold fs-5' id='showBlogBtn'> <a
                                                    href="javascript: void(0);" onclick="showFields()">Edit
                                                    website SEO</a></span>
                                        </div>
                                    </div>

                                    <p class="p-3">Add a title and description to see how this Blog post might appear in
                                        a search engine listing
                                    </p>
                                    <div class="d-none" id="showBlog">
                                        <div class=" p-3">
                                            <label class="form-label" for="productname">Page Title</label>
                                            <input id="productname" name="productname" type="text" class="form-control">
                                        </div>
                                        <div class=" p-3">
                                            <label class="form-label" for="productname">Description</label>
                                            <input id="productname" name="productname" type="text" class="form-control">
                                        </div>
                                        <div class=" p-3">
                                            <label class="form-label" for="productname">URL and handle</label>
                                            <input id="productname" name="productname" type="text" class="form-control"
                                                value="https://www.scrubsuniforms.com/blogs/news/">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="note-head">
                                    <div class="d-flex flex-column">
                                        <div class="expiry d-flex flex-column">
                                            <span class='text-dark fw-bold fs-5 m-0'>Visiblity</span>
                                        </div>
                                        <div class="expiry d-flex flex-column pt-3">
                                            <a href="javascrip: void(0);" class='d-flex mt-2' style='gap: 10px'><input
                                                    type="radio" id="drop-radio">
                                                <label for="drop-radio" class="mb-0">Visible</label></a>
                                            <a href="javascrip: void(0);" class='d-flex' style='gap: 10px'><input
                                                    type="radio" id="drop-radio">
                                                <label for="drop-radio" class="mb-0">Hidden</label></a>
                                        </div>
                                        <div class='mt-3'>
                                            <button class='btn btn-primary btn-sm'>Set visiblity date</button>
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
<style>
    .page-title-left>.status {
        gap: 10px !important;
    }

    .timeline:before {
        display: none !important;
    }
</style>

<script>
    let showDataBlog = document.getElementById('showBlog');
    let showBtn = document.getElementById('showBlogBtn');
    function showFields() {
        showDataBlog.classList.remove('d-none')
        showBtn.classList.add('d-none')
    }
</script>

</html>