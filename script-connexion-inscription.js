//declaration
const btn__humberger = document.querySelector('.btn__humberger'),
       navBar = document.querySelector('.navbar ul'),
       flash__new = document.querySelectorAll('.flash__new'),
       flash = document.querySelector('.flash');


//script anim bouton menu
btn__humberger.addEventListener('click',()=>{
    btn__humberger.classList.toggle('btn__active');    
    navBar.classList.toggle('navbar__active');    
 
});


//script flash header
let AutoPlayFlashHeader;
let count = 0;
function SaladingFlashHeader(){

flash__new[count].classList.remove('actif')
if (count < flash__new.length-1){
    count ++;
} else{
    count = 0;
}
flash__new[count].classList.add('actif');
};

AutoPlayFlashHeader = setInterval(SaladingFlashHeader,6000);

// stop auto play slider when mouseover
flash.addEventListener('mouseover',()=>{
clearInterval( AutoPlayFlashHeader);
});

//start auto play slading again when mouseout
flash.addEventListener('mouseout',()=>{
AutoPlayFlashHeader = setInterval(SaladingFlashHeader,6000);
});
