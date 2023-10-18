<html>
<head>
<script>
function previewFile() {
  var preview = document.getElementById('uprpic');
  var file    = document.getElementById('upic').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}
</script>
</head>
<body>
<input type="file" id="upic" name="upic" onchange="previewFile()"><br>
<img src="" id="uprpic" alt="Image preview...">
</body>
</html>