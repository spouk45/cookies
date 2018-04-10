<?php require 'inc/head.php';

if (!isset($_SESSION['login'])){
    echo '<p class="text-center">Vous devez vous authentifier</p>';
}
?>
<section class="cookies container">
    <div class="row">
        <?php
        if (empty($_SESSION['cart'])){
            echo '<p class="text-center">Aucun élements aux panier</p>';
        }
        else{

                ?><h2 class="text-center">Votre selection</h2>
                <div id="cartList"><?php
            foreach($_SESSION['cart'] as $cart){
                ?><figure class="thumbnail text-center little">
                    <img src="assets/img/product-<?php echo $cart?>.jpg" alt="cookies choclate chips" class="img-responsive ">
                </figure><?php
            }
            ?></div>
            <div class="text-center">
                <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">Passer la commande</button>
            </div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p class="text-center"> Va les faire toi même !!! Ca te coutera moins cher!</p>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <?php
        }

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
