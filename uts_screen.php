<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <table width=100% border=1 height=100%>
    <tr>
      <td align="center">
        <canvas id="myCanvas" width=800 height="400" style="border:1px solid #d3d3d3;">
          Your browser does not support the HTML5 canvas tag.</canvas>
      </td>
    </tr>
  </table>
  <button onclick="myVar = setTimeout(linehor, 1000)">Line horizontal kartesian</button>
  <button onclick="myVar = setTimeout(persegi, 1000)">persegi</button>
  <button onclick="myVar = setTimeout(persegi4, 1000)">Cerminkan persegi</button>
  <button onclick="myVar = setTimeout(bersihkan, 1000)">clear screen</button>
  
  <p id="demo"></p>

  <form id="frm1" action="/action_page.php">
    x : <input type="text" name="fname" id="xawal" placeholder="Masukkan Angka x" value=50>
    y : <input type="text" name="lname" id="yawal" placeholder="Masukkan Angka y" value=50>
    <br>
  </form>

  <script>
    //line();
    document.onkeydown = function (e) {
      switch (e.keyCode) {
        case 37:
          geserkiri();
          break;
        case 38:
          geseratas();
          break;
        case 39:
          geserkanan();
          break;
        case 40:
          geserbawah();
          break;
      }
    }
    var x = document.getElementById("frm1");
    var seconds = 0,
      minutes = 0,
      hours = 0,
      x1 = parseInt(x.elements[0].value),
      y1 = parseInt(x.elements[1].value),
      t;

    text =
      "x1 : " + x1 + "<br>" +
      "y1 : " + y1 + "<br>";
    document.getElementById("demo").innerHTML = text;



    function persegi3()
    {
      persegi()
      var x = document.getElementById("frm1");
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var x = width - x1;
      var y = height + y1;

      var r = 40;
      var ax = x - r;
      var ay = y + r;
      var bx = x - r;
      var by = y - r;
      var cx = x + r;
      var cy = y - r;
      var dx = x + r;
      var dy = y + r;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 0;
        imgData.data[i + 3] = 75;
      }
      ctx.putImageData(imgData, x, y);
      ctx.putImageData(imgData, ax, ay);
      ctx.putImageData(imgData, bx, by);
      ctx.putImageData(imgData, cx, cy);
      ctx.putImageData(imgData, dx, dy);
      for (var a = bx; a < cx; a += 1) {
        ctx.putImageData(imgData, a, by);
        ctx.putImageData(imgData, a, ay);
      }
      for (var b = by; b < ay; b += 1) {
        ctx.putImageData(imgData, ax, b);
        ctx.putImageData(imgData, cx, b);
      }

    }


    function persegi() {
      linehor();
      var x = document.getElementById("frm1");
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var x = width + x1;
      var y = height - y1;

      var r = 40;
      var ax = x - r;
      var ay = y + r;
      var bx = x - r;
      var by = y - r;
      var cx = x + r;
      var cy = y - r;
      var dx = x + r;
      var dy = y + r;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 0;
        imgData.data[i + 3] = 75;
      }
      ctx.putImageData(imgData, x, y);
      ctx.putImageData(imgData, ax, ay);
      ctx.putImageData(imgData, bx, by);
      ctx.putImageData(imgData, cx, cy);
      ctx.putImageData(imgData, dx, dy);
      for (var a = bx; a < cx; a += 1) {
        ctx.putImageData(imgData, a, by);
        ctx.putImageData(imgData, a, ay);
      }
      for (var b = by; b < ay; b += 1) {
        ctx.putImageData(imgData, ax, b);
        ctx.putImageData(imgData, cx, b);
      }

    }

    function persegi1()
    {
      persegi()
      persegi3()
      var x = document.getElementById("frm1");
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var x = width - x1;
      var y = height - y1;

      var r = 40;
      var ax = x - r;
      var ay = y + r;
      var bx = x - r;
      var by = y - r;
      var cx = x + r;
      var cy = y - r;
      var dx = x + r;
      var dy = y + r;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 0;
        imgData.data[i + 3] = 75;
      }
      ctx.putImageData(imgData, x, y);
      ctx.putImageData(imgData, ax, ay);
      ctx.putImageData(imgData, bx, by);
      ctx.putImageData(imgData, cx, cy);
      ctx.putImageData(imgData, dx, dy);
      for (var a = bx; a < cx; a += 1) {
        ctx.putImageData(imgData, a, by);
        ctx.putImageData(imgData, a, ay);
      }
      for (var b = by; b < ay; b += 1) {
        ctx.putImageData(imgData, ax, b);
        ctx.putImageData(imgData, cx, b);
      }

    }

    
    function persegi4()
    {
      persegi()
      persegi3()
      persegi1()
      var x = document.getElementById("frm1");
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var x = width + x1;
      var y = height + y1;

      var r = 40;
      var ax = x - r;
      var ay = y + r;
      var bx = x - r;
      var by = y - r;
      var cx = x + r;
      var cy = y - r;
      var dx = x + r;
      var dy = y + r;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 0;
        imgData.data[i + 3] = 75;
      }
      ctx.putImageData(imgData, x, y);
      ctx.putImageData(imgData, ax, ay);
      ctx.putImageData(imgData, bx, by);
      ctx.putImageData(imgData, cx, cy);
      ctx.putImageData(imgData, dx, dy);
      for (var a = bx; a < cx; a += 1) {
        ctx.putImageData(imgData, a, by);
        ctx.putImageData(imgData, a, ay);
      }
      for (var b = by; b < ay; b += 1) {
        ctx.putImageData(imgData, ax, b);
        ctx.putImageData(imgData, cx, b);
      }

    }

    function bersihkan() {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      ctx.clearRect(0, 0, c.width, c.height);
      ctx.beginPath();
    }


    function linehor() {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      var width = (c.scrollWidth) / 2;
      var height = (c.scrollHeight) / 2;
      var imgData = ctx.createImageData(1, 1);
      for (var i = 0; i < imgData.data.length; i += 4) {
        imgData.data[i + 0] = 255;
        imgData.data[i + 1] = 0;
        imgData.data[i + 2] = 255;
        imgData.data[i + 3] = 255;
      }
      for (var a = 0; a < c.scrollWidth; a += 1) {
        ctx.putImageData(imgData, a, height);
      }

      for (var b = 0; b < c.scrollHeight; b += 1) {
        ctx.putImageData(imgData, width, b);
      }
    }



  </script>

</body>

</html>