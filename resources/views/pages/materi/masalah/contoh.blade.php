<div style="padding: 60px 30px 0 30px;" class="mb-5">
    <span class="border border-primary p-2 rounded">Contoh Soal: </span>
    <p class="mt-3">
        Aisyah sedang mengamati gerak sebuah bola yang dilempar ke atas. Ia menemukan bahwa ketinggian bola setiap detiknya dapat dinyatakan dengan rumus: \( h(t) = -4,9t^2 + 15t + 2.\)
        Berdasarkan rumus tersebut pada detik ke berapakah bola akan mencapai ketinggian maksimumnya?
    </p>
    <p>Jawab:</p>
    <ul>
        <li>
            <p>Identifikasi variabel, maka di dapat:</p>
            <p>\( t \) adalah waktu dalam detik, dan \( h(t) \) adalah tinggi bola dalam meter</p>
        </li>
        <li>
            Membentuk persamaan kuadrat yaitu: \( h(t) = -4,9t^2 + 15t + 2 \)
        </li>
        <li>
            Kemudian hitung puncak dari parabola, yaitu : \( y = ax^2 + bx + c \) adalah \( t = -\frac{b}{2a} \)
            <div style="display: flex; align-items: center; gap: 12px; font-size: 1.1rem; margin-top: 10px;">
                <span> \( t = \) - </span>
                <div style="display: grid; grid-template-rows: auto auto; text-align: center; justify-content: center;">
                    <div style="display: flex; justify-content: center;">
                        <input type="text" name="sol1" placeholder="" style="width: 40px;"> </div>
                    <hr style="margin: 0.1rem 0; border: 1px solid black;">
                    <div style="display: flex; align-items: center; justify-content: center; gap: 2px;">
                        <span>2</span>
                        <span>(</span><input type="text" name="sol2" placeholder="" style="width: 40px;"><span>)</span> </div>
                </div>
                <span> = </span>
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" name="sol3" placeholder="" style="width: 40px;"> 
                    <hr style="margin: 0.1rem 0; border: 1px solid black;">
                    <input type="text" name="sol4" placeholder="" style="width: 40px;"> 
                </div>
                <span> = </span>
                <input type="text" name="sol5" placeholder="" style="width: 50px;"> 
                <small class="text-muted">(pembulatan 2 angka desimal)</small>
        </li>
        <li>
            Jadi, bola mencapai ketinggian maksimum ketika <input type="text" name="sol6" placeholder="" style="width: 50px;"> detik setelah dilempar.
        </li>
    </ul>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const correctAnswers = {
        // ... jawaban lat1, lat2, dll ...
        "sol1": "15",
        "sol2": "-4.9",
        "sol3": "-15",
        "sol4": "-9.8",
        "sol5": "1.53",
        "sol6": "1.53"
    };

    // Logika deteksi otomatis (Pastikan ini ada di bawah objek correctAnswers)
    // ⚙️ Mesin Validasi
    Object.keys(correctAnswers).forEach(name => {
        const input = document.querySelector(`[name="${name}"]`);
        if (!input) return;

        input.addEventListener("input", function() {
            // Support titik dan koma untuk desimal
            const userAnswer = input.value.trim().replace(',', '.').toLowerCase();
            const correct = correctAnswers[name].toLowerCase();

            if (userAnswer === "") {
                input.style.backgroundColor = "";
                input.style.borderColor = "";
            } else if (userAnswer === correct) {
                input.style.backgroundColor = "#e8ffe8"; // Hijau
                input.style.borderColor = "green";
            } else {
                input.style.backgroundColor = "#ffe8e8"; // Merah
                input.style.borderColor = "red";
            }
        });
    });
});
</script>