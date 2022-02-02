<svelte:options tag="outside-teams" />

<script>
  let teamName = "REAL E-SPORTS";
  import { onMount } from "svelte";

  export let url;
  export let id;

  let data = {
      "player_1": {
          "statistics": {
              "kill": "482",
              "deaths": "12"
          },
          "nickname": "Caju",
          "birthdate": "23/01/2001",
          "country": "BR",
          "previous_teams": [
              {
                  "team": 16932
              }
          ],
          "current_team": 16932,
          "tag": 593,
          "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
      },
      "player_2": {
          "statistics": {
              "kill": "482",
              "deaths": "12"
          },
          "nickname": "Caju",
          "birthdate": "23/01/2001",
          "country": "BR",
          "previous_teams": [
              {
                  "team": 16932
              }
          ],
          "current_team": 16932,
          "tag": 593,
          "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
      },
      "player_3": {
          "statistics": {
              "kill": "482",
              "deaths": "12"
          },
          "nickname": "Caju",
          "birthdate": "23/01/2001",
          "country": "BR",
          "previous_teams": [
              {
                  "team": 16932
              }
          ],
          "current_team": 16932,
          "tag": 593,
          "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
      },
      "player_4": {
          "statistics": {
              "kill": "482",
              "deaths": "12"
          },
          "nickname": "Caju",
          "birthdate": "23/01/2001",
          "country": "BR",
          "previous_teams": [
              {
                  "team": 16932
              }
          ],
          "current_team": 16932,
          "tag": 593,
          "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
      },
      "coach": {
          "statistics": {
              "kill": "482",
              "deaths": "12"
          },
          "nickname": "Caju",
          "birthdate": "23/01/2001",
          "country": "BR",
          "previous_teams": [
              {
                  "team": 16932
              }
          ],
          "current_team": 16932,
          "tag": 593,
          "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
      },
      "reservations": [
          {
              "statistics": {
                  "kill": "482",
                  "deaths": "12"
              },
              "nickname": "Caju",
              "birthdate": "23/01/2001",
              "country": "BR",
              "previous_teams": [
                  {
                      "team": 16932
                  }
              ],
              "current_team": 16932,
              "tag": 593,
              "cover": "http://localhost:10018/wp-content/uploads/2021/12/700e203c-93e9-7c00-9a9f-99dfa6d22c5c.jpg"
          }
      ],
      "shield": "http://localhost:10018/wp-content/uploads/2022/01/StudioOutside_192_192.png",
      "tag": 593,
      "hindsight": [
          {
              "championship": "LBFF 5",
              "position": "1"
          }
      ],
      "social": {
          "facebook": "",
          "instagram": "",
          "tiktok": "",
          "twitter": "",
          "youtube": "",
          "twitch": "",
          "website": ""
      },
      "ID": 16932,
      "name": "Free Agent",
      "image": "http://localhost:10018/wp-content/uploads/2022/01/xis-og-life.jpg",
      "tags": 593
  };

  const params = {
    method: "GET",
    mode: "cors",
    cache: "default",
  };

  onMount(() => {
    fetch(`/wp-json/outside/v1/teams/${id}`, params)
      .then(function (response) {
        return response.json();
      })
      .then(function (json) {
        data = json;
        console.log("data", data);
      })
      .catch((err) => {
        console.log(err);
      });
  });
</script>

<section class="teams">
  <div class="background">
    <img
      clas="teams__img"
      src="https://i.imgur.com/3iS2RZG.png"
      alt="Foto time Freefire"
    />
  </div>
  <div class="teams__icons">
    <h2 class="teams__title">
      {teamName}
    </h2>
  </div>
  <div class="teams__box">
    <div class="teams__container" />
    <div class="teams__container" />
    <div class="teams__container" />
    <div class="teams__container" />
    <div class="teams__container" />
    <div class="teams__container" />
  </div>
</section>

<style>
  .teams {
    background-color: #fff;
  }
  .background {
    background-color: #9e9292;
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
  .teams__title {
    color: #ff6900;
    font-size: 2rem;
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
  }
  .teams__container {
    background-color: #9e9292;
    height: 200px;
    width: 150px;
    margin: 10px;
  }
</style>
