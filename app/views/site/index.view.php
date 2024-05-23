<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
</head>
<body>
    <header>
        <h1>Lista de Usuários</h1>
    </header>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>EMAIL</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) : ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
