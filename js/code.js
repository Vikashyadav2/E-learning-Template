// const typedTextSpan3 = document.querySelector(".typed-text3");
// const cursor3 = document.querySelector(".cursor3");

// const words3 = ["Awesome", "Fun", "Cool", "Life", "Famous", "Weird"];
// const typingDelay3 = 200;
// const erasingDelay3 = 200;
// const newLetterDelay3 = 2000;
// let index3 = 0;
// let charIndex3 = 0;

// document.addEventListener("DOMContentLoaded", () => {
//     if (words3.length) {
//         setTimeout(type, newLetterDelay3);
//     }
// });

// function type() {
//     if (charIndex3 < words3[index3].length) {
//         typedTextSpan3.textContent += words3[index3].charAt(charIndex3);
//         charIndex3++;
//         setTimeout(type, typingDelay3);
//     } else {
//         setTimeout(erase, newLetterDelay3);
//     }
// }

// function erase() {
//     if (charIndex3 > 0) {
//         typedTextSpan3.textContent = words3[index3].substring(0, charIndex3 - 1);
//         charIndex3--;
//         setTimeout(erase, erasingDelay3);
//     } else {
//         index3++;
//         if (index3 >= words3.length) {
//             index3 = 0;
//         }
//         setTimeout(type, typingDelay3 + 1100);
//     }
// }
