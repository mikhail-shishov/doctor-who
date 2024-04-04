<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .form-field {
            display: block;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="publication-form">
                <form action="" method="post">
                    <label class="form-field">
                        <span>Date:</span>
                        <input class="form-control" type="date" name="date" value="<?php echo date("d.m.Y"); ?>">
                    </label>
                    <label class="form-field">
                        <span>Title:</span>
                        <input class="form-control" type="text" name="title">
                    </label>
                    <label class="form-field">
                        <span>Description:</span>
                        <textarea class="form-control" name="summary"></textarea>
                    </label>
                    <label class="form-field">
                        <span>Content:</span>
                        <textarea class="form-control" name="content"></textarea>
                    </label>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-secondary" type="button">Save</button>
                        <button class="btn btn-primary" type="submit">Save & publish</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>