<?php include '../controller/crud.controller.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary d-flex flex-column min-vh-100">
    <header class="header p-3">
        <nav class="navbar bg-dark-subtle border shadow-sm rounded p-3">
            <a href="" class="navbar-brand">Dino-16</a>
        </nav>
    </header>
    <main class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="container border rounded shadow-sm p-3">
            <h1 class="text-center">Create</h1>
            <table class="table table-stripped">
                <thead>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($rows as $row): 
                    ?>
                        <tr class="text-center">
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['age']); ?></td>
                            <td><?php echo htmlspecialchars($row['address']); ?></td>
                            <td>
                                <a class="btn btn-success" href="update.view.php?id=<?php echo htmlspecialchars($row['id']); ?>">update</a>
                                <a class="btn btn-danger" href="../controller/crud.controller.php?delete_id=<?php echo htmlspecialchars($row['id']); ?>">delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>