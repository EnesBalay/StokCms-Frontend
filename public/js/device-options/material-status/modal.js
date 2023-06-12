function modal(id) {
    const action = id == "add" ? "Ekle" : "Düzenle";

    Swal.fire({
        title: `Malzeme Durumu ${action}`,
        html: `
        <div class="form-outline">
        <div class="form-group">
        <label for="name">Durum Adı</label>
        <input id="name" name="name" class="form-control"></input>
        </div>
        <div class="form-group">
        <label>Sıra</label>
        <input type="number" min="0" id="queue" class="form-control" value="0"></input>
        </div>
        <div class="form-group">
        <label>Renk</label>
        <input type="color" class="form-control form-control-color" name="color_code" id="color" value="#563d7c" title="Renk seçin">        
        </div>
        </div>
        `,
        showCancelButton: true,
        confirmButtonText: "Kaydet",
        cancelButtonText: "İptal",
    });
}
