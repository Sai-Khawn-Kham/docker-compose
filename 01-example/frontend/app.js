function callApi() {
  fetch("http://localhost:8000")
    .then(res => res.text())
    .then(data => {
      document.getElementById("result").innerText = data;
    });
}