<!--untuk memberitahu beranda menggunakan file template yang berada di folder layout-->
<?= $this->extend('layout/template') ?>
<!--bungkus konten dengan section-->
<!--nama sectionnya kita beri nama konten (bebas pemberian nama)-->
<?= $this->section('content') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            <?= strtoupper($title) ?>
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Kelola <?= $title ?>
                            </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i> Tambah <?= $title ?>
                            </div>
                            <div class="card-body">
                            <!--form-->
                            <!-- <form action="/book-create" method="post"> -->
                                <form action="<?= route_to('simpan_buku') ?>" method="post">
                                    <div class="mb-3 row">
                                        <label for="title" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="author" class="col-sm-2 col-form-label">Penulis</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="author" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="book_category_id" class="col-sm-2 col-formlabel">Kategori</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="book_category_id">
                                                <?php foreach ($book_category as $value): ?>
                                                    <option value="<?= $value['book_category_id'] ?>">
                                                        <?= $value['name_category'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <label for="release_year" class="col-sm-2 col-form-label">Tahun Terbit</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="release_year">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="price" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="price">
                                        </div>
                                        <label for="discount" class="col-sm-2 col-form-label">Diskon</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="discount">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="stock">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                        <button class="btn btn-danger" type="reset">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <!--bungkus konten dengan section-->
<?= $this->endsection() ?>