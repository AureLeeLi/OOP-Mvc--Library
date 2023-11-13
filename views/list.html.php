<?php require 'partials/header.html.php';?>

<div class="max-w-5xl mx-auto">
    <h2 class="text-3xl font-bold my-6 text-center">Exemple MVC</h2>
    <h3 class="text-3xl text-center">Hello <?= $name;?></h3>
        <ul class="list-inside list-disc w-1/2 mx-auto py-4">
            <?php foreach ($cars as $car){?>
                <li class="py-2"><?= $car;?></li>
            <?php }?>
        </ul>

    <div>
        <h2 class="text-3xl font-bold my-6 text-center">CRUD MVC</h2> 
        <a href="/utilisateurs/creer" class="text-blue-400 underline">Créer un Utilisateur</a>
    </div>

    <div class="grid grid-cols-4 gap-3"> 
        <!-- grille de 4 colonnes -->
        <?php foreach ($users as $user){?>
            <a href="/utilisateurs/<?= $user['id'];?>">
                <div class="p-4 border rounded-lg shadow">
                        <?= $user['name'];?>
                </div>
            </a>
        <?php }?>
    </div>
</div>

<?php require 'partials/footer.html.php'; ?>