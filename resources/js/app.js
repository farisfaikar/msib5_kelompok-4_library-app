import "./bootstrap";
import { themeChange } from "theme-change";

const categoryForm = document.getElementById("category-form");
const categoryFormAdd = document.getElementById("category-form-add");
const categoryFormCancel = document.getElementById("category-form-cancel");
const inputColor = document.getElementById("input-color");
const randomizeColorButton = document.getElementById("randomize-color-button");
const categoryPreview = document.getElementById("category-preview");

function toggleForm() {
  categoryForm.classList.toggle("hidden");
}

function closeForm() {
  categoryForm.classList.add("hidden");
}

function randomizeColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  inputColor.value = color;
  setCategoryPreviewColor();
}

function setCategoryPreviewColor() {
  categoryPreview.style.backgroundColor = inputColor.value;
}

// Functions
themeChange();
randomizeColor();
setCategoryPreviewColor();

// Event listeners
categoryFormAdd.addEventListener("click", toggleForm);
categoryFormCancel.addEventListener("click", closeForm);
inputColor.addEventListener("change", setCategoryPreviewColor);
randomizeColorButton.addEventListener("click", randomizeColor);
