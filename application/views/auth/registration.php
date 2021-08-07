<div class="container">
    <div class="card mt-5 mb-5">
        <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
                
                <div class="col-7" style="margin: auto;">
                    <div class="p-5">
                         <div class="text-center mt-3 mb-3">
                                    <h3><b>DAFTAR AKUN<b></h3>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark btn-user btn-block">
                                Daftar Sekarang
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Lupa kata sandi?</a>
                        </div>
                        <div class="text-center">
                            <div class="small">Sudah memiliki akun?
                                <a href="<?= base_url(); ?>auth">Login!</a>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>