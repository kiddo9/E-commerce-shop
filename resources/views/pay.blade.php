<x-layout>

   <br>

    <div class="flex flex-col justify-center gap-2 ml-3">
        <p class="text-center">{{ auth()->user()->email }}</p>
        <span class="text-center" id="Cost"></span>
    </div>

    <form id="paymentForm">
        <div class="hidden form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email-address" value={{ auth()->user()->email }} />
        </div>

        <div class="flex justify-center w-screen py-2 mt-5 text-white bg-green-500 form-submit">
          <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
      </form>

      <script src="https://js.paystack.co/v1/inline.js"></script>


<script>
    let total = sessionStorage.getItem('total');
    let cost = document.getElementById('Cost');

    cost.textContent = '$' + total;


    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_4def231123b6e58ef44e3a6b328cdb1f72ec3cf2', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: total  * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      window.addEventListener('beforeunload', function() {
        sessionStorage.remove('total'); // Clear sessionStorage when the page is abdeleteButton to be unloaded (refreshed or closed)
     });
      window.location.href = '/order';
    }
  });

  handler.openIframe();
}
</script>
</x-layout>
