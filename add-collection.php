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
                                    <h4 class="mb-sm-0">Add Collection</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Add Collection</li>
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
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="card">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="productname">Product Name</label>
                                                                <input id="productname" name="productname" type="text" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="productdesc">Product Description</label>
                                                                <textarea id="elm1" name="area"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-2">
                                                            <h4 class="card-title mb-2">Collection Type</h4>
                                                            <div class="taxCal mb-3">
                                                                <div>
                                                                    <h5 class="font-size-14 mb-4">Products must match:</h5>
                                                                    <div class="row mb-8">
                                                                        <div class="col-md-3">
                                                                            <div class="form-check mb-3">
                                                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                                                <label class="form-check-label" for="formRadios1">
                                                                                    All Condition
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                                                                <label class="form-check-label" for="formRadios2">
                                                                                    Any Condition
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conditions_tags">
                                                                        <div class="row mb-4">
                                                                            <div class="col-md-4">
                                                                                <select name="" id="" class="select2 form-control">
                                                                                    <option value="">Product Tag</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <select name="" id="" class="select2 form-control">
                                                                                    <option value="">is equal to</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <input type="text" placeholder="" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Add another condition</a>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-2">
                                                            <h4 class="card-title mb-2">Product</h4>
                                                            <div>
                                                                <label for="">Sort</label>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">Best selling</option>
                                                                    <option value="">Product title A-Z</option>
                                                                    <option value="">Product title Z-A</option>
                                                                    <option value="">Highest Price</option>
                                                                    <option value="">Lowest Price</option>
                                                                    <option value="">Newest</option>
                                                                    <option value="">Oldest</option>
                                                                    <option value="">Mannually</option>
                                                                </select>
                                                            </div>
                                                            <div class="sort_prod_list">
                                                                <div class="table-responsive">
                                                                    <table class="table main-table table-centered product_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                        <tbody class="">
                                                                            <tr draggable="true"  ondragstart="dragit(event)" ondragover="dragover(event)" style="cursor: move">
                                                                                <td>
                                                                                    <div class="form-checkbox">
                                                                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                                        <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>1</td>
                                                                                <td>
                                                                                    <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                                        <img src="assets/images/product/img-1.png" alt="">
                                                                                        <span>Advance - V-Nect Top</span>
                                                                                    </a> 
                                                                                </td>
                                                                                <td><div class="badge badge-soft-success font-size-12"> Active</div></td>
                                                                            </tr>
                                                                            <tr  draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)" style="cursor: move">
                                                                                <td>
                                                                                    <div class="form-checkbox">
                                                                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                                        <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>2</td>
                                                                                <td>
                                                                                    <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                                        <img src="assets/images/product/img-1.png" alt="">
                                                                                        <span>Advance - V-Nect Top</span>
                                                                                    </a> 
                                                                                </td>
                                                                                <td><div class="badge badge-soft-success font-size-12"> Active</div></td>
                                                                            </tr>
                                                                            <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)" style="cursor: move">
                                                                                <td>
                                                                                    <div class="form-checkbox">
                                                                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                                        <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>3</td>
                                                                                <td>
                                                                                    <a href="javascript: void(0);" class="text-dark fw-bold">
                                                                                        <img src="assets/images/product/img-1.png" alt="">
                                                                                        <span>Advance - V-Nect Top</span>
                                                                                    </a> 
                                                                                </td>
                                                                                <td><div class="badge badge-soft-warning font-size-12"> Draft</div></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <a href="#" class="btn btn-link waves-effect">Show More Product</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <h4 class="card-title">Status</h4>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">Active</option>
                                                                <option value="">Draft</option>
                                                            </select>
                                                            <br>
                                                            <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                        <div class="card">
                                                            <div class="collection_image ">
                                                                <label class="picture" for="picture__input" tabIndex="0">
                                                                    <span class="picture__image">Upload banner Image</span>
                                                                </label>
                                                                <input type="file" name="picture__input" id="picture__input">
                                                            </div>
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
         <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
        
        <script>
            let shadow
            function dragit(event){
            shadow=event.target;
            }
            function dragover(e){
            let children=Array.from(e.target.parentNode.parentNode.children);
            if(children.indexOf(e.target.parentNode)>children.indexOf(shadow))
            e.target.parentNode.after(shadow);
            else e.target.parentNode.before(shadow);
            }

        </script>
            
            

        <script>

            $( document ).ready(()=>{
              $( "#add-size" ).on( "click",()=>{
                  $("#size-list").append("<li>" + $("#item-size").val() + "</li>");
                  $("#item-size").val('');
              });
              $( "#add-color" ).on( "click",()=>{
                  $("#color-list").append("<li>" + $("#item-color").val() + "</li>");
                  $("#item-color").val('');
              });
              $( "#add-style" ).on( "click",()=>{
                  $("#style-list").append("<li>" + $("#item-style").val() + "</li>");
                  $("#item-style").val('');
              });

            });
            const inputFile = document.querySelector("#picture__input");
            const pictureImage = document.querySelector(".picture__image");
            const pictureImageTxt = "Choose an image";
            pictureImage.innerHTML = pictureImageTxt;

            inputFile.addEventListener("change", function (e) {
              const inputTarget = e.target;
              const file = inputTarget.files[0];

              if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", function (e) {
                  const readerTarget = e.target;

                  const img = document.createElement("img");
                  img.src = readerTarget.result;
                  img.classList.add("picture__img");

                  pictureImage.innerHTML = "";
                  pictureImage.appendChild(img);
                });

                reader.readAsDataURL(file);
              } else {
                pictureImage.innerHTML = pictureImageTxt;
              }
            });

        </script>

    </body>
</html>
