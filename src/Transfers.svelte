<svelte:options tag="outside-transfers" />

<script>
  import { onMount } from "svelte";

  let data = [
      {
          ID: 16936,
          player: {
              nickname: "Caju",
              image: "http://localhost:10018/wp-content/uploads/2022/01/juninxl-god.jpg"
          },
          de: {
              ID: 16932,
              name: "Free Agent",
              shield: "http://localhost:10018/wp-content/uploads/2022/01/StudioOutside_192_192.png"
          },
          para: {
              ID: 16932,
              name: "Free Agent",
              shield: "http://localhost:10018/wp-content/uploads/2022/01/StudioOutside_192_192.png"
          },
          status: "fechou",
          source: "https://google.com",
          date: "13/01/2022"
      }
  ];

  onMount(async () => {
    const res = await fetch(`/wp-json/outside/v1/transfers`);
    data = await res.json();

    console.log(data)
  });
</script>

<section class="capaMarket">
  <ul class="capaMarket__container">
    {#each data as transfer}
      <li class="capaMarket__user">
        <div class="capaMarket__player">
          <div class="capaMarket__userName">
            <img
              src={transfer.player.image}
              alt="Foto da Equipe - FreeFire"
              class="capaMarket__userImage"
            />
            <p class="capaMarket__userText">
              {transfer.player.nickname}
            </p>
          </div>
        </div>

        <div class="capaMarket__player">
          <img
            src={transfer.de.shield}
            alt={transfer.de.name}
            class="capaMarket__userImageTeam"
          />
          
          <div>
            <!--
              TODO:
                Usar ícones em ocasiões:
                  Fechou: hands-helping
                  Renovou: sync-alt
                  Negociando: business-time
                  Rumor: comment
                  Reserva: check-double
            -->
            {transfer.status}
          </div>

          <img
            src={transfer.para.shield}
            alt={transfer.para.name}
            class="capaMarket__userImageTeam"
          />
        </div>
        <div>
          Data: {transfer.date}
        </div>
        <a href="{transfer.source}">
          Ref.
        </a>
      </li>
    {/each}
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
