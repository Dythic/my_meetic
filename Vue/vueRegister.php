<?php $this->titre = "Mon Blog - "; ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $user['username'] ?></h1>
    </header>
</article>
<hr />
<header>
    <h1 id="titreReponses">Add new user</h1>
</header>
<form method="post" action="index.php?action=newUser">
    <input type="text" name="username" id="username">
    <input type="email" name="email" id="email">
    <input type="password" name="pass" id="pass">
    <input type="submit" value="Submit" />
</form>