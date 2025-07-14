document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("theme-toggle");
  const mobileToggle = document.getElementById("mobile-darkmode-toggle");
  const body = document.body;

  // Appliquer le thème sauvegardé ou par défaut (light)
  const theme = localStorage.getItem("theme");
  if (theme === "dark") {
    body.classList.replace("light-mode", "dark-mode");
    toggle.checked = true;
    mobileToggle.checked = true;
  } else {
    body.classList.replace("dark-mode", "light-mode");
    toggle.checked = false;
    mobileToggle.checked = false;
  }

  // Synchroniser les deux switches
  const syncToggles = (checked) => {
    toggle.checked = checked;
    mobileToggle.checked = checked;
  };

  toggle.addEventListener("change", () => {
    const isDark = toggle.checked;
    body.classList.replace(isDark ? "light-mode" : "dark-mode", isDark ? "dark-mode" : "light-mode");
    localStorage.setItem("theme", isDark ? "dark" : "light");
    syncToggles(isDark);
  });

  mobileToggle.addEventListener("change", () => {
    const isDark = mobileToggle.checked;
    body.classList.replace(isDark ? "light-mode" : "dark-mode", isDark ? "dark-mode" : "light-mode");
    localStorage.setItem("theme", isDark ? "dark" : "light");
    syncToggles(isDark);
  });
});

