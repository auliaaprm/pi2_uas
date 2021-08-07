<!-- Page Content-->
<div class="container-fluid p-0">
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h3 class="mb-0">Pengalaman Kerja</h3>
                    <hr></hr>
                    <div class="mb-5"></div>
                    <?php foreach ($pengalaman_list as $list): ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="mb-0" data-id="<?= $list['pekerjaan_id'] ?>">
                        <div class="flex-grow-1">
                            <h4 class="mb-0"><?= $list['jabatan'] ?></h4>
                            <div class="subheading mb-0"><?= $list['nama_tempat'] ?> - (<?= $list['masa_jabatan'] ?>)</div>
                            <div class="col-10"><p><?= $list['deskripsi'] ?></p></div>
                        </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </section>