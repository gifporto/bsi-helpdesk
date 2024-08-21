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
                <?php foreach ($units as $unit): ?>
                    <div class="media media-single">
                        <div class="media-body">
                            <h6 class="fw-700"><?= $unit['name']; ?></h6>
                        </div>
                        <div class="media-right">
                            <button class="ml-1 btn btn-round btn-secondary btn-square text-center" data-toggle="modal" data-target="#modal_edit_<?= $unit['id']; ?>"><i class="fa fa-pencil"></i></button>
                            <button class="ml-1 btn btn-round btn-danger btn-square text-center" data-toggle="modal" data-target="#modal_delete_<?= $unit['id']; ?>"><i class="fa fa-trash"></i></button>
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
                <h5 class="modal-title" id="modalCreateLabel">Buat Unit Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('super/unit/store'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
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
<?php foreach ($units as $unit): ?>
    <!-- Modal Edit -->
    <div class="modal fade" id="modal_edit_<?= $unit['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel_<?= $unit['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel_<?= $unit['id']; ?>">Edit Unit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('super/unit/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $unit['id']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_name_<?= $unit['id']; ?>">Nama</label>
                            <input value="<?= $unit['name']; ?>" type="text" class="form-control" id="edit_name_<?= $unit['id']; ?>" name="name" required>
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
    <div class="modal fade" id="modal_delete_<?= $unit['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel_<?= $unit['id']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel_<?= $unit['id']; ?>">Hapus Unit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('super/unit/delete'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $unit['id']; ?>">
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus unit ini?</p>
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