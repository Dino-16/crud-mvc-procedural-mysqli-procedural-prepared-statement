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
        <div class="container w-25 border rounded shadow-sm p-3">
            <h1 class="text-center">Create</h1>
            <form action="<?php echo htmlspecialchars('../controller/crud.controller.php'); ?>" method="POST">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" required>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <button class="btn border w-100" type="submit" name="create">Create</button>
            </form>
        </div>
    </main>
</body>
</html>