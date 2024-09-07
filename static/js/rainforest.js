// animations.js
document.addEventListener("DOMContentLoaded", function() {
    animated = document.getElementById('main');
    const paragraphs = animated.querySelectorAll('p');
  
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
      const words = text.split(' ');
      for (let word of words) {
        var span = "<span class='letter-container'>";
        for (let letter of word) {
          const delay = (Math.random() * 1).toFixed(2); // Random delay between 0 and 2 seconds
          span += `<span style="animation-delay: ${delay}s;">${letter}</span>`;
        }
        span += '<span class="space"> </span>'
        span += '</span>';
        console.log(span);
        innerHTML += span;
      }
      p.innerHTML = innerHTML;
      }

  });