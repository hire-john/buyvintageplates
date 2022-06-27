window.onload = function() {
  if (window.File && window.FileList && window.FileReader) {
    var filesInput = document.getElementById("files");
    filesInput.addEventListener("change", function(event) {
      var files = event.target.files; 
      var output = document.getElementById("result");
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (!file.type.match('image'))
          continue;
        var picReader = new FileReader();
        picReader.addEventListener("load", function(event) {
          var picFile = event.target;
          var div = document.createElement("div");
          let image_id = "upload_thumbnail_" + i;
          div.setAttribute('id', image_id);
          div.innerHTML = "<img class='uploader-thumbnail' src='" + picFile.result + "'" +
            "title='" + picFile.name + "'/><i class="thumbnail-close fa fa-times-circle-o" aria-hidden="true" onclick="removeImage(i)"></i>";
          output.insertBefore(div, null);
        });
        picReader.readAsDataURL(file);
      }
    });
  } else {
    console.log("Your browser does not support File API");
  }

  function removeImage(id){

  }
}