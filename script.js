function myFunction() {
    location.href = "Cart.php";
  }

function myButton() {
    var txt;
    if (confirm("Pesanan anda sedang diproses (klik OK untuk melanjutkan)!")) {
        txt = "Pesanan anda sedang diproses!";
    } else {
        txt = "Anda membatalkan pesanan anda!";
    }
    document.getElementById("demo").innerHTML = txt;
}