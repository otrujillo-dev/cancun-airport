const toggleFaqs = document.querySelectorAll('div.faq-items > div > h3');
if(toggleFaqs){
    toggleFaqs.forEach((toggleFaq) => {
        toggleFaq.addEventListener('click', () => {
            
            const parentDiv = toggleFaq.parentNode;
                  parentDiv.classList.toggle('hidden');
                  console.log(parentDiv);
        });
    });
}

const toggleMenuButton = document.getElementById('toggleMenu');
if(toggleMenuButton){
    toggleMenuButton.addEventListener('click', function() {     
        const body = document.body;     
        body.classList.toggle('open');
     });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(event) {
        event.preventDefault(); // Evita el salto instantáneo
        
        const targetId = this.getAttribute('href');
        if (targetId.length > 1) { // Verifica que haya algo después de #
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth' // Desplazamiento suave
                });
            }
        }
    });
});
