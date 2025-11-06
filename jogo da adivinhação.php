<?php

$pontuacao = 0;
$rodadas = 3; // número de rodadas do jogo

print("=== Jogo da Adivinhação ===\n");
print("Você terá $rodadas rodadas para jogar!\n\n");

for ($i = 1; $i <= $rodadas; $i++) {

    print("Rodada $i\n");
    $sorteado = rand(1, 100);
    $chute = 0;
    $tentativas = 0;

    while ($chute != $sorteado) {
        $chute = (int) readline("Digite um número entre 1 e 100: ");
        $tentativas++;

        if ($chute == $sorteado) {
            print("🎉 Você acertou em $tentativas tentativas!\n\n");

            //quanto mais rápido acertar, mais pontos ganha
            $pontos = max(10 - ($tentativas - 1));
            $pontuacao += $pontos;

            print("Você ganhou $pontos pontos nesta rodada!\n\n");

        } else {
            if ($chute > $sorteado) {
                print("💰  Valor muito alto!\n");
            } else {
                print("😭  Valor muito baixo!\n");
            }
        }
    }
}

print("=== Fim do jogo! ===\n");
print("Sua pontuação total foi: $pontuacao pontos.\n");

?>
