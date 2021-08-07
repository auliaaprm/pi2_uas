<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        
        <div class="col-lg-5">
            <div class="card mt-5 mb-5">
                 <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row mt-5">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center mb-5">
                                <h2><b>LOGIN</b></h2>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-user btn-block">
                                        Login
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                <a class="small text-primary" href="<?= base_url(); ?>auth/registration">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>