<!DOCTYPE html>

<link rel="stylesheet" href="style.css">

<title>Blogr-Home</title>

<body>
    <?php foreach ($posts as $post): ?>
        
    <article>
     <?= $post; ?>
    </article>
    <?php endforeach;?>

    
    

</body>