
const items = Array.from(document.querySelectorAll('.photo-placeholder'));
const lb = document.getElementById('lightbox');
const lbImg = document.getElementById('lb-img');
const lbCap = document.getElementById('lb-caption');
let current = 0;

function openLb(i) {
  current = i;
  const img = items[i].querySelector('img');
  lbImg.src = img.src;
  lbImg.alt = img.alt;
  lbCap.textContent = img.alt;
  lb.classList.add('open');
}

items.forEach((el, i) => el.addEventListener('click', () => openLb(i)));
document.getElementById('lb-close').addEventListener('click', () => lb.classList.remove('open'));
lb.addEventListener('click', e => { if (e.target === lb) lb.classList.remove('open'); });
document.getElementById('lb-prev').addEventListener('click', e => { e.stopPropagation(); openLb((current - 1 + items.length) % items.length); });
document.getElementById('lb-next').addEventListener('click', e => { e.stopPropagation(); openLb((current + 1) % items.length); });
