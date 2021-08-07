<!-- Page Content-->
<div class="container-fluid p-0">
             <!-- Awards-->
             <section class="resume-section">
                <div class="resume-section-content">
                    <h3 class="mb-0">Kontak</h3>
                    <hr></hr>
                    <div class="mb-5"></div>
                    <ul class=" mb-0">
                        <?php foreach ($kontak_list as $list): ?>
                        <li>
                            <div class="row">
                            <div class="col-2"><?= $list['keterangan'] ?></div>
                            <div class="col-1"> : </div> 
                            <div class="col-1 text-left"><?= $list['kontak'] ?></div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </section>