document.addEventListener("DOMContentLoaded", () => {
    // Campo de senha principal
    const senha = document.getElementById('senha');
    const mostrarSenha = document.getElementById('mostrar_senha');

    mostrarSenha.addEventListener('click', () => {
        if (senha.type === "password") {
            senha.type = "text";
            mostrarSenha.src = "OlhoSenha.png"; // Ícone de "ocultar senha"
            mostrarSenha.alt = "Ocultar senha";
        } else {
            senha.type = "password";
            mostrarSenha.src = "OlhoSenha.png"; // Ícone de "mostrar senha"
            mostrarSenha.alt = "Mostrar senha";
        }
    });

    // Campo de confirmar senha
    const confirmarSenha = document.getElementById('confirmar_senha');
    const mostrarConfirmarSenha = document.getElementById('mostrar_confirmar_senha');

    mostrarConfirmarSenha.addEventListener('click', () => {
        if (confirmarSenha.type === "password") {
            confirmarSenha.type = "text";
            mostrarConfirmarSenha.src = "OlhoSenha.png"; // Ícone de "ocultar senha"
            mostrarConfirmarSenha.alt = "Ocultar senha";
        } else {
            confirmarSenha.type = "password";
            mostrarConfirmarSenha.src = "OlhoSenha.png"; // Ícone de "mostrar senha"
            mostrarConfirmarSenha.alt = "Mostrar senha";
        }
    });
});
