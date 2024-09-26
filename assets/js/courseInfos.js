import curso from "../json/json.js";

const querystringUrl = new URLSearchParams(window.location.search);
const videoID = querystringUrl.get('videoID');
const sectionCourseInfos = document.querySelector('.sectionCourseInfos');
let videoIDNum = Number(videoID);
const cursoEsp = curso.filter(cursoInfos => cursoInfos.id === videoIDNum);

console.log(cursoEsp)

sectionCourseInfos.innerHTML = `
            <div class="divImg">
                <img src="${cursoEsp[0].imagem}" alt="">
            </div>
            <div class="infosCourse">
                <h3>${cursoEsp[0].nome}</h3>
                <h4>${cursoEsp[0].canal}</h4>
                <span class="tecs">
                    <ul>
                        <li>${cursoEsp[0].linguagem} <i ${cursoEsp[0].linguagemIcon}</li></li>
                    </ul>
                </span>
            </div>

            <div class="actions">
                <button class="goToCourse">
                    <a href="${cursoEsp[0].link}">ir para o curso <i class="fa-solid fa-arrow-right"></i></a>
                </button>
                <button class="addFavorites"><i class="fa-regular fa-heart"></i></button>
            </div>

`;