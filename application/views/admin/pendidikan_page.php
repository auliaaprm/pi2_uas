

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="text-center">
                            <h4><b>DAFTAR PENDIDIKAN</b></h4>
                    </div>
                    <hr></hr>
                    <div class="row mt-3">
                        <div class="col-3">
                            <a href="<?= base_url('admin/pendidikan_create') ?>" class="btn btn-success">Tambah</a>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tingkat Pendidikan</th>
                                <th scope="col">Nama Tempat Pendidikan</th>
                                <th scope="col">Masa Pendidikan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($allpendidikan as $no => $pendidikan) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no + 1 ?></th>
                                    <td><?= $pendidikan['tingkat']; ?></td>
                                    <td><?= $pendidikan['nama_tempat']; ?></td>
                                    <td><?= $pendidikan['tahun']; ?></td>

                                    <td>
                                        <a href="<?= base_url('admin/pendidikan_edit/' . $pendidikan['pendidikan_id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('admin/pendidikan_hapus/' . $pendidikan['pendidikan_id']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    