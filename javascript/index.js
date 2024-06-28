
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

carouselImages[currentIndex].style.display = 'block'
carouselIndicators[currentIndex].classList.add('active')

setInterval(showNextImage, 3500)

carouselIndicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    carouselImages[currentIndex].style.display = 'none'
    carouselIndicators[currentIndex].classList.remove('active')
    currentIndex = index
    carouselImages[currentIndex].style.display = 'block'
    carouselIndicators[currentIndex].classList.add('active')
  })
})