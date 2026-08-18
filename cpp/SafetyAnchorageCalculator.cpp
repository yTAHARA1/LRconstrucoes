/**
 * LR SERVIÇOS E MANUTENÇÃO — Motor de Cálculo Estrutural de Ancoragem (C++)
 * Proprietário: Luis Rogério Taiacol
 * 
 * Módulo de engenharia para cálculo de força máxima de frenagem (MAF),
 * fator de queda (Fall Factor) e verificação de pontos de ancoragem (NR-35 / NBR 16325).
 */

#include <iostream>
#include <iomanip>
#include <string>
#include <vector>
#include <cmath>

struct PontoAncoragem {
    std::string id;
    std::string localizacao;
    double capacidadeKilonewtons; // Resistência nominal em kN
    bool certificadoEngenheiro;
};

class CalculadorSegurancaAltura {
private:
    const double GRAVIDADE = 9.80665; // m/s^2
    const double CARGA_MINIMA_NR35_KN = 15.0; // 15 kN (~1500 kgf por usuário)

public:
    double calcularFatorDeQueda(double alturaQuedaMetros, double comprimentoCordaMetros) {
        if (comprimentoCordaMetros <= 0.0) return 0.0;
        return alturaQuedaMetros / comprimentoCordaMetros;
    }

    double calcularForcaImpactoEstimada(double massaTrabalhadorKg, double fatorQueda, double moduloElasticidadeCorda) {
        // Modelo simplificado de impacto dinâmico: F = m*g * (1 + sqrt(1 + (2 * E * f) / (m*g)))
        double pesoN = massaTrabalhadorKg * GRAVIDADE;
        double forcaN = pesoN * (1.0 + std::sqrt(1.0 + (2.0 * moduloElasticidadeCorda * fatorQueda) / pesoN));
        return forcaN / 1000.0; // Retorna em kN
    }

    bool validarPontoAncoragem(const PontoAncoragem& ponto, double forcaAplicadaKN) {
        if (!ponto.certificadoEngenheiro) {
            std::cout << "[ALERTA] Ponto " << ponto.id << " NAO possui laudo/ART emitido por Engenheiro!\n";
            return false;
        }

        if (ponto.capacidadeKilonewtons < CARGA_MINIMA_NR35_KN) {
            std::cout << "[REPROVADO] Capacidade (" << ponto.capacidadeKilonewtons << " kN) inferior ao minimo de 15 kN da NR-35.\n";
            return false;
        }

        double margemSeguranca = ponto.capacidadeKilonewtons / forcaAplicadaKN;
        std::cout << "[APROVADO] Ponto " << ponto.id << " (" << ponto.localizacao << ") - Fator de Seguranca: " 
                  << std::fixed << std::setprecision(2) << margemSeguranca << "x\n";
        return true;
    }
};

int main() {
    std::cout << "=================================================================\n";
    std::cout << "  LR SERVICOS E MANUTENCAO — CALCULO DE ANCORAGEM NR-35 (C++)\n";
    std::cout << "  Proprietario: Luis Rogerio Taiacol\n";
    std::cout << "=================================================================\n\n";

    CalculadorSegurancaAltura calc;

    // Cenário de teste: Trabalhador com EPIs em suspensão
    double massaTotalKg = 100.0; // Trabalhador + Equipamentos
    double alturaQueda = 1.2;    // Metros de deslocamento livre
    double comprimentoLinha = 2.0; // Metros de talabarte/corda
    double moduloCorda = 12000.0; // N (elasticidade da corda de poliamida semi-estática)

    double fatorQueda = calc.calcularFatorDeQueda(alturaQueda, comprimentoLinha);
    double forcaImpactoKN = calc.calcularForcaImpactoEstimada(massaTotalKg, fatorQueda, moduloCorda);

    std::cout << "1. Parametros do Sistema de Acesso por Cordas:\n";
    std::cout << "   - Massa Total do Operador: " << massaTotalKg << " kg\n";
    std::cout << "   - Fator de Queda (FQ): " << std::fixed << std::setprecision(2) << fatorQueda;
    if (fatorQueda <= 1.0) {
        std::cout << " (Faixa Segura)\n";
    } else {
        std::cout << " (Faixa Critica - Exige Absorvedor de Energia)\n";
    }
    std::cout << "   - Forca Maxima Estimada: " << forcaImpactoKN << " kN\n\n";

    std::cout << "2. Verificacao Estrutural dos Pontos de Ancoragem Prediais:\n";
    std::vector<PontoAncoragem> pontos = {
        {"ANC-01", "Viga Superior de Concreto - Cobertura", 22.0, true},
        {"ANC-02", "Olhal de Aco Inox 316 - Fachada Norte", 18.0, true},
        {"ANC-03", "Pilar Metalico Auxiliar", 12.0, false}
    };

    for (const auto& p : pontos) {
        calc.validarPontoAncoragem(p, forcaImpactoKN);
    }

    std::cout << "\n=================================================================\n";
    std::cout << "  Modulo C++ pronto para integracao com sensores e telemetria\n";
    std::cout << "=================================================================\n";

    return 0;
}
