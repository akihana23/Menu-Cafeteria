**Relatório do Projeto: Café Classique**  

**Objetivo do Projeto:**  
Desenvolver um **site responsivo para uma cafeteria fictícia**, demonstrando habilidades em:  
- **Front-end**: HTML5 semântico, CSS3 (Flexbox/Grid/Animações) e JavaScript (DOM, LocalStorage)  
- **Interatividade**: Carrinho de compras funcional, abas de cardápio dinâmicas e elementos colapsáveis  
- **Boas práticas**: Código organizado, acessível e compatível com dispositivos móveis  

---

### **Funcionalidades Implementadas**  

#### 1. **Hero Section (Página Inicial)**  
- **Efeito visual** com overlay escuro e imagem de fundo  
- Botão **"Ver Cardápio"** com rolagem suave até a seção  

#### 2. **Destaques**  
- Cards de produtos com:  
  - Badge "Mais vendido"  
  - Avaliação por estrelas (★)  
  - Preço formatado  
  - Efeito hover para destaque  

#### 3. **Cardápio Interativo**  
- **Abas por categoria** (Cafés, Doces, Salgados) usando JavaScript  
- Botões **"Adicionar"** que atualizam o carrinho em tempo real  

#### 4. **Carrinho de Compras**  
- **Armazenamento local** (LocalStorage) para persistência dos itens  
- **Modal** com:  
  - Lista de itens  
  - Cálculo automático do total  
  - Botões para remover itens ou finalizar compra  

#### 5. **Seção "Sobre Nós"**  
- Texto colapsável com animação CSS  
- Botão toggle (▼/▲) para expandir/recolher  

---

### **Tecnologias Utilizadas**  
| Área          | Tecnologias                                                                 |  
|---------------|-----------------------------------------------------------------------------|  
| **Front-end** | HTML5, CSS3 (Variáveis, Flexbox, Grid, Media Queries), JavaScript (ES6+)   |  
| **Design**    | Google Fonts (Montserrat), Paleta de cores terrosas (#6F4E37, #F5F0E6)     |  
| **Features**  | LocalStorage, Event Delegation, CSS Transitions/Animations                 |  

---

### **Desafios Superados**  
1. **Carrinho persistente**: Implementação do LocalStorage para salvar itens entre sessões  
2. **Responsividade**: Ajuste de layouts para mobile (abas do cardápio, modal do carrinho)  
3. **Gestão de eventos**: Uso de *event delegation* para elementos dinâmicos (itens do carrinho)  

---

### **Como o Projeto Funciona?**  
1. **Fluxo do Usuário**:  
   - Cliente navega pelo cardápio → Adiciona itens → Visualiza/edita no carrinho → Finaliza compra  
2. **Dados**:  
   - Itens ficam salvos localmente até o fechamento do pedido  
3. **Interações**:  
   - Todas as ações (abrir modal, filtrar categorias) são feitas sem recarregar a página  

---

### **Próximos Passos (Opcionais)**  
- **Back-end**: Integrar com PHP para enviar pedidos por e-mail  
- **Mais interações**: Animação ao adicionar itens ao carrinho  
- **Dark Mode**: Alternância de tema visual  

---

**Conclusão:**  
O projeto **Café Classique** serviu como um ótimo exercício para demonstrar:  
✔️ Domínio de **front-end moderno**  
✔️ Lógica JavaScript para **gerenciamento de estado** (carrinho)  
✔️ Preocupação com **UX** (feedback visual, responsividade)  

Código disponível no [GitHub Gist](https://gist.github.com/akihana23/f6b73bdf15fa21037e0ddbc3da8a4f36).  

--- 
