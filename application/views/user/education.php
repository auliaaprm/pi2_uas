<!-- Page Content-->
<div class="container-fluid p-0">
             <!-- Education-->
             <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h3>Riwayat Pendidikan</h3>
                    <hr></hr>
                    <div class="mb-5"></div>
                    <ul>
                    <?php foreach ($pendidikan_list as $list): ?>
                    <li>
                        <div class="d-flex" data-id="<?= $list['pendidikan_id'] ?>">
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
                            <div class="flex-grow-1">
                                <h4 class="mb-0"><?= $list['nama_tempat'] ?></h4>
                                <div class="subheading mb-3"><?= $list['tingkat'] ?> - (<?= $list['tahun'] ?>)</div>
                                <div></div>
                            </div>
                        </div>
                        </div>
                    </li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </section>