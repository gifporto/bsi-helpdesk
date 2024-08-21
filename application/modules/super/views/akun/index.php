<div class="col-12">
    <div class="card shadow-2">
        <div class="card-body">
            <div class="media-list media-list-sm media-list-hover media-list-divided">
                <div class="flexbox mb-20">
                    <div class="lookup">
                        <input class="w-200px" type="text" data-provide="media-search" placeholder="search..">
                    </div>
                    <div class="ml-2">
                        <a class="btn btn-sm btn-round btn-custom" data-toggle="modal" data-target="#modal_create" href="">+ Tambah</a>
                    </div>
                </div>
                <?php foreach ($users as $user): ?>
                    <div class="media media-single">
                        <div class="media-body">
                            <h6 class="fw-700"><?= $user->name; ?>
                                <?php if ($user->role_name !== 'Super Admin'): ?>
                                    - Unit BSI <?= $user->unit_bsi; ?>
                                <?php endif; ?>
                            </h6>
                            <small class="text-fader"><?= $user->role_name; ?></small>
                        </div>
                        <div class="media-right">
                            <button class="ml-1 btn btn-round btn-secondary btn-square text-center" data-toggle="modal" data-target="#modal_edit_<?= $user->id; ?>"><i class="fa fa-pencil"></i></button>
                            <button class="ml-1 btn btn-round btn-danger btn-square text-center" data-toggle="modal" data-target="#modal_delete_<?= $user->id; ?>"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Buat Pengguna Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('super/akun/store'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="role_id">Role</label>
                        <select class="form-control" id="role_id" name="role_id" required onchange="toggleUnitBSI()">
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Staff</option>
                        </select>
                    </div>
                    <div class="form-group" id="unit_bsi_field" style="display:none;">
                        <label for="unit_bsi">Unit BSI</label>
                        <input type="text" class="form-control" id="unit_bsi" name="unit_bsi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary btn-round" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-sm btn-round btn-custom">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modals for Edit and Delete -->
<?php foreach ($users as $user): ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="modal_edit_<?= $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel_<?= $user->id; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel_<?= $user->id; ?>">Edit Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm_<?= $user->id; ?>" action="<?php echo site_url('super/akun/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $user->id; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_name_<?= $user->id; ?>">Nama</label>
                            <input value="<?= $user->name; ?>" type="text" class="form-control" id="edit_name_<?= $user->id; ?>" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_email_<?= $user->id; ?>">Email</label>
                            <input value="<?= $user->email; ?>" type="email" class="form-control" id="edit_email_<?= $user->id; ?>" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_password_<?= $user->id; ?>">Password</label>
                            <input type="password" class="form-control" id="edit_password_<?= $user->id; ?>" name="password">
                        </div>
                        <div class="form-group">
                            <label for="edit_role_id_<?= $user->id; ?>">Role</label>
                            <select class="form-control" id="edit_role_id_<?= $user->id; ?>" name="role_id" required onchange="toggleEditUnitBSI(<?= $user->id; ?>)">
                                <option value="1" <?= $user->role_name == 'Super Admin' ? 'selected' : ''; ?>>Super Admin</option>
                                <option value="2" <?= $user->role_name == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                                <option value="3" <?= $user->role_name == 'Staff' ? 'selected' : ''; ?>>Staff</option>
                            </select>
                        </div>
                        <div class="form-group" id="edit_unit_bsi_field_<?= $user->id; ?>" style="<?= $user->role_name == 'Admin' ? 'display: block;' : 'display: none;'; ?>">
                            <label for="edit_unit_bsi_<?= $user->id; ?>">Unit BSI</label>
                            <input type="text" class="form-control" id="edit_unit_bsi_<?= $user->id; ?>" name="unit_bsi" value="<?= $user->unit_bsi; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary btn-round" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sm btn-round btn-custom">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="modal_delete_<?= $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel_<?= $user->id; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel_<?= $user->id; ?>">Hapus Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteForm_<?= $user->id; ?>" action="<?php echo site_url('super/akun/delete'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $user->id; ?>">
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus pengguna ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary btn-round" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sm btn-round btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
    function toggleUnitBSI() {
        const roleSelect = document.getElementById('role_id');
        const unitBSIField = document.getElementById('unit_bsi_field');
        unitBSIField.style.display = roleSelect.value == "2" ? "block" : "none";
        unitBSIField.style.display = roleSelect.value == "3" ? "block" : "none";
    }

    function toggleEditUnitBSI(userId) {
        const roleSelect = document.getElementById(`edit_role_id_${userId}`);
        const unitBSIField = document.getElementById(`edit_unit_bsi_field_${userId}`);
        unitBSIField.style.display = roleSelect.value == "2" ? "block" : "none";
        unitBSIField.style.display = roleSelect.value == "3" ? "block" : "none";
    }
</script>