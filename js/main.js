const typedText = document.querySelector(".autotext");
const cursorpointer = document.querySelector(".cursor");

const text = ["Python", "JavaScript", "Web Designing", "Web Development"];
const typingdelay1 = 200;
const erasingdelay1 = 200;
const newLetterdelay1 = 2000;
let index = 0;
let charIndex = 0;

document.addEventListener("DOMContentLoaded", () => {
  if (text.length) {
    setTimeout(type, newLetterdelay1);
  }
});

function type() {
  if (charIndex < text[index].length) {
    typedText.textContent += text[index].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingdelay1);
  } else {
    setTimeout(erase, newLetterdelay1);
  }
}

function erase() {
  if (charIndex > 0) {
    typedText.textContent = text[index].substring(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, erasingdelay1);
  } else {
    index++;
    if (index >= text.length) {
      index = 0;
    }
    setTimeout(type, typingdelay1 + 1000);
  }
}



// Facts counter
$('[data-toggle="counter-up"]').counterUp({
  delay: 10,
  time: 1000
});

// end 


// slider 

$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:1000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})

// end 


// copy button 

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}