function deletion() {
    Swal.fire({
        title: "Silme işlemini onaylıyor musunuz ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sil",
        cancelButtonText: "Iptal",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire("Silindi!");
            return true;
        }
        else {
            return false;
        }
    });
}
