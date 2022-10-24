const btnCelular = document.getElementById('btnCelular');
const contraste = document.getElementById('botaoContraste');
const tamanhoFonte = document.getElementById('aumentoFonte');
const perfil = document.getElementById('perfil');

function toggleMenu(event){

    const nav = document.getElementById('nav');
    nav.classList.toggle('active');

    const active = nav.classList.contains('active');

    if(active === true){
        event.currentTarget.setAttribute('aria-expanded', 'true');
        event.currentTarget.setAttribute('aria-label', 'Fechar menu');
    }else{
        event.currentTarget.setAttribute('aria-expanded', 'false');
        event.currentTarget.setAttribute('aria-label', 'Abrir menu');
    }
}

// function togglePerfil(){
//     const ul = document.getElementById('menu2');
//     ul.classList.toggle('active');
// }

 function preto(){
    const body = document.querySelector('body');
//     const espacoContraste = document.getElementById('botaoContraste');
//     const aumentoFonte = document.getElementById('aumentoFonte');
//     const imgCont = document.getElementById('imgContraste');
//     const barraCont = document.getElementById('cabecalho');
//     const btnCelular = document.getElementById('btnCelular');
//     const menu = document.getElementById('menu');
//     const footer = document.getElementById('footer');
//     const form = document.getElementById('formulario');
//     const area = document.getElementById('area');
//     const box1 = document.getElementById('box1');
//     const box2 = document.getElementById('box2');
//     const box3 = document.getElementById('box3');
//     const box4 = document.getElementById('box4');
//     const box5 = document.getElementById('box5');
//     const box6 = document.getElementById('box6');
//     const box7 = document.getElementById('box7');
//     const box8 = document.getElementById('box8');
//     const prod1 = document.getElementById('prod1');
//     const prod2 = document.getElementById('prod2');
//     const prod3 = document.getElementById('prod3');
//     const imgPerfil = document.getElementById('imgPerfil');
//     const banner = document.getElementById('banner');
//     const addDoc = document.getElementById('addDoc');



//     imgCont.classList.toggle('active');
     body.classList.toggle('active');
//     espacoContraste.classList.toggle('active');
//     aumentoFonte.classList.toggle('active');
//     barraCont.classList.toggle('active');
//     btnCelular.classList.toggle('active');
//     menu.classList.toggle('active');
//     footer.classList.toggle('active');
//     form.classList.toggle('active');
//     area.classList.toggle('active');
//     box1.classList.toggle('active');
//     box2.classList.toggle('active');
//     box3.classList.toggle('active');
//     box4.classList.toggle('active');
//     box5.classList.toggle('active');
//     box6.classList.toggle('active');
//     box7.classList.toggle('active');
//     box8.classList.toggle('active');
//     prod1.classList.toggle('active');
//     prod2.classList.toggle('active');
//     prod3.classList.toggle('active');
//     imgPerfil.classList.toggle('active');
//     banner.classList.toggle('active');
//     addDoc.classList.toggle('active');

 }

  function aumenta(){
    const body = document.querySelector('body');
    const button = document.querySelector('button');
//     const perfil = document.getElementById('infoPerfil');
//     const commentperfil = document.getElementById('comentPerfil');
//     const nav = document.getElementById('menu');
//     const footer = document.getElementById('footer');
//     const btnCelular = document.getElementById('btnCelular');
    
     body.classList.toggle('aumenta');
//     perfil.classList.toggle('aumenta');
//     commentperfil.classList.toggle('aumenta');
//     nav.classList.toggle('aumenta');
     contraste.classList.toggle('aumenta');
     tamanhoFonte.classList.toggle('aumenta');
//     footer.classList.toggle('aumenta');
    button.classList.toggle('aumenta');
    tamanhoFonte.classList.toggle('muda');
//   btnCelular.classList.toggle('aumenta');
}

 btnCelular.addEventListener('click', toggleMenu);
//  perfil.addEventListener('click', togglePerfil);
 contraste.addEventListener('click', preto);
 tamanhoFonte.addEventListener('click', aumenta);
