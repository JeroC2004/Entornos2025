const themetoggle = document.querySelector(".theme-toggle");
const body = document.body;
let modoActual = "claro";

if (body.classList.contains("oscuro")) modoActual = "oscuro";
if (body.classList.contains("atardecer")) modoActual = "atardecer";

themetoggle.addEventListener("click", () => {
  if (modoActual === "claro") {
    modoActual = "atardecer";
    body.classList.remove("oscuro");
    body.classList.add("atardecer");
  } else if (modoActual === "atardecer") {
    modoActual = "oscuro";
    body.classList.remove("atardecer");
    body.classList.add("oscuro");
  } else {
    modoActual = "claro";
    body.classList.remove("oscuro", "atardecer");
  }

  fetch("cookie.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: `modo=${modoActual}`
  });
});
