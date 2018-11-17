<div class="container mt-2">
    <h1>Shopping Cart</h1>
    <?php if ($items == NULL) { ?> <h5><p class="mt-5 text-center">No items added to the shopping cart!</p></h5> <?php } ?>
    <div class="row">
        <?php
        if ($items != NULL) {
            ?>
            <?php
            foreach ($items as $item):
                ?>
                <div class="col-12">
                    <div class="card mt-4" style="width:100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img style="max-width:100%;" src="<?php
                                    echo base_url("assets/img/covers/" . $item['cover_url']);
                                    ?>" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="col-10">
                                    <h5 class="card-title"><?php echo $item['title']; ?></h5>
                                    <p class="card-text"><?php echo $item['author']; ?></p>
                                    <p class="card-text text-right font-weight-bold"><?php echo "Rs." . $item['unit_price']; ?></p>
                                    <p class="card-text text-right font-weight-bold"><?php echo "Quantity : " . $item['bqty']; ?></p>
                                    <hr class="my-4">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-primary btn-sm">Update quantity</a>
                                        <a href="<?php echo base_url("cart/remove/" . $item['id']); ?>
                                           " class="btn btn-danger btn-sm">Remove Item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
        }
        ?>
    </div>
</div>