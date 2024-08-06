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
                <p class="text2 py-4 text-center">Lupa Password?</p>
                <form class="form-type-round w-250px" onsubmit="return validateForm()">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email/Username" id="username">
                        <div id="errorUsername" class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-round btn-block btn-custom" type="submit" onclick="window.location.href='<?= site_url('guest/Dashboard/barupass'); ?>'">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// validasi kolom input berubah warna
function validateForm() {
    var username = document.getElementById('username').value.trim();
    var isValid = true;

    if (username === '') {
        document.getElementById('errorUsername').textContent = 'Email/Username tidak boleh kosong.';
        document.getElementById('username').classList.add('is-invalid');
        isValid = false;
    } else {
        document.getElementById('errorUsername').textContent = '';
        document.getElementById('username').classList.remove('is-invalid');
    }

    return isValid;
}

// menghilangkan validasi saat kolom terisi
document.querySelectorAll('#username').forEach(function(element) {
    element.addEventListener('input', function() {
        if (this.value.trim() !== '') {
            this.classList.remove('is-invalid');
            document.getElementById('errorUsername').textContent = '';
        }
    });
});
</script>
