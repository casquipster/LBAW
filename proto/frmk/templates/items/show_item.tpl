<section id="item" >
    <div class="container">

            <div class="row">

               <div class="col-md-9">

                    <div class="thumbnail">
                        <img class="img-responsive" src="uploads/finos.png" alt="">
                        <div class="caption-full">
                            <h4 class="pull-right"><?php echo $curItem['purchasePrice'] ?></h4>
                            <h4><a href="#"><?php echo $curItem['name'] ?></a></h4>
                            <h4><a href="#"><?php echo $quantity ?> in stock <span class="glyphicon glyphicon-ok"></span></a>
                            <p> <?php echo $curItem['description'] ?></p>
                        </div>
                    <div class="options">
                        <a class="btn btn-default" data-toggle="modal" data-target="#buyModal">Buy Now!</a>
                        <a class="btn btn-default" data-toggle="modal" data-target="#useModal">Request Use!</a>
                        <a class="btn btn-default" data-toggle="modal" data-target="#reservationModal">Make Reservation</a>
                        <a href="#" class="btn btn-default">Edit/Delete Item</a>
                          
                    </div>
                        <div class="ratings">
                            <p class="pull-right">3 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                4.0 stars
                            </p>
                        </div>
                    </div>

                    <div class="well">

                        <div class="text-right">
                            <a class="btn btn-success" data-toggle="modal" data-target="#reviewModal">Leave a Review</a>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">10 days ago</span>
                                <p>This product was great in terms of quality. I would definitely buy another!</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">12 days ago</span>
                                <p>I've alredy ordered another one!</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">15 days ago</span>
                                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->
</section>
