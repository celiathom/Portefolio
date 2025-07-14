document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("theme-toggle");
  const mobileToggle = document.getElementById("mobile-theme-toggle");
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

  // Fonction pour basculer le thème
  function toggleTheme(isDark) {
    if (isDark) {
      body.classList.replace("light-mode", "dark-mode");
      toggle.checked = true;
      localStorage.setItem("theme", "dark");
    } else {
      body.classList.replace("dark-mode", "light-mode");
      toggle.checked = false;
      localStorage.setItem("theme", "light");
    }
  }

  // Événement pour le bouton switch desktop
  toggle.addEventListener("change", () => {
    toggleTheme(toggle.checked);
  });

  // Événement pour le bouton mobile
  if (mobileToggle) {
    mobileToggle.addEventListener("click", () => {
      const isDarkMode = body.classList.contains("dark-mode");
      toggleTheme(!isDarkMode);
    });
  }
});

