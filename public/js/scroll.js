window.addEventListener('load', () => {

    const scrollButton = document.querySelector('.scroll-down');
    const targetSection = document.querySelector('.target-section');
  
    scrollButton.addEventListener('click', function() {
      window.scrollTo({
        top: targetSection.offsetTop,
        behavior: 'smooth'
      });

    });

});