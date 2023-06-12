function modal(id) {
    const action = id == "add" ? "Ekle" : "Düzenle";

    Swal.fire({
        title: `Kullanıcı ${action}`,
        html: `
        <div class="form-outline">
            <label id="stock__name">E-Posta</label>
            <input type="email" id="email" class="form-control" value="test@test.com"></input>
            <label id="stock__name">Telefon</label>
            <input type="phone" id="phone" class="form-control value="12312312"></input>
        </div>
        `,
        showCancelButton: true,
        confirmButtonText: 'Kaydet',
        cancelButtonText: 'İptal',
    });
}
