# Estudos do Design Pattern Decorator com PHP

### Gerando o autoload do composer
```
composer install
```

Para realizar o teste com o servidor embutido do PHP.
```
php -S localhost:8080
```

## Detalhamento dos processo

1. A interface SorveteInterface determina as regras para a classe abstrata Sorvete.
2. A classe abstrata Sorvete implementa SorveteInterface e a base para o sorvete.
3. A classe SorveteSabor implementa a classe abstrata Sorvete e estabelece o encapsulamento do objeto Sorvete.
4. A classe SorveteNapolitano implementa a classe Sorvete, para impelemtar a quantidade de bolas de sorvete e seu preço base de R$ 2,50.
5. As classes Creme, Chocolate e Morango implementa a classe SorveteNapolitando, para que assim possamos montar nosso sorvete, sendo que cada um tem seu respectivo preço e quantidade de bolas de sorvete.
6. A classe Napolitano instancia a classe SorveteNapolitano e o objeto Sorvete é passado como parâmetro para as classes Creme, Chocolate e Morando. No término do processo temos um objeto Sorvete "napolitando" de 3 bolas de sorvete e o custo de R$ 7,00.
7.  Por último no arquivo index.php apenas fazemos uso do autoloader do composer e instanciamos a classe Napolitano para que o resultado seja retornado ao usuário :) .


Com isso conseguimos alterar os objetos sem afetar a classe como um todo e obter o objeto desejado  (sorvete napolitano).

## Resultado
```
Sorvete Napolitano
> Quantidade: 0
> R$ 2.5
Sorvete Napolitano
> Quantidade: 3
> R$ 7
```

***Observação:***
Este é um repositório com uma única finalidade que é o estudo do pattern, caso tenha algo incorreto ou incoerente por favor abra um PR.

****Obrigado :D****

