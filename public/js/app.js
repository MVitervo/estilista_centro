document.addEventListener("DOMContentLoaded", () => {
  if (window.lucide) lucide.createIcons();
  const menu = document.getElementById("menuToggle"), nav = document.getElementById("mainNav");
  menu?.addEventListener("click", () => nav.classList.toggle("open"));
  nav?.querySelectorAll("a").forEach(a => a.addEventListener("click", () => nav.classList.remove("open")));
  document.getElementById("themeToggle")?.addEventListener("click", () => document.body.classList.toggle("light-mode"));
  const form = document.getElementById("form-reserva"), date = document.getElementById("date"), msg = document.getElementById("formMessage");
  const today = new Date(); date.min = new Date(today - today.getTimezoneOffset() * 60000).toISOString().slice(0, 10);
  document.querySelectorAll('a[href="#form-reserva"]').forEach(a => a.addEventListener("click", e => { e.preventDefault(); form.classList.add("visible"); form.scrollIntoView({ behavior: "smooth", block: "center" }); }));
  form.addEventListener("submit", e => { e.preventDefault(); if (!form.reportValidity()) return; msg.textContent = "Formulario de demostración: los datos son válidos, pero todavía no se envía ni se guarda una reservación."; });
  document.getElementById("year").textContent = new Date().getFullYear();
});