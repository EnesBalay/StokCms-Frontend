function changeCount(id) {
    const action = id == "increase" ? "Arttır" : "Azalt";

    Swal.fire({
        title: `Stok ${action}`,
        text: "Test Ürün stok 552",
        html: `
        <div class="form-outline">
            <label id="stock_${id}_name">#stok_${id}_name</label>
            <input type="number" min="0" id="count" class="form-control" value="0"></input>
        </div>
        `,
    });
}
