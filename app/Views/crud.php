<!DOCTYPE html>
<html>

<head>
    <title>Daftar User</title>
    <script src="<?= base_url('jquery.min.js') ?>"></script>
</head>

<body>
    <h1>Daftar User</h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td>
                    <button onclick="location.href='<?= site_url('crud/edit/' . $user['id']) ?>'">Edit</button>
                    <?= form_open('/crud/delete/' . $user['id']) ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    <?= form_close() ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


    <div>
        <?= form_open(site_url('/crud'), ['method' => 'post']) ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="name" name="name">

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close() ?>

    </div>

    <button id="btn-click">Klik Saya</button>
</body>


    <script>
		$(document).ready(function() {
			$('#btn-click').click(function() {
				alert('Tombol diklik!');
			});
		});
	</script>


</html>