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
        <?php foreach ($data as $row): ?>
            <tr>
            <td><?= $row[0]["id"] ?></td>
            <td><?= $row[0]["timestamp"] ?></td>
            <td><?= $row[0]["nama"] ?></td>
            <td><?= $row[0]["nip"] ?></td>
            <td><?= $row[0]["satuan_kerja"] ?></td>
            <td><?= $row[0]["posisi_yang_dipilih"] ?></td>
            <td><?= $row[0]["bahasa_pemrograman_yang_dikuasai"] ?></td>
            <td><?= $row[0]["framework_bahasa_pemrograman_yang_dikuasai"] ?></td>
            <td><?= $row[0]["database_yang_dikuasai"] ?></td>
            <td><?= $row[0]["tools_yang_dikuasai"] ?></td>
            <td><?= $row[0]["pernah_membuat_mobile_apps"] ?></td>
            </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>

</body>
</html>