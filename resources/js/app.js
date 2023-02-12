import './bootstrap';

const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

ctx.fillStyle = "#000";
ctx.fillRect(0, 0, canvas.width, canvas.height);

const fontSize = 25;
const texts = "ABCDEFGHIJKLMNOPQRSTUVXYZ".split("");
const columnCount = Math.ceil(canvas.width / fontSize);
const rowCount = Math.ceil(canvas.height / fontSize);

const rowStatus = [];
for (let i = 0; i < columnCount; i++) {
  rowStatus[i] = Math.floor(Math.random() * rowCount) * -1;
}

function draw() {
  ctx.fillStyle = "rgba(0,0,0,0.1)";
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  const text = texts[Math.floor(Math.random() * texts.length)];
  rowStatus.forEach((row, column) => {
    ctx.fillStyle = "#48f613";
    ctx.fillText(text, column * fontSize, row * fontSize);

    rowStatus[column] += 1;
    if (rowStatus[column] > rowCount) {
      rowStatus[column] = 0;
    }
  });
}

setInterval(draw, 100);

