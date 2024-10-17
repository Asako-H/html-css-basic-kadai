const displayElement = document.getElementById("text");
const changeBtn = document.getElementById("btn");

// ボタンをクリック

changeBtn.addEventListener("click", function () {
  setTimeout(() => {
    displayElement.textContent = "ボタンをクリックしました";
  }, 2000);
});
