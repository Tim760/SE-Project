<!DOCTYPE html>
<html>
  <head>
    <title>QR Code Generate</title>

<!-- (A) Load QRCodeJS Library -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
  </head>
  <body>
    <!-- (B) Generates QR Code -->
    <div id="qrcode"></div>
    
    <!-- (C) On page load, creates QR Code -->
    <script>
    window.addEventListener("load", function(){
      var qrc = new QRCode(document.getElementById("qrcode"), "http://localhost/SE-Project/before.php");
    });
    </script>
	
	SCAN CODE BEFORE TAKING THE COVID-19 TEST
  </body>
</html>