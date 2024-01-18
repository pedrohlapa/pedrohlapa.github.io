// Carrossel de imagem

document.addEventListener("DOMContentLoaded", function() {
    let currentSlide = 0;
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide-img');
    const slideWidth = slides[0].clientWidth; // Largura de uma imagem

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        const transformValue = -slideWidth * currentSlide + 'px';
        slider.style.transform = 'translateX(' + transformValue + ')';
    }

    setInterval(nextSlide, 7000); // Altere o intervalo conforme necessário
}); 

// Fim do Carrossel




//Modal

const openModalButton = document.querySelector("#open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade"); 

const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
};

[openModalButton, closeModalButton, fade].forEach((el) => {
    el.addEventListener("click", () => toggleModal());
});

// Fim do Modal


// Adicione um evento de clique a cada imagem de mesa
const mesas = document.querySelectorAll('.mesas img');

mesas.forEach(mesa => {
  mesa.addEventListener('click', function() {
    const mesaSelecionada = mesa.alt; // Obtém o número da mesa clicada
    const dataReserva = document.querySelector('[name="data-reserva"]').value; // Obtém a data da reserva

    // Armazene a mesa e a data em campos ocultos no formulário
    
    document.querySelector('#mesa').value = mesaSelecionada;
    document.querySelector('#data').value = dataReserva;
  });
});


// Obtém a div img-escolhida
const imgEscolhida = document.querySelector('.img-escolhida');

// Adiciona um evento de clique a todas as imagens da mesa
const mesaImagens = document.querySelectorAll('.mesas img');
mesaImagens.forEach((mesa) => {
    mesa.addEventListener('click', () => {
        // Quando uma mesa é clicada, exibe a div img-escolhida
        imgEscolhida.style.display = 'block';

        // Obtém o atributo src da mesa clicada
        const mesaSrc = mesa.getAttribute('src');

        // Atualiza o atributo src da imagem na div img-escolhida
        const imgMesaEscolhida = document.getElementById('img-mesa-escolhida');
        imgMesaEscolhida.src = mesaSrc;

        imgEscolhida.scrollIntoView({ behavior: 'smooth' });
    });
});