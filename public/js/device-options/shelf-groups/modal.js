function modal(id) {
    const action = id == "add" ? "Ekle" : "Düzenle";

    Swal.fire({
        title: `Raf grubu ${action}`,
        html: `
        <div class="form-outline">
            <label>Marka adı</label>
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


