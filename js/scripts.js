// theme
function calculateSettingAsThemeString({ localStorageTheme, systemSettingDark, systemSettingLight }) {
  if (localStorageTheme !== null) {
    return localStorageTheme;
  }

  if (systemSettingDark.matches) {
    return 'dark';
  }

  if (systemSettingLight.matches) {
    return 'light';
  }

  return 'light';
}

function updateThemeOnHtmlEl({ theme }) {
  document.querySelector('html').setAttribute('data-theme', theme);
}

const buttonDark = document.querySelector('[data-theme-toggle-dark]');
const buttonLight = document.querySelector('[data-theme-toggle-light]');
const localStorageTheme = localStorage.getItem('theme');
const systemSettingDark = window.matchMedia('(prefers-color-scheme: dark)');
const systemSettingLight = window.matchMedia('(prefers-color-scheme: light)');

let currentThemeSetting = calculateSettingAsThemeString({ localStorageTheme, systemSettingDark, systemSettingLight });

updateThemeOnHtmlEl({ theme: currentThemeSetting });

buttonDark?.addEventListener('click', () => {
  let newTheme = currentThemeSetting === 'dark';

  localStorage.setItem('theme', 'dark');
  updateThemeOnHtmlEl({ theme: 'dark' });

  currentThemeSetting = newTheme;
});
buttonLight?.addEventListener('click', () => {
  let newTheme = currentThemeSetting === 'light';

  localStorage.setItem('theme', 'light');
  updateThemeOnHtmlEl({ theme: 'light' });

  currentThemeSetting = newTheme;
});

document.addEventListener('DOMContentLoaded', function () {
  // hamburger
  let hamburger = document.querySelector('.burger');
  hamburger.addEventListener('click', function (e) {
    e.preventDefault();
    this.classList.toggle('is-open');
  });

  // simple lightbox
  if (document.querySelector('.lightbox')) {
    let lightbox = new SimpleLightbox('.lightbox', {});
  }

  // accordion
  accordion = document.querySelectorAll('.accordion-block');
  accordion.forEach((el) => {
    el.firstElementChild.addEventListener('click', () => {
      if (!el.classList.contains('is-active')) {
        el.classList.add('is-active');
      } else {
        el.classList.remove('is-active');
      }
    });
  });

  // splide slider
  if (document.querySelector('.enemy-splide')) {
    new Splide('.enemy-splide', {
      type: 'loop'
    }).mount();
  } else if (document.querySelector('.doctor-splide')) {
    new Splide('.doctor-splide', {
      type: 'loop',
      autoHeight: true,
      autoplay: true
    }).mount();
  }

  // tabs
  const tabsGroup = document.querySelectorAll('[data-tab-group]');
  tabsGroup?.forEach((tab) => {
    const tabsMenu = tab.querySelectorAll('[data-tab-select]');
    const tabsContent = tab.querySelectorAll('[data-tab]');
    const active = 'is-active';

    tabsMenu.forEach((tab) => {
      tab.addEventListener('click', (e) => {
        e.preventDefault();
        removeActiveTab();
        addActiveTab(tab);
      });
    });

    const removeActiveTab = () => {
      tabsMenu.forEach((tab) => {
        tab.classList.remove(active);
      });
      tabsContent.forEach((content) => {
        content.classList.remove(active);
      });
    };

    const addActiveTab = (tab) => {
      tab.classList.add(active);
      const href = tab.getAttribute('href');
      const target = document.querySelector(href);
      target.classList.add(active);
    };
  });

  // form check
  const form = document.getElementById('contact-form');
  const name = document.getElementById('name');
  const email = document.getElementById('email');

  form?.addEventListener('submit', function (e) {
    let nameInput = name.value;
    let emailInput = email.value;
    if (nameInput.length <= 1) {
      e.preventDefault();
      alert('Meno musí obsahovať aspoň 2 znaky');
      return false;
    } else if (emailInput.length <= 5) {
      e.preventDefault();
      alert('Váš e-mail je pravdepodobne nespravný a nebudeme môcť Vám odpovedať.');
      return false;
    } else if (document.getElementById('checkbox').checked == false) {
      e.preventDefault();
      alert('Doktor vie všetko, včetne o GDPR.');
      return false;
    }
  });
});

