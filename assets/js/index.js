// import curso from "../json/json.php";

// let menuFloat = document.querySelector('.menuFloat');
// let openMenu = document.querySelector('.open');
// let body = document.querySelector('body');

// openMenu.addEventListener('click', () => {
//     menuFloat.classList.toggle('active');
// })

// ///////////////////////////////////////////////////////////

// data.forEach(info => {
//     let videoItem = document.createElement('div');
//     videoItem.classList.add('courseItem');

//     videoItem.innerHTML =
// `
//     <a href="assets/pages/courseInfos.php?result=${data.id}">
//         <div>
//             ${data.linguagemIcon}<img class="courseImg" src="${data.imagem}" alt="">
//         </div>
//         <h3 class="courseName">${data.nome}</h3>
//         <span class="courseAutor">${data.canal}</span>
//     </a>
// `;

////////////////////////////////////////////////////////



let cursos = [];
let areaCoursers = document.querySelector('.areaCoursers');
let cursosCount = 1;

function mostrarCursos() {
    cursos.forEach(curso => {
        if (cursosCount <= 9) {
            let videoItem = document.createElement('div');
            videoItem.classList.add('courseItem');

            videoItem.innerHTML = `
            <a href="assets/pages/courseInfos.php?result=${curso[0]}">
                <div>
                    <img class="courseImg" src="${curso[3]}" alt="">
                    <span class="courseLesson">Aulas: ${curso[5]}</span>
                </div>
                <h3 class="courseName">${curso[1]}</h3>
                <span class="courseAutor">${curso[9]}</span>
            </a>
            `;

            areaCoursers.append(videoItem);
            cursosCount++;
        }
    })


}

function pegarCursos() {
    fetch('http://localhost/projetos/code-flix/assets/json/json.php')
        .then(response => response.json())
        .then(data => {
            cursos = data
            mostrarCursos()
            console.log(cursos)

        })
        .catch(erro => {
            console.error('erro', erro)
        })
}


pegarCursos()

















