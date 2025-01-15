document.addEventListener('DOMContentLoaded', function () {
    // Cek apakah data cabang tersedia
    if (typeof echainData !== 'undefined' && echainData.cabang) {
        echainData.cabang.forEach(function (cabang) {
            // Cari elemen div berdasarkan id_lokasi_induk
            var div = document.getElementById(cabang.id_lokasi_induk);
            if (div) {
                // Tambahkan data ke dalam div
                div.innerHTML = `
                    <p>Lokasi: ${cabang.lokasi_induk}</p>
                    <p>Jumlah Karyawan: ${cabang.jumlah_karyawan}</p>
                    <p>Nama GM: ${cabang.nama_gm}</p>
                `;
            }
        });
    }

    // Cek apakah data traffic tersedia
    if (typeof echainData !== 'undefined' && echainData.traffic) {
        var trafficDiv = document.getElementById('traffic-data');
        if (trafficDiv) {
            trafficDiv.innerHTML = `
                <p>Jumlah Cabang: ${echainData.traffic.jumlah_cabang}</p>
                <p>Departure Domestic: ${echainData.traffic.jumdep_dom}</p>
                <p>Arrival Domestic: ${echainData.traffic.jumarr_dom}</p>
                <p>Departure International: ${echainData.traffic.jumdep_int}</p>
                <p>Arrival International: ${echainData.traffic.jumarr_int}</p>
            `;
        }
    }
});


// echain-script.js

document.addEventListener('DOMContentLoaded', function() {
    // Tampilkan data cabang di konsol
    console.log('Data Cabang:', echainData.cabang);
    
    // Tampilkan data traffic di konsol
    console.log('Data Traffic:', echainData.traffic);
});

