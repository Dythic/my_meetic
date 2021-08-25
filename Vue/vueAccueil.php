<?php $this->titre = "Mon Blog"; ?>

<p>Hello</p>

<?php foreach ($publishs as $publish):
    ?>
    <article>
        <header>
            <h1 class="titre"><?= $publish['username'] ?></h1>
        </header>
        <p><?= $publish['contents'] ?></p>
    </article>
    <hr />
<?php endforeach; ?> 