(() => {
  if(document.querySelector('.hero-video video')) {
    const video = document.querySelector('.hero-video video');
    video.addEventListener('canplaythrough', () => {
      video.play();
      video.closest('.hero-video').classList.add('show');
    });
  }
})();
