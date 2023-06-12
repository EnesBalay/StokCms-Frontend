function modal(id) {
    const action = id == "add" ? "Ekle" : "Düzenle";

    Swal.fire({
        title: `Firma ${action}`,
        html: `
        <div class="form-outline">
            <label>Firma adı</label>
            <input id="name" class="form-control"></input>
            <label>Ülke</label>
            <input id="country" class="form-control"></input>
            <label>Telefon</label>
            <input type="phone" id="phone" class="form-control"></input>
            <label>E-Posta</label>
            <input type="email" id="email" class="form-control"></input>
            <label>Sıra</label>
            <input type="number" min="0" value="0" id="queue" class="form-control"></input>
        </div>
        `,
        showCancelButton: true,
        confirmButtonText: 'Kaydet',
        cancelButtonText: 'İptal',
    });
}

