function blink() {
  let bname = document.getElementById("b_name");
  setInterval(function () {
    bname.style.display = bname.style.display == "none" ? "" : "none";
  }, 1000);
}
