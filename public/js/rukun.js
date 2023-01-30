const flips = document.querySelectorAll('.card-rukun');

flips.forEach(flip => {
    flip.addEventListener('click', () => {
      flip.classList.toggle('isflipped');
    });
  })