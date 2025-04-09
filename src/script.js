const menu1 = document.querySelector(".menu1");
const menu2 = document.querySelector(".menu2");
const brg = document.querySelector(".brg");
if (menu2 && menu1 && brg) {
  brg.addEventListener("click", () => {
    menu1.classList.toggle("hidden");
    menu2.classList.toggle("hidden");
  });
}

const updtePro = document.querySelector(".updtePro");
const cancelPro = document.querySelector(".cancelPro");
const editPro = document.querySelector(".editPro");
if (updtePro && cancelPro && editPro) {
  editPro.addEventListener("click", () => {
    updtePro.classList.toggle("hidden");
  });
  cancelPro.addEventListener("click", () => {
    updtePro.classList.add("hidden");
  });
}
