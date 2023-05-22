<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="section-title mt-5">
    <h2>Data</h2>
    <p>Data Cafe Kami</p>
</div>

<div>
    <a href="/create" type="button" class="btn btn-success mb-4"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<div class="row">
    <div class="card-body">
        <div class="table-responsive">

            <table id="example1" class="table table-hover">
                <thead>
                    <tr class="table table-bordered table-dark">
                        <th style="text-align: center;" scope="col">No</th>
                        <th scope="col" style="width:10% ;">Nama</th>
                        <th scope="col">Manager</th>
                        <th scope="col" style="width:10% ;">Alamat</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Kursi</th>
                        <th scope="col" style="width:20% ;">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $admin) : ?>
                        <tr style="vertical-align: middle;">
                            <th style="text-align: center;" scope="row"><?= $no ?></th>
                            <td> <a href="/tampil/<?= $admin->id ?>"><?= $admin->nama_cafe ?></a></td>
                            <td><?= $admin->manager ?></td>
                            <td><?= $admin->alamat ?></td>
                            <td><?= $admin->nama_daerah ?></td>
                            <td><?= $admin->jumlah_kursi ?></td>
                            <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/gambarCafe/" . $admin->foto; ?>"></td>
                            <td>
                                <div class="d-flex align-items-start">
                                    <a class="btn btn-warning mb-3 ms-2" href="/edit/<?= $admin->id ?>"><i class="fa fa-edit"></i></a>
                                    <form action="/delete/<?= $admin->id ?>" method="post">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger mb-3 ms-2"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({});
    });
</script>

<?= $this->endSection() ?>