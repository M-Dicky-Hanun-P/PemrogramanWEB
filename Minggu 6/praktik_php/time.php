<!DOCTYPE html>
<html>
<head>
    <!-- Tampilan title -->
    <title>Time Example</title>
</head>
<body>
    <!-- Tampilan Heading -->
    <h3>Time</h3>
    
    <?php
        // Membuat tampilan zona waktu default menjadi "Asia/Jakarta"
        date_default_timezone_set("Asia/Jakarta");
        
        // Menampilkan waktu dalam format jam:menit:detik AM/PM.
        echo date("h:i:sa");
    ?>
</body>
</html>