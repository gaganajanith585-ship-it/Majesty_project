document.addEventListener("DOMContentLoaded", () => {

  const cards = document.querySelectorAll('.item-card');
  const overlay = document.getElementById('overlay');
  const popupImg = document.getElementById('popupImg');
  const popupTitle = document.getElementById('popupTitle');
  const popupPrice = document.getElementById('popupPrice');
  const popupDesc = document.getElementById('popupDesc');
  const closeBtn = document.getElementById('closeBtn');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      popupImg.src = card.dataset.img;
      popupTitle.textContent = card.dataset.title;
      popupPrice.textContent = card.dataset.price;
      popupDesc.textContent = card.dataset.desc;
      overlay.style.display = 'flex';
    });
  });

  closeBtn.addEventListener('click', () => {
    overlay.style.display = 'none';
  });

  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      overlay.style.display = 'none';
    }
  });

});
