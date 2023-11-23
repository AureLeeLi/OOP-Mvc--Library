<?php require 'partials/header.html.php';?>

<div class="max-w-5xl mx-auto px-3">
        <div class="lg:flex items-center">
            <div class="lg:w-1/2">
                <img class="rounded-lg max-w-full mx-auto mb-12" src="/<?= $book->image;?>" alt="<?= $book->title;?>">
            </div>
            <div class="lg:w-1/2">
                <h1 class="text-center text-2xl font-bold"><?= $book->title;?></h1>

                <div class="flex items-center justify-between my-10">
                    <div>
                        <p class="text-4xl font-bold"><?= $book->price(true);?> €</p> 
                        <!-- voir fonction price et discount -->
                        <?php 
                        if ($book->hasDiscount()){?>
                        <p class="text-lg font-bold">-<?= $book->discount;?>% <span class="line-through"><?= $book->price;?>€</span></p>
                        <?php }?>
                    </div>
                    <div class="text-lg text-gray-900">
                        <p>
                            Par <strong><?= $book->author;?></strong>
                        </p>
                        <p>
                            Publié le <?= $book->date();?>.
                            <!-- gestion du format de la date -->
                        </p>
                    </div>
                </div>

                <p class="text-xl text-center text-gray-900">
                    ISBN: <strong><?= $book->isbn();?></strong>
                </p>
                <div class="text-center mt-12">
                    <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200" href="/cart/1/add">
                        Ajouter au panier
                    </a>
                </div>
            </div>
        </div>
    </div>
        
<?php require 'partials/footer.html.php'; ?>