import "./style.css";

async function loadData() {
  const product = await fetch("http://localhost:8001").then(r => r.json());
  const order = await fetch("http://localhost:8002/orders").then(r => r.json());
  const auth = await fetch("http://localhost:8003/login").then(r => r.json());

  document.body.innerHTML = `
    <main class="p-3">
      <h1 class="text-3xl font-bold">Microservices Demo</h1>
      <pre>${JSON.stringify({ product, order, auth }, null, 2)}</pre>
    </main>
  `;
}

loadData();