function modal(id) {
    const action = id == "add" ? "Ekle" : "Düzenle";

    Swal.fire({
        title: `Ürün modeli ${action}`,
        html: `
        <div class="form-outline">
            <label>Model adı</label>
            <input id="model" class="form-control"></input>
            <label>Marka</label>
            <input id="brand" class="form-control"></input>
            <label>Sıra</label>
            <input type="number" min="0" id="queue" class="form-control" value="0"></input>
        </div>
        `,
        showCancelButton: true,
        confirmButtonText: 'Kaydet',
        cancelButtonText: 'İptal',
    });
}

