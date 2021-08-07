<!-- Page Content-->
<div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section">
                <div class="resume-section-content">
                <h3 class="mb-0">Profil</h3>
                    <hr></hr>
                    <div class="mb-5"></div>
                    <ul class=" mb-0">
                        <?php foreach ($profile_list as $list): ?>
                        <li>
                            <div class="row">
                            <div class="col-2">Nama</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['nama'] ?></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                            <div class="col-2">Tanggal Lahir</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= date("d F Y",strtotime($list['tgl_lahir'])) ?></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                            <div class="col-2">Jenis Kelamin</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['gender'] ?></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                            <div class="col-2">Kewarganegaraan</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['kewarganegaraan'] ?></div>
                            </div>
                        </li><li>
                            <div class="row">
                            <div class="col-2">Agama</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['agama'] ?></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                            <div class="col-2">Golongan Darah</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['gol_darah'] ?></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                            <div class="col-2">Status</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['status'] ?></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                            <div class="col-2">Alamat</div>
                            <div class="col-1"> : </div> 
                            <div class="col-8"><?= $list['alamat'] ?></div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </section>