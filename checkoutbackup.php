 <!-- Checkout Form -->
 <div class="form-container-checkout">
    <form action="" method="post">
      <h3>Checkout</h3>

      
    <?php
    if(!isset($_SESSION['email'])){
include('user_area/user_login.php');
    }else{
        include('payment.php');
    }
    
    ?>

      <input type="text" name="user_name" required placeholder="Enter your full name">
      <input type="text" name="user_address" required placeholder="Enter your address">
      <input type="text" name="user_email" required placeholder="Enter your email">
      <select name="payment_type">
        <option value="payment_select">--Select Payment Method--</option>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="paypal">PayPal</option>
        <option value="cash_on_delivery">Cash on Delivery (Currently not available)</option>
      </select>
      <input type="submit" value="proceed to pay" class="form-btn" name="submit">
      <p>Changed decision? <a href="cart.php">Go back</a></p>
    </form>
  </div>