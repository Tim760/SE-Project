<!DOCTYPE html>
<html>
  <head>
    <title>QR Code Generate</title>

    <!-- (A) Load QRCodeJS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
  </head>
  <body>
    <!-- (B) Generates QR Code -->
    <div id="printable">
      <h1>Test Site QR Code</h1>
      <p>Scan the QR Code here to sign in to the test site.</p>
      <div id="qrcode"></div>
    </div>
    <button id="qrprint">PRINT</button>

    <!-- (C) On page load, creates QR Code -->
    <script>
    window.addEventListener("load", function(){
      // (C1) Create QR
      var qrc = new QRCode(document.getElementById("qrcode"), {
        text: "http://localhost/SE-Project/location.php",
        width: 100,
        height: 100,
        colorDark: "#bf2a2a"
      });
      
      // (C2) Print QR
      document.getElementById("qrprint").addEventListener("click", function(){
        var printwin = window.open("");
        printwin.document.write(document.getElementById("printable").innerHTML);
        printwin.stop();
        let qr = printwin.document.querySelector("#qrcode img");
        qr.addEventListener("load", function(){
          printwin.print();
          printwin.close();
        });
      });
    });
    </script>
  </body>
</html>