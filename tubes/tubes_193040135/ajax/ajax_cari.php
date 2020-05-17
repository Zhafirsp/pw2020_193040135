<?php
require '../php/functions.php';
$apparel = cari($_GET['keyword']);
?>
 <div class="big">
  <?php if (empty($apparel)) : ?>
    <tbody>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <div class="row">
        <?php $i = 1; ?>
        <?php foreach ($apparel as $brg) : ?>
          <div class="col s12 m3">
            <div class="card" style="height:500px; width:auto;">
              <div class="card-image">
                <img src="assets/img/<?= $brg['foto']; ?>" class="foto materialboxed">
                <a class="link btn-floating halfway-fab waves-effect waves-light red" href="php/detail.php?no=<?= $brg['no'] ?>"><i class=" material-icons">details</i></a>
              </div>
              <div class="card-content">
                <p class="nama">
                  <a class="link" href="php/detail.php?no=<?= $brg['no'] ?>">
                    <?= $brg["nama_barang"] ?>
                  </a>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </tbody>
    <?php endif; ?>
    </div>
