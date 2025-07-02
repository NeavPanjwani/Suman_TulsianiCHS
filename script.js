const backToTopBtn = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 200) {
        backToTopBtn.classList.remove("hidden");
        backToTopBtn.classList.add("animate-fade-up");
      } else {
        backToTopBtn.classList.add("hidden");
        backToTopBtn.classList.remove("animate-fade-up");
      }
    });