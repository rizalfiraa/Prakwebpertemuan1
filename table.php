<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text- my-4">Daftar Nilai Mahasiswa</h1>
    <div class="">
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tugas</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Total</th>
            <th scope="col">Predikat</th>
          </tr>
        </thead>
        <?php 
          $nilai1 = ["nim" => 2116545, "nama"=> "Riza", "tugas"=> 80, "uts"=> 85, "uas"=> 88];
          $nilai2 = ["nim" => 6731432, "nama"=> "Alfira", "tugas"=> 95, "uts"=> 90, "uas"=> 85];
          $nilai3 = ["nim" => 1357413, "nama"=> "Nasution", "tugas"=> 84, "uts"=> 90, "uas"=> 95];
          $mhs = [$nilai1, $nilai2, $nilai3];

          function hitungTotal($tugas, $uts, $uas) {
              return ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
          }

          function getPredikat($total) {
              if ($total >= 85) return "A";
              elseif ($total >= 75) return "B";
              elseif ($total >= 60) return "C";
              elseif ($total >= 50) return "D";
              else return "E";
          }
        ?>
        <tbody>
          <?php $no = 1; foreach ($mhs as $item) { 
              $total = hitungTotal($item['tugas'], $item['uts'], $item['uas']);
              $predikat = getPredikat($total);
          ?>
          <tr>
              <td><?= $no++ ?></td>
              <td><?= $item['nim'] ?></td>
              <td><?= $item['nama'] ?></td>
              <td><?= $item['tugas'] ?></td>
              <td><?= $item['uts'] ?></td>
              <td><?= $item['uas'] ?></td>
              <td><?= number_format($total, 2) ?></td>
              <td><?= $predikat ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>