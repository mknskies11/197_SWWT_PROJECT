 <!-- Checkout Form -->
 <div class="form-container-checkout">
    <form action="" method="post">
      <h3>Payment Options</h3>

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