<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<?php if (session()->get('role') === 'admin') : ?>
    <h3>Edit Data Member</h3>
    <form action="<?= base_url('data-member/update/'  . $member['id']) ?>" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group row">
            <label for="no_hp" class="col-sm-2 col-form-label">Nomer Handphone</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $member['no_hp'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama Member</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" value="<?= $member['name'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="tgl_pemesanan" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan" value="<?= $member['tgl_pemesanan'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
<?php else : ?>
    <div class="alert alert-danger" role="alert">
        Anda tidak memiliki akses untuk melihat data
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>