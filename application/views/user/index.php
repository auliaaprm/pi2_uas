
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                <?php foreach ($profile_list as $list): ?>
                    <div class="mb-0" data-id="<?= $list['id'] ?>">
                    <h2 class="mb-0 text-dark">WELCOME!</h2>
                    <h2 class="mb-5 text-dark">LET'S GET TO KNOW</h2>
                    <h2 class="mb-0">
                        <span class="text-primary"><?= $list['nama'] ?></span>
                    </h2>
                    <p class="lead mb-5">A student majoring in Information Systems from Catur Insan Cendekia University.</p>
                    <?php endforeach ?>
                </div>
            </section>
           
        </div>
       