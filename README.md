# LBAW

Apresentação do Projeto

O presente projeto consiste na especificação e desenvolvimento de um sistema de informação disponível através da Web para a gestão de inventário e requisições de um armazém. Os utilizadores podem requisitar ou reservar artigos conforme a sua disponibilidade no armazém que, após aprovação de um administrador, poderão ser entregues via correio ou em mão, nas mediações do armazém.

Os artigos são registados no sistema pelos Administradores e podem ser comprados ou alugados durante um período de tempo pelos Utilizadores, caso o armazém possua stock para tal. Os artigos requisitados podem ser entregues por correio/encomenda ou podem ser levantados pelos Utilizadores pessoalmente no armazém, sendo para isto necessária a aprovação de um Administrador. Há também a opção de reserva de artigos, sendo necessária uma antecedência de pelo menos 2 dias úteis.

Os Administradores estão responsáveis pela gestão do inventário existente, podendo adicionar, remover e editar artigos no sistema, assim como gerir as reparações destes. Para além disso, no caso de existirem múltiplas reservas para o mesmo artigo que se encontre indisponível (sem stock no armazém), a ordem de atribuição dessas reservas é decidida pelos administradores, podendo estes contactar os utilizadores através das informações pessoais das suas contas. Aos Administradores é dado acesso total aos dados dos utilizadores e de todos os artigos do sistema.

Existe também um Administrador Master, que tem as mesmas regalias e responsabilidades que os Administradores comuns, mas que pode também despromover Administradores a Utilizadores, tratando assim da gestão dos Administradores do sistema.

Os Visitantes não registados na aplicação apenas podem aceder e pesquisar os artigos que se encontram em stock no armazém. Após fornecerem os seus dados pessoais e a sua aplicação for aceite por um Administrador, tornam-se Utilizadores (Low-Level Users), que podem pesquisar por todos os artigos no sistema, comprar/requisitar artigos, fazer reservas e devolver artigos alugados ou para reparação.

O sistema disponibilizará aos Administradores um mapa de utilizações e reparações prévias de cada artigo e ainda um registo de todas as requisições, compras e reservas feitas por cada utilizador. Após a devolução ou compra de um artigo, os Utilizadores poderão avaliá-lo entre 0 e 5 estrelas e deixar uma crítica sobre este.

O objetivo principal do desenvolvimento será garantir as duas funcionalidades centrais: a gestão do inventário existente e a gestão de reservas e requisições feitas pelos utilizadores.

Na gestão do inventário existente, será necessária a implementação de funções de:

- criação, leitura, edição e remoção de artigos
- gestão de reparações dos artigos existentes

A gestão de reservas e requisições feitas pelos utilizadores requererá funções de:

- pesquisa de artigos
- requisição ou reserva de equipamento
- devolução de equipamento reservado para uso ou reparação


_Projeto desenvolvido no âmbito da unidade curricular Laboratório de Base de Dados e Aplicações Web_.
_3º ano, 2º Semestre - Mestrado Integrado em Engenharia Informática e Computação, Faculdade de Engenharia da Universidade do Porto_
_Anaís Dias_ | _João Soares_ | _João Ramos_ | _Mafalda Falcão_

