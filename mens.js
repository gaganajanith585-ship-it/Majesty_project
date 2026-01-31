
const cards = document.querySelectorAll('.item-card');
const overlay = document.getElementById('overlay');
const popupImg = document.getElementById('popupImg');
const popupTitle = document.getElementById('popupTitle');
const popupPrice = document.getElementById('popupPrice');
const popupDesc = document.getElementById('popupDesc');
const closeBtn = document.getElementById('closeBtn');

const cartId =document.getElementById('cart_id');
const cartName = document.getElementById('cart_name');
const cartPrice = document.getElementById('cart_price');

cards.forEach(card => {
  card.addEventListener('click', () => {

    const title = card.dataset.title;
    const priceText = card.dataset.price;
    const price = priceText.replace('$', '');
    const img = card.dataset.img;
    const desc = card.dataset.desc;

    popupImg.src = card.dataset.img;
    popupTitle.textContent = card.dataset.title;
    popupPrice.textContent = card.dataset.price;
    popupDesc.textContent = card.dataset.desc;

    cartId.value = title.replace(/\s+/g, '_');
    cartName.value = title;
    cartPrice.value = price;

    overlay.style.display = 'flex';
  });
});

closeBtn.addEventListener('click', () => {
  overlay.style.display = 'none';
});

overlay.addEventListener('click', e => {
  if (e.target === overlay) overlay.style.display = 'none';
});
