const next = document.querySelector(".next");
const prev = document.querySelector(".previous");

const numImg = document.querySelectorAll("#img-in-slider").length;
let currImg = 1;

let timeoutID;

next.addEventListener("click", () => {
  currImg++;
  clearTimeout(timeoutID);
  updateImage();
});

prev.addEventListener("click", () => {
  currImg--;
  clearTimeout(timeoutID);

  updateImage();
});

const imgcontainer = document.querySelector(".img-container");

function updateImage() {
  if (currImg > numImg) {
    currImg = 1;
  } else if (currImg < 1) {
    currImg = numImg;
  }
  imgcontainer.style.transform = `translateX(-${(currImg - 1) * 60}vw)`;

  timeoutID = setTimeout(() => {
    currImg++;
    updateImage();
  }, 6000);
}

updateImage();