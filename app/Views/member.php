    <?= $this->extend('Layout/template'); ?>

    <?= $this->section('content'); ?>
    <?php if (session()->get('role') === 'admin') : ?>
        <h3>Data Member</h3>
        <a href="<?= base_url('data-member/tambah') ?>" class="btn btn-sm btn-primary mb-2">Tambah Data Member</a>
        <table class="table table-bordered table-stripped">
            <tr>
                <th>Nama</th>
                <th>No Handphone</th>
                <th>Tanggal Pemesanan</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($member as $s) : ?>
                <tr>
                    <td>
                        <?= $s['name'] ?></td>
                    <td>
                        <?= $s['no_hp'] ?></td>
                    <td>
                        <?= $s['tgl_pemesanan'] ?></td>
                    <td>
                        <a href="<?= base_url('data-member/edit/' . $s['id']) ?>" class="btn btn-warning">Edit</a>
                        <form action="<?= base_url('data-member/delete/' . $s['id']) ?>" method="POST" class="d-inline">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="confirm('Apakah anda yakin ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Anda tidak memiliki akses untuk melihat data
        </div>
    <?php endif; ?>
    <?= $this->endSection(); ?>