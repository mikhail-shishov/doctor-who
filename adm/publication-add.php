<?php include_once 'components/header.php' ?>
<div class="container">
    <div class="publication-form">
        <form action="" method="post">
            <label class="form-control mb-3">
                <span class="form-label">Datum:</span>
                <input class="form-control mt-1 mb-2" type="date" name="date" placeholder="<?php echo date('d.m.Y'); ?>" value="<?php echo date('d.m.Y'); ?>">
            </label>
            <label class="form-control mb-3">
                <span class="form-label">Názov:</span>
                <input class="form-control mt-1 mb-2" type="text" name="title">
            </label>
            <label class="form-control mb-3">
                <span class="form-label">Opis:</span>
                <textarea class="form-control mt-1 mb-2" name="summary"></textarea>
            </label>
            <label class="form-control mb-3">
                <span class="form-label">Text:</span>
                <textarea class="form-control mt-1 mb-2" name="content"></textarea>
            </label>
            <div class="d-flex gap-2">
                <a href="/doctor-who/adm/" class="btn me-auto" type="submit">Späť</a>
                <button class="btn btn-secondary" type="button">Uložiť</button>
                <button class="btn btn-primary" type="submit">Uložiť a zverejniť</button>
            </div>
        </form>
    </div>
</div>
<?php include_once 'components/footer.php' ?>