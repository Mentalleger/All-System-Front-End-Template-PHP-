
function parsePrice(priceText) {
    priceText = priceText.toLowerCase().replace(/\s/g, "");

    if (priceText.includes("k")) {
        return parseFloat(priceText.replace("k", "")) * 1000;
    }

    return parseInt(priceText.replace(/[^0-9]/g, ""));
}

function formatRupiah(num) {
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0
    }).format(num);
}

document.addEventListener("input", function(e) {
    if (e.target.classList.contains("qty-input")) {
        let row = e.target.closest("tr");

        let qty = parseInt(e.target.value) || 1;
        if (qty < 1) qty = 1;

        let price = parseInt(row.querySelector(".price").dataset.price);
        let totalEl = row.querySelector(".total");

        let rowTotal = qty * price;

        e.target.value = qty;

        totalEl.dataset.total = rowTotal;
        totalEl.textContent = formatRupiah(rowTotal);

        updateGrandTotal();
    }
});

function updateGrandTotal() {
    let total = 0;

    document.querySelectorAll("#testTable1 tbody tr").forEach(row => {
        let totalText = row.querySelector(".total")?.textContent || "0";

        // remove Rp, dots, etc → keep numbers only
        let number = parseInt(totalText.replace(/[^0-9]/g, "")) || 0;

        total += number;
    });

    document.getElementById("grand-total").textContent = formatRupiah(total);
}
