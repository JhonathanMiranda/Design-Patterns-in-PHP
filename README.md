# Padrões de Projeto em PHP

Este repositório contém alguns exemplos de implementações de padrões de projeto (Design Patterns) em PHP. Esses exemplos foram utilizados como material de apoio para a apresentação sobre o tema, realizada através da comunidade [PHP Manaus](https://phpmanaus.com.br/) em 01/2026.

[Slides da apresentação](https://www.canva.com/design/DAG-yF4YhyE/w9N6gJgxOlkMD65mQyiR3g/edit?utm_content=DAG-yF4YhyE&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton)

## Padrões Abordados

### 1. Fábrica Abstrata

**Tipo:** Padrão criacional

**Exemplo levantado:** São mostradas três fábricas de móveis, onde cada uma constroi móveis em um estilo artístico diferente.

### 2. Adaptador

**Tipo:** Estrutural

**Exemplo levantado:** Adaptamos um cubo para a interface de um círculo, de forma que possamos verificar se ele cabe em um buraco redondo.

### 3. Builder

**Tipo:** Criacional

**Exemplo:** São mostrados três *builders* diferentes, onde cada uma constroi residências com materiais diferentes. Ainda assim, todos eles podem ser utilizados pelo mesmo diretor.

### 4. Iterador

**Tipo:** Comportamental

**Exemplo:** Criamos dois iteradores diferentes para a mesma coleção (*array*), onde o que as diferencia é o tamanho do salto a cada iteração.

### 5. Observador

**Tipo:** Comportamental

**Exemplo:** Apresentamos um cenário onde três pessoas se registram para serem notificados da chegada de diferentes produtos em três livrarias.

## Estrutura do repositório

Cada padrão está alocado em seu próprio diretório, contendo:
- `index.php` - Arquivo executável, que representa o "cliente" da nossa estrutura
- As demais classes, interfaces e outras entidades relativas a implementação, organizadas em diferentes diretórios

Para executar cada exemplo, basta executar o arquivo `index.php` utilizando o PHP (i.e.: `php index.php`).

## Referências

Todos os cenários utilizados para exemplificar os padrões foram baseados nos exemplos do site [Refactoring Guru](https://refactoring.guru/design-patterns).

#### Observação

Nenhuma LLM (a.k.a. IA) foi utilizada durante o desenvolvimento do código deste projeto.
