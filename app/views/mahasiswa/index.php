<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h3 class="fs-2">Daftar Mahasiswa</h3>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-5">
      <ul class="list-group">
        <?php foreach ($data["mahasiswa"] as $mhs) : ?>
          <li class="list-group-item d-flex justify-content-between">
            <?= $mhs["nama"] ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"] ?>" class="badge text-bg-primary text-decoration-none">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>