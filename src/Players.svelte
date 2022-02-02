<svelte:options tag="outside-players" />

<script>
  import { onMount } from "svelte";

  export let url;
  export let id;

  let posts_data = [
      {
          id: 12911,
          title: {
              rendered: "Team Liquid revela reforços para Série B da LBFF 6"
          },
          excerpt: {
              rendered: "<p>Equipe estreia na competição hoje, à partir das 18 horas</p>\n",
          },
          data: "2021-08-31T18:53:44",
          slug: "team-liquid-revela-reforcos-para-serie-b-da-lbff-6",
          featured_image_src: "http://localhost:10018/wp-content/uploads/2021/08/elenco-team-liquid-lbff6-serieb.jpg"
    }
  ];

  let data = {
      "ID": "16931",
      "player_name": "João Santana",
      "image": "http://localhost:10018/wp-content/uploads/2022/01/juninxl-god.jpg",
      "statistics": {
          "kill": "482",
          "deaths": "12"
      },
      "nickname": "Caju",
      "birthdate": "23/01/2001",
      "country": "BR",
      "previous_teams": [
          {
              "ID": 16932,
              "name": "Free Agent",
              "shield": "http://localhost:10018/wp-content/uploads/2022/01/StudioOutside_192_192.png"
          }
      ],
      "current_team": {
          "ID": 16932,
          "name": "Free Agent",
          "shield": "http://localhost:10018/wp-content/uploads/2022/01/StudioOutside_192_192.png"
      },
      "tag": 593,
      "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
  };

  onMount(async () => {
    const res = await fetch(`/wp-json/outside/v1/player/${id}`);
    data = await res.json();

    const posts = await fetch(`/wp-json/wp/v2/posts?tags=${data.tag}`);
    posts_data = await posts.json();

    console.log('posts_data', posts_data);
  });
</script>

<main>

  <!-- TODO: Deve exibir a imagem data.cover na Capa do Perfil -->
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
		<p class="teams__player">
      {data.player_name}
    </p>
	  </div>
	  <div class="teams__box">
		<div class="team--team">
		  <h3 class="teams__teams">TIME ATUAL</h3>
		  <img
			class="teams__imgs"
			src={data.current_team['shield']}
			alt="time de FreeFire"
		  />
		</div>
    {#if data.previous_teams}
      <div class="team">
        <h3 class="teams__teams">TIMES ANTERIORES</h3>
        <div class="teams__container-imgs">
        {#each data.previous_teams as prev_team}
          <img
          class="teams__imgs"
          src={prev_team['shield']}
          alt="time de FreeFire"
          /> 
        {/each}
      </div>
        
      </div>
    {/if}
	  </div>
	  <!-- <h2 class="teams__news">RETROSPECTO</h2> -->
    {#if posts_data}
	    <h2 class="teams__news">ÚLTIMAS NOTÍCIAS</h2>
      <!-- TODO: Exibir as notícias -->
    {/if}
	</section>
</main>

<style>
  .teams {
    background-color: #fff;
    width: 100vw;
    margin: 0 -2.5%;
  }
  .background {
    background: linear-gradient(to bottom,rgba(17,17,17,0) 0, rgba(17,17,17,0.7) 50%, rgba(17,17,17,1) 100%);
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
