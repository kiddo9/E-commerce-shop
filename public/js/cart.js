//const { document } = require("postcss");

const CartIcon = document.getElementById('menu');
let CartMenu = document.getElementById('menu_bar');
const CartBG = document.getElementById('menu_bg');
const CloseCartMenu = document.getElementById('cancel');
const cartIcon = document.getElementById('cartIcon');
const cartList = document.getElementById('cartList');
const Close_cart = document.getElementById('Close_cart');

CartIcon.onclick = OpenMenu;
function OpenMenu(){
    CartBG.style.display = 'block';
    CartMenu.style.transform = 'translateX(0)';
    CartMenu.style.transition = '0.7s';
    CloseCartMenu.style.transform = 'translateX(0)';
    CloseCartMenu.style.transition = '0.6s';
}

CloseCartMenu.onclick = CloseMenu;
function CloseMenu(){
    CartBG.style.display = '';
    CartMenu.style.transform = '';
    CartMenu.style.transition = '0.5s';
    CloseCartMenu.style.transform = '';
    CloseCartMenu.style.transition = '0.4s';
}

cartIcon.onclick = openCart;
function openCart(){
    cartList.style.transform = 'translateX(0)';
}

Close_cart.onclick = Closecart;
function Closecart(){
    cartList.style.transform = '';
}


