<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="NIK" id="NIK" class="form-control" placeholder="NIK">
            </div>

            <div class="form-group">
                <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Nama">
            </div>

            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-grup">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>

            <div class="input-grup mb-3"></div>
            <div class="input-grup mb-3 row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <center> <a href="<?= base_url('') ?>">Kembali </center>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->