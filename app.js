document.addEventListener("DOMContentLoaded", () => {
    const popup = document.getElementById("project-popup");
    const popupClose = document.querySelector(".popup-close");
    const projectLinks = document.querySelectorAll(".project-link");
  
    projectLinks.forEach((link) => {
      link.addEventListener("click", (e) => {
        e.preventDefault();
  
        // Retrieve data from the clicked link
        const title = link.getAttribute("data-title");
        const application = link.getAttribute("data-application");
        const languages = link.getAttribute("data-languages");
        const git = link.getAttribute("data-git");
        const doc = link.getAttribute("data-doc");
        const description = link.getAttribute("data-description");
  
        // Populate the pop-up with project data
        document.getElementById("popup-title").textContent = title;
        document.getElementById("popup-application").textContent = application;
        document.getElementById("popup-languages").textContent = languages;
        document.getElementById("popup-git").href = git;
        document.getElementById("popup-doc").href = doc;
        document.getElementById("popup-description").textContent = description;
  
        // Show the pop-up
        popup.classList.remove("hidden");
      });
    });
  
    popupClose.addEventListener("click", () => {
      popup.classList.add("hidden");
    });
  
    // Close the pop-up when clicking outside of it
    popup.addEventListener("click", (e) => {
      if (e.target === popup) {
        popup.classList.add("hidden");
      }
    });
  });