<?php
/**
 * Página Sobre a Empresa - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 */
$custom_title = "Sobre a Empresa | LR Serviços e Manutenção";
$custom_desc = "Conheça a história, equipe de engenharia de segurança, missão, visão e valores da LR Serviços e Manutenção.";

require_once __DIR__ . '/php/config.php';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Hero Interno -->
  <section class="hero-section" style="padding: 60px 0 70px;">
    <div class="hero-overlay-grid"></div>
    <div class="container hero-content text-center" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <span class="badge-tag" style="background: rgba(255,199,44,0.15); color: var(--color-yellow-400); border-color: var(--color-yellow-400);">
        Institucional
      </span>
      <h1 style="color: #ffffff; font-size: 2.6rem; margin-bottom: 16px;">SOBRE A LR SERVIÇOS E MANUTENÇÃO</h1>
      <p style="color: #cbd5e1; font-size: 1.15rem;">
        Conheça a solidez, a responsabilidade e o compromisso técnico que norteiam nossos serviços de manutenção predial e trabalho em altura.
      </p>
    </div>
  </section>

  <!-- Conteúdo Principal Sobre -->
  <section class="section">
    <div class="container">
      <div class="about-grid">
        <div class="about-content">
          <span class="badge-tag">Nossa Trajetória</span>
          <h2>Compromisso com Segurança, Eficiência e Qualidade</h2>
          <p>
            A <strong>LR Serviços e Manutenção</strong>, sob liderança de <strong>Luis Rogério Taiacol</strong>, atua com destaque no segmento de manutenção predial e serviços em altura, oferecendo soluções completas para conservação, restauração, recuperação e manutenção de diferentes tipos de edificações.
          </p>
          <p>
            Entendemos que a conservação predial e as intervenções em altura exigem o mais alto padrão de rigor técnico. Por isso, a LR conta com <strong>engenheiros de segurança do trabalho e profissionais extremamente capacitados</strong>, garantindo total conformidade com as Normas Regulamentadoras (NR-35 para trabalho em altura, NR-18 para condições na indústria da construção) e proporcionando aos nossos clientes tranquilidade e estanqueidade em cada obra.
          </p>

          <div class="about-audience-box">
            <h4>Atendimento Especializado Para:</h4>
            <div class="about-audience-tags">
              <span class="audience-tag">Condomínios residenciais e comerciais</span>
              <span class="audience-tag">Empresas e indústrias</span>
              <span class="audience-tag">Edifícios corporativos</span>
              <span class="audience-tag">Casas em construção</span>
              <span class="audience-tag">Casas em reforma</span>
              <span class="audience-tag">Prédios em construção</span>
              <span class="audience-tag">Prédios em processo de repintura</span>
            </div>
          </div>
        </div>

        <div class="about-image-wrapper">
          <div class="about-image-card">
            <img src="img/equipe/seguranca-engenharia.svg" alt="Engenheiros de Segurança e Equipe Especializada LR">
          </div>
        </div>
      </div>

      <!-- Missão, Visão e Valores -->
      <div class="section-header" style="margin-top: 30px;">
        <span class="badge-tag">Diretrizes Estratégicas</span>
        <h2 class="section-title">MISSÃO, VISÃO E VALORES</h2>
      </div>

      <div class="mvv-grid">
        <div class="mvv-card missao">
          <div class="mvv-icon">🎯</div>
          <h3>MISSÃO</h3>
          <p>
            Oferecer serviços de manutenção, restauração e conservação com qualidade, segurança e eficiência, assegurando a máxima durabilidade das estruturas atendidas.
          </p>
        </div>

        <div class="mvv-card visao">
          <div class="mvv-icon">👁</div>
          <h3>VISÃO</h3>
          <p>
            Ser reconhecida como uma empresa de referência em manutenção predial e serviços em altura nas regiões atendidas, destacando-se pela confiança e integridade operacional.
          </p>
        </div>

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

      <!-- CTA -->
      <div style="text-align: center; margin-top: 60px;">
        <a href="contato.php" class="btn btn-primary" style="margin-right: 15px;">Solicitar Proposta Técnica</a>
        <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-whatsapp">Falar pelo WhatsApp</a>
      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
