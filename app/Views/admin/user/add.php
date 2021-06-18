<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- content header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/admin/user">Users</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>
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
                        <form action="/adminusers/save" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('nama')) ? ' is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('username')) ? ' is-invalid' : ''; ?>" id="username" name="username" value="<?= old('username'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('username'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role User</label>
                                    <select name="role" id="role" class="form-control<?= ($validation->hasError('role')) ? ' is-invalid' : ''; ?>">
                                        <option value="">--Pilih Role User--</option>
                                        <?php foreach ($roles as $r) : ?>
                                            <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('role'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('email')) ? ' is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor HP</label>
                                    <input type="text" class="form-control<?= ($validation->hasError('hp')) ? ' is-invalid' : ''; ?>" id="hp" name="hp" value="<?= old('hp'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('hp'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control<?= ($validation->hasError('password')) ? ' is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                    <span><small class="text-muted">*jika dikosongkan akan menggunakan password default (123456)</small></span>
                                </div>
                                <div class="form-group">
                                    <label for="repassword">Masukkan Password Kembali</label>
                                    <input type="password" class="form-control<?= ($validation->hasError('repassword')) ? ' is-invalid' : ''; ?>" id="repassword" name="repassword" value="<?= old('repassword'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('repassword'); ?>
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