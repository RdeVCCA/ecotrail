// animations.js
document.addEventListener("DOMContentLoaded", function() {
    const paragraphs = document.querySelectorAll('p');
  
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateText(entry.target);
          observer.unobserve(entry.target); // Unobserve the element after animating
        }
      });
    }, {
      threshold: 0.1 // Trigger when at least 10% of the target is visible
    });
  
    paragraphs.forEach(p => {
      observer.observe(p); // Observe each paragraph
    });
  
    function animateText(p) {
      let innerHTML = '';
      const text = p.textContent;
      for (let letter of text) {
        if (letter === ' ') {
          innerHTML += '<span class="space"> </span>';
        } else {
          const delay = (Math.random() * 2).toFixed(2); // Random delay between 0 and 2 seconds
          innerHTML += `<span style="animation-delay: ${delay}s;">${letter}</span>`;
        }
      }
      p.innerHTML = innerHTML;
    }
  });
  