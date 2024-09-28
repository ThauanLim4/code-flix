let menuFloat = document.querySelector('.menuFloat');
let openMenu = document.querySelector('.open');

openMenu.addEventListener('click', () => {
    menuFloat.classList.toggle('active');
})



// let btnAddToFavorites = document.querySelector('.addToFavorites');
// let areaCoursersFavorited = document.querySelector('.areaCoursersFavorited')

// let cursos = [];

// btnAddToFavorites.addEventListener('click', () => {
//     console.log('adicionado aos favoritos')
//     btnAddToFavorites.querySelector('i').classList.replace('fa-regular', 'fa-solid')
//     const getUrlResult = new URLSearchParams(window.location.search);
//     let result = getUrlResult.get('result');

//     fetch('http://localhost/projetos/code-flix/assets/json/json.php')
//     .then(response => response.json())
//     .then(data => {
//         cursos = data
//         console.log(cursos)
//         let returnCursoFav = cursos.filter(cursoFav => cursoFav[0] == result)
//         console.log(returnCursoFav);

//         let videoItem = document.createElement('div');
//         videoItem.classList.add('courseItem');
    
//         videoItem.innerHTML = `
//         <a href="assets/pages/courseInfos.php?result=${returnCursoFav[0]}">
//             <div>
//                 <img class="courseImg" src="${returnCursoFav[3]}" alt="">
//                 <span class="courseLesson">Aulas: ${returnCursoFav[5]}</span>
//             </div>
//             <h3 class="courseName">${returnCursoFav[1]}</h3>
//             <span class="courseAutor">${returnCursoFav[9]}</span>
//         </a>
//         `;
    
//         areaCoursersFavorited.append(videoItem);
//     })
//     .catch(erro => {
//         console.error('erro', erro)
//     })
// })
