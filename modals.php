<script type="text/javascript">
 $(window).load(function(){
  $('#buyModal').onClick('show');
  $('#useModal').onClick('show');
  $('#reservationModal').onClick('show');
  $('#reviewModal').onClick('show');
 });
 </script>

<div class="modal fade" id="buyModal" tabindex="1" role="dialog" aria-labelledby="buyModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="buyModalLabel">Make Purchase</h1>
      </div>
      <div class="modal-body">
          <form role="form">
              <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity">
              </div>
              <div class="form-group">
                  <label for="delivery">Delivery:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Ship it to me</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">I'll pick it up myself</label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="payment">Payment method:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Credit Card</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Bank Transfer</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Direct Payment (on-hands)</label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="payment">How to pay:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Pay now</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Pay on delivery</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Pay in instalments</label>
                    </div>
              </div>
              
              <button type="submit" class="btn btn-success">Buy!</button>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      </div>
      </form>
  </div>
</div>

<div class="modal fade" id="useModal" tabindex="1" role="dialog" aria-labelledby="useModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="useModalLabel">Request Use</h1>
      </div>
      <div class="modal-body">
		  <form role="form">
              <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity">
              </div>
              <div class="form-group">
                  <label for="delivery">Delivery:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Ship it to me</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">I'll pick it up myself</label>
                  </div>
                    <label for="startDate">Day of pick-up:</label>
                    <input type="date" class="form-control" id="startDate">
              </div>
            <div class="form-group">
                  <label for="delivery">Return:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Via Shipping</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">I'll deliver it myself</label>
                  </div>
                    <label for="endDate">Day of return:</label>
                    <input type="date" class="form-control" id="endDate">
              </div>
              <div class="form-group">
                  <label for="payment">Payment method:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Credit Card</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Bank Transfer</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Direct Payment (on-hands)</label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="payment">How to pay:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Pay now</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Pay on delivery</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Pay in instalments</label>
                    </div>
              </div>
              
              <button type="submit" class="btn btn-success">Send request!</button>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      </div>
      </form>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      </div>
  </div>
</div>

<div class="modal fade" id="reservationModal" tabindex="1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="reservationModalLabel">Reservation Form</h1>
      </div>
      <div class="modal-body">
		  <form role="form">
              <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity">
                  <label for="startDate">From:</label>
                    <input type="date" class="form-control" id="startDate">
                  <label for="endDate">Untill:</label>
                    <input type="date" class="form-control" id="endDate">
              </div>
              <div class="form-group">
                  <label for="delivery">Delivery:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Ship it to me</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">I'll pick it up myself</label>
                  </div>
                    
              </div>
            <div class="form-group">
                  <label for="delivery">Return:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Via Shipping</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">I'll deliver it myself</label>
                  </div>
                    
              </div>
              <div class="form-group">
                  <label for="payment">Payment method:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Credit Card</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Bank Transfer</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Direct Payment (on-hands)</label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="payment">How to pay:</label>
		          <div class="radio">
                    <label><input type="radio" name="optradio">Pay now</label>
                    </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Pay on delivery</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Pay in instalments</label>
                    </div>
              </div>
              
              <button type="submit" class="btn btn-success">Make Reservation!</button>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      </div>
      </form>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      </div>
  </div>
</div>

<div class="modal fade" id="reviewModal" tabindex="1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="reviewModalLabel">Rate/Review Item</h1>
      </div>
      <div class="modal-body">
		<div class="row" id="post-review-box">
                <div class="col-md-12">
                <label for="rating">Rate this Item:</label>
                <input type="number" class="form-control" id="rating">
                    <form accept-charset="UTF-8" action="" method="post">
                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
        
                        <div class="text-right">
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      </div>
  </div>
</div>