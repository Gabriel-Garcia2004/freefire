<svelte:options tag="outside-matches" />

<script>
  import { onMount } from "svelte";

  export let url;
  export let id;

  let data;

  const params = {
    method: "GET",
    mode: "cors",
    cache: "default",
  };

  onMount(() => {
    fetch(`/wp-json/outside/v1/match/${id}`, params)
      .then(function (response) {
        return response.json();
      })
      .then(function (json) {
        data = json;
        console.log('data', data);
      })
      .catch((err) => {
        console.log(err);
      });
  });
</script>

<main>
  <section class="live">
    {#if data}
      {#if data.transmission}
        <div class="live__container">
          <h2 class="live__title">TRANSMISSÃO</h2>
          {@html data.embed }
        </div>
      {/if}
    <div class="live__box">
      <h2 class="live__subtitle">BOOYAH!</h2>
      {#each data.jumps as jump}
      <div class="live__results" style={`background-image: url('${jump.map.image}')`}>
        <div class="live__results-box">
          <h3>{jump.booyah.name}</h3>
          <p><b>Mapa:</b> {jump.map.name}</p>
        </div>
        <div class="arrow-right"></div>
        <img
          src={jump.booyah.image}
          alt={jump.booyah.name}
          width="50px"
          height="50px"
          class="live__img"
        />
      </div>
      {/each}
    </div>
    {/if}
  </section>
</main>
'

<style>
  .live {
    background-color: #fff;
    display: grid;
    grid-template-columns: 1fr minmax(200px, 400px);
    grid-template-areas: "live result";
    gap: 20px;
  }
  .live__container {
    grid-area: "live";
    border-radius: 5px;
  }
  .live__video {
    width: 700px;
    height: 450px;
  }
  .live__box {
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    grid-area: "result";
    border-right: solid 5px #fff;
    border-left: solid 5px #fff;
    width: 100%;
  }
  .live__results {
    background-color: #a89e9e;
    display: grid;
    padding: 7px;
    border: solid 5px #fff;
    border-radius: 10px;
    grid-template-columns: 1fr 10px 60px;
    justify-content: center;
    align-items: center;
  }
  .live__results-box {
    background-color: white;
    width: 1fr;
    padding: 15px 20px;
  }
  .live__results div p, .live__results div h3 {
    margin: 2px 0;
  }
  .live__subtitle {
    margin: 0;
    padding: 30px;
    padding-left: 4px;

    color: #ff6900;
    background-color: #fff;
  }
  .live__title {
    color: #ff6900;
    margin: 0;
    padding: 30px;
    padding-left: 5px;
    color: #ff6900;
    background-color: #fff;
  }
  .live__img {
    border-radius: 50%;
    display: grid;
    align-self: center;
    justify-self: center;
    max-width: 50px;
  }
  .arrow-right {
    width: 0; 
    height: 0; 
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-left: 12px solid white;
    position: relative;
    left: -5px;
    right: 5px;
  }

  @media (max-width: 900px) {
    .live__video {
      width: 100%;
      height: 180px;
    }
    .live {
      display: flex;
      flex-direction: column;
    }
  }
</style>
