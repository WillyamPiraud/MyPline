document.addEventListener("DOMContentLoaded", function () {
  const numCircles = 3; // Number of circles
  const container = document.querySelector(".background-circles");

  for (let i = 0; i < numCircles; i++) {
    const circle = document.createElement("div");
    circle.classList.add("circle");
    circle.style.width = `${Math.random() * 300}px`; // Random size
    circle.style.height = circle.style.width;
    circle.style.left = `${Math.random() * 100}%`; // Random horizontal position
    circle.style.top = `${Math.random() * 100}%`; // Random vertical position
    container.appendChild(circle);
  }
});
