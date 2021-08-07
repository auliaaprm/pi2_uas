

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body" >
                    <div class="col-md-10 mt-3">
                    <h3> EDIT DATA PENDIDIKAN </h3>
                        <hr></hr>
                    <form action="<?= base_url('admin/editpendidikan') ?>" method="POST">
                        <input type="hidden" name="pendidikan_id" value="<?= $pendidikan['pendidikan_id'] ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tingkat</label>
                        <input type="text" name="tingkat" class="form-control" id="exampleFormControlInput1" placeholder="Tingkat" value="<?= $pendidikan['tingkat'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Tempat Pendidikan</label>
                        <input type="text" name="nama_tempat" class="form-control" id="exampleFormControlInput1" placeholder="Nama Tempat Pendidikan" value="<?= $pendidikan['nama_tempat'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Masa Pendidikan</label>
                        <input type="text" name="tahun" class="form-control" id="exampleFormControlInput1" placeholder="Masa Pendidikan" value="<?= $pendidikan['tahun'] ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>