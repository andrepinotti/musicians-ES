# PROJETO ESTÁGIO ENTER SCIENCE  

# Tecnologias e Ferramentas usadas

Back-end: PHP e Laravel; <br>
Front-end: HTML, CSS, Bootstrap; <br>
Banco de dados: MYSQL e phpMyAdmin;

#  💡Observações 

Instale o composer em suas dependências (caso necessário)

Clone o link do repositório em sua máquina
```shell
    git clone https://github.com/andrepinotti/musicians-ES/
````
Acesse o diretório "musician-ES" onde estarão todos as dependências em laravel 
```shell
    cd musician-ES/
```
Em seu servidor MYSQL crie um banco de dados chamado 'events'.
Assim como o banco de dados, dei o nome 'events' para a tabela.

```sql
  CREATE TABLE events (
    id bigint AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    name_musician VARCHAR(100),
    cache double,
    date_event DATE,
    adress VARCHAR(255)
);
````
Com tudo pronto rodaremos o seguinte comando que irá gerar uma página a partir do link: <strong>http://127.0.0.1:8000</strong>

```shell
  php artisan serve
```
# 📕 Enredo

Implementei um sistema com cadastro do nome do contratante, nome do artista, cache, endereço e data. A página inicial do sistema começa com a apresentação com uma grande frase estampada e uma das partes do desafio, onde coloco em duas linhas o nome do artista com mais eventos no momento e a média do cachê dele. Temos no header a aba de cadastro e listagem. A página de listagem contém todos os registros de eventos sendo possível alterar, levando para uma página de edição e excluir o evento. Sobre os artistas, na página de cadastro e edição há um campo select, o qual coloquei 10 artistas do MPB para representar esse projeto.

#  🎯 Meus desafios

Primeiramente, meu maior desafio foi sair da caixinha novamente e fazer uma revisão novamente de Laravel, onde fazia um ano que não usava esse framework, apenas a linguagem PHP. Meu calendário de provas está muito corrido e foi muito difícil conciliar os dois, porém hoje 10/04 finalizarei a entrega tendo dado o melhor de mim. Desde já peço desculpas, de última enfrentei problemas no update nas dependências da pasta vendor do laravel, o sistema está dando erro 500, muito provável após umas revisões que aconteceu algum problema na hora do que subi tudo. Estou muito feliz por ter encerrado esse desafio e agradeço a todos vocês pela oportunidade. Peço desculpas desde já e se necessário estarei comprometido em mostrar o meu sistema nas minhas dependências, o que não ocorreu nenhum erro.

 
