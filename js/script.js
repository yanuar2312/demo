document.addEventListener("DOMContentLoaded", () => {
    // Menjalankan animasi fade-in-up pada body
    document.body.style.opacity = '1';
    
    // Fungsi untuk animasi penghitung angka
    const counters = document.querySelectorAll('.count');
    const speed = 200;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;

            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.querySelector('.overlay');
    const companyCard = document.querySelector('.company-card');
    const companyDetails = document.getElementById('company-details');
    const closeBtn = companyCard.querySelector('.close');
    
    document.querySelectorAll('.company-logo').forEach(logo => {
        logo.addEventListener('click', function() {
            const companyId = this.getAttribute('data-company');
            // Dapatkan detail perusahaan berdasarkan companyId
            let details = '';
            switch(companyId) {
                case '1':
                    details = '<h4>Perusahaan 1</h4><p>Detail tentang pengerjaan di perusahaan 1.</p>';
                    break;
                case '2':
                    details = '<h4>Perusahaan 2</h4><p>Detail tentang pengerjaan di perusahaan 2.</p>';
                    break;
                case '3':
                    details = '<h4>Perusahaan 3</h4><p>Detail tentang pengerjaan di perusahaan 3.</p>';
                    break;
                case '4':
                    details = '<h4>Perusahaan 4</h4><p>Detail tentang pengerjaan di perusahaan 4.</p>';
                    break;
                case '5':
                    details = '<h4>Perusahaan 5</h4><p>Detail tentang pengerjaan di perusahaan 5.</p>';
                    break;
                case '6':
                    details = '<h4>Perusahaan 6</h4><p>Detail tentang pengerjaan di perusahaan 6.</p>';
                    break;
                case '7':
                    details = '<h4>Perusahaan 7</h4><p>Detail tentang pengerjaan di perusahaan 7.</p>';
                    break;
                case '8':
                    details = '<h4>Perusahaan 8</h4><p>Detail tentang pengerjaan di perusahaan 8.</p>';
                    break;
                default:
                    details = '<h4>Detail Perusahaan</h4><p>Detail tentang pengerjaan di perusahaan ini.</p>';
            }
            companyDetails.innerHTML = details;
            overlay.style.display = 'block';
            companyCard.style.display = 'block';
        });
    });

    closeBtn.addEventListener('click', function() {
        overlay.style.display = 'none';
        companyCard.style.display = 'none';
    });

    overlay.addEventListener('click', function() {
        overlay.style.display = 'none';
        companyCard.style.display = 'none';
    }); 
    
// Untuk galeri gambar aktivitas pengerjaan
    document.querySelectorAll('.activity-img').forEach(img => {
        img.addEventListener('click', function() {
            const src = this.getAttribute('src');
            const modalImage = document.getElementById('modalImage');
            modalImage.setAttribute('src', src);
            $('#activityModal').modal('show');
        });
    });
});

