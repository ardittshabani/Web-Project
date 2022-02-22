let sliders = document.getElementsByClassName('slide'),
    index = 0;

document.getElementsByTagName('body')[0].addEventListener('click',function(event){
    sliders[index].classList.remove('active');
    sliders[index].classList.add('not-active');

    
    index++;
    if (sliders.length == index) index = 0;

    sliders[index].classList.add('active');
    sliders[index].classList.remove('not-active');
})