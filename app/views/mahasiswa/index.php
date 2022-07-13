<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h3 class="fs-2">Daftar Mahasiswa</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php foreach ($data["mahasiswa"] as $mhs) : ?>
        <ul>
          <li>NIM : <?= $mhs["nim"] ?></li>
          <li>Nama : <?= $mhs["nama"] ?></li>
          <li>Jurusan : <?= $mhs["jurusan"] ?></li>
          <li>Email : <?= $mhs["email"] ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>