const list = ["0.png", "1.png", "2.png", "3.png"];
let counter = 0;
let timeout;
let on = 0;

function startJump() {
  if (on==0) {
    on = 1;
    timedCount();
  }
}

function timedCount() {
  document.getElementById("image").src = list[counter];
  counter =(counter+1)%4;
  timeout = setTimeout(timedCount, 200);
}

function stopJump() {
  clearTimeout(timeout);
  on = 0;
}