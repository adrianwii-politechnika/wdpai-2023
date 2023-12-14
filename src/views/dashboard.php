<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/global.css">
    <title>DASHBOARD</title>
</head>

<body>

    <nav>
        <h1>LOGO</h1>
        <ul>
            <li>LINK 1</li>
            <li>LINK 2</li>
            <li>LINK 3</li>
            <li>LOGIN</li>
        </ul>
    </nav>

    <main>
        <div class="sidebar">SIDEBAR</div>
        <div class="elements">
            <?= $title; ?>


            <?php foreach($dogs as $dog): ?> 
              <div class="dog-container">
                <img class="dog-image" src="<?= $dog->getPhotoUrl(); ?>" alt="Dog 1">
                <p>
                  <?= $dog->getName(); ?>
                </p>
                <img class="paw-icon" src="https://cdn-icons-png.flaticon.com/512/12/12638.png">
              </div>

            <?php endforeach; ?> 
              
              
        </div>
    </main>
</body>

</html>