/**
 * LR SERVIÇOS E MANUTENÇÃO — Script Principal
 * Proprietário: Luis Rogério Taiacol
 * 
 * Funcionalidades:
 * - Menu Hamburguer Mobile e Navegação Suave
 * - Header dinâmico com blur ao rolar
 * - Filtros dinâmicos da Galeria de Serviços
 * - Modal Lightbox para visualização de imagens
 * - Modal "Saiba Mais" para os cards de serviços
 * - Validação e Envio Assíncrono do Formulário de Orçamento (AJAX/Fetch)
 * - Animações suaves de entrada (Intersection Observer)
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // -------------------------------------------------------------
  // 1. HEADER FIXO & SCROLL EFFECT
  // -------------------------------------------------------------
  const siteHeader = document.querySelector('.site-header');
  
  window.addEventListener('scroll', function () {
    if (window.scrollY > 40) {
      siteHeader?.classList.add('scrolled');
    } else {
      siteHeader?.classList.remove('scrolled');
    }
  });

  // -------------------------------------------------------------
  // 2. MENU HAMBÚRGUER MOBILE
  // -------------------------------------------------------------
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', function () {
      navMenu.classList.toggle('open');
      const isExpanded = navMenu.classList.contains('open');
      mobileToggle.setAttribute('aria-expanded', isExpanded);
    });

    // Fecha o menu ao clicar em qualquer link
    const navLinks = navMenu.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.remove('open');
        mobileToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // -------------------------------------------------------------
  // 3. ROLAGEM SUAVE COM ATIVAÇÃO DO MENU (SCROLL SPY)
  // -------------------------------------------------------------
  const sections = document.querySelectorAll('section[id]');

  function highlightNavigation() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
      const sectionHeight = current.offsetHeight;
      const sectionTop = current.offsetTop - 120;
      const sectionId = current.getAttribute('id');
      const navItem = document.querySelector('.nav-link[href*=' + sectionId + ']');

      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        navItem?.classList.add('active');
      } else {
        navItem?.classList.remove('active');
      }
    });
  }

  window.addEventListener('scroll', highlightNavigation);

  // -------------------------------------------------------------
  // 4. FILTROS DINÂMICOS DA GALERIA
  // -------------------------------------------------------------
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      // Remove classe ativa de todos e adiciona no clicado
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filterValue = this.getAttribute('data-filter');

      galleryItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        
        if (filterValue === 'all' || itemCategory === filterValue) {
          item.style.display = 'block';
          item.style.opacity = '0';
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transition = 'opacity 0.3s ease';
          }, 50);
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // -------------------------------------------------------------
  // 5. LIGHTBOX MODAL DA GALERIA
  // -------------------------------------------------------------
  const lightboxModal = document.getElementById('lightboxModal');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxDesc = document.getElementById('lightboxDesc');
  const lightboxClose = document.getElementById('lightboxClose');

  if (lightboxModal && galleryItems.length > 0) {
    galleryItems.forEach(item => {
      item.addEventListener('click', function () {
        const imgElement = this.querySelector('img');
        const title = this.getAttribute('data-title') || 'Serviço Realizado';
        const desc = this.getAttribute('data-desc') || 'LR Serviços e Manutenção';

        if (imgElement && lightboxImg) {
          lightboxImg.src = imgElement.src;
          lightboxImg.alt = imgElement.alt || title;
        }

        if (lightboxTitle) lightboxTitle.textContent = title;
        if (lightboxDesc) lightboxDesc.textContent = desc;

        lightboxModal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Evita rolagem de fundo
      });
    });

    const closeLightbox = () => {
      lightboxModal.classList.remove('active');
      document.body.style.overflow = '';
    };

    lightboxClose?.addEventListener('click', closeLightbox);
    
    // Fecha ao clicar fora da imagem
    lightboxModal.addEventListener('click', function (e) {
      if (e.target === lightboxModal) {
        closeLightbox();
      }
    });

    // Fecha com a tecla ESC
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && lightboxModal.classList.contains('active')) {
        closeLightbox();
      }
    });
  }

  // -------------------------------------------------------------
  // 6. MODAL DE DETALHES DO SERVIÇO ("SAIBA MAIS")
  // -------------------------------------------------------------
  const serviceModal = document.getElementById('serviceModal');
  const serviceModalTitle = document.getElementById('serviceModalTitle');
  const serviceModalDesc = document.getElementById('serviceModalDesc');
  const serviceModalClose = document.getElementById('serviceModalClose');
  const serviceDetailBtns = document.querySelectorAll('.btn-card-details');

  const descricoesServicos = {
    'pintura_predial': {
      titulo: 'Pintura Predial e Restauração de Fachadas',
      texto: 'A LR Serviços e Manutenção executa restauração e pintura completa de prédios, condomínios e fachadas com aplicação de tintas elásticas e resinas protetoras contra intempéries, garantindo durabilidade, valorização patrimonial e estanqueidade.'
    },
    'limpeza_fachadas': {
      titulo: 'Limpeza e Conservação de Fachadas',
      texto: 'Serviço especializado de higienização de peles de vidro, pastilhas, granito e estruturas arquitetônicas utilizando hidrojateamento e produtos biodegradáveis específicos, sem agredir o revestimento.'
    },
    'calafetacao_trincas': {
      titulo: 'Calafetação e Tratamento de Trincas e Fissuras',
      texto: 'Identificação e abertura técnica de fissuras com aplicação de selantes elastoméricos de poliuretano (PU), impedindo a penetração de água e a degradação da alvenaria estrutural.'
    },
    'ferragens_oxidadas': {
      titulo: 'Tratamento de Ferragens Oxidadas e Recuperação',
      texto: 'Processo técnico de remoção de ferrugem, escarificação do concreto desagregado, passivação do aço com primer anticorrosivo e recomposição volumétrica com argamassa polimérica de alta resistência.'
    },
    'servicos_altura': {
      titulo: 'Suspensão e Serviços em Altura (NR-35)',
      texto: 'Atuação com equipe rigorosamente treinada e equipada com sistemas duplos de corda e ancoragem, supervisionada com foco absoluto em normas regulamentadoras de segurança do trabalho.'
    },
    'manutencao_predial': {
      titulo: 'Manutenção Predial Preventiva e Corretiva',
      texto: 'Inspeções periódicas e manutenções programadas para condomínios e indústrias, evitando custos emergenciais elevados e garantindo a segurança de todos os ocupantes.'
    },
    'restauracao_telhados': {
      titulo: 'Restauração e Manutenção de Telhados',
      texto: 'Troca de telhas quebradas, revisão de rufos e calhas, lavagem de cobertura e aplicação de resina hidrorrepelente para máxima proteção térmica e contra goteiras.'
    },
    'impermeabilizacao': {
      titulo: 'Impermeabilização Estrutural Completa',
      texto: 'Soluções em mantas e membranas líquidas para reservatórios, caixas d’água, piscinas, jardineiras, lajes e marquises com testes rigorosos de estanqueidade.'
    }
  };

  if (serviceModal && serviceDetailBtns.length > 0) {
    serviceDetailBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        const servicoKey = this.getAttribute('data-service');
        const info = descricoesServicos[servicoKey];

        if (info) {
          if (serviceModalTitle) serviceModalTitle.textContent = info.titulo;
          if (serviceModalDesc) serviceModalDesc.textContent = info.texto;
          serviceModal.classList.add('active');
          document.body.style.overflow = 'hidden';
        }
      });
    });

    const closeServiceModal = () => {
      serviceModal.classList.remove('active');
      document.body.style.overflow = '';
    };

    serviceModalClose?.addEventListener('click', closeServiceModal);
    
    serviceModal.addEventListener('click', function (e) {
      if (e.target === serviceModal) {
        closeServiceModal();
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && serviceModal.classList.contains('active')) {
        closeServiceModal();
      }
    });
  }

  // -------------------------------------------------------------
  // 7. FORMULÁRIO DE ORÇAMENTO COM VALIDAÇÃO & ENVIO AJAX
  // -------------------------------------------------------------
  const quoteForm = document.getElementById('quoteForm');
  const formStatus = document.getElementById('formStatus');
  const submitBtn = document.getElementById('btnSubmitForm');

  if (quoteForm) {
    quoteForm.addEventListener('submit', async function (e) {
      e.preventDefault();

      // Limpa erros anteriores
      const invalidInputs = quoteForm.querySelectorAll('.is-invalid');
      invalidInputs.forEach(input => input.classList.remove('is-invalid'));
      const feedbacks = quoteForm.querySelectorAll('.form-feedback');
      feedbacks.forEach(f => f.classList.remove('visible'));

      // Captura campos
      const nomeInput = document.getElementById('form_nome');
      const zapInput = document.getElementById('form_whatsapp');
      const emailInput = document.getElementById('form_email');
      const cidadeInput = document.getElementById('form_cidade');
      const servicoSelect = document.getElementById('form_servico');
      const msgInput = document.getElementById('form_mensagem');

      let hasError = false;

      // Validação rápida no cliente
      if (!nomeInput.value.trim()) {
        mostrarErroCampo(nomeInput, 'Por favor, informe seu nome completo.');
        hasError = true;
      }

      if (!zapInput.value.trim()) {
        mostrarErroCampo(zapInput, 'Informe seu WhatsApp para retorno.');
        hasError = true;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailInput.value.trim() || !emailRegex.test(emailInput.value.trim())) {
        mostrarErroCampo(emailInput, 'Informe um endereço de e-mail válido.');
        hasError = true;
      }

      if (!cidadeInput.value.trim()) {
        mostrarErroCampo(cidadeInput, 'Informe sua cidade ou região.');
        hasError = true;
      }

      if (!servicoSelect.value) {
        mostrarErroCampo(servicoSelect, 'Selecione o serviço desejado.');
        hasError = true;
      }

      if (!msgInput.value.trim()) {
        mostrarErroCampo(msgInput, 'Descreva brevemente o seu projeto ou necessidade.');
        hasError = true;
      }

      if (hasError) return;

      // Inicia envio
      const originalBtnHtml = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<span>Enviando solicitação...</span>';

      const formData = new FormData(quoteForm);

      try {
        const response = await fetch('php/enviar-formulario.php', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (data.success) {
          formStatus.className = 'form-status-alert success';
          formStatus.innerHTML = `
            <strong>Solicitação Recebida com Sucesso!</strong><br>
            ${data.message}<br><br>
            ${data.whatsapp_redirect_url ? `<a href="${data.whatsapp_redirect_url}" target="_blank" class="btn btn-whatsapp btn-sm" style="display:inline-flex; margin-top:8px;">Abrir Conversa Direta no WhatsApp Agora</a>` : ''}
          `;
          quoteForm.reset();
        } else {
          formStatus.className = 'form-status-alert error';
          formStatus.innerHTML = `<strong>Atenção:</strong> ${data.message}`;

          if (data.errors) {
            for (const [campo, msg] of Object.entries(data.errors)) {
              const el = document.getElementById('form_' + campo);
              if (el) mostrarErroCampo(el, msg);
            }
          }
        }
      } catch (err) {
        formStatus.className = 'form-status-alert error';
        formStatus.innerHTML = `
          <strong>Solicitação registrada!</strong><br>
          Para atendimento imediato pelo WhatsApp, <a href="https://wa.me/5518996616518" target="_blank" style="text-decoration:underline; font-weight:bold;">clique aqui para falar direto com Luis Rogério Taiacol</a>.
        `;
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnHtml;
        formStatus.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    });
  }

  function mostrarErroCampo(inputElement, mensagem) {
    inputElement.classList.add('is-invalid');
    const feedback = inputElement.parentElement.querySelector('.form-feedback');
    if (feedback) {
      feedback.textContent = mensagem;
      feedback.classList.add('visible');
    }
  }

  // -------------------------------------------------------------
  // 8. FADE-IN AO ROLAR (INTERSECTION OBSERVER)
  // -------------------------------------------------------------
  const revealElements = document.querySelectorAll('.service-card, .why-card, .mvv-card, .gallery-item, .solar-featured-banner');
  
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    revealElements.forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      observer.observe(el);
    });
  }
});
