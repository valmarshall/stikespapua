<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- content header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/admin/menu">Menus</a></li>
                        <li class="breadcrumb-item active">Tambah Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /content header -->

    <!-- main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <form action="/adminmenus/save" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="menu">Nama Menu</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('menu')) ? ' is-invalid' : ''; ?>" id="menu" name="menu" value="<?= old('menu'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('menu'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link URL Menu</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('link')) ? ' is-invalid' : ''; ?>" id="link" name="link" value="<?= old('link'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('link'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type">Tipe Menu</label>
                                    <select name="type" id="type" class="form-control <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>">
                                        <option value="">--Pilih Tipe--</option>
                                        <option value="sidebar">Sidebar</option>
                                        <option value="topbar">Topbar</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('type'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="parent">Parent Menu</label>
                                    <select name="parent" id="parent" class="form-control">
                                        <option value="">Tidak ada parent</option>
                                        <?php foreach ($menus as $m) : ?>
                                            <?php if ($m['link'] == "#") : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('parent'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="icon">Class Icon</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('icon')) ? ' is-invalid' : ''; ?>" id="icon" name="icon" value="<?= old('icon'); ?>">
                                    <small class="text-muted">*ambil class dari FontAwesome (contoh : fas fa-user)</small>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('icon'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main content -->

</div>
<!-- /content wrapper -->
<?= $this->endSection(); ?>