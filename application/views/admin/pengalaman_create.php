

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body" >
                    <div class="col-md-10 mt-3">
                        <h3> TAMBAH DATA PENGALAMAN KERJA </h3>
                        <hr></hr>
                        <form action="<?= base_url('admin/simpanpengalaman') ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Tempat Kerja</label>
                                <input type="text" name="nama_tempat" class="form-control" id="exampleFormControlInput1" placeholder="Nama Tingkat Kerja">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Masa Jabatan</label>
                                <input type="text" name="masa_jabatan" class="form-control" id="exampleFormControlInput1" placeholder="Masa Jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1" placeholder="Deskripsi">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>