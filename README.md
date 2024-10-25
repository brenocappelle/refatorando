1. Single Responsibility Principle (SRP)
Antes: OrderController tinha a responsabilidade de processar o pedido e escolher a implementação de pagamento.
Depois: O OrderController agora apenas lida com a criação do pedido e delega o processamento do pagamento a um serviço de pagamento injetado, respeitando a responsabilidade única.
2. Open/Closed Principle (OCP)
Antes: O controlador precisava ser modificado para suportar novos métodos de pagamento (e.g., se fosse adicionado um novo método de pagamento, o controlador precisaria de lógica adicional).
Depois: Com a interface PaymentInterface, novas implementações de pagamento podem ser adicionadas sem modificar o controlador. O controlador está "aberto para extensão, mas fechado para modificação".
3. Liskov Substitution Principle (LSP)
Antes: Não havia uma interface comum para as classes de pagamento.
Depois: Tanto CreditCardPayment quanto PayPalPayment implementam a PaymentInterface, permitindo que sejam usadas de forma intercambiável no controlador, respeitando o princípio de substituição.
4. Interface Segregation Principle (ISP)
Antes: As classes de pagamento poderiam ter métodos que não eram relevantes para todas as implementações.
Depois: A PaymentInterface é pequena e específica, forçando as classes que a implementam a fornecer apenas a funcionalidade necessária, evitando métodos não utilizados.
5. Dependency Inversion Principle (DIP)
Antes: O OrderController instanciava diretamente as classes de pagamento, criando um acoplamento forte.
Depois: O controlador agora depende de uma abstração (PaymentInterface) em vez de dependências concretas. Isso facilita a injeção de dependências e torna o código mais flexível e testável.
