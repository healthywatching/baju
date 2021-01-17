<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" method="post" action="<?= base_url('login/signup'); ?>">
                <span class="login100-form-title p-b-33">
                    <?= $title; ?>
                </span>
                <?= $this->session->flashdata('message'); ?>
                <div class="wrap-input100">
                    <input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="wrap-input100">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="wrap-input100 rs1" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="wrap-input100 rs1" data-validate="Password is required">
                    <input class="input100" type="password" name="passwordconf" placeholder="Password Konfirmasi">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                    <?= form_error('passwordconf', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="container-login100-form-btn m-t-20">
                    <button class="login100-form-btn">
                        <?= $title; ?>
                    </button>
                </div>

                <div class="text-center">
                    <span class="txt1">
                        Already account ?
                    </span>

                    <a href="<?= base_url('login'); ?>" class="txt2 hov1">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>