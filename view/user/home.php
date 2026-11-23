<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../view/template/background.css">
    <link rel="stylesheet" href="../view/template/userhome.css">
</head>
<body>
    <div class="Greet">
        <h1>Happy Reading!</h1>
    </div>

    <div class="book-option">
        <?php foreach ($books as $book): ?>
            <label class="title-box">
                <a href="../view/user/book.php?id=<?= $book['id']; ?>">
                    <div class="cover">
                        <?php if (!empty($book['cover'])): ?>
                            <img src="data:image/jpeg;base64,<?= base64_encode($book['cover']); ?>" alt="<?= htmlspecialchars($book['title']); ?>">
                        <?php endif; ?>
                    </div>
                    <input type="radio" name="Title" value="<?= $book['id']; ?>">
                    <span><?= htmlspecialchars($book['title']); ?></span>
                </a>
            </label>
        <?php endforeach; ?>
        <label class="title-box">
            <a href="#">
                <input type="radio" name="Title" value="coming_soon">
                <span>coming soon...</span>
            </a>
        </label>
    </div>
</body>
</html>
