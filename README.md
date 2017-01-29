# Resposta do desafio Dojo-CE 2017

Resposta para o desafio do Dojo realizado no dia 27-01-2017 no auditório da Ângulo Digital em Fortaleza - CE, organizado por https://github.com/dorianneto


# O Desafio
Se os números de 1 a 5 fossem escritos em palavras: um, dois, três, quatro, cinco, então teríamos utilizado 2 + 4 + 4 + 6 + 5 = 21 letras no total.

Se todos os números de 1 até 1000 fossem escritos em palavras, quantas letras nós teríamos utilizado?

## Como instalar e realizar seus testes

Caso você não tenha o composer instalado no sistema, [veja aqui] como instalar.

```sh
$ git clone https://github.com/joao-gsneto/desafio-dojoCE-27-01-2017.git desafio
$ cd desafio
$ php composer install
$ php composer test
$ php composer calcula -- --numero 1000
```

## Encontre falhas ou prove o resultado
Se você encontrou algum teste falho ou alguma prova de que o algorítmo está correto, fique a vontade para contribuir com o código.


## Bibliotecas usadas
Esse projeto desafio foi desenvolvido usando as seguintes tecnologias

* [PHP7] - Recursos do PHP 7 em diante (Não vai funcionar em PHP antigos)
* [Composer] - Gestor de dependências e gerenciador dos scripts de execução e testes.
* [phpunit] - Testes por PHPUnit.
* [Commando] - Classe simples para gerenciar argumentos na linha de comando.
  
   [veja aqui]: <http://getcomposer.org>
   [PHP7]: <http://php.net>
   [Composer]: <http://getcomposer.org>
   [phpunit]: <https://github.com/sebastianbergmann/phpunit>
   [Commando]: <https://github.com/nategood/commando/>
