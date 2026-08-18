(() => {
  'use strict';

  const $ = (selector, scope = document) => scope.querySelector(selector);
  const $$ = (selector, scope = document) => [...scope.querySelectorAll(selector)];

  const header = $('.site-header');
  const menuToggle = $('.menu-toggle');
  const menu = $('.site-nav');

  const setHeaderState = () => {
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 24);
  };
  setHeaderState();
  window.addEventListener('scroll', setHeaderState, { passive: true });

  if (menuToggle && menu) {
    menuToggle.addEventListener('click', () => {
      const open = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', String(!open));
      menuToggle.setAttribute('aria-label', open ? 'Abrir menu' : 'Fechar menu');
      menu.classList.toggle('is-open', !open);
      document.body.classList.toggle('menu-open', !open);
    });
    $$('.site-nav a').forEach((link) => link.addEventListener('click', () => {
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Abrir menu');
      menu.classList.remove('is-open');
      document.body.classList.remove('menu-open');
    }));
  }

  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const revealElements = $$('.reveal');
  if (reducedMotion || !('IntersectionObserver' in window)) {
    revealElements.forEach((element) => element.classList.add('is-visible'));
  } else {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px' });
    revealElements.forEach((element) => revealObserver.observe(element));
  }

  const filters = $$('.gallery-filters button');
  const galleryItems = $$('.gallery-item');
  filters.forEach((button) => button.addEventListener('click', () => {
    const filter = button.dataset.filter;
    filters.forEach((item) => {
      item.classList.toggle('is-active', item === button);
      item.setAttribute('aria-pressed', String(item === button));
    });
    galleryItems.forEach((item) => {
      const visible = filter === 'all' || item.dataset.category === filter;
      item.hidden = !visible;
      if (visible) item.animate([{ opacity: 0, transform: 'translateY(8px)' }, { opacity: 1, transform: 'translateY(0)' }], { duration: 280, easing: 'ease-out' });
    });
  }));

  const modal = $('.gallery-modal');
  const modalTitle = $('#modal-title');
  const modalPlaceholder = $('.modal-placeholder');
  if (modal && typeof modal.showModal === 'function') {
    galleryItems.forEach((item) => item.addEventListener('click', () => {
      const label = item.dataset.label || 'Serviço';
      const category = item.dataset.category || '';
      modalTitle.textContent = label;
      modalPlaceholder.className = `modal-placeholder placeholder-art placeholder-${category}`;
      modal.showModal();
    }));
    $('.modal-close', modal)?.addEventListener('click', () => modal.close());
    modal.addEventListener('click', (event) => {
      if (event.target === modal) modal.close();
    });
  }

  const form = $('.quote-form');
  if (form) {
    const fields = $$('input:not([type="hidden"]):not([type="checkbox"]), select, textarea', form);
    const consent = $('input[name="consentimento"]', form);
    const status = $('.form-status', form);
    const submit = $('.btn-submit', form);

    const fieldMessage = (field) => {
      if (field.validity.valueMissing) return 'Este campo é obrigatório.';
      if (field.validity.typeMismatch) return 'Informe um e-mail válido.';
      if (field.validity.tooShort) return `Use pelo menos ${field.minLength} caracteres.`;
      if (field.validity.patternMismatch) return 'Confira o formato informado.';
      return '';
    };
    const showFieldState = (field, serverMessage = '') => {
      const wrapper = field.closest('.field');
      if (!wrapper) return;
      const message = serverMessage || fieldMessage(field);
      wrapper.classList.toggle('has-error', Boolean(message));
      $('.field-error', wrapper).textContent = message;
      field.setAttribute('aria-invalid', String(Boolean(message)));
    };
    fields.forEach((field) => {
      field.addEventListener('blur', () => showFieldState(field));
      field.addEventListener('input', () => {
        if (field.closest('.field')?.classList.contains('has-error')) showFieldState(field);
      });
    });

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      fields.forEach((field) => showFieldState(field));
      const invalid = fields.find((field) => !field.checkValidity());
      if (invalid || !consent.checked) {
        status.textContent = !consent.checked ? 'Confirme a autorização de uso dos dados e revise os campos.' : 'Revise os campos destacados.';
        status.className = 'form-status is-error';
        (invalid || consent).focus();
        return;
      }

      const number = form.dataset.staticWhatsapp;
      if (!number) {
        status.textContent = 'O número do WhatsApp não foi configurado.';
        status.className = 'form-status is-error';
        return;
      }

      const data = new FormData(form);
      const value = (name) => String(data.get(name) || '').trim();
      const message = [
        'Olá! Gostaria de solicitar um orçamento para a LR Serviços e Manutenção.',
        '',
        `Nome: ${value('nome')}`,
        `Telefone: ${value('telefone')}`,
        `WhatsApp: ${value('whatsapp') || value('telefone')}`,
        `E-mail: ${value('email')}`,
        `Cidade: ${value('cidade')}`,
        `Serviço desejado: ${value('servico')}`,
        '',
        'Mensagem:',
        value('mensagem')
      ].join('\n');

      const url = `https://wa.me/${number}?text=${encodeURIComponent(message)}`;
      const newWindow = window.open(url, '_blank', 'noopener,noreferrer');
      if (!newWindow) window.location.href = url;
      status.textContent = 'Sua mensagem foi preparada. Continue o envio no WhatsApp.';
      status.className = 'form-status is-success';
    });
  }

  const toast = $('.toast');
  if (toast && window.location.hash === '#instagram') {
    toast.textContent = 'A URL oficial do Instagram ainda não foi fornecida.';
    toast.classList.add('is-visible');
    setTimeout(() => toast.classList.remove('is-visible'), 4000);
  }
})();
