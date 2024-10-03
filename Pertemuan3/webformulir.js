function validasiform() {
    const nama = document.getElementById("nama").value;
    const alamat = document.getElementById("alamat").value;
    const tanggallahir = document.getElementById("tanggallahir").value;
    const jeniskelamin = document.querySelector('input[name="jeniskelamin"]:checked');
    const hobi = document.querySelector('input[name="hobi"]:checked');
    const pekerjaan = document.getElementById("pekerjaan").value;
    const konfirmasi = document.getElementById("konfirmasi").checked;

    if(!nama || !alamat || !tanggallahir || !jeniskelamin || !hobi || !pekerjaan){
        alert("Anda harus melengkapi data diri.");
        return false;
    }

    if (!konfirmasi){
        alert("Anda harus menyetujui konfirmasi data diri.")
    }
    alert("Terimakasih! Data anda telah kami terima.");
    return true;
}