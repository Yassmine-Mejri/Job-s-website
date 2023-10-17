// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};



const imageInput = document.querySelector("#image-input");
const img = document.querySelector(".img-load");
imageInput.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
      const reader = new FileReader();
    reader.onload = function () {
      const result = reader.result;
      img.src = result;
    };
    reader.readAsDataURL(file);
  }
});
