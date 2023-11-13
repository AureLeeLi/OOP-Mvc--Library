<?php require 'partials/header.html.php';?>

<div class="max-w-5xl mx-auto my-8">
    
    <!-- tableau d'erreurs -->
    <?php foreach ($errors as $error){?>
        <p><?= $error;?></p>
    <?php }?>

    <form method="post">
        <input type="text" name="name" value="<?= $user->name;?>">
        <button>Sauvegarder</button>
    </form>

</div>
<?php require 'partials/footer.html.php'; ?>