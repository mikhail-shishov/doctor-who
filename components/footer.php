</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>Vytvoril Mikhail Shishov &copy; 2023</p>
                <p><a href="mailto:mikhail.shishov@student.ukf.sk">mikhail.shishov@student.ukf.sk</a></p>
            </div>
            <div class="col-3">
                <p><a href="index.php">Hlavná</a></p>
                <p><a href="contact.php">Kontakt</a></p>
            </div>
            <div class="col-3">
                <p><a href="about.php">O Doktore</a></p>
                <p><a href="enemy.php">Nepriateľia</a></p>
            </div>
        </div>
        <p class="copyright">
            Toto je fan stránka. Práva na seriál patria <a href="https://www.bbc.com/" target="_blank" rel="nofollow noopener">BBC</a>.
        </p>
    </div>
</footer>

<?php if (isset($lightbox)) { ?>
    <script src="js/simple-lightbox.min.js"></script>
<?php }?>
<?php if (isset($splide)) { ?>
    <script src="js/splide.min.js"></script>
<?php }?>
<script src="js/scripts.js"></script>
</body>

</html>