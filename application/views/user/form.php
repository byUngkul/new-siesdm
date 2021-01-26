    <input type="hidden" name="id_user" id="id_user" value="<?= isset($user) ? $user['id_user'] : null ?>">
    <div class="form-row mb-2">
        <label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Username</label>
        <div class="col-md-3 pl-0 ml-0">
            <input type="text" class="form-control form-control-sm" name="username" id="username" value="<?= isset($user) ? $user['username'] : null ?>">
        </div>
    </div>

    <div class="form-row  mb-2">
        <label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Password</label>
        <div class="col-md-3 pl-0 ml-0">
            <input type="password" class="form-control form-control-sm" id="password" name="password" value="">
        </div>
    </div>

    <div class="form-row  mb-2">
        <label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Ulangi Password</label>
        <div class="col-md-3 pl-0 ml-0">
            <input type="password" class="form-control form-control-sm" id="password" name="password" value="">
        </div>
    </div>

    <div class="form-row  mb-2">
        <label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Pegawai</label>
        <div class="col-md-3 pl-0 ml-0">
            <select name="id_pegawai" id="id_pegawai" class="form-control form-control-sm">
                <option value="">Pilih</option>
                <?php foreach ($pegawais as $pegawai) : ?>
                    <option value="<?= $pegawai['id_pegawai'] ?>"><?= $pegawai['nama_pegawai'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-row  mb-2">
        <label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Otoritas</label>
        <div class="col-md-3 pl-0 ml-0">
            <select name="id_role" id="id_role" class="form-control form-control-sm">
                <option value="">Pilih</option>
                <?php foreach ($roles as $role) : ?>
                    <option value="<?= $role['id_role'] ?>"><?= $role['name_role'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <h5 class="mt-3">Permission</h5>
    <hr>

    <div id="permission_list"></div>