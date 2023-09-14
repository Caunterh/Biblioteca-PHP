import random

sorteio = random.randint(1, 7)

filmes = {
    1: "Head Count",
    2: "Censor",
    3: "Post Mortem",
    4: "The Wind",
    5: "As Faces do Demonio",
    6: "Impetigore Heranca Maldita",
    7: "Last Night in Soro"
}

with open("o que assistir.txt", "w") as arquivo:
    for chave, filme in filmes.items():
        if sorteio == chave:
            um = ("------------------------------------\n    O que Vamos Assistir?\n")
            texto = (f"\n Numero sorteado: {sorteio}\n Filme escolhido: {filme}.")
            dois = ("\n------------------------------------")
            arquivo.write(um)
            arquivo.write(texto)
            arquivo.write(dois)




