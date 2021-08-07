

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body" >
                    <div class="col-md-10 mt-3">
                        <h3> TAMBAH DATA KONTAK </h3>
                        <hr></hr>
                        <form action="<?= base_url('admin/simpankontak') ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                                <input type="text" name="kontak" class="form-control" id="exampleFormControlInput1" placeholder="Kontak">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="Keterangan">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>