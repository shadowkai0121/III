document.onmousemove = doAnimateShow;
document.getElementById("boxclose").onclick = doAnimateHide;

function doAnimateShow() {
  let posX = event.clientX + "px";
  let posY = event.clientY + "px";

  let img = document.getElementById("imgBlock")
  let box = document.getElementById("box");
  box.style.left = posX;
  box.style.top = posY;

  let msgbox = document.getElementById("message");
  let boxPos = box.getBoundingClientRect();

  let imgPos = img.getBoundingClientRect();

  msgbox.innerHTML = imgPos.right > boxPos.left;
}

// 標準寫法
function doAnimateHide(e) {
  document.getElementById("box").style.top = "-200px";
  // 中斷 bubbling

  e.stopPropagation();
}
