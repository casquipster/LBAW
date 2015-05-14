<?php include_once($BASE_DIR .'database/items.php');  ?>


<section id="item" >
    <div class="container">

            <div class="row">

               <div class="col-md-9">

                    <div class="thumbnail">
                        <img class="img-responsive" src="uploads/finos.png" alt="">
                        <div class="caption-full">
                            <h4 class="pull-right"><?php echo $curItem['purchasePrice']; ?></h4>
                            <h4><a href="#"><?php echo $curItem['name']; ?></a></h4>
                            <h4><a href="#"><?php echo $quantity; ?> in stock <?php if($quantity['COUNT(*)'] > 0){ ?> <span class="glyphicon glyphicon-ok"></span><?php } else {?><span class="glyphicon glyphicon-remove"></span> <?php } ?> </a>
                            <p> <?php echo $curItem['description']; ?></p>
                        </div>
                    <div class="options">
                        <a class="btn btn-default" data-toggle="modal" data-target="#buyModal">Buy Now!</a>
                        <a href="/pages/items/request_item.php" class="btn btn-default" data-toggle="modal" data-target="#useModal">Request Use!</a>
                         
                        <a href="#" class="btn btn-default">Edit/Delete Item</a>
                          
                    </div>
                        <div class="ratings">
                            <p class="pull-right"><?php $rev['count(*)'] ?>reviews</p>
                            <p>
                                <?php echo $rate['avg(rate)'];
                                    echo ' stars';

                                    for($i = 0; $i < $rate['avg(rate)']; $i++){?>

                                    <span class="glyphicon glyphicon-star"></span>

                                    <?php 
                                    }; 
                                    ?>
                            </p>
                        </div>
                    </div>

                    <div class="well">

                        <div class="text-right">
                            <a class="btn btn-success" data-toggle="modal" data-target="#reviewModal">Leave a Review</a>
                        </div>

                        
                        <?php foreach ($reviews as $review) { ?>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <?php $username = getUsernameReview($review['reviewID']);
                                     echo $username['name'];
                                     ?>
                                <p><?php $review['content']?></p>
                                </div>
                            </div>

                            <hr>
                        <?php } ?>

                        

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->
</section>
