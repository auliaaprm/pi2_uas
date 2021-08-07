

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="text-center">
                            <h4><b>DATA PROFILE</b></h4>
                    </div>
                    <hr></hr>
                    <div class="row mt-3">
                        <div class="col-3">
                            <a href="<?= base_url('admin/create') ?>" class="btn btn-success">Tambah</a>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Kewarganegaraan</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($allprofile as $no => $pribadi) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no + 1 ?></th>
                                    <td><?= $pribadi['nama']; ?></td>
                                    <td><?= $pribadi['tgl_lahir']; ?></td>
                                    <td><?= $pribadi['gender']; ?></td>
                                    <td><?= $pribadi['kewarganegaraan']; ?></td>
                                    <td><?= $pribadi['agama']; ?></td>
                                    <td><?= $pribadi['gol_darah']; ?></td>
                                    <td><?= $pribadi['status']; ?></td>
                                    <td><?= $pribadi['alamat']; ?></td>
                                    <td><?= $pribadi['foto']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/edit/' . $pribadi['id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('admin/hapus/' . $pribadi['id']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    