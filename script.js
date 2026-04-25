document.addEventListener('DOMContentLoaded', function() {
    // 1. Inisialisasi Data BPS (Hanya jika di halaman home)
    if (document.getElementById('animated-bps-number')) {
        fetchBpsData();
    }

    // 2. Event Listener untuk Pencarian Wisata di Home
    const searchInput = document.getElementById("searchInput");
    const filterFasilitas = document.getElementById("filterFasilitas");

    if (searchInput) searchInput.addEventListener('input', filterWisata);
    if (filterFasilitas) filterFasilitas.addEventListener('change', filterWisata);
});

async function fetchBpsData() {
    try {
        const response = await fetch('get_alamat.php');
        const data = await response.json();

        if (data.datacontent) {
            let total = 0;
            for (let key in data.datacontent) {
                total += parseFloat(data.datacontent[key]);
            }
            animateValue("animated-bps-number", 0, total, 2000);
        }
    } catch (error) {
        console.error('Error fetching BPS:', error);
    }
}

function animateValue(id, start, end, duration) {
    let obj = document.getElementById(id);
    let range = end - start;
    let startTime = new Date().getTime();
    let endTime = startTime + duration;

    function run() {
        let now = new Date().getTime();
        let remaining = Math.max((endTime - now) / duration, 0);
        let value = Math.round(end - (remaining * range));
        obj.innerHTML = value.toLocaleString('id-ID');
        if (value == end) return;
        requestAnimationFrame(run);
    }
    run();
}

function filterWisata() {
    let search = document.getElementById("searchInput").value.toLowerCase();
    let filter = document.getElementById("filterFasilitas").value.toLowerCase();
    let cards = document.getElementsByClassName("wisata-card-wrapper");

    Array.from(cards).forEach(card => {
        let title = card.querySelector(".card-title").innerText.toLowerCase();
        let lokasi = card.querySelector(".lokasi-text").innerText.toLowerCase();
        let fasilitas = card.getAttribute("data-fasilitas").toLowerCase();

        let matchSearch = title.includes(search) || lokasi.includes(search);
        let matchFilter = (filter === "semua") || fasilitas.includes(filter);

        card.style.display = (matchSearch && matchFilter) ? "block" : "none";
    });
}