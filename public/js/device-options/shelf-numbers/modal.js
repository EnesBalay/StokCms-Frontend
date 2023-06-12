function modal(id) {
    const action = id == "add" ? "Ekle" : "Düzenle";

    Swal.fire({
        title: `Raf Numarası ${action}`,
        html: `
        <div class="form-outline">
        <div class="form-group">
        <label for="name">Raf Numarası</label>
        <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
        <label>Sıra</label>
        <input type="number" min="0" id="order" name="order" class="form-control" value="0"></input>
        </div>
        <div class="form-group">
        <label for="rafGroup">Raf Grubu</label>
                          <select class="form-control" name="rafGroup" id="rafGroup">
                              <option>Seçim yapın</option>
                              <option>Raf Grup 1</option>
                            </select>
        </div>
        </div>
        `,
        showCancelButton: true,
        confirmButtonText: "Kaydet",
        cancelButtonText: "İptal",
    });
}
