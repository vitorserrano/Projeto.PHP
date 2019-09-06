# ProjetoPHP

## Descrição

### CRUD de Postagens:
1. Cadastro de Postagens.
2. Edição de Postagens já cadastradas.
3. Remoção de Postagens já cadastradas.
4. Visualização de Postagens já cadastradas.

### Acesso:
1. Só é possível acessar o sistema via Login.
2. Caso o usuário não tenha um usuário, é possível cadastrar-se.
3. Se o usuário esquecer sua senha, é possível fazer a recuperação de senha, via confirmação de E-mail.

## Observações:
1. A conexão com o banco de dados, foi feita com uma função estática, pois assim a implementação nas classes controllers, fica mais fácil.
2. Também, foi inserido a seguinte linha de comando: array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
Isso serve para que caso seja adicionado alguma informação via banco de dados, para que os caracteres especiais inseridos
não fiquem com formatação incorreta.
3. Para realizar o uso do projeto corretamente, importar o arquivo de banco de dados MySQL dentro da pasta "DataBase", criar um banco de dados com o nome projeto - utf8_unicode_ci.
