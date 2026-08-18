<?php
/**
 * Página de Contato e Orçamento - LR Serviços e Manutenção
 * Proprietário: Luis Rogério Taiacol
 */
$custom_title = "Contato & Orçamento | LR Serviços e Manutenção";
$custom_desc = "Entre em contato com Luis Rogério Taiacol da LR Serviços e Manutenção pelo WhatsApp (18) 99661-6518 ou solicite seu orçamento online.";

require_once __DIR__ . '/php/config.php';
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Hero Interno -->
  <section class="hero-section" style="padding: 60px 0 70px;">
    <div class="hero-overlay-grid"></div>
    <div class="container hero-content text-center" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <span class="badge-tag" style="background: rgba(255,199,44,0.15); color: var(--color-yellow-400); border-color: var(--color-yellow-400);">
        Fale Conosco
      </span>
      <h1 style="color: #ffffff; font-size: 2.6rem; margin-bottom: 16px;">ENTRE EM CONTATO</h1>
      <p style="color: #cbd5e1; font-size: 1.15rem;">
        Solicite uma proposta técnica sem compromisso ou fale diretamente pelo WhatsApp.
      </p>
    </div>
  </section>

  <!-- Seção Principal de Contato -->
  <section class="section">
    <div class="container">
      <div class="contact-layout">
        <!-- Painel de Contatos -->
        <div class="contact-info-panel">
          <div>
            <div class="contact-info-header">
              <h3>Canais Oficiais</h3>
              <p>Atendimento rápido e personalizado para condomínios, construtoras, indústrias e residências.</p>
            </div>

            <div class="contact-channels">
              <!-- WhatsApp -->
              <div class="contact-channel-item">
                <div class="channel-icon whatsapp">💬</div>
                <div class="channel-text">
                  <h4>WhatsApp</h4>
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
              📍 <strong>Regiões Atendidas:</strong> Araçatuba, São José do Rio Preto, Bauru, São Paulo Capital e Litoral.
            </p>
          </div>
        </div>

        <!-- Formulário -->
        <div class="quote-form-card">
          <h3>Solicitar Orçamento Online</h3>
          <p>Preencha os campos abaixo com as informações da sua edificação.</p>

          <form id="quoteForm" novalidate>
            <input type="text" name="website_url" class="hp-field" tabindex="-1" autocomplete="off">
            <input type="text" name="empresa_verificacao" class="hp-field" tabindex="-1" autocomplete="off">

            <div class="form-grid">
              <div class="form-group full-width">
                <label for="form_nome" class="form-label">Nome Completo <span class="req">*</span></label>
                <input type="text" id="form_nome" name="nome" class="form-control" placeholder="Seu nome ou condomínio/empresa" required>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group">
                <label for="form_whatsapp" class="form-label">WhatsApp <span class="req">*</span></label>
                <input type="tel" id="form_whatsapp" name="whatsapp" class="form-control" placeholder="(00) 00000-0000" required>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group">
                <label for="form_telefone" class="form-label">Telefone Fixo</label>
                <input type="tel" id="form_telefone" name="telefone" class="form-control" placeholder="(00) 0000-0000">
                <span class="form-feedback"></span>
              </div>

              <div class="form-group">
                <label for="form_email" class="form-label">E-mail <span class="req">*</span></label>
                <input type="email" id="form_email" name="email" class="form-control" placeholder="seuemail@exemplo.com" required>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group">
                <label for="form_cidade" class="form-label">Cidade / Região <span class="req">*</span></label>
                <input type="text" id="form_cidade" name="cidade" class="form-control" placeholder="Ex: Araçatuba, SP" required>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group full-width">
                <label for="form_servico" class="form-label">Serviço Desejado <span class="req">*</span></label>
                <select id="form_servico" name="servico" class="form-control" required>
                  <option value="">Selecione o serviço...</option>
                  <option value="Pintura predial">Pintura predial</option>
                  <option value="Limpeza de fachadas">Limpeza de fachadas</option>
                  <option value="Calafetação e tratamento de trincas">Calafetação e tratamento de trincas</option>
                  <option value="Tratamento de ferragens oxidadas">Tratamento de ferragens oxidadas</option>
                  <option value="Suspensão e serviços em altura">Suspensão e serviços em altura</option>
                  <option value="Manutenção predial">Manutenção predial</option>
                  <option value="Restauração de telhados">Restauração de telhados</option>
                  <option value="Impermeabilização">Impermeabilização</option>
                  <option value="Limpeza de placas solares">Limpeza de placas solares fotovoltaicas</option>
                  <option value="Outro serviço especializado">Outro serviço especializado</option>
                </select>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group full-width">
                <label for="form_mensagem" class="form-label">Mensagem / Detalhes da Demanda <span class="req">*</span></label>
                <textarea id="form_mensagem" name="mensagem" class="form-control" rows="4" placeholder="Descreva o tipo de imóvel, altura/andares aproximados, problemas observados..." required></textarea>
                <span class="form-feedback"></span>
              </div>

              <div class="form-group full-width" style="margin-top: 10px;">
                <button type="submit" id="btnSubmitForm" class="btn btn-primary" style="width: 100%;">
                  SOLICITAR ORÇAMENTO
                </button>
              </div>
            </div>
          </form>

          <div id="formStatus" class="form-status-alert"></div>
        </div>
      </div>
    </div>
  </section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
