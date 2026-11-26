document.addEventListener('DOMContentLoaded', () => {
  if (window.lucide) lucide.createIcons();

  const body = document.body;
  const themeButton = document.getElementById('themeToggle');
  const savedTheme = localStorage.getItem('asia-theme');
  if (savedTheme === 'light') body.classList.add('light-mode');

  function syncThemeLabel() {
    const light = body.classList.contains('light-mode');
    themeButton?.setAttribute('aria-label', light ? 'Cambiar a modo oscuro' : 'Cambiar a modo claro');
    document.querySelector('meta[name="theme-color"]')?.setAttribute('content', light ? '#f5ead8' : '#0b0c0b');
  }
  syncThemeLabel();

  themeButton?.addEventListener('click', () => {
    body.classList.toggle('light-mode');
    localStorage.setItem('asia-theme', body.classList.contains('light-mode') ? 'light' : 'dark');
    syncThemeLabel();
  });

  const menuButton = document.getElementById('menuButton');
  const nav = document.getElementById('mainNav');
  menuButton?.addEventListener('click', () => {
    const opened = nav.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(opened));
  });
  nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    nav.classList.remove('open');
    menuButton?.setAttribute('aria-expanded', 'false');
  }));

  const form = document.getElementById('bookingForm');
  document.getElementById('openBooking')?.addEventListener('click', () => {
    form.classList.add('visible');
    form.scrollIntoView({behavior:'smooth', block:'center'});
  });
  document.getElementById('closeBooking')?.addEventListener('click', () => form.classList.remove('visible'));

  const date = document.getElementById('bookingDate');
  const today = new Date();
  date.min = new Date(today.getTime() - today.getTimezoneOffset() * 60000).toISOString().slice(0,10);

  form?.addEventListener('submit', event => {
    event.preventDefault();
    if (!form.reportValidity()) return;
    document.getElementById('bookingMessage').textContent =
      'La información es válida. Este formulario es una demostración; conecta el envío a tu controlador PHP para registrar la cita.';
  });
  document.getElementById('year').textContent = new Date().getFullYear();
});