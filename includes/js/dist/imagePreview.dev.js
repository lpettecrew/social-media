"use strict";

var inpFile = document.getElementById("inpFile");
var previewContainer = document.getElementById("imagePreview");
var previewImage = previewContainer.querySelector(".image-preview__image");
var previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
inpFile.addEventListener("change", function () {
  var file = this.files[0];

  if (file) {
    var reader = new FileReader(); //previewDefaultText.style.display = "none";

    previewImage.style.display = "block";
    reader.addEventListener("load", function () {
      previewImage.setAttribute("src", this.result);
    });
    reader.readAsDataURL(file);
  } else {
    //previewDefaultText.style.display = "block";
    previewImage.style.display = null;
  }
});