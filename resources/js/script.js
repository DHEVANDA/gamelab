document.addEventListener("DOMContentLoaded", function () {
  var contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (event) {
      event.preventDefault();

      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var message = document.getElementById("message").value;

      var formData = {
        name,
        email,
        phone,
        message,
      };

      localStorage.setItem("contactFormData", JSON.stringify(formData));

      Swal.fire({
        icon: "success",
        title: "Data berhasil disimpan",
        text: "Data formulir berhasil disimpan.",
        showConfirmButton: false,
        timer: 2000,
      });

      contactForm.reset();
    });
  }
});


// jquery
function pesan(makananMinuman) {
  let pesanan = JSON.parse(localStorage.getItem("pesanan")) || [];

  pesanan.push(makananMinuman);

  localStorage.setItem("pesanan", JSON.stringify(pesanan));

  Swal.fire({
    icon: "success",
    title: "Pesanan berhasil ditambahkan",
    text: "Pesanan telah ditambahkan ke dalam keranjang.",
    showConfirmButton: false,
    timer: 2000,
  });
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
