const express = require("express");
const cors = require("cors");
const app = express();

app.use(cors());

app.get("/", (req, res) => {
  res.redirect("/orders");
})

app.get("/orders", (req, res) => {
  res.json({
    service: "order",
    orders: [
      { id: 1, product: "Laptop" }
    ]
  });
});

app.listen(3000, () => {
  console.log("Order service running on port 3000");
});