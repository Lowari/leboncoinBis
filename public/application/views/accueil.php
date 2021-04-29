

    <div class="content">
        <div class="contentTitle">
            <span>Avec la livraison chez vous tout est à porter de main!</span>
            <p>Trouvez la bonne affaire parmi les millions de petites annonces leboncoinBis</p>
        </div>
    </div>

    

    <p class="mb-5">ehfejzc</p>

    <div class="container">

        <div class="card-custom card mt-2 shadow-lg">
            <div class="d-flex" id="contentCard">
                <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/33/ed/93/33ed93829e12c466f5974f8662f524869b5de3df.jpg?rule=ad-image" class="_1cnjm" alt="Type 3 centre ville du havre">
                <div>
                    <h3 class="ml-2 mb-2">Type 3 centre ville du havre</h3>
                    <h4 class="ml-2 mt-2">717€</h4>
                    <span class="ml-2">Locations</span><br>
                    <span class="ml-2">Le Havre 76600</span><br>
                    <span class="ml-2">Aujourd'hui, 09:30</span>
                </div>
                <img src="/assets/img/heart.svg" class="heart">
            </div>
        </div>

        <div class="card mt-2 shadow-lg">
            <div class="d-flex" id="contentCard">
                <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/04/9d/04/049d048c7e95e4b3922c2f2b2498adfe97c5ae35.jpg?rule=ad-image" class="_1cnjm" alt="Vélo adulte">
                <div>
                    <h3 class="ml-2 mb-2">Vélo adulte</h3>
                    <h4 class="ml-2 mt-2">90€</h4>
                    <span class="ml-2">Sports & Hobbies</span><br>
                    <span class="ml-2">Le Grand-Quevilly 76120</span><br>
                    <span class="ml-2">Aujourd'hui, 09:30</span>
                </div>
                <img src="/assets/img/heart.svg" class="heart">
            </div>
        </div>

        <div class="card mt-2 shadow-lg">
            <div class="d-flex" id="contentCard">
                <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/33/ed/93/33ed93829e12c466f5974f8662f524869b5de3df.jpg?rule=ad-image" class="_1cnjm" alt="Type 3 centre ville du havre">
                <div>
                    <h3 class="ml-2 mb-2">Type 3 centre ville du havre</h3>
                    <h4 class="ml-2 mt-2">717€</h4>
                    <span class="ml-2">Locations</span><br>
                    <span class="ml-2">Le Havre 76600</span><br>
                    <span class="ml-2">Aujourd'hui, 09:30</span>
                </div>
                <img src="/assets/img/heart.svg" class="heart">
            </div>
        </div>

    </div>

    <?php
    var_dump($test);

    ?>

    <?php
    foreach ($test as $key => $value) {
    ?>
        <p> <?php echo $test[$key]["id"] ?></p>

        <img src="?php echo $test[$key]['image'] ?>" >

        <p> <?php echo $test[$key]["title"] ?></p>
    <?php
    }
    ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>