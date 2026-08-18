<?php
/**
 * Footer Global - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 */
if (!defined('LR_APP')) {
    require_once __DIR__ . '/../php/config.php';
}
?>
  <!-- ==================== RODAPÉ INSTITUCIONAL ==================== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Coluna 1: Marca e Resumo -->
        <div class="footer-col footer-brand">
          <a href="index.php" title="<?php echo $empresa_nome; ?>">
            <img src="img/logo/logo-white.svg" alt="<?php echo $empresa_nome; ?>">
          </a>
          <p>
            Manutenção predial e serviços em altura com equipe altamente capacitada e supervisão por engenheiros de segurança do trabalho.
          </p>
          <p style="font-size: 0.85rem; color: #94a3b8;">
            <strong>Proprietário:</strong> <?php echo $empresa_proprietario; ?>
          </p>
        </div>

        <!-- Coluna 2: Links Rápidos -->
        <div class="footer-col">
          <h4>Navegação</h4>
          <ul class="footer-links">
            <li><a href="index.php#inicio">Início</a></li>
            <li><a href="index.php#servicos">Serviços</a></li>
            <li><a href="index.php#sobre">Sobre nós</a></li>
            <li><a href="index.php#valores">Valores</a></li>
            <li><a href="index.php#atuacao">Áreas de atuação</a></li>
            <li><a href="index.php#galeria">Galeria</a></li>
            <li><a href="index.php#contato">Contato</a></li>
          </ul>
        </div>

        <!-- Coluna 3: Principais Especialidades -->
        <div class="footer-col">
          <h4>Especialidades</h4>
          <ul class="footer-links">
            <li><a href="index.php#servicos">Pintura Predial</a></li>
            <li><a href="index.php#servicos">Limpeza de Fachadas</a></li>
            <li><a href="index.php#servicos">Trabalho em Altura</a></li>
            <li><a href="index.php#servicos">Tratamento de Trincas</a></li>
            <li><a href="index.php#servicos">Ferragens Oxidadas</a></li>
            <li><a href="index.php#servicos">Impermeabilização</a></li>
            <li><a href="index.php#servicos">Restauração de Telhados</a></li>
            <li><a href="index.php#placas-solares">Limpeza de Placas Solares</a></li>
          </ul>
        </div>

        <!-- Coluna 4: Contato & Atendimento -->
        <div class="footer-col">
          <h4>Fale Conosco</h4>
          <div class="footer-contact-list">
            <div class="footer-contact-item">
              <span class="icon">📱</span>
              <div>
                <strong>WhatsApp:</strong><br>
                <a href="<?php echo $whatsapp_url; ?>" target="_blank" rel="noopener noreferrer" style="color: var(--color-yellow-400); font-weight: 700;">
                  <?php echo $whatsapp_numero_formatado; ?>
                </a>
              </div>
            </div>

            <div class="footer-contact-item">
              <span class="icon">📸</span>
              <div>
                <strong>Instagram:</strong><br>
                <?php if (!empty($instagram_url)): ?>
                  <a href="<?php echo htmlspecialchars($instagram_url); ?>" target="_blank" rel="noopener noreferrer" style="color: var(--color-yellow-400);">
                    <?php echo $instagram_nome; ?>
                  </a>
                <?php else: ?>
                  <span style="color: #cbd5e1;"><?php echo $instagram_nome; ?></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="footer-contact-item">
              <span class="icon">✉</span>
              <div>
                <strong>E-mail:</strong><br>
                <a href="mailto:<?php echo $email_contato; ?>" style="color: #cbd5e1; word-break: break-all;">
                  <?php echo $email_contato; ?>
                </a>
              </div>
            </div>

            <div class="footer-contact-item">
              <span class="icon">📍</span>
              <div>
                <strong>Áreas Atendidas:</strong><br>
                <span style="font-size: 0.85rem; color: #94a3b8; line-height: 1.4; display: block; margin-top: 2px;">
                  Araçatuba e região | Rio Preto e região | Bauru | São Paulo | Litoral
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Barra de Copyright -->
      <div class="footer-bottom">
        <p>
          &copy; <?php echo $ano_atual; ?> <strong><?php echo $empresa_nome; ?></strong>. Todos os direitos reservados.
        </p>
        <p style="font-size: 0.8rem; color: #64748b;">
          Manutenção Predial &bull; Trabalho em Altura &bull; Engenharia &amp; Segurança
        </p>
      </div>
    </div>
  </footer>

  <!-- ==================== BOTÃO FLUTUANTE DO WHATSAPP ==================== -->
  <a href="<?php echo $whatsapp_link_completo; ?>" class="floating-whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Fale pelo WhatsApp com a LR Serviços e Manutenção">
    <div class="floating-whatsapp-label">
      Orçamento no WhatsApp
    </div>
    <div class="floating-whatsapp-btn" role="img" aria-hidden="true">
      💬
    </div>
  </a>

  <!-- ==================== MODAL LIGHTBOX PARA GALERIA ==================== -->
  <div class="lightbox-modal" id="lightboxModal" role="dialog" aria-modal="true" aria-label="Visualizador de Imagens">
    <div class="lightbox-content">
      <button class="lightbox-close" id="lightboxClose" aria-label="Fechar visualizador">&times;</button>
      <div class="lightbox-image-container">
        <img src="" alt="" id="lightboxImg">
      </div>
      <div class="lightbox-caption">
        <h4 id="lightboxTitle">Serviço Realizado</h4>
        <p id="lightboxDesc">LR Serviços e Manutenção</p>
      </div>
    </div>
  </div>

  <!-- ==================== MODAL "SAIBA MAIS" DOS SERVIÇOS ==================== -->
  <div class="service-modal" id="serviceModal" role="dialog" aria-modal="true" aria-label="Detalhes do Serviço">
    <div class="service-modal-card">
      <div class="service-modal-header">
        <h3 id="serviceModalTitle">Detalhes do Serviço</h3>
        <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">LR Serviços e Manutenção</p>
      </div>
      <div class="service-modal-body">
        <p id="serviceModalDesc">Informações detalhadas sobre a execução e conformidade técnica.</p>
      </div>
      <div class="service-modal-footer">
        <button class="btn btn-secondary btn-sm" id="serviceModalClose">Fechar</button>
        <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-whatsapp btn-sm">
          Solicitar pelo WhatsApp
        </a>
      </div>
    </div>
  </div>

  <!-- Scripts JavaScript -->
  <script src="js/script.js"></script>
</body>
</html>
