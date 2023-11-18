const msgBody = document.getElementById("msg-body");
const sendBtn = document.getElementById("send-btn");

const main = document.querySelector("main");

let messages = [];

sendBtn.addEventListener("click", () => {
  msg = msgBody.value;

  if (msg === "") {
  } else {
    messages.push(msg);

    main.innerHTML += `<div class="local-msg"><span>${msg}</span></div>`;
  }

  // clear input field
  msgBody.value = "";
});
