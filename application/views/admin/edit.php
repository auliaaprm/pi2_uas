

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card" style="width: 40rem; padding: 20px 20px 20px 20px; margin:auto;">
                    <div class="card-body" >
                    <div class="col-md-10 mt-3">
                    <h3> EDIT DATA PROFILE </h3>
                        <hr></hr>
                    <form action="<?= base_url('admin/editprofile') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $pribadi['id'] ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap" value="<?= $pribadi['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" value="<?= $pribadi['tgl_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="gender" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Kelamin" value="<?= $pribadi['gender'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" id="exampleFormControlInput1" placeholder="Kewarganegaraan" value="<?= $pribadi['kewarganegaraan'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Agama</label>
                        <input type="text" name="agama" class="form-control" id="exampleFormControlInput1" placeholder="Agama" value="<?= $pribadi['agama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Golongan Darah</label>
                        <input type="text" name="gol_darah" class="form-control" id="exampleFormControlInput1" placeholder="Golongan Darah" value="<?= $pribadi['gol_darah'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <input type="text" name="status" class="form-control" id="exampleFormControlInput1" placeholder="Status" value="<?= $pribadi['status'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $pribadi['alamat'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="file" name="foto" class="form-control" value="<?= $pribadi['foto'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>