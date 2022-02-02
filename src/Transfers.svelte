<svelte:options tag="outside-transfers" />

<script>
  // import Fa from "svelte-fa/src/fa.svelte";

  // import { faAngleDoubleRight } from "@fortawesome/free-solid-svg-icons";
  let team = "Nobru";
  let team2 = "Fechou";
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
  fetch(`/wp-json/outside/v1/transfers/${id}`, params)
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

<section class="capaMarket">
  <!-- <a href="./Scoreboard.svelte" target="_blank" rel="noopener noreferrer">eu</a> -->
  <ul class="capaMarket__container">
    <li class="capaMarket__user">
      <div class="capaMarket__player">
        <div class="capaMarket__userName">
          <img
            src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
            alt="Foto da Equipe - FreeFire"
            class="capaMarket__userImage"
          />
          <p class="capaMarket__userText">{team}</p>
        </div>
        <img
          src="https://www.freefiremania.com.br/images/intz.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
      </div>
      <!-- <Fa
        icon={faAngleDoubleRight}
        color="#ff6900"
        style="font-weight: 900"
        size="4em"
      /> -->

      <div class="capaMarket__player">
        <img
          src="https://www.freefiremania.com.br/images/vivo-keyd.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
        <div class="capaMarket__userName">
          <p class="capaMarket__userText">{team2}</p>
        </div>
      </div>
    </li>
    <li class="capaMarket__user">
      <div class="capaMarket__player">
        <div class="capaMarket__userName">
          <img
            src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
            alt="Foto da Equipe - FreeFire"
            class="capaMarket__userImage"
          />
          <p class="capaMarket__userText">{team}</p>
        </div>
        <img
          src="https://www.freefiremania.com.br/images/intz.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
      </div>
      <!-- <Fa
        icon={faAngleDoubleRight}
        color="#ff6900"
        style="font-weight: 900"
        size="4em"
      /> -->

      <div class="capaMarket__player">
        <img
          src="https://www.freefiremania.com.br/images/vivo-keyd.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
        <div class="capaMarket__userName">
          <p class="capaMarket__userText">{team2}</p>
        </div>
      </div>
    </li>
    <li class="capaMarket__user">
      <div class="capaMarket__player">
        <div class="capaMarket__userName">
          <img
            src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
            alt="Foto da Equipe - FreeFire"
            class="capaMarket__userImage"
          />
          <p class="capaMarket__userText">{team}</p>
        </div>
        <img
          src="https://www.freefiremania.com.br/images/intz.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
      </div>
      <!-- <Fa
        icon={faAngleDoubleRight}
        color="#ff6900"
        style="font-weight: 900"
        size="4em"
      /> -->

      <div class="capaMarket__player">
        <img
          src="https://www.freefiremania.com.br/images/vivo-keyd.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
        <div class="capaMarket__userName">
          <p class="capaMarket__userText">{team2}</p>
        </div>
      </div>
    </li>
    <li class="capaMarket__user">
      <div class="capaMarket__player">
        <div class="capaMarket__userName">
          <img
            src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg"
            alt="Foto da Equipe - FreeFire"
            class="capaMarket__userImage"
          />
          <p class="capaMarket__userText">{team}</p>
        </div>
        <img
          src="https://www.freefiremania.com.br/images/intz.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
      </div>
      <!-- <Fa
        icon={faAngleDoubleRight}
        color="#ff6900"
        style="font-weight: 900"
        size="4em"
      /> -->

      <div class="capaMarket__player">
        <img
          src="https://www.freefiremania.com.br/images/vivo-keyd.jpg"
          alt="Foto da Equipe - FreeFire"
          class="capaMarket__userImageTeam"
        />
        <div class="capaMarket__userName">
          <p class="capaMarket__userText">{team2}</p>
        </div>
      </div>
    </li>
  </ul>
</section>

<style>
  .capaMarket {
    max-width: 100%;
    width: 100%;
    background-color: #fff;
  }
  .capaMarket__container {
    list-style: none;
    display: flex;
    flex-direction: column;
    padding: 0;
    transition: 0.4s ease;
    gap: 15px;
  }
  .capaMarket__user:hover {
    background-color: #9e9292;
    opacity: 1;
  }
  .capaMarket__user {
    display: flex;
    align-items: center;
    justify-content: space-around;
    opacity: 0.9999;
    background-color: #a89e9e;
    border-radius: 7px;
    gap: 5px;
  }
  .capaMarket__player {
    display: flex;
    justify-content: space-around;
    flex: none;
    max-width: 300px;
    gap: 7px;
  }
  .capaMarket__userImage {
    max-width: 65px;
    object-fit: contain;
    border-radius: 50%;
  }
  .capaMarket__userImageTeam {
    max-width: 65px;
    object-fit: contain;
  }
  .capaMarket__userName {
    display: flex;
    align-items: center;
    gap: 7px;
  }
  .capaMarket__userText {
    font-size: 1.45rem;
    font-weight: bold;
  }
  @media (min-width: 500px) {
    .capaMarket__player {
      flex: 1;
      gap: 0px;
    }
  }
</style>
