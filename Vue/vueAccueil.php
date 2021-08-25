  <?php $this->titre = "Mon Blog"; ?>

<?php foreach ($users as $user):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=user&id=" . $user['user'] ?>">
                <h1 class="titreBillet"><?= $user['username'] ?></h1>
            </a>
        </header>
    </article>
    <hr />
<?php endforeach; ?>