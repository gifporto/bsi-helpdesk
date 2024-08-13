<div class="col-12 d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="row w-100">
        <div class="desktop-only col-lg-6 d-flex justify-content-center align-items-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 text-center">
                    <img class="mb-4 w-50 d-block mx-auto" src="<?= asset_path('/img/logo-hd-bsi.svg', '_theme_') ?>">
                    <p class="text-login">Helpdesk BSI.</p>
                    <p>Mencatat Ajuan Layanan.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="card card-login card-shadowed px-30 py-30">
                <p class="text2 py-4 text-center">Sign in</p>
                <!-- Form login -->
                <form id="loginForm" class="form-type-round w-250px" action="<?= site_url('guest/login/authenticate'); ?>" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="email" name="email" id="email" required>
                        <div class="invalid-feedback" id="errorUsername"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        <div class="invalid-feedback" id="errorPassword"></div>
                    </div>
                    <div class="form-group flexbox">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me</span>
                        </label>
                    </div>
                    <div class="text-danger d-flex justify-content-center fw-500 pb-3">
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-round btn-block btn-custom" type="submit">Login</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="color-primary" href='<?= site_url('guest/Dashboard/lupapass'); ?>'>Lupa Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
