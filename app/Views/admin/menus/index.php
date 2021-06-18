<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('additionalCSS'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- content header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menus</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Menus</li>
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
                <div class="col-lg-12">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> <?= session()->getFlashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('pesanError')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong> <?= session()->getFlashdata('pesanError'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <a href="/admin/menu/add" class="btn bg-gradient-primary">
                                <i class="fas fa-plus-square mr-2"></i>
                                Tambah Menu
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="menuTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Menu</th>
                                        <th>Link</th>
                                        <th>Type</th>
                                        <th>Parent</th>
                                        <th>Icon</th>
                                        <th>Order</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($menus as $m) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $m['menu']; ?></td>
                                            <td><?= $m['link']; ?></td>
                                            <td><?= $m['type']; ?></td>
                                            <td><?= $m['parent']; ?></td>
                                            <td><?= $m['icon']; ?></td>
                                            <td>
                                                <a href="/adminmenus/orderup/<?= $m['id']; ?>" class="btn btn-sm bg-gradient-info rounded-pill" data-toggle="tooltip" data-placement="left" title="Naikkan Urutan"><i class="fas fa-arrow-up"></i></a>
                                                <a href="/adminmenus/orderdown/<?= $m['id']; ?>" class="btn btn-sm bg-gradient-info rounded-pill" data-toggle="tooltip" data-placement="left" title="Turunkan Urutan"><i class="fas fa-arrow-down"></i></a>
                                            </td>
                                            <td>
                                                <a href="/admin/menu/edit/<?= $m['slug']; ?>" class="btn btn-sm bg-gradient-success rounded-pill" data-toggle="tooltip" data-placement="left" title="Edit">
                                                    <span><i class="fas fa-edit"></i></span>
                                                </a>
                                                <form action="/admin/menu/<?= $m['id']; ?>" method="POST" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm bg-gradient-danger rounded-pill" data-toggle="tooltip" data-placement="right" title="Hapus">
                                                        <span><i class="fas fa-trash-alt"></i></span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main content -->

</div>
<!-- /content wrapper -->
<?= $this->endSection(); ?>

<?= $this->section('additionalJS'); ?>
<!-- DataTables  & Plugins -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
        $('#menuTable').DataTable();
    });
</script>
<?= $this->endSection(); ?>