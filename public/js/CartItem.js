let cartCounter = 0;
let total = 0;
let itemtotal = 0;
let subtotal = 0;
let currency = '$';
let storageContent = [];
let itemTotal = 0;
let addcartMessage = document.getElementById('addcartmessage');
let addmessage = document.getElementById('addedmessage');

function show(message) {
   // addcartMessage.style.display = 'flex';
    addcartMessage.style.transform = 'translateY(0)';
    addcartMessage.style.transitionDuration = '500ms';
    addcartMessage.style.transition = '1s ease';
    addmessage.textContent = message + ' has been added to cart';

    // Set a timeout to hide the message after 2 seconds (2000 milliseconds)
    setTimeout(function() {
        addcartMessage.style.transform = '';
       // addcartMessage.style.display = ''; // Move the message off-screen
        setTimeout(function() {
            addcartMessage.style.transform = ''; // Hide the message after it slides up
        }, 500); // Wait for the transition duration before hiding the message
    },2000); // Hide the message after 2 seconds
}

function AddItem(productId) {
    let Item = document.getElementById('product-' + productId);
    let productName = Item.getAttribute('data-name');
    let productPrice = Item.getAttribute('data-price');
    let productImage = Item.getAttribute('data-image');
    let productcategory = Item.getAttribute('data-category');
    let productype = Item.getAttribute('data-type');
    let quantity = 1;

    console.log(productName, productPrice, productImage, productcategory, productype, productId, quantity);

    add(productName, productPrice, productImage, productcategory, productype, productId, quantity);

    show(productName); // Show message immediately
}



function add(productName, productPrice, productImage, productcategory, productype, productId, quantity) {
    let cartItem = document.querySelector('#cartIte');

    let content = document.createElement('div');
    content.className = 'flex justify-around w-full gap-6 p-2 mt-4 rounded-lg bg-slate-600 content';

    content.innerHTML = `
    <img src="${productImage}" alt="" class="object-cover w-1/3 bg-gray-300 h-[150px]">
    <div class="flex flex-col w-[100%]">
      <h2 class="text-lg font-bold text-left">${productName}</h2>
      <div class="text-xl flex flex-row gap-1"><span>$</span><h4 class='price'>${productPrice}</h4></div>
      <div class="flex flex-row gap-2 justify-between p-1">
        <p class="text-xl cursor-pointer add">+</p>
        <span class="quantity " data-name="${productName}" data-price="${productPrice}" data-image="${productImage}">${quantity}</span>
        <p class="text-xl minus cursor-pointer">-</p>
      </div>
      ${productcategory == 'beauty picks' ? (productype == 'Foot Wear' ? '<select class="w-9 mt-2"><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option></select>' : '<select class="w-9 mt-2"><option value="s">s</option><option value="l">l</option><option value="xl">xl</option><option value="xxl">xxl</option></select>') : ''}
      <span class="text-md qtotal" data-qtotal="${productPrice}"></span>
    </div>
    <button class="delete"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
      </svg>
    </button>
  </div>
`;


    let quantityElements = content.querySelectorAll('.quantity');

    quantityElements.forEach(function(quantityElement) {
        let add = quantityElement.closest('.content').querySelector('.add');
        let minus = quantityElement.closest('.content').querySelector('.minus');
        let display = quantityElement.closest('.content').querySelector('.quantity');
        let qtotal = quantityElement.closest('.content').querySelector('.qtotal');
        let price = parseFloat(quantityElement.closest('.content').querySelector('.price').textContent);

        let deleteButton = content.querySelector('.delete'); // Select the delete button within the content
        deleteButton.addEventListener('click', function (event) {
            removeContent(event);
            updateqty(event);
        });
        // Add event listener for the add button
        add.addEventListener('click', function() {
            let currentValue = parseInt(display.textContent) || 1;
            currentValue++; // Increment the quantity
            display.textContent = currentValue; // Update the displayed quantity
            updateqty(); // Update the total
        });

        // Add event listener for the minus button
        minus.addEventListener('click', function() {
            let currentValue = parseInt(display.textContent) || 1;
            if (currentValue > 1) {
                currentValue--; // Decrement the quantity
                display.textContent = currentValue; // Update the displayed quantity
                updateqty(); // Update the total
            }
        });

        // Function to update the total
        function updateqty() {
            let quantity = parseInt(display.textContent) || 1;
            let itemtotal = quantity * price;
            qtotal.textContent = 'qty total: ' + currency + itemtotal;
                    subtotal += itemtotal; // Calculate subtotal
                document.getElementById('subtotal').textContent = currency + subtotal; // Update subtotal display

                let delivery = Math.round(subtotal / 10);
                let deliveryElement = document.getElementById('Delivery');
                if (deliveryElement) {
                    deliveryElement.textContent = currency + delivery;
                }

                total = subtotal + delivery;
                let totalElement = document.getElementById('total');
                if (totalElement) {
                    totalElement.textContent = currency + total;
                }

                sessionStorage.setItem('total', total);
        }

        function removeContent(event) {
            let content = event.target.closest('.content');
            if (content) {
                content.remove();
                // Update cartCounter and other calculations after removing content
                updateCartCounter(--cartCounter);
                updateqty() // Decrement cartCounter and update
            }
        }


        // Initial calculation
        updateqty();
    });

    function updateCartCounter(count) {
        let cartCounterElement = document.querySelector('#cartCounter');
        if (cartCounterElement) {
            if (count > 0) {
                cartCounterElement.textContent = count;
            } else {
                cartCounterElement.textContent = 0;
            }
        }
    }

    cartItem.appendChild(content);

    cartCounter++;
    updateCartCounter(cartCounter);

    store(productId, quantity);
}




const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_4def231123b6e58ef44e3a6b328cdb1f72ec3cf2', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: sessionStorage.getItem('total')
    * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}


window.addEventListener('beforeunload', function() {
    sessionStorage.clear(); // Clear sessionStorage when the page is abdeleteButton to be unloaded (refreshed or closed)
});

function store(productId, quantity) {
    storageContent = JSON.parse(localStorage.getItem('cartItem')) || [];

      storageContent.push({
        id: productId,
        quantity: quantity
      });

    localStorage.setItem('cartItem', JSON.stringify(storageContent));
  }
