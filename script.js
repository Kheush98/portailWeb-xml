document.addEventListener('DOMContentLoaded', function() {
    let admin = document.querySelectorAll('.admin');
    let visitor = document.querySelectorAll('.visitor');

    if (localStorage.getItem('role') === 'admin') {
        visitor.forEach(element => {
            element.setAttribute('class', 'bg-rose-900')
            element.setAttribute('hidden', true);
        });

        admin.forEach(element => {  
            element.removeAttribute('hidden');
        });
    } else {
        admin.forEach(element => {
            element.setAttribute('hidden', true);
        });

        visitor.forEach(element => {
            element.removeAttribute('hidden');
        });
    }
})

// var cont=0;
// function loopSlider(){
//   var xx= setInterval(function(){
//         switch(cont) {
//             case 0:{
//                 $("#slider-1").fadeOut(400);
//                 $("#slider-2").delay(400).fadeIn(400);
//                 $("#sButton1").removeClass("bg-rose-700");
//                 $("#sButton2").addClass("bg-rose-700");
//                 cont=1;
//                 break;
//             }
//             case 1:{
//                 $("#slider-2").fadeOut(400);
//                 $("#slider-1").delay(400).fadeIn(400);
//                 $("#sButton2").removeClass("bg-rose-700");
//                 $("#sButton1").addClass("bg-rose-700");
//                 cont=0;
//                 break;
//             }
//         }
//     },8000);

// }

// function reinitLoop(time){
//     clearInterval(xx);
//     setTimeout(loopSlider(),time);
// }

// function sliderButton1(){
//     $("#slider-2").fadeOut(400);
//     $("#slider-1").delay(400).fadeIn(400);
//     $("#sButton2").removeClass("bg-rose-700");
//     $("#sButton1").addClass("bg-rose-700");
//     reinitLoop(4000);
//     cont=0
// }
    
// function sliderButton2(){
//     $("#slider-1").fadeOut(400);
//     $("#slider-2").delay(400).fadeIn(400);
//     $("#sButton1").removeClass("bg-rose-700");
//     $("#sButton2").addClass("bg-rose-700");
//     reinitLoop(4000);
//     cont=1
// }

// $(window).ready(function(){
//     $("#slider-2").hide();
//     $("#sButton1").addClass("bg-rose-700");
    
//     loopSlider();
// });
