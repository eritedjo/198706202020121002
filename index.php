<?php  
 $url = 'http://103.226.55.159/json/data_rekrutmen.json';
 $get_data = file_get_contents($url);
 $data = json_decode($get_data, true);

 //var_dump($data); die;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"> 
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js"></script>
  </head>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
 </script>
  <body>
  <h1 style="text-align: center; margin-top: 50px">DATA RECRUITMENT</h1>
   
  <table class="table" id="example" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Timestamp</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Satuan Kerja</th>
            <th>Posisi yang dipilih</th>
            <th>Bahasa Pemrograman yang dikuasai</th>
            <th>Framework Bahasa Pemrograman yang dikuasai</th>
            <th>Database yang dikuasai</th>
            <th>Tools yang dikuasai</th>
            <th>Pernah membuat mobile apps</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data["Form Responses 1"] as $row) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['timestamp']}</td>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['nip']}</td>";
                echo "<td>{$row['satuan_kerja']}</td>";
                echo "<td>{$row['posisi_yang_dipilih']}</td>";
                echo "<td>{$row['bahasa_pemrograman_yang_dikuasai']}</td>";
                echo "<td>{$row['framework_bahasa_pemrograman_yang_dikuasai']}</td>";
                echo "<td>{$row['database_yang_dikuasai']}</td>";
                echo "<td>{$row['tools_yang_dikuasai']}</td>";
                echo "<td>{$row['pernah_membuat_mobile_apps']}</td>";
                echo "</tr>";
            }
        ?>
        
    </tbody>
</table>

</body>
</html>
