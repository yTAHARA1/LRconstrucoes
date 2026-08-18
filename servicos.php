<?php
/**
 * Página de Serviços - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 */
$custom_title = "Nossos Serviços | LR Serviços e Manutenção";
$custom_desc = "Conheça todos os serviços de manutenção predial, pintura de fachadas, trabalho em altura, impermeabilização e limpeza de placas solares.";

require_once __DIR__ . '/php/config.php';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Hero Interno -->
  <section class="hero-section" style="padding: 60px 0 70px;">
    <div class="hero-overlay-grid"></div>
    <div class="container hero-content text-center" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <span class="badge-tag" style="background: rgba(255,199,44,0.15); color: var(--color-yellow-400); border-color: var(--color-yellow-400);">
        Portfólio Técnico
      </span>
      <h1 style="color: #ffffff; font-size: 2.6rem; margin-bottom: 16px;">NOSSOS SERVIÇOS</h1>
      <p style="color: #cbd5e1; font-size: 1.15rem;">
        Soluções completas em manutenção predial e serviços em altura com equipamentos certificados e equipe qualificada.
      </p>
    </div>
  </section>

  <!-- Grade dos Principais Serviços -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">Serviços em Destaque</span>
        <h2 class="section-title">PRINCIPAIS FRENTES DE ATUAÇÃO</h2>
        <p class="section-subtitle">
          Atendimento a condomínios, empresas e residências em diferentes regiões do estado de São Paulo.
        </p>
      </div>

      <div class="services-grid">
        <!-- 1. Pintura Predial -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/pintura-predial.svg" alt="Pintura Predial">
            <span class="service-card-tag">Destaque</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🎨</div>
            <h3 class="service-card-title">Pintura predial</h3>
            <p class="service-card-desc">
              Restauração e pintura de prédios, fachadas e diferentes estruturas.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="pintura_predial">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 2. Limpeza de Fachadas -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/limpeza-fachadas.svg" alt="Limpeza de Fachadas">
            <span class="service-card-tag">Conservação</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🏢</div>
            <h3 class="service-card-title">Limpeza de fachadas</h3>
            <p class="service-card-desc">
              Limpeza e conservação de fachadas de edifícios e outras construções.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="limpeza_fachadas">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 3. Calafetação e Tratamento de Trincas -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/calafetacao-trincas.svg" alt="Calafetação de Trincas">
            <span class="service-card-tag">Prevenção</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🛡</div>
            <h3 class="service-card-title">Calafetação e tratamento de trincas e fissuras</h3>
            <p class="service-card-desc">
              Tratamento de trincas, fissuras e pontos sujeitos a infiltrações e deterioração.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="calafetacao_trincas">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 4. Tratamento de Ferragens Oxidadas -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/ferragens-oxidadas.svg" alt="Tratamento de Ferragens">
            <span class="service-card-tag">Estrutural</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🔧</div>
            <h3 class="service-card-title">Tratamento de ferragens oxidadas</h3>
            <p class="service-card-desc">
              Tratamento de estruturas metálicas e ferragens que apresentam oxidação.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="ferragens_oxidadas">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 5. Suspensão e Serviços em Altura -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/trabalho-altura.svg" alt="Serviços em Altura NR-35">
            <span class="service-card-tag">NR-35</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">🧗</div>
            <h3 class="service-card-title">Suspensão e serviços em altura</h3>
            <p class="service-card-desc">
              Execução de serviços em altura por profissionais capacitados, com foco em segurança.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="servicos_altura">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 6. Manutenção Predial -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/manutencao-predial.svg" alt="Manutenção Predial">
            <span class="service-card-tag">Completo</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">📋</div>
            <h3 class="service-card-title">Manutenção predial</h3>
            <p class="service-card-desc">
              Inspeção, manutenção e conservação de edificações.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="manutencao_predial">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
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
              Serviços de restauração e manutenção de telhados.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="restauracao_telhados">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>

        <!-- 8. Impermeabilização -->
        <div class="service-card">
          <div class="service-card-image">
            <img src="img/servicos/impermeabilizacao.svg" alt="Impermeabilização">
            <span class="service-card-tag">Estanqueidade</span>
          </div>
          <div class="service-card-body">
            <div class="service-card-icon">💧</div>
            <h3 class="service-card-title">Impermeabilização</h3>
            <p class="service-card-desc">
              Impermeabilização de reservatórios, piscinas, telhados, jardineiras e outras áreas sujeitas à infiltração.
            </p>
            <div class="service-card-footer">
              <button class="btn-card-details" data-service="impermeabilizacao">Saiba mais &rarr;</button>
              <a href="contato.php" class="btn btn-primary btn-sm">Orçamento</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Destaque: Placas Solares -->
  <section class="section" style="background-color: #f1f5f9;">
    <div class="container">
      <div class="solar-featured-banner">
        <div class="solar-banner-image">
          <img src="img/servicos/placas-solares.svg" alt="Limpeza de Placas Solares">
        </div>
        <div class="solar-banner-content">
          <div class="badge-tag" style="background: rgba(255,199,44,0.15); color: var(--color-yellow-400); border-color: var(--color-yellow-400);">
            Destaque Especial
          </div>
          <h3>Limpeza de Placas Solares Fotovoltaicas</h3>
          <p>
            Serviço técnico voltado à conservação e manutenção dos equipamentos solares, evitando perdas de até 30% na geração de energia fotovoltaica devido a sujidades e poeira.
          </p>
          <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-primary">
            Solicitar Limpeza no WhatsApp
          </a>
        </div>
      </div>

      <!-- Demais Serviços -->
      <div class="section-header" style="margin-top: 40px;">
        <span class="badge-tag">Catálogo Geral</span>
        <h2 class="section-title">TODOS OS SERVIÇOS DISPONÍVEIS</h2>
      </div>

      <div class="other-services-grid">
        <?php foreach ($demais_servicos as $serv): ?>
          <div class="other-service-item">
            <span class="other-service-dot"></span>
            <span class="other-service-name"><?php echo htmlspecialchars($serv); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
