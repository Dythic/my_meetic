<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contents/style.css" />
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="container">
            <header>
                <a href="index.php">
                    <h1 id="title"></h1>
                </a>
            </header>
            <div id="contents">
                <?= $contents ?>
            </div> 
            <footer id="footer">
            </footer>
        </div>
    </body>
</html>