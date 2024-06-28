<div class="carousel">
  <img src="../images/dog7.jpg" alt="images 1">
  <img src="../images/dog2.jpg" alt="images 2">
  <img src="../images/dog3.jpg" alt="images 3">
  <img src="../images/dog4.jpg" alt="images 4">
  <img src="../images/dog5.jpg" alt="images 5">
  <img src="../images/dog6.jpg" alt="images 6">
  <div class="carousel-indicators">
    <button class="active"></button>

    <button></button>
    <button></button>
    <button></button>
    <button></button>
    <button></button>
  </div>
  <div class="slider-navigation">
    <i class="fas fa-angle-left"></i>
    <i class="fas fa-angle-right"></i>
  </div>
</div>
<script>
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
</script>