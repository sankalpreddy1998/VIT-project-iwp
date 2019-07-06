function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list1').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  
  function selectedVideo(self) {
    var files = self.files; 
    console.log(files.name);
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

        // Only process image files.
        if (!f.type.match('video.*')) {
          continue;
        }
  
        var reader = new FileReader();
  
        // Closure to capture the file information.
        reader.onload = (function(theFile) {
          return function(e) {
            var src = e.target.result;
            var span = document.createElement('span');
            span.innerHTML = ['<video class="thumb1" id="video'+i+'"width="300" controls> <source type="video/mp4" src="'+src+'"> </video>'].join('');
            document.getElementById('list2').insertBefore(span, null);
            document.getElementById('video'+i.toString()).load();
          };
        })(f);
  
        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
      }
}


function image_upload() {
  console.log(img_upload.val());
}

document.getElementById('image_upload_btn').addEventListener('change', handleFileSelect, false);






