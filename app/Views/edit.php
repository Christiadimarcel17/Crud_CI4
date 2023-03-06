<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    

    <?= form_open('crud/update/'.$user['id']) ?>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?= esc($user['name']) ?>">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= esc($user['email']) ?>">
        </div>

      
        <button type="submit">Update</button>
    <?= form_close() ?>

</body>
</
