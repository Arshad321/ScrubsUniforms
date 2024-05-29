<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <?php
        $currentYear = date("Y");
        echo $currentYear;
        ?> © ScrubsUniforms.
      </div>
      <div class="col-sm-6">
        <div class="text-sm-end d-none d-sm-block">
          Crafted with <i class="mdi mdi-heart text-danger"></i> by DI-Revol.com
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript">
  if (document.querySelector("#picture__input")) {
    const inputFile = document.querySelector("#picture__input");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "Choose an image";
    pictureImage.innerHTML = pictureImageTxt;

    inputFile.addEventListener("change", function(e) {
      const inputTarget = e.target;
      const file = inputTarget.files[0];

      if (file) {
        const reader = new FileReader();

        reader.addEventListener("load", function(e) {
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
  }
</script>