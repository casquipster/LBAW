<?php include_once('templates/header.php'); ?>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="left-sidebar">
                        <a href="inventory_body.php" class="btn btn-default">Inventory</a>
                        <a href="profile_body.php" class="btn btn-default">Profile</a>
                        <a href="item_body.php" class="btn btn-default">item example</a>
                        <a href="admin_panel_body.php" class="btn btn-default">admin panel</a>
					</div>
				</div>
            </div>
        </div>
</section>
<br/>
<br/>
<br/>
<div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Recommended items</h2>
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">	
                                    <div class="col-sm-4">
                                        <div class="product">
                                            <div class="single-product">
                                                <div class="productinfo text-center">
                                                    <img src="uploads/cadeira.png" alt="" />
                                                      <h2>5€ /unit</h2>
										              <p>Plastic Chair</p>
                                                        <p>Exterior</p>
                                                    <a href="#" class="btn btn-default"></i>More info</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product">
                                            <div class="single-product">
                                                <div class="productinfo text-center">
                                                    <img src="uploads/finos.png" alt="" />
                                                        <h2>500 €</h2>
                                                        <p>Fluid/Liquid Distributor</p>
                                                        <p>Pressurized</p>
                                                    <a href="#" class="btn btn-default"></i>More info</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product">
                                            <div class="single-product">
                                                <div class="productinfo text-center">
                                                    <img src="uploads/tractor.png" alt="" />
                                                    <h2>5000 €</h2>
										              <p>Tractor/Automatic Lawn Mower</p>
                                                        <p>John Deere</p>
                                                    <a href="#" class="btn btn-default"></i>More info</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="item">	
                                    <div class="col-sm-4">
                                        <div class="product">
                                            <div class="single-product">
                                                <div class="productinfo text-center">
                                                    <img src="uploads/porca.png" alt="" />
                                                    <h2>0,2€</h2>
                                                    <p>Metal Screw</p>
                                                    <p>(Variable size)</p>
                                                    <a href="#" class="btn btn-default"></i>More info</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product">
                                            <div class="single-product">
                                                <div class="productinfo text-center">
                                                    <img src="uploads/parafuso.png" alt="" />
                                                    <h2>0,2€</h2>
                                                    <p>Metal Bolt</p>
                                                    <p>Cross shape</p>
                                                    <a href="#" class="btn btn-default"></i>More info</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product">
                                            <div class="single-product">
                                                <div class="productinfo text-center">
                                                    <img src="uploads/maqlavar.png" alt="" />
                                                    <h2>815€</h2>
                                                    <p>Washing Machine</p>
                                                    <p>(used)</p>
                                                    <a href="#" class="btn btn-default"></i>More info</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                        </div>
                            </div>
                            <!-- controls -->
                            <a class="left carousel-control" href="#recommended-item-carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#recommended-item-carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div>
                </div><!--/recommended_items-->
<br/><br/><br/><br/>
<h2 class="title text-center">Not yet a member? <a href="http://gnomo.fe.up.pt/~ei12036/LBAW/register_body.php">Signup now!</a></h2>
<?php include_once('templates/footer.php'); ?>