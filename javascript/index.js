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