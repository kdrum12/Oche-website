// --- Faith Connect Interactivity ---

// 1. Countdown Timer
function updateCountdown() {
  // Dynamically find the next upcoming Sunday at 9:00 AM
  const now = new Date();
  const nextSunday = new Date(now);
  const dayOfWeek = now.getDay(); // 0 = Sunday
  const daysUntilSunday = dayOfWeek === 0 ? 7 : 7 - dayOfWeek;
  nextSunday.setDate(now.getDate() + daysUntilSunday);
  nextSunday.setHours(9, 0, 0, 0);

  // If today is Sunday but service hasn't started yet, use today
  if (dayOfWeek === 0 && now.getHours() < 9) {
    nextSunday.setDate(now.getDate());
  }

  const endDate = nextSunday.getTime();
  const nowTime = now.getTime();
  const diff = endDate - nowTime;

  const timerEl = document.querySelector('.timer');
  if (!timerEl) return;

  if (diff < 0) {
    timerEl.innerHTML = '<h2>SERVICE IN PROGRESS</h2>';
    return;
  }

  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const secs = Math.floor((diff % (1000 * 60)) / 1000);

  const daysEl = document.getElementById('days');
  const hoursEl = document.getElementById('hours');
  const minsEl = document.getElementById('mins');
  const secsEl = document.getElementById('secs');

  if (daysEl) daysEl.innerText = String(days).padStart(2, '0');
  if (hoursEl) hoursEl.innerText = String(hours).padStart(2, '0');
  if (minsEl) minsEl.innerText = String(mins).padStart(2, '0');
  if (secsEl) secsEl.innerText = String(secs).padStart(2, '0');
}

setInterval(updateCountdown, 1000);
updateCountdown();

// 2. Multi-State Sticky Header & ScrollSpy
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  const navLinks = document.querySelectorAll('.nav-links a');
  const sections = document.querySelectorAll('section');
  const heroEl = document.querySelector('.hero');
  const heroHeight = heroEl ? heroEl.offsetHeight : 500;
  
  if (header) {
    // State 1: Transparent (Default)
    // State 2: Scrolled (Dark Bar)
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled', 'deep-scrolled');
    }

    // State 3: Deep Scrolled (Floating Pill)
    if (window.scrollY > heroHeight * 0.8) {
      header.classList.add('deep-scrolled');
    } else {
      header.classList.remove('deep-scrolled');
    }
  }

  // ScrollSpy logic
  let current = '';
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (window.pageYOffset >= (sectionTop - sectionHeight / 3)) {
      current = section.getAttribute('id') || '';
    }
  });

  navLinks.forEach(a => {
    a.classList.remove('active');
    if (current && a.getAttribute('href') && a.getAttribute('href').includes(current)) {
      a.classList.add('active');
    }
  });
});

// 3. Simple Scroll Reveal Animation
const observerOptions = {
  threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
  section.style.opacity = '0';
  section.style.transform = 'translateY(20px)';
  section.style.transition = 'all 0.8s ease-out';
  observer.observe(section);
});

// 4. Mobile Menu Toggle
const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.querySelector('.nav-links');
const body = document.body;

if (menuToggle && navLinks) {
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    navLinks.classList.toggle('active');
    body.classList.toggle('no-scroll');
  });

  // Close menu when a link is clicked
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
      menuToggle.classList.remove('active');
      navLinks.classList.remove('active');
      body.classList.remove('no-scroll');
    });
  });
}

// 5. Interactive Modal Management
function openModal(modalId) {
  const modal = document.querySelector(modalId);
  if (modal) {
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(modal) {
  if (modal) {
    modal.classList.remove('open');
    document.body.style.overflow = '';
  }
}

document.querySelectorAll('[data-modal-target]').forEach(trigger => {
  trigger.addEventListener('click', (e) => {
    e.preventDefault();
    const target = trigger.getAttribute('data-modal-target');
    openModal(target);
  });
});

document.querySelectorAll('.modal-close').forEach(closeBtn => {
  closeBtn.addEventListener('click', () => {
    closeModal(closeBtn.closest('.modal-backdrop'));
  });
});

document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
  backdrop.addEventListener('click', (e) => {
    if (e.target === backdrop) {
      closeModal(backdrop);
    }
  });
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    document.querySelectorAll('.modal-backdrop.open').forEach(closeModal);
  }
});

// 6. Interactive Category Filter Tabs
document.querySelectorAll('.filter-tabs .tab-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const parent = btn.closest('.filter-tabs');
    parent.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const filter = btn.getAttribute('data-filter');
    const containerSelector = btn.getAttribute('data-target-container') || '.filterable-grid';
    const container = document.querySelector(containerSelector);

    if (container) {
      const items = container.querySelectorAll('.filterable-card');
      items.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        if (filter === 'all' || itemCategory === filter || (itemCategory && itemCategory.includes(filter))) {
          item.style.display = '';
          item.style.animation = 'fadeIn 0.35s ease forwards';
        } else {
          item.style.display = 'none';
        }
      });
    }
  });
});

// 7. Interactive Accordions (FAQ & Details)
document.querySelectorAll('.accordion-header').forEach(header => {
  header.addEventListener('click', () => {
    const item = header.closest('.accordion-item');
    const isOpen = item.classList.contains('open');

    // Optional: close other items in the same accordion
    const parent = item.closest('.accordion');
    if (parent) {
      parent.querySelectorAll('.accordion-item').forEach(other => {
        if (other !== item) other.classList.remove('open');
      });
    }

    item.classList.toggle('open', !isOpen);
  });
});

// 8. Interactive Giving Calculator
const amountBtns = document.querySelectorAll('.amount-btn');
const customAmountInput = document.getElementById('custom-amount');
const donationHiddenAmount = document.getElementById('donation-amount-input');
const freqBtns = document.querySelectorAll('.freq-btn');
const freqHiddenInput = document.getElementById('donation-frequency-input');
const summaryAmountEl = document.getElementById('summary-amount');
const summaryFreqEl = document.getElementById('summary-frequency');

if (amountBtns.length > 0 && customAmountInput) {
  amountBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      amountBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const val = btn.getAttribute('data-amount');
      customAmountInput.value = val;
      if (donationHiddenAmount) donationHiddenAmount.value = val;
      if (summaryAmountEl) summaryAmountEl.textContent = '$' + val;
    });
  });

  customAmountInput.addEventListener('input', () => {
    amountBtns.forEach(b => b.classList.remove('active'));
    const val = customAmountInput.value || 0;
    if (donationHiddenAmount) donationHiddenAmount.value = val;
    if (summaryAmountEl) summaryAmountEl.textContent = '$' + val;
  });
}

if (freqBtns.length > 0 && freqHiddenInput) {
  freqBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      freqBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const freq = btn.getAttribute('data-freq');
      freqHiddenInput.value = freq;
      if (summaryFreqEl) {
        summaryFreqEl.textContent = freq === 'monthly' ? 'monthly recurring' : 'one-time';
      }
    });
  });
}

// 9. Sermon Player Modal Trigger
document.querySelectorAll('.play-sermon-btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    const title = btn.getAttribute('data-title') || 'Featured Sermon';
    const speaker = btn.getAttribute('data-speaker') || 'Faith Connect Ministry';
    const date = btn.getAttribute('data-date') || 'Recent Message';
    const scripture = btn.getAttribute('data-scripture') || '';

    const modalTitle = document.getElementById('modal-sermon-title');
    const modalSpeaker = document.getElementById('modal-sermon-speaker');
    const modalDate = document.getElementById('modal-sermon-date');
    const modalScripture = document.getElementById('modal-sermon-scripture');

    if (modalTitle) modalTitle.textContent = title;
    if (modalSpeaker) modalSpeaker.textContent = speaker;
    if (modalDate) modalDate.textContent = date;
    if (modalScripture) modalScripture.textContent = scripture;

    openModal('#sermon-player-modal');
  });
});

// 10. Event RSVP Modal Trigger
document.querySelectorAll('.rsvp-event-btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    const eventTitle = btn.getAttribute('data-event-title') || '';
    const inputTitle = document.getElementById('rsvp-event-title-input');
    const displayTitle = document.getElementById('rsvp-modal-event-name');

    if (inputTitle) inputTitle.value = eventTitle;
    if (displayTitle) displayTitle.textContent = eventTitle;

    openModal('#event-rsvp-modal');
  });
});

