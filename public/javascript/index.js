const carouselImages = document.querySelectorAll('.carousel img')
const carouselIndicators = document.querySelectorAll(
  '.carousel-indicators button',
)
const prevButton = document.querySelector('.fa-angle-left')
const nextButton = document.querySelector('.fa-angle-right')
let currentIndex = 0

function showNextImage() {
  carouselImages[currentIndex].style.display = 'none'
  carouselIndicators[currentIndex].classList.remove('active')
  currentIndex = (currentIndex + 1) % carouselImages.length
  carouselImages[currentIndex].style.display = 'block'
  carouselIndicators[currentIndex].classList.add('active')
}

function showPreviousImage() {
  carouselImages[currentIndex].style.display = 'none'
  carouselIndicators[currentIndex].classList.remove('active')
  currentIndex =
    (currentIndex - 1 + carouselImages.length) % carouselImages.length
  carouselImages[currentIndex].style.display = 'block'
  carouselIndicators[currentIndex].classList.add('active')
}

// Asegúrate de que el primer elemento esté visible al cargar la página
carouselImages[currentIndex].style.display = 'block'
carouselIndicators[currentIndex].classList.add('active')

// Muestra la siguiente imagen automáticamente cada 3500 ms
setInterval(showNextImage, 3500)

// Agrega un click listener a cada indicador para cambiar manualmente la imagen
carouselIndicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    carouselImages[currentIndex].style.display = 'none'
    carouselIndicators[currentIndex].classList.remove('active')
    currentIndex = index
    carouselImages[currentIndex].style.display = 'block'
    carouselIndicators[currentIndex].classList.add('active')
  })
})

// Agrega click listeners a los botones de navegación
prevButton.addEventListener('click', showPreviousImage)
nextButton.addEventListener('click', showNextImage)

function torreDeHanoi(n, from, to, aux) {
  // Caso base: si solo queda un disco, lo movemos directamente al destino
  if (n === 1) {
      console.log(`Mover disco 1 de ${from} a ${to}`);
      return;
  }
  
  // Paso 1: Mover n-1 discos de 'from' a 'aux', usando 'to'
  torreDeHanoi(n - 1, from, aux, to);
  
  // Paso 2: Mover el disco restante de 'from' a 'to'
  console.log(`Mover disco ${n} de ${from} a ${to}`);
  
  // Paso 3: Mover los n-1 discos que estaban en 'aux' a 'to', usando 'from'
  torreDeHanoi(n - 1, aux, to, from);
}

// Llamada inicial para iniciar el juego con 3 discos
torreDeHanoi(3, 'A', 'C', 'B');