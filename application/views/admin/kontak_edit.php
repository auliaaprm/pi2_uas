

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body" >
                    <div class="col-md-10 mt-3">
                    <h3> EDIT DATA KONTAK </h3>
                        <hr></hr>
                    <form action="<?= base_url('admin/editkontak') ?>" method="POST">
                        <input type="hidden" name="kontak_id" value="<?= $kontak['kontak_id'] ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                        <input type="text" name="kontak" class="form-control" id="exampleFormControlInput1" placeholder="Tingkat" value="<?= $kontak['kontak'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="Keterangan" value="<?= $kontak['keterangan'] ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>