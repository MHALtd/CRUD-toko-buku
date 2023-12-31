<!--untuk memberitahu beranda menggunakan file template yang berada di folder layout-->
<?= $this->extend('layout/template')?>
<!--bungkus konten dengan section-->
<!--nama sectionnya kita beri nama konten (bebas pemberian nama)-->
<?= $this->section('content')?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4"><?=strtoupper($title)?></h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kelola <?=$title?></li>
      </ol>
        <?php if (session()->getFlashdata('success')):?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success')?>
        </div>
        <?php endif; ?>
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          List<?=$title?>
        </div>
        <div class="card-body">
            <!--tambah button-->
            <a href="/book-create" class= "btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Buku</a>
          <table id="datatablesSimple">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no=1; foreach ($data_book as $value):?>
              <tr>
                <td><?= $no++?></td>
                <td><?= $value['title']?></td>
                <td><?= $value['author']?></td>
                <td><?= $value['release_year']?></td>
                <td><?= $value['price']?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
<!--bungkus konten dengan section-->
<?= $this-> endsection()?>