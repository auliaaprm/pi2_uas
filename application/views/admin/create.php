

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body" >
                    <div class="col-md-10 mt-3">
                        <h3> TAMBAH DATA PROFILE </h3>
                        <hr></hr>
                        <form action="<?= base_url('admin/simpanprofile') ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                <input type="text" name="gender" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Kelamin">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan" class="form-control" id="exampleFormControlInput1" placeholder="Kewarganegaraan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Agama</label>
                                <input type="text" name="agama" class="form-control" id="exampleFormControlInput1" placeholder="Agama">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Golongan Darah</label>
                                <input type="text" name="gol_darah" class="form-control" id="exampleFormControlInput1" placeholder="Golongan Darah">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="Status">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                <input type="file" name="foto" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>