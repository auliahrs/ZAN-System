<!DOCTYPE html>
<html>
<head>
  <title>Display Image on Button Click</title>
  <script>
    function displayImage() {
      var img = document.getElementById("myImage");
      img.style.display = "block";
    }
  </script>
</head>
<body>
  <h1>Click the button to display the image</h1>
  <button onclick="displayImage()">Display Image</button>
  <img id="myImage" style="display: none;" src="ZAN-System/images/sijil.png" alt="Displayed Image">
</body>
</html>
