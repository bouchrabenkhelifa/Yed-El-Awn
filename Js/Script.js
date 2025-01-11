// tri pour les membres
document.addEventListener('DOMContentLoaded', function () {
    const trierNom = document.getElementById('triermembre');
    trierNom.addEventListener('click', function() {
        const table = document.querySelector('table tbody'); 
        const rows = Array.from(table.rows); 
        rows.sort(function(a, b) {
            const keyA = a.cells[0].textContent.trim(); 
            const keyB = b.cells[0].textContent.trim(); 
            return keyA.localeCompare(keyB); 
        });
        rows.forEach(function(row) {
            table.appendChild(row); 
        });
    });
});
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    slides.forEach((slide, i) => {
        slide.style.display = (i === index) ? 'block' : 'none';
    });
}

function nextSlide() {
    const slides = document.querySelectorAll('.slide');
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
    setInterval(nextSlide, 3000); // Change every 3 seconds
});


//filtre pour les membres
document.addEventListener('DOMContentLoaded', function () {
    const trierNom = document.getElementById('triermembre');
    if (trierNom) {
        trierNom.addEventListener('click', function() {
            const table = document.querySelector('table tbody');
            const rows = Array.from(table.rows);
            rows.sort(function(a, b) {
                const keyA = a.cells[0].textContent.trim();
                const keyB = b.cells[0].textContent.trim();
                return keyA.localeCompare(keyB);
            });
            rows.forEach(function(row) {
                table.appendChild(row);
            });
        });
    }
});