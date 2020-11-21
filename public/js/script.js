function preview() {
    const nama = document.querySelector("#gambar"); 
    const imgPreview = document.querySelector(".img-preview");
 

    const fileNama = new FileReader();
    fileNama.readAsDataURL(nama.files[0]);

    fileNama.onload = function (e) {
        imgPreview.src = e.target.result;
    };
}
