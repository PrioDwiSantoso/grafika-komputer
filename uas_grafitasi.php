<!DOCTYPE html>
<html>

<head>
</head>

<body>

  <table width=100% border=1 height=100%>
    <tr>
      <td align="center">

        <canvas id="myCanvas" width=1600 height="800" style="border:1px solid #d3d3d3;">
          Your browser does not support the HTML5 canvas tag.</canvas>
      </td>
    </tr>
  </table>
  <button onclick="myVar = setTimeout(bola, 1000)">atur posisi bola</button>
  <button onclick="myVar = setTimeout(jatuh, 1000);timerku()">jatuh</button>


  <p id="demo"></p>
  <p id="jam"></p>

  <form id="frm1" action="/action_page.php">
    1x : <input type="text" name="fname" id="xawal" placeholder="Masukkan Angka x" value=0>
    1y : <input type="text" name="lname" id="yawal" placeholder="Masukkan Angka y" value=350>
    <br>
    ax : <input type="text" name="fname" id="axawal" placeholder="Masukkan Angka x" value=0>
    ay : <input type="text" name="lname" id="ayawal" placeholder="Masukkan Angka y" value=50>
    <br>
    bx : <input type="text" name="fname" id="bxawal" placeholder="Masukkan Angka x" value=0>
    by : <input type="text" name="lname" id="byawal" placeholder="Masukkan Angka y" value=50>
    <br>
    cx : <input type="text" name="fname" id="cxawal" placeholder="Masukkan Angka x" value=0>
    cy : <input type="text" name="lname" id="cyawal" placeholder="Masukkan Angka y" value=50>
    <br>
    dx : <input type="text" name="fname" id="dxawal" placeholder="Masukkan Angka x" value=0>
    dy : <input type="text" name="lname" id="dyawal" placeholder="Masukkan Angka y" value=50>
    <br>
  </form>

  

  <script>
    //https://iwant2study.org/lookangejss/02_newtonianmechanics_2kinematics/ejss_model_freefall01/freefall01_Simulation.xhtml
    //https://www.kompas.com/skola/read/2020/10/05/131821169/gerak-lurus-beraturan-glb-dan-gerak-lurus-berubah-beraturan-glbb?page=all
    var x = document.getElementById("frm1");
    var seconds = 0,
      minutes = 0,
      hours = 0,
      x1 = parseInt(x.elements[0].value),
      y1 = parseInt(x.elements[1].value),
      t;
    var canvas = document.getElementById('myCanvas'),
      gerak = true;
    context = canvas.getContext('2d');
    var width = (canvas.scrollWidth) / 2;
    var height = (canvas.scrollHeight) / 2;

    bola();
    caption();

    function bola() {
           
      base_image = new Image();
      base_image.src = 'gambar.png';
      base_image.onload = function () {
        context.drawImage(base_image, width + x1, height - y1, 50, 50);
        context.beginPath(); 
  //membuat garis vertikal
  context.moveTo(width,0);
  context.lineTo(width,canvas.scrollHeight);
  //membuat garis horizontal
  context.moveTo(0,height);
  context.lineTo(canvas.scrollWidth,height);
  context.stroke();
        caption();
      }
      
    }



    function caption() {
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
      ctx.putImageData(imgData, width + 100, height - 100);

      var ctx = canvas.getContext("2d");
      ctx.font = "11px Arial";
      ctx.fillText("0", width, height);
      ctx.fillText("50", width, height - 50);
      ctx.fillText("100", width, height - 100);
      ctx.fillText("150", width, height - 150);
      ctx.fillText("200", width, height - 200);
      ctx.fillText("250", width, height - 250);
      ctx.fillText("300", width, height - 300);
      ctx.fillText("350", width, height - 350);
      ctx.fillText("400", width, height - 400);
    }

    function jatuh() {
      if (gerak == true) {
        setInterval(waktu, 10);
      } else if (gerak == false) {
        setInterval(waktu, 10);
      }
    }

    function waktu() {
      //gerak();
      if ((y1 == 20) && (gerak == true)) {
        gerak = false;
        geseratas();
      } else if ((y1 == 350) && (gerak == false)) {
        gerak = true;
        geserbawah();
      } else if (gerak == true) {
        geserbawah();
      } else if (gerak == false) {
        geseratas();
      }

    }

    function bersihkan() {
      var c = document.getElementById("myCanvas");
      var ctx = c.getContext("2d");
      ctx.clearRect(0, 0, c.width, c.height);
      ctx.beginPath();
    }

    function geserkanan() {
      myVar = setTimeout(bersihkan, 50)
      x1++;
      
      t = setTimeout(bola, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
        
      document.getElementById("demo").innerHTML = text;
    }

    function geserkiri() {
      myVar = setTimeout(bersihkan, 50)
      x1--;
      t = setTimeout(bola, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function geseratas() {
      myVar = setTimeout(bersihkan, 50)
      y1++;
      x1++;
      t = setTimeout(bola, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function geserbawah() {
      myVar = setTimeout(bersihkan, 50)
      y1--;
      x1++;
      t = setTimeout(bola, 50);
      text =
        "x1 : " + x1 + "<br>" +
        "y1 : " + y1 + "<br>";
      document.getElementById("demo").innerHTML = text;
    }

    function timerku(){

      if (gerak == true) {
        var jam = setInterval(detiks, 1000);
      } else if (gerak == false) {
        clearInterval(jam);
      }

    }


    

    function detiks(){
      if ((y1 == 20) && (gerak == true)) {
        gerak = false;
        
      } else if ((y1 == 350) && (gerak == false)) {
        gerak = true;
        seconds++;
      } 
      else if (gerak == true) {
        seconds++;
      } else if (gerak == false) {
        //geseratas();
      }
   

    
    text =
        "waktu: " + seconds + "<br>";
      document.getElementById("jam").innerHTML = text;
    }
    

  </script>

</body>

</html>