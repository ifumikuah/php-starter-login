const form = document.getElementById("login-form");

form.addEventListener("submit", (e) => {
  e.preventDefault(); // Prevents form resubmitting
  const formData = new FormData(form); // Converts form name-value inputs to FormData object

  // Sends a request to process.php
  fetch("process.php", {
    method: "POST", // Sends a POST request
    body: formData, // Sends the FormData object
  })
    .then((res) => res.text()) // waiting for process.php to return a promise
    .then((data) => { // process that promise result
      if (data === "redirect") {
        window.location.replace("http://localhost/success.html");
      } else if (data === "register_ok") {
        document.querySelector(".redirect-msg").style.display = "block";
        timeCounter();
      }
      form.reset();
    })
    .catch((err) => console.error(err));
});

function timeCounter() {
  // Countdown from 5 seconds, then redirect to login.php
  const targetElement = document.getElementById("redir-second");
  const dateStart = Date.now();

  let counter = setInterval(() => {
    const countdown = 5 - Math.floor((Date.now() - dateStart) / 1000);
    targetElement.innerText = countdown;
  }, 1000);

  setTimeout(() => {
    clearInterval(counter);
    window.location.replace("http://localhost/login.php");
  }, 5000);
}
