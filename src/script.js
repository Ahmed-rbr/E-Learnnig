const menu1 = document.querySelector(".menu1");
const menu2 = document.querySelector(".menu2");
const brg = document.querySelector(".brg");

brg.addEventListener("click", () => {
  menu1.classList.toggle("hidden");
  menu2.classList.toggle("hidden");
});
