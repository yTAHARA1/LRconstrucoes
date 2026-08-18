/**
 * LR SERVIÇOS E MANUTENÇÃO — Módulo Conceitual de Gestão de Ordens de Serviço
 * Proprietário: Luis Rogério Taiacol
 * 
 * Este programa demonstra como o backend Java gerencia orçamentos recebidos
 * via site e valida os requisitos de Engenharia de Segurança do Trabalho (NR-35).
 */

import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;

public class LROrderManagementSystem {

    public enum StatusServico {
        SOLICITADO_VIA_SITE,
        VISTORIA_TECNICA_AGENDADA,
        LAUDO_SEGURANCA_APROVADO,
        EM_EXECUCAO,
        CONCLUIDO_COM_GARANTIA
    }

    public static class OrdemServico {
        private String id;
        private String clienteNome;
        private String whatsapp;
        private String cidade;
        private String tipoServico;
        private boolean requerTrabalhoAltura;
        private boolean laudoEngenheiroSeguranca;
        private StatusServico status;
        private LocalDateTime dataCriacao;

        public OrdemServico(String id, String clienteNome, String whatsapp, String cidade, String tipoServico, boolean requerAltura) {
            this.id = id;
            this.clienteNome = clienteNome;
            this.whatsapp = whatsapp;
            this.cidade = cidade;
            this.tipoServico = tipoServico;
            this.requerTrabalhoAltura = requerAltura;
            this.laudoEngenheiroSeguranca = false;
            this.status = StatusServico.SOLICITADO_VIA_SITE;
            this.dataCriacao = LocalDateTime.now();
        }

        public void aprovarLaudoSeguranca(String nomeEngenheiro) {
            this.laudoEngenheiroSeguranca = true;
            this.status = StatusServico.LAUDO_SEGURANCA_APROVADO;
            System.out.println("-> [SEGURANÇA] Laudo de NR-35/NR-18 aprovado pelo Engenheiro: " + nomeEngenheiro);
        }

        public void iniciarExecucao() {
            if (this.requerTrabalhoAltura && !this.laudoEngenheiroSeguranca) {
                System.out.println("-> [BLOQUEIO DE SEGURANÇA] Obra em altura não pode iniciar sem laudo assinado!");
                return;
            }
            this.status = StatusServico.EM_EXECUCAO;
            System.out.println("-> [EXECUÇÃO] Equipe capacitada em campo para o serviço: " + this.tipoServico);
        }

        @Override
        public String toString() {
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");
            return String.format("[%s] Cliente: %s | Tel: %s | Cidade: %s | Serviço: %s | Altura NR-35: %s | Status: %s | Data: %s",
                    id, clienteNome, whatsapp, cidade, tipoServico, (requerTrabalhoAltura ? "SIM" : "NÃO"), status, dataCriacao.format(formatter));
        }
    }

    public static void main(String[] args) {
        System.out.println("==============================================================");
        System.out.println("  LR SERVIÇOS E MANUTENÇÃO — BACKEND OPERACIONAL (JAVA)");
        System.out.println("  Proprietário: Luis Rogério Taiacol");
        System.out.println("==============================================================\n");

        List<OrdemServico> ordens = new ArrayList<>();

        // Simulação de pedidos recebidos pelo formulário do site
        OrdemServico os1 = new OrdemServico("OS-2026-001", "Condomínio Residencial Horizonte", "(18) 99661-6518", "Araçatuba/SP", "Pintura Predial e Limpeza de Fachada", true);
        OrdemServico os2 = new OrdemServico("OS-2026-002", "Empresa Solar Power", "(17) 98765-4321", "São José do Rio Preto/SP", "Limpeza de Placas Solares Fotovoltaicas", true);
        OrdemServico os3 = new OrdemServico("OS-2026-003", "Edifício Comercial Central", "(14) 99123-4567", "Bauru/SP", "Impermeabilização de Reservatórios e Lajes", false);

        ordens.add(os1);
        ordens.add(os2);
        ordens.add(os3);

        System.out.println("1. Novas Ordens de Serviço integradas via Formulário Web:");
        for (OrdemServico os : ordens) {
            System.out.println("   " + os);
        }

        System.out.println("\n2. Processamento do Protocolo de Segurança NR-35:");
        os1.aprovarLaudoSeguranca("Engenheiro de Segurança do Trabalho - LR Serviços");
        os1.iniciarExecucao();

        System.out.println("\n3. Status Final da Ordem de Serviço:");
        System.out.println("   " + os1);
        System.out.println("\n==============================================================");
        System.out.println("  Módulo Java pronto para integração com banco de dados e APIs");
        System.out.println("==============================================================");
    }
}
