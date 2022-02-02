<svelte:options tag="outside-players" />

<script>
  let teamName = "NOBRU";
  let player = "BRUBO GOES DA SILVA";

  import { onMount } from "svelte";

  export let url;
  export let id;

  let data;

  const params = {
    method: "GET",
    mode: "cors",
    cache: "default",
  };

  data = { 
    
    image:"https://i.imgur.com/3iS2RZG.png",statistics:{kill:"482",deaths:"12"},nickname:"Caju", playerName: "Joâo Victor Santana",birthdate:"23\/01\/2001",country:"BR",
    currentTeam:{imgTeam:"https://www.freefiremania.com.br/images/intz.jpg",nameTeam:"INTZ"},


    teams:[{urlimg:"https://www.freefiremania.com.br/images/intz.jpg"},{urlimg:"https://www.freefiremania.com.br/images/intz.jpg"} , {urlimg:"https://i.imgur.com/3iS2RZG.png"}]
  }
  // onMount(() => {
  //   fetch(`/wp-json/outside/v1/player/${id}`, params)
  //     .then(function (response) {
  //       return response.json();
  //     })
  //     .then(function (json) {
  //       data = json;
  //       console.log('data:', data);
  //     })
  //     .catch((err) => {
  //       console.log('error:', err);
  //     });
  // });
</script>

<main>

	<section class="teams">
	  <div class="background">
		<img
		  clas="team__img"
		  src="{data.image}"
		  alt="Foto time Freefire"
		/>
	  </div>
	  <div class="teams__icons">
		<h2 class="teams__title">
		 {data.nickname}
		</h2>
		<p class="teams__player">{data.playerName}</p>
	  </div>
	  <div class="teams__box">
		<div class="team--team">
		  <h3 class="teams__teams">TIME ATUAL</h3>
		  <img
			class="teams__imgs"
			src="{data.currentTeam.imgTeam}"
			alt="time de FreeFire"
		  />
		</div>
    {#if data.teams != []}
		<div class="team">
		  <h3 class="teams__teams">TIMES ANTERIORES</h3>
      <div class="teams__container-imgs">
        {#each data.teams as team}
		  <img
			class="teams__imgs"
			src="{team.urlimg}"
			alt="time de FreeFire"
		  /> 
      {/each}
    </div>
      
		</div>
    {/if}
	  </div>
	  <h2 class="teams__news">RETROSPECTO</h2>
	  <h2 class="teams__news">ÚLTIMAS NOTÍCIAS</h2>
	</section>
</main>

<style>
  .teams {
    background-color: #fff;
    width: 100vw;
    margin: 0 -2.5%;
  }
  .background {
    background: linear-gradient(to bottom,rgba(17,17,17,0) 0, rgba(17,17,17,0.7) 50%, rgba(17,17,17,1) 100%);;
    height: 200px;
    position: relative;
    display: grid;
    align-items: center;
    justify-items: center;
  }
  .background > img {
    max-width: 200px;
    object-fit: contain;
    position: absolute;
    top: 100px;
  }
  .teams__imgs {
    max-width: 100px;
    object-fit: contain;
    border-radius: 50%;
    padding: 8px;
    justify-self: center;
  }
  .teams__title,
  .teams__teams {
    color: #ff6900;
    font-size: 2rem;

    text-align: center;
  }
  .teams__player {
    color: #ff6900;
    font-size: 1rem;
    margin-bottom: 0;
    text-align: center;
  }
  .teams__icons {
    height: 50px;
    margin: 100px 0;
    display: grid;
    align-items: center;
    justify-content: center;
  }
  .teams__box {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    margin-bottom: 20px;
  }
  .team--team {
    display: grid;
    align-items: center;
  }
  .teams__news {
    width: 90%;
    margin: 0 auto;
    color: #ff6900;
    font-size: 2.2rem;
    padding: 10px;
  }
  .teams__container-imgs{
    display: flex;
  }
  @media (max-width: 400px) {
    .teams__imgs{
    padding: 2px;
  } 
  @media (max-width: 659px) and (min-width: 600px) {
  .teams{
			margin: 0  -3.3333333333% !important ;
		}}
  }
</style>
