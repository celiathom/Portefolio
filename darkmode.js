document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("theme-toggle");
  const body = document.body;

  // Appliquer le thème sauvegardé ou par défaut (light)
  const theme = localStorage.getItem("theme");
  if (theme === "dark") {
    body.classList.replace("light-mode", "dark-mode");
    toggle.checked = true;
  } else {
    body.classList.replace("dark-mode", "light-mode");
    toggle.checked = false;
  }

  toggle.addEventListener("change", () => {
    if (toggle.checked) {
      body.classList.replace("light-mode", "dark-mode");
      localStorage.setItem("theme", "dark");
    } else {
      body.classList.replace("dark-mode", "light-mode");
      localStorage.setItem("theme", "light");
    }
    
  });
});

