document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
});

//tab
document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('[role="tab"]');
  const tabPanels = document.querySelectorAll('[role="tabpanel"]');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const targetId = tab.getAttribute('aria-controls');
      const targetPanel = document.getElementById(targetId);

      tabs.forEach(t => {
        t.classList.remove('active_tab');
        t.setAttribute('aria-selected', 'false');
      });

      tabPanels.forEach(panel => {
        panel.classList.add('hidden', 'opacity-0');
      });
      tab.classList.add('active_tab');
      tab.setAttribute('aria-selected', 'true');

      targetPanel.classList.remove('hidden');
      setTimeout(() => {
        targetPanel.classList.remove('opacity-0');
      }, 50);
    });
  });
});

//faq
document.addEventListener("DOMContentLoaded", () => {
const faqs = document.querySelectorAll(".faq-item");
faqs.forEach(faq => {
    faq.addEventListener("toggle", () => {
    if (faq.open) {
        faqs.forEach(item => {
        if (item !== faq) item.removeAttribute("open");
        });
    }
    });
});
});