<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>

    <style>
        .form-field {
            display: block;
        }
    </style>
</head>

<body>
    <main>
        <div class="publication-form">
            <form action="" method="post">
                <label class="form-field">
                    <span>Date:</span>
                    <input type="date" name="date" value="<?php echo date("d.m.Y"); ?>">
                </label>
                <label class="form-field">
                    <span>Title:</span>
                    <input type="text" name="title">
                </label>
                <label class="form-field">
                    <span>Description:</span>
                    <textarea name="summary"></textarea>
                </label>
                <label class="form-field">
                    <span>Content:</span>
                    <textarea name="content"></textarea>
                </label>
                <label class="form-field">
                    <input type="text" name="title">
                </label>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
</body>

</html>