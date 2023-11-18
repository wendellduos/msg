const nameField = document.querySelector("[type='text']");
const submitBtn = document.querySelector("[type='submit']");

const minNameLength = 2;

checkEnteredName();

nameField.addEventListener("input", () => {
  checkEnteredName();
});

// checks if entered name is longer than the minimum required, and disables/enables submit button
// then changes background color
function checkEnteredName() {
  if (nameField.value.length < minNameLength) {
    submitBtn.setAttribute("disabled", "");

    submitBtn.style.backgroundColor = "var(--blue3)";
  } else {
    submitBtn.removeAttribute("disabled");

    submitBtn.style.backgroundColor = "var(--blue4)";
  }
}
