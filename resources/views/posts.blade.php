<!DOCTYPE html>
<title>My Blog</title>
<link rel='stylesheet' href="/app.css"></link>
<body>
    <?php foreach($posts as $post) : ?>
    <article>
        <?= $post ?>
    </article>
    <?php endforeach; ?>
</body>
</html>
