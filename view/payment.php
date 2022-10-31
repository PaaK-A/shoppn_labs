
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>

<body>
    <!-- payment form to get custimer email and amount -->
    <form id="paymentform">
        <!--make email textbox-->
        <input type="email" name="email" placeholder="Enter your email" id="email" required>

       <!--make amount number text box--> 
        <input type="text" name="payamount" placeholder="Enter amount." id="amount_number" required> 

        <!--submit button-->
        <button type="submit" onclick="payWithPaystack()"  value="Pay" name="paysubmit"> PAY </button>
    </form>
</body>


<script>
    // paystack popup for payment  
const paymentForm = document.getElementById('paymentform');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_100119966e976d57e253930b199f7065fa2c1ed8', // Replace with your public key
    email: document.getElementById("email").value,
    amount: document.getElementById("amount_number").value * 100,
    currency: 'GHS',
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },

    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);

      $.ajax({
        url:'../actions/processpaystack.php?reference='+response.reference,
        method: 'get',
        success: function(response){
            // the transaction status is in response.data.status
            alert(response);
        }
      })
    }
  });


  handler.openIframe();
}

</script>