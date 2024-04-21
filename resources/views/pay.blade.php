<x-layout>

   <br>

    <div class="flex flex-col justify-center gap-2 ml-3">
        <p class="text-center">{{ auth()->user()->email }}</p>
        <span class="text-center" id="Cost"></span>
    </div>

    <form id="paymentForm" class="mx-3 mt-10">
        <div class="hidden form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email-address" value="{{ auth()->user()->email }}" required />
        </div>

        <div class="flex justify-center py-2 bg-green-500 form-submit">
          <button type="submit" class="w-full" onclick="payWithPaystack()"> Pay </button>
        </div>
      </form>

      <script src="https://js.paystack.co/v1/inline.js"></script>

<script>
    let total = sessionStorage.getItem('total');
    let cost = document.getElementById('Cost');

    cost.textContent = '$' + total;

</script>
</x-layout>
