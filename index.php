<?php
/**
 * Página Principal (Home) - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 */
require_once __DIR__ . '/php/config.php';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- =========================================================================
       1. HERO SECTION & FAIXA AMARELA PRINCIPAL
       ========================================================================= -->
  <section class="hero-section" id="inicio">
    <div class="hero-overlay-grid"></div>
    <div class="container hero-content">
      <div class="hero-grid">
        <!-- Coluna de Texto e Chamadas -->
        <div>
          <div class="hero-badge">
            <span class="hero-badge-dot"></span>
            <span>Engenharia &bull; Segurança &bull; Trabalho em Altura</span>
          </div>

          <!-- REGRA OBRIGATÓRIA: FUNDO AMARELO + TEXTO AZUL ESCURO -->
          <div class="hero-headline-box">
            <h1>Segurança, qualidade e eficiência em manutenção predial e serviços em altura.</h1>
          </div>

          <p class="hero-subtitle-text">
            Soluções profissionais em pintura, restauração, recuperação estrutural, impermeabilização, manutenção predial e serviços em altura.
          </p>

          <!-- Botões de Ação Principais -->
          <div class="hero-buttons">
            <a href="#contato" class="btn btn-primary">
              <span>SOLICITE UM ORÇAMENTO</span>
              <span>&rarr;</span>
            </a>
            <a href="<?php echo $whatsapp_link_completo; ?>" class="btn btn-whatsapp" target="_blank" rel="noopener noreferrer">
              <span>💬</span>
              <span>FALE PELO WHATSAPP</span>
            </a>
          </div>

          <!-- Pilares de Confiança no Hero -->
          <div class="hero-pillars">
            <div class="hero-pillar-item">
              <div class="hero-pillar-icon">🛡</div>
              <div class="hero-pillar-text">Engenheiros de Segurança do Trabalho</div>
            </div>
            <div class="hero-pillar-item">
              <div class="hero-pillar-icon">⚡</div>
              <div class="hero-pillar-text">Profissionais Rigorosamente Capacitados</div>
            </div>
            <div class="hero-pillar-item">
              <div class="hero-pillar-icon">✓</div>
              <div class="hero-pillar-text">Atendimento em Todo o Estado de SP</div>
            </div>
          </div>
        </div>

        <!-- Coluna Visual / Imagem de Destaque -->
        <div class="hero-image-wrapper">
          <div class="hero-image-card">
            <img src="img/servicos/pintura-predial.svg" alt="Serviços de Pintura e Manutenção Predial em Altura - LR Serviços">
          </div>
          <!-- Badge Flutuante de Confiança -->
          <div class="hero-floating-badge">
            <div class="hero-floating-badge-icon">🏗</div>
            <div>
              <h4>Manutenção de Alto Nível</h4>
              <p>Segurança e estanqueidade garantidas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       2. NOSSOS PRINCIPAIS SERVIÇOS (CARDS COM DESTAQUE ESPECIAL)
       ========================================================================= -->
  <section class="section" id="servicos">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Especialidades</span>
        <h2 class="section-title">NOSSOS PRINCIPAIS SERVIÇOS</h2>
        <p class="section-subtitle">
          Execução técnica precisa com equipamentos modernos, sistemas de ancoragem certificados e foco total em segurança e conservação patrimonial.
        </p>
      </div>

      <div class="services-grid">
        <!-- 1. Pintura Predial -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/pintura-predial.svg" alt="Pintura Predial e Restauração de Fachadas">
            <span class="service-card-tag">Destaque</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🎨</div>
            <h3 class="service-card-title">Pintura predial</h3>
            <p class="service-card-desc">
              Restauração e pintura de prédios, fachadas e diferentes estruturas com acabamentos de alta resistência às intempéries.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="pintura_predial">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 2. Limpeza de Fachadas -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/limpeza-fachadas.svg" alt="Limpeza e Conservação de Fachadas">
            <span class="service-card-tag">Conservação</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🏢</div>
            <h3 class="service-card-title">Limpeza de fachadas</h3>
            <p class="service-card-desc">
              Limpeza e conservação de fachadas de edifícios e outras construções, removendo fuligem e restaurando a estética original.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="limpeza_fachadas">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 3. Calafetação e Tratamento de Trincas -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/calafetacao-trincas.svg" alt="Calafetação e Tratamento de Trincas e Fissuras">
            <span class="service-card-tag">Prevenção</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🛡</div>
            <h3 class="service-card-title">Calafetação e tratamento de trincas e fissuras</h3>
            <p class="service-card-desc">
              Tratamento de trincas, fissuras e pontos sujeitos a infiltrações e deterioração com selantes elastoméricos específicos.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="calafetacao_trincas">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 4. Tratamento de Ferragens Oxidadas -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/ferragens-oxidadas.svg" alt="Tratamento de Ferragens Oxidadas">
            <span class="service-card-tag">Estrutural</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🔧</div>
            <h3 class="service-card-title">Tratamento de ferragens oxidadas</h3>
            <p class="service-card-desc">
              Tratamento de estruturas metálicas e ferragens que apresentam oxidação, restaurando a solidez e a vida útil do concreto.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="ferragens_oxidadas">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 5. Suspensão e Serviços em Altura -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/trabalho-altura.svg" alt="Suspensão e Serviços em Altura">
            <span class="service-card-tag">NR-35</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🧗</div>
            <h3 class="service-card-title">Suspensão e serviços em altura</h3>
            <p class="service-card-desc">
              Execução de serviços em altura por profissionais capacitados, com foco rigoroso em normas regulamentadoras e segurança.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="servicos_altura">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 6. Manutenção Predial -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/manutencao-predial.svg" alt="Manutenção Predial Preventiva e Corretiva">
            <span class="service-card-tag">Completo</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">📋</div>
            <h3 class="service-card-title">Manutenção predial</h3>
            <p class="service-card-desc">
              Inspeção, manutenção preventiva e conservação contínua de edificações comerciais, residenciais e industriais.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="manutencao_predial">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 7. Restauração de Telhados -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/restauracao-telhados.svg" alt="Restauração de Telhados">
            <span class="service-card-tag">Proteção</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🏠</div>
            <h3 class="service-card-title">Restauração de telhados</h3>
            <p class="service-card-desc">
              Serviços completos de restauração, lavagem técnica, alinhamento de coberturas e manutenção de telhados e calhas.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="restauracao_telhados">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 8. Impermeabilização -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/impermeabilizacao.svg" alt="Impermeabilização de Lajes, Reservatórios e Piscinas">
            <span class="service-card-tag">Estanqueidade</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">💧</div>
            <h3 class="service-card-title">Impermeabilização</h3>
            <p class="service-card-desc">
              Impermeabilização de reservatórios, piscinas, telhados, jardineiras e outras áreas sujeitas à infiltração com testes de estanqueidade.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="impermeabilizacao">
                Saiba mais <span>&rarr;</span>
              </button>
              <a href="#contato" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. DEMAIS SERVIÇOS & DESTAQUE: LIMPEZA DE PLACAS SOLARES
       ========================================================================= -->
  <section class="section" style="background-color: #f1f5f9;" id="placas-solares">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Catálogo Completo</span>
        <h2 class="section-title">DEMAIS SERVIÇOS ESPECIALIZADOS</h2>
        <p class="section-subtitle">
          Soluções abrangentes para conservação, proteção e valorização contínua do seu patrimônio.
        </p>
      </div>

      <!-- DESTAQUE ESPECIAL: LIMPEZA DE PLACAS SOLARES FOTOVOLTAICAS -->
      <div class="solar-featured-banner">
        <div class="solar-banner-image">
          <img src="img/servicos/placas-solares.svg" alt="Limpeza de Placas Solares Fotovoltaicas - LR Serviços">
        </div>
        <div class="solar-banner-content">
          <div class="badge-tag" style="background: rgba(255,199,44,0.15); color: var(--color-yellow-400); border-color: var(--color-yellow-400);">
            Destaque em Conservação
          </div>
          <h3>Limpeza de Placas Solares Fotovoltaicas</h3>
          <p>
            A limpeza de módulos solares é um serviço fundamental voltado à <strong>conservação e manutenção dos equipamentos</strong>. O acúmulo de poeira, fuligem e detritos pode reduzir em até 30% a eficiência de geração de energia. Nossa equipe realiza a lavagem técnica com água tratada e escovas especiais que não riscam os painéis.
          </p>
          <div class="solar-highlights-list">
            <div class="solar-highlight-item">
              <span>✓</span> Aumento imediato do rendimento elétrico
            </div>
            <div class="solar-highlight-item">
              <span>✓</span> Conservação e ampliação da vida útil
            </div>
            <div class="solar-highlight-item">
              <span>✓</span> Acesso seguro em telhados com NR-35
            </div>
            <div class="solar-highlight-item">
              <span>✓</span> Produtos técnicos sem abrasão
            </div>
          </div>
          <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-primary">
            Agendar Limpeza de Placas Solares
          </a>
        </div>
      </div>

      <!-- Grade dos Demais Serviços -->
      <div class="other-services-grid">
        <?php foreach ($demais_servicos as $outro_servico): ?>
          <div class="other-service-item">
            <span class="other-service-dot"></span>
            <span class="other-service-name"><?php echo htmlspecialchars($outro_servico); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4. POR QUE ESCOLHER A LR SERVIÇOS E MANUTENÇÃO?
       ========================================================================= -->
  <section class="section section-dark">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Confiança e Credibilidade</span>
        <h2 class="section-title">POR QUE ESCOLHER A LR SERVIÇOS E MANUTENÇÃO?</h2>
        <p class="section-subtitle">
          Pilares sólidos que garantem tranquilidade aos nossos clientes em cada etapa do projeto.
        </p>
      </div>

      <div class="why-grid">
        <!-- Segurança -->
        <div class="why-card">
          <div class="why-card-icon">🛡</div>
          <h4>Segurança</h4>
          <p>
            A empresa conta com engenheiros de segurança do trabalho e profissionais capacitados, garantindo a conformidade total com as normas regulamentadoras.
          </p>
        </div>

        <!-- Profissionais capacitados -->
        <div class="why-card">
          <div class="why-card-icon">👷</div>
          <h4>Profissionais capacitados</h4>
          <p>
            Equipe preparada e especializada para manutenção predial e serviços em altura, com treinamentos constantes e domínio técnico.
          </p>
        </div>

        <!-- Qualidade -->
        <div class="why-card">
          <div class="why-card-icon">★</div>
          <h4>Qualidade</h4>
          <p>
            Compromisso inegociável com a qualidade e o rigor no acabamento de todos os serviços realizados.
          </p>
        </div>

        <!-- Eficiência -->
        <div class="why-card">
          <div class="why-card-icon">⚡</div>
          <h4>Eficiência</h4>
          <p>
            Busca constante por soluções eficientes e ágeis para atender com excelência às diferentes necessidades de cada cliente.
          </p>
        </div>

        <!-- Responsabilidade -->
        <div class="why-card">
          <div class="why-card-icon">🤝</div>
          <h4>Responsabilidade</h4>
          <p>
            Compromisso com a segurança, conservação patrimonial e execução responsável e pontual de cada contrato.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. SEGUNDA TELA — SOBRE A EMPRESA
       ========================================================================= -->
  <section class="section" id="sobre">
    <div class="container">
      <div class="about-grid">
        <!-- Texto Institucional -->
        <div class="about-content">
          <span class="badge-tag">Quem Somos</span>
          <h2>SOBRE A LR SERVIÇOS E MANUTENÇÃO</h2>
          <p>
            A <strong>LR Serviços e Manutenção</strong> atua no segmento de manutenção predial e serviços em altura, oferecendo soluções completas para conservação, restauração, recuperação e manutenção de diferentes tipos de edificações.
          </p>
          <p>
            Com foco absoluto na excelência operacional, a empresa conta com <strong>engenheiros de segurança do trabalho e profissionais extremamente capacitados</strong>, unindo experiência técnica, procedimentos padronizados e equipamentos de ponta para assegurar resultados impecáveis com máxima segurança.
          </p>

          <!-- Escopo de Atendimento -->
          <div class="about-audience-box">
            <h4>Atendemos com Soluções Sob Medida:</h4>
            <div class="about-audience-tags">
              <span class="audience-tag">Condomínios</span>
              <span class="audience-tag">Empresas</span>
              <span class="audience-tag">Edifícios</span>
              <span class="audience-tag">Casas em construção</span>
              <span class="audience-tag">Casas em reforma</span>
              <span class="audience-tag">Prédios em construção</span>
              <span class="audience-tag">Prédios em processo de repintura</span>
            </div>
          </div>

          <div style="margin-top: 25px;">
            <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-primary">
              Conversar com o Especialista
            </a>
          </div>
        </div>

        <!-- Imagem Institucional Ilustrativa -->
        <div class="about-image-wrapper">
          <div class="about-image-card">
            <img src="img/equipe/seguranca-engenharia.svg" alt="Engenharia de Segurança e Equipe Qualificada LR">
          </div>
        </div>
      </div>

      <!-- =====================================================================
           6. MISSÃO, VISÃO E VALORES
           ===================================================================== -->
      <div class="section-header" style="margin-top: 40px;" id="valores">
        <span class="badge-tag">Diretrizes Institucionais</span>
        <h2 class="section-title">MISSÃO, VISÃO E VALORES</h2>
      </div>

      <div class="mvv-grid">
        <!-- Missão -->
        <div class="mvv-card missao">
          <div class="mvv-icon">🎯</div>
          <h3>MISSÃO</h3>
          <p>
            Oferecer serviços de manutenção, restauração e conservação com qualidade, segurança e eficiência, agregando valor e proteção ao patrimônio de nossos clientes.
          </p>
        </div>

        <!-- Visão -->
        <div class="mvv-card visao">
          <div class="mvv-icon">👁</div>
          <h3>VISÃO</h3>
          <p>
            Ser reconhecida como uma empresa de referência em manutenção predial e serviços em altura nas regiões atendidas, destacando-se pela confiança e capacidade técnica.
          </p>
        </div>

        <!-- Valores -->
        <div class="mvv-card valores">
          <div class="mvv-icon">💎</div>
          <h3>VALORES</h3>
          <div class="values-list">
            <span class="value-pill">Segurança</span>
            <span class="value-pill">Qualidade</span>
            <span class="value-pill">Responsabilidade</span>
            <span class="value-pill">Profissionalismo</span>
            <span class="value-pill">Compromisso</span>
            <span class="value-pill">Eficiência</span>
            <span class="value-pill">Respeito</span>
            <span class="value-pill">Transparência</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       7. ÁREAS DE ATUAÇÃO ("ONDE ATUAMOS") COM MAPA DE SP
       ========================================================================= -->
  <section class="section section-dark" id="atuacao">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Presença e Cobertura</span>
        <h2 class="section-title">ONDE ATUAMOS</h2>
        <p class="section-subtitle">
          <?php echo $frase_areas_atuacao; ?>
        </p>
      </div>

      <div class="locations-layout">
        <!-- Mapa Vetorial Ilustrado do Estado de SP -->
        <div class="map-container">
          <img src="img/mapa/mapa-sp-atuacao.svg" alt="Mapa de Atendimento da LR Serviços e Manutenção no Estado de São Paulo">
        </div>

        <!-- Cards dos Polos de Atendimento -->
        <div class="locations-cards">
          <div class="location-item">
            <div class="location-icon">📍</div>
            <div class="location-info">
              <h4>Araçatuba e região</h4>
              <p>Atendimento a condomínios, empresas e residências</p>
            </div>
          </div>

          <div class="location-item">
            <div class="location-icon">📍</div>
            <div class="location-info">
              <h4>São José do Rio Preto e região</h4>
              <p>Soluções em pintura, restauração e serviços em altura</p>
            </div>
          </div>

          <div class="location-item">
            <div class="location-icon">📍</div>
            <div class="location-info">
              <h4>Bauru</h4>
              <p>Manutenção predial e recuperação estrutural</p>
            </div>
          </div>

          <div class="location-item">
            <div class="location-icon">📍</div>
            <div class="location-info">
              <h4>São Paulo — Capital e região</h4>
              <p>Intervenções prediais complexas e serviços em altura</p>
            </div>
          </div>

          <div class="location-item">
            <div class="location-icon">📍</div>
            <div class="location-info">
              <h4>Litoral de São Paulo</h4>
              <p>Tratamento contra maresia, oxidação e impermeabilizações</p>
            </div>
          </div>

          <div style="margin-top: 15px;">
            <a href="<?php echo $whatsapp_link_completo; ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
              Consultar Atendimento para Minha Cidade
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       8. GALERIA INTERATIVA DE SERVIÇOS COM FILTROS E LIGHTBOX
       ========================================================================= -->
  <section class="section" id="galeria">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Portfólio Demonstrativo</span>
        <h2 class="section-title">GALERIA DE SERVIÇOS</h2>
        <p class="section-subtitle">
          Explore nossas principais frentes de trabalho em manutenção predial e serviços especializados.
        </p>
      </div>

      <!-- Filtros Dinâmicos -->
      <div class="gallery-filters" role="tablist">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="pintura">Pintura</button>
        <button class="filter-btn" data-filter="fachadas">Fachadas</button>
        <button class="filter-btn" data-filter="estruturas">Estruturas</button>
        <button class="filter-btn" data-filter="telhados">Telhados</button>
        <button class="filter-btn" data-filter="impermeabilizacao">Impermeabilização</button>
        <button class="filter-btn" data-filter="altura">Trabalho em altura</button>
        <button class="filter-btn" data-filter="solar">Energia solar</button>
      </div>

      <!-- Grade da Galeria -->
      <div class="gallery-grid" id="galleryGrid">
        <!-- Item 1: Pintura -->
        <div class="gallery-item" data-category="pintura" data-title="Pintura e Restauração Predial" data-desc="Pintura técnica de fachadas com resinas elásticas e alta proteção UV.">
          <img src="img/galeria/galeria-pintura-1.svg" alt="Serviço de Pintura Predial e Restauração de Fachadas">
          <div class="gallery-overlay">
            <span>Pintura</span>
            <h4>Pintura e Restauração Predial</h4>
          </div>
        </div>

        <!-- Item 2: Fachadas -->
        <div class="gallery-item" data-category="fachadas" data-title="Limpeza de Fachadas de Edifícios" data-desc="Lavagem e descontaminação de peles de vidro e pastilhas.">
          <img src="img/galeria/galeria-fachadas-1.svg" alt="Limpeza e Conservação de Fachadas">
          <div class="gallery-overlay">
            <span>Fachadas</span>
            <h4>Limpeza de Fachadas</h4>
          </div>
        </div>

        <!-- Item 3: Estruturas -->
        <div class="gallery-item" data-category="estruturas" data-title="Tratamento de Ferragens Oxidadas" data-desc="Passivação de armaduras de aço e recomposição com argamassa polimérica.">
          <img src="img/galeria/galeria-estruturas-1.svg" alt="Recuperação Estrutural e Tratamento de Ferragens">
          <div class="gallery-overlay">
            <span>Estruturas</span>
            <h4>Tratamento de Ferragens</h4>
          </div>
        </div>

        <!-- Item 4: Telhados -->
        <div class="gallery-item" data-category="telhados" data-title="Restauração e Manutenção de Telhados" data-desc="Revisão completa de coberturas, calhas, rufos e resina hidrofugante.">
          <img src="img/galeria/galeria-telhados-1.svg" alt="Restauração e Lavagem de Telhados">
          <div class="gallery-overlay">
            <span>Telhados</span>
            <h4>Restauração de Telhados</h4>
          </div>
        </div>

        <!-- Item 5: Impermeabilização -->
        <div class="gallery-item" data-category="impermeabilizacao" data-title="Impermeabilização de Lajes e Reservatórios" data-desc="Aplicação de mantas e membranas líquidas com testes de estanqueidade.">
          <img src="img/galeria/galeria-impermeabilizacao-1.svg" alt="Impermeabilização de Lajes e Piscinas">
          <div class="gallery-overlay">
            <span>Impermeabilização</span>
            <h4>Impermeabilização</h4>
          </div>
        </div>

        <!-- Item 6: Trabalho em Altura -->
        <div class="gallery-item" data-category="altura" data-title="Suspensão e Serviços em Altura NR-35" data-desc="Acesso por cordas com ancoragem e equipamentos certificados.">
          <img src="img/galeria/galeria-altura-1.svg" alt="Acesso por Cordas e Suspensão em Altura NR-35">
          <div class="gallery-overlay">
            <span>Trabalho em Altura</span>
            <h4>Suspensão e Serviços em Altura</h4>
          </div>
        </div>

        <!-- Item 7: Energia Solar -->
        <div class="gallery-item" data-category="solar" data-title="Limpeza de Placas Solares Fotovoltaicas" data-desc="Conservação de equipamentos e recuperação da eficiência energética máxima.">
          <img src="img/galeria/galeria-solar-1.svg" alt="Limpeza Técnica de Placas Solares Fotovoltaicas">
          <div class="gallery-overlay">
            <span>Energia Solar</span>
            <h4>Limpeza de Placas Solares</h4>
          </div>
        </div>

        <!-- Item 8: Calafetação -->
        <div class="gallery-item" data-category="fachadas" data-title="Tratamento de Trincas e Fissuras" data-desc="Vedação técnica com poliuretano para impedir infiltrações na alvenaria.">
          <img src="img/galeria/galeria-calafetacao-1.svg" alt="Calafetação e Vedação de Trincas">
          <div class="gallery-overlay">
            <span>Calafetação</span>
            <h4>Tratamento de Trincas</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       9. TERCEIRA TELA — CONTATO & FORMULÁRIO DE ORÇAMENTO
       ========================================================================= -->
  <section class="section" style="background-color: #f1f5f9;" id="contato">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Atendimento Direto</span>
        <h2 class="section-title">ENTRE EM CONTATO</h2>
        <p class="section-subtitle">
          Solicite seu orçamento sem compromisso ou fale diretamente conosco pelo WhatsApp.
        </p>
      </div>

      <div class="contact-layout">
        <!-- Painel de Informações de Contato -->
        <div class="contact-info-panel">
          <div>
            <div class="contact-info-header">
              <h3>Fale com a LR Serviços</h3>
              <p>Estamos prontos para atender seu condomínio, empresa ou residência com rapidez e segurança técnica.</p>
            </div>

            <div class="contact-channels">
              <!-- WhatsApp -->
              <div class="contact-channel-item">
                <div class="channel-icon whatsapp">💬</div>
                <div class="channel-text">
                  <h4>WhatsApp Oficial</h4>
                  <p><?php echo $whatsapp_numero_formatado; ?></p>
                  <a href="<?php echo $whatsapp_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm" style="margin-top: 8px; width: 100%;">
                    CHAMAR NO WHATSAPP
                  </a>
                </div>
              </div>

              <!-- Instagram -->
              <div class="contact-channel-item">
                <div class="channel-icon instagram">📸</div>
                <div class="channel-text">
                  <h4>Instagram</h4>
                  <p><?php echo $instagram_nome; ?></p>
                  <?php if (!empty($instagram_url)): ?>
                    <a href="<?php echo htmlspecialchars($instagram_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" style="margin-top: 8px; width: 100%;">
                      ACESSAR INSTAGRAM
                    </a>
                  <?php else: ?>
                    <a href="#" onclick="alert('O perfil do Instagram será configurado em breve.'); return false;" class="btn btn-secondary btn-sm" style="margin-top: 8px; width: 100%;">
                      ACESSAR INSTAGRAM
                    </a>
                  <?php endif; ?>
                </div>
              </div>

              <!-- E-mail -->
              <div class="contact-channel-item">
                <div class="channel-icon email">✉</div>
                <div class="channel-text">
                  <h4>E-mail</h4>
                  <p style="word-break: break-all; font-size: 0.9rem;"><?php echo $email_contato; ?></p>
                  <a href="mailto:<?php echo $email_contato; ?>" class="btn btn-outline-white btn-sm" style="margin-top: 8px; width: 100%;">
                    ENVIAR E-MAIL
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div style="background: rgba(255,255,255,0.05); padding: 16px; border-radius: var(--radius-md); border: 1px solid rgba(255,255,255,0.1);">
            <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">
              🛡 <strong>Compromisso de Privacidade:</strong> Seus dados são utilizados exclusivamente para o retorno da sua solicitação de orçamento.
            </p>
          </div>
        </div>

        <!-- Formulário Profissional de Orçamento -->
        <div class="quote-form-card">
          <h3>Solicite um Orçamento</h3>
          <p>Preencha os campos abaixo para receber uma proposta personalizada da nossa equipe técnica.</p>

          <form id="quoteForm" novalidate>
            <!-- Campos Honeypot Anti-Spam (invisíveis) -->
            <input type="text" name="website_url" class="hp-field" tabindex="-1" autocomplete="off">
            <input type="text" name="empresa_verificacao" class="hp-field" tabindex="-1" autocomplete="off">

            <div class="form-grid">
              <!-- Nome Completo -->
              <div class="form-group full-width">
                <label for="form_nome" class="form-label">Nome Completo <span class="req">*</span></label>
                <input type="text" id="form_nome" name="nome" class="form-control" placeholder="Seu nome ou da sua empresa" required>
                <span class="form-feedback"></span>
              </div>

              <!-- WhatsApp -->
              <div class="form-group">
                <label for="form_whatsapp" class="form-label">WhatsApp <span class="req">*</span></label>
                <input type="tel" id="form_whatsapp" name="whatsapp" class="form-control" placeholder="(00) 00000-0000" required>
                <span class="form-feedback"></span>
              </div>

              <!-- Telefone Fixo / Opcional -->
              <div class="form-group">
                <label for="form_telefone" class="form-label">Telefone Alternativo</label>
                <input type="tel" id="form_telefone" name="telefone" class="form-control" placeholder="(00) 0000-0000">
                <span class="form-feedback"></span>
              </div>

              <!-- E-mail -->
              <div class="form-group">
                <label for="form_email" class="form-label">E-mail <span class="req">*</span></label>
                <input type="email" id="form_email" name="email" class="form-control" placeholder="seuemail@exemplo.com" required>
                <span class="form-feedback"></span>
              </div>

              <!-- Cidade / Região -->
              <div class="form-group">
                <label for="form_cidade" class="form-label">Cidade / Região <span class="req">*</span></label>
                <input type="text" id="form_cidade" name="cidade" class="form-control" placeholder="Ex: Araçatuba, SP" required>
                <span class="form-feedback"></span>
              </div>

              <!-- Serviço Desejado -->
              <div class="form-group full-width">
                <label for="form_servico" class="form-label">Serviço Desejado <span class="req">*</span></label>
                <select id="form_servico" name="servico" class="form-control" required>
                  <option value="">Selecione o serviço principal...</option>
                  <option value="Pintura predial">Pintura predial</option>
                  <option value="Limpeza de fachadas">Limpeza de fachadas</option>
                  <option value="Calafetação e tratamento de trincas">Calafetação e tratamento de trincas</option>
                  <option value="Tratamento de ferragens oxidadas">Tratamento de ferragens oxidadas</option>
                  <option value="Suspensão e serviços em altura">Suspensão e serviços em altura</option>
                  <option value="Manutenção predial">Manutenção predial</option>
                  <option value="Restauração de telhados">Restauração de telhados</option>
                  <option value="Impermeabilização">Impermeabilização (Reservatórios, Piscinas, etc.)</option>
                  <option value="Limpeza de placas solares">Limpeza de placas solares fotovoltaicas</option>
                  <option value="Outro serviço especializado">Outro serviço especializado</option>
                </select>
                <span class="form-feedback"></span>
              </div>

              <!-- Mensagem / Descrição do Projeto -->
              <div class="form-group full-width">
                <label for="form_mensagem" class="form-label">Descrição da Necessidade / Projeto <span class="req">*</span></label>
                <textarea id="form_mensagem" name="mensagem" class="form-control" rows="4" placeholder="Conte-nos detalhes sobre o local, metragem estimada ou condições da edificação..." required></textarea>
                <span class="form-feedback"></span>
              </div>

              <!-- Botão de Envio -->
              <div class="form-group full-width" style="margin-top: 10px;">
                <button type="submit" id="btnSubmitForm" class="btn btn-primary" style="width: 100%;">
                  SOLICITAR ORÇAMENTO
                </button>
              </div>
            </div>
          </form>

          <!-- Alerta de Sucesso / Erro -->
          <div id="formStatus" class="form-status-alert"></div>
        </div>
      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
