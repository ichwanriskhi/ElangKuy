<section class="card p-4 shadow-sm">
            <h1 class="text-center mb-4">Halaman Login</h1>
            <form method="post" action="autentikasi_admin.php">
                <div class="mb-3 row align-items-center">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="mb-3 row align-items-center">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="d-grid gap-2 col-12 mx-auto mb-3">
                    <button type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit">Login</button>
                </div>
            </form>
</section>