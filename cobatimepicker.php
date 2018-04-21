    <html>
        <head><title>Input type time HTML5</title></head>
  <body>
    <form method="POST" action="">Masukkan waktu (jam:menit): <input type="time" name="jam" required/>
    <br />
    <button type="submit">Ambil nilai jam dan menit</button>
    </form>
  </body>
</html>

<?php
$time=$_POST["jam"];
echo $time;
?>
