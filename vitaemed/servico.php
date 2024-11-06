<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serivços - VitaeMed</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header class="text-center py-3">
        <div class="container">
            <img src="./img/logo.png" class="img-fluid logo" alt="Logo">
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="servico.php">Clínica Médica</a>
                            <a class="dropdown-item" href="exames.php">Exames</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container my-4">
        <section id="servicos">
            <h2 class="text-center">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Clínica médica</h3>
                            <p>É a área da medicina que trata de pacientes adultos, atuando na prevenção de doenças e na promoção da saúde.</p>
                            <button class="showModalBtn btn">Agendar</button>

                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    
                                    <h4><img src="./img/zap.png" class="img-fluid zap">&nbsp; Faça pelo Whatsapp</h4>
                                    <p>Por Favor, cadastre-se para fazer o agendamento.
                                        Teremos todo o prazer em ajudar!</p>
                                    <form id="myForm">
                                        <div class="form-group">
                                            <label for="name">Nome:</label>
                                            <input type="text" id="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E-mail:</label>
                                            <input type="email" id="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Telefone:</label>
                                            <input type="tel" id="phone" class="form-control" pattern="\d{10,11}" placeholder="Somente números" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpf">CPF:</label>
                                            <input type="text" id="cpf" class="form-control" pattern="\d{11}" placeholder="Somente números, 11 dígitos" required>
                                        </div>
                                        <button type="submit" class="btn">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Cardiologia</h3>
                            <p>O médico cardiologista diagnostica e trata doenças cardíacas e do sistema circulatório.</p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Fisioterapia</h3>
                            <p>Diagnostica, previne e recupera pacientes com distúrbios cinéticos funcionais no corpo humano. </p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Ginecologia</h3>
                            <p>É a especialidade clínico-cirúrgica responsável pelo cuidado com a saúde da mulher.</p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Nutricionista</h3>
                            <p>É o profissional da área da saúde capacitado a atuar visando a segurança alimentar e a atenção dietética.</p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Psicologia</h3>
                            <p>É o estudo do comportamento e funções mentais. O psicólogo é o profissional que atua estudando a mente humana.</p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Mastologia</h3>
                            <p>Especialidade médica que estuda, previne, diagnostica e trata as doenças e alterações congênitas.</p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Oftalmologia</h3>
                            <p>
                                O médico oftalmologista é o especialista que acompanha as doenças relacionadas com os olhos e com a visão.</p>
                                <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Dermatologia</h3>
                            <p>Especialidade médica que previne e trata doenças e afecções relacionadas à pele, mucosas, cabelo e unha.</p>
                            <button class="showModalBtn btn">Agendar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Referências aos elementos
        const modal = document.getElementById('myModal');
        const closeModalBtn = document.querySelector('.close');
        const form = document.getElementById('myForm');
    
        // Mostra o modal quando qualquer botão é clicado
        document.querySelectorAll('.showModalBtn').forEach(button => {
            button.onclick = function() {
                modal.style.display = 'block';
            };
        });
    
        // Fecha o modal quando o botão "x" é clicado
        closeModalBtn.onclick = function() {
            modal.style.display = 'none';
        };
    
        // Fecha o modal quando o usuário clica fora dele
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
    
        // Manipulador do evento de envio do formulário
        form.onsubmit = function(event) {
            event.preventDefault(); // Evita o envio padrão do formulário
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const cpf = document.getElementById('cpf').value;
            
            alert(`Nome: ${name}\nE-mail: ${email}\nNúmero: ${phone}\nCPF: ${cpf}`); // Alerta com os dados inseridos
            modal.style.display = 'none'; // Fecha o modal
            form.reset(); // Reseta o formulário
        };
    </script>
</body>
</html>