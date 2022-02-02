<!-- <svelte:options tag="outside-scoreboard" /> -->

<script>
    // let title = 'Liga de Brasileira de FreeFire';
    // let round = 'Rodada 1';
    // let versus = 'Grupo AxB';

//     import { onMount } from "svelte";

// export let url;
// export let id;

// let data;

// const params = {
//   method: "GET",
//   mode: "cors",
//   cache: "default",
// };

// onMount(() => {
//   fetch(`/wp-json/outside/v1/match/${id}`, params)
//     .then(function (response) {
//       return response.json();
//     })
//     .then(function (json) {
//       data = json;
//       console.log('data', data);
//     })
//     .catch((err) => {
//       console.log(err);
//     });
// });
    </script>
    
    <section class="scoreContainer">
        <div class="score">
            <p class="score__title">eu</p>
            <img class="score__img--stream" src="https://3.bp.blogspot.com/-SKceO6XYeUY/WDu1bUycFQI/AAAAAAAATgE/4vb1VFxiAQcK8Nx5aLIdqq3GSYn0Vdb7gCLcB/s1600/pesquisar-ou-encontrar-transmiss%25C3%25B5es-ao-vivo-no-youtube.gif" alt="Ao vivo">
            <img src="https://www.freefiremania.com.br/images/intz.jpg" alt="placar de Partida FreeFire" class="score__img">
            <div class="score__textBox">
                <p class="score__text">eu</p>
                <p class="score__text">eu</p>
            </div>
           
        </div>
        <div class="score">
            <p class="score__title">eu</p>
            <img class="score__img--stream" src="https://3.bp.blogspot.com/-SKceO6XYeUY/WDu1bUycFQI/AAAAAAAATgE/4vb1VFxiAQcK8Nx5aLIdqq3GSYn0Vdb7gCLcB/s1600/pesquisar-ou-encontrar-transmiss%25C3%25B5es-ao-vivo-no-youtube.gif" alt="Ao vivo">
            <img src="https://www.freefiremania.com.br/images/intz.jpg" alt="placar de Partida FreeFire" class="score__img">
            <div class="score__textBox">
                <p class="score__text">eu</p>
                <p class="score__text">eu</p>
            </div>
           
        </div>
        <div class="score">
            <p class="score__title">eu</p>
            <img class="score__img--stream" src="https://3.bp.blogspot.com/-SKceO6XYeUY/WDu1bUycFQI/AAAAAAAATgE/4vb1VFxiAQcK8Nx5aLIdqq3GSYn0Vdb7gCLcB/s1600/pesquisar-ou-encontrar-transmiss%25C3%25B5es-ao-vivo-no-youtube.gif" alt="Ao vivo">
            <img src="https://www.freefiremania.com.br/images/intz.jpg" alt="placar de Partida FreeFire" class="score__img">
            <div class="score__textBox">
                <p class="score__text">eu</p>
                <p class="score__text">eu</p>
            </div>
           
        </div>
        <div class="score">
            <p class="score__title">eu</p>
            <img class="score__img--stream" src="https://3.bp.blogspot.com/-SKceO6XYeUY/WDu1bUycFQI/AAAAAAAATgE/4vb1VFxiAQcK8Nx5aLIdqq3GSYn0Vdb7gCLcB/s1600/pesquisar-ou-encontrar-transmiss%25C3%25B5es-ao-vivo-no-youtube.gif" alt="Ao vivo">
            <img src="https://www.freefiremania.com.br/images/intz.jpg" alt="placar de Partida FreeFire" class="score__img">
            <div class="score__textBox">
                <p class="score__text">eu</p>
                <p class="score__text">eu</p>
            </div>
           
        </div>
    
    </section>
    
    <style>
        .scoreContainer{
            display: grid;
            grid-template-columns: repeat(4, 1fr)  ;
    
            gap: 10px;
    
        }
    .score{
        background-color: #9e9292;
        opacity: .9999;
        transition: .4s ease;
        border-radius: 5px;
        display: grid;
        grid-template-areas: 
        "title title title stream"
        "img img text text"
        "img img text text"
    
        ;
        padding: 0.625rem;
    }
    .score:hover{
        opacity: 1;
    }
    .score__title{
        grid-area: title;
        font-size: 1.5rem;
        font-weight: bold;
    }
    .score__img{
        grid-area: img;
        border-radius: 0.4375rem;
    }
    .score__textBox{
        grid-area: text;
    }
    .score__text{
        font-size: 1.3rem;
        font-weight: bold;
    
    }
    .score__img{
        display: grid;
        justify-self: center;
        max-width: 200px;
    }
    .score__img--stream{
        max-width: 50px;
        object-fit: contain;
        grid-area: stream;
    display: grid;
    align-self: center;
    }
    @media (min-width: 300px){
        .scoreContainer{
            grid-template-columns: 1fr 1fr  ;
    
        }
        
    }
    @media (max-width: 550px){
        .score{
        grid-template-areas: 
        "title  title stream"
        "img img img "
        "text  text text"
    
        ;
        padding: 0.625rem;
    }
    .score__text{
        text-align: center;
    }
    }
    @media (min-width: 700px){
        .scoreContainer{
            grid-template-columns: repeat(4, 1fr)  ;
    
        }
    }
    </style>