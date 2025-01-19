
function manageAOS() {
    if (window.innerWidth < 768) {  
        AOS.init({
            disable: true 
        });
    } else {
        AOS.init({
            disable: false 
        });
    }
}


document.addEventListener('DOMContentLoaded', function() {
    manageAOS();
});


window.addEventListener('resize', manageAOS);
