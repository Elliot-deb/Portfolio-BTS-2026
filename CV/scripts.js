document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("h3");

  sections.forEach((section) => {
    section.addEventListener("click", () => {
      const content = section.nextElementSibling;
      content.classList.toggle("hidden");
    });
  });
});
