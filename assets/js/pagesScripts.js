let buttonsFilter = document.querySelectorAll('.buttonCourse');

buttonsFilter.forEach( button =>{
    button.addEventListener('click', () =>{
        buttonsFilter.forEach(bt => bt.classList.remove('checked'));

        button.classList.add('checked');
    })
})