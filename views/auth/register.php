<div class="container">
    <div class="row align-items-center mt-6 mb-6">
        <div class="col-lg-6">
            <h1 class="text-primary font-fb">facetook</h1>
            <h3 class="mb-0">Facetook membantu Anda terhubung dan berbagi dengan orang-orang dalam kehidupan Anda.</h5>
        </div>
        <div class="col-lg-5 offset-lg-1">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="index.php?page=register_process" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" name="first_name" placeholder="Nama Depan" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" name="last_name" placeholder="Nama Belakang" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="Alamat Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Kata Sandi" required>
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control form-control-lg" name="born" placeholder="Tangal Lahir" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="radio1" value="Laki-Laki" required>
                                <label class="form-check-label" for="radio1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="radio2" value="Perempuan" required>
                                <label class="form-check-label" for="radio2">
                                    Perempuan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="radio3" value="Khusus" required>
                                <label class="form-check-label" for="radio3">
                                    Khusus
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-lg w-100 mb-3">Daftar</button>
                        <hr />
                        <div class="text-center">
                            <p>Sudah memiliki akun? <a href="index.php">Masuk</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>