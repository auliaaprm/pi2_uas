

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="text-center">
                            <h4><b>DAFTAR KONTAK</b></h4>
                    </div>
                    <hr></hr>
                    <div class="row mt-3">
                        <div class="col-3">
                            <a href="<?= base_url('admin/kontak_create') ?>" class="btn btn-success">Tambah</a>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kontak</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($allkontak as $no => $kontak) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no + 1 ?></th>
                                    <td><?= $kontak['kontak']; ?></td>
                                    <td><?= $kontak['keterangan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/kontak_edit/' . $kontak['kontak_id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('admin/kontak_hapus/' . $kontak['kontak_id']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    