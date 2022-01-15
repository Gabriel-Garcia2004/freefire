<!-- <script>
	import Fa from 'svelte-fa/src/fa.svelte'


import { faAngleDoubleRight } from '@fortawesome/free-solid-svg-icons'
 let team = "Nobru";
 let team2 = "Fechou";

</script>

<section class="capaMarket">
	<a href="./Scoreboard.svelte" target="_blank" rel="noopener noreferrer">eu</a>
	<ul class="capaMarket__container">
		<li class="capaMarket__user">
			<div class="capaMarket__player">
				<div class="capaMarket__userName">
					<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImage">
					<p class="capaMarket__userText"> {team} </p>
				</div>
				<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
			</div>
			<Fa icon={faAngleDoubleRight} 
			color="#ff6900"
			style="font-weight: 900"
			size="4em"/>

			<div class="capaMarket__player">
				<img src="https://www.freefiremania.com.br/images/vivo-keyd.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
				<div class="capaMarket__userName">
					<p class="capaMarket__userText"> {team2} </p>
				</div>
			
			</div>
		</li>
		<li class="capaMarket__user">
			<div class="capaMarket__player">
				<div class="capaMarket__userName">
					<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImage">
					<p class="capaMarket__userText"> {team} </p>
				</div>
				<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
			</div>
			<Fa icon={faAngleDoubleRight} 
			color="#ff6900"
			style="font-weight: 900"
			size="4em"/>

			<div class="capaMarket__player">
				<img src="https://www.freefiremania.com.br/images/vivo-keyd.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
				<div class="capaMarket__userName">
					<p class="capaMarket__userText"> {team2} </p>
				</div>
			
			</div>
		</li>
		<li class="capaMarket__user">
			<div class="capaMarket__player">
				<div class="capaMarket__userName">
					<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImage">
					<p class="capaMarket__userText"> {team} </p>
				</div>
				<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
			</div>
			<Fa icon={faAngleDoubleRight} 
			color="#ff6900"
			style="font-weight: 900"
			size="4em"/>

			<div class="capaMarket__player">
				<img src="https://www.freefiremania.com.br/images/vivo-keyd.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
				<div class="capaMarket__userName">
					<p class="capaMarket__userText"> {team2} </p>
				</div>
			
			</div>
		</li>
		<li class="capaMarket__user">
			<div class="capaMarket__player">
				<div class="capaMarket__userName">
					<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImage">
					<p class="capaMarket__userText"> {team} </p>
				</div>
				<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
			</div>
			<Fa icon={faAngleDoubleRight} 
			color="#ff6900"
			style="font-weight: 900"
			size="4em"/>

			<div class="capaMarket__player">
				<img src="https://www.freefiremania.com.br/images/vivo-keyd.jpg" alt="Foto da Equipe - FreeFire" class="capaMarket__userImageTeam">
				<div class="capaMarket__userName">
					<p class="capaMarket__userText"> {team2} </p>
				</div>
			
			</div>
		</li>
	</ul>
</section>

<style>
	.capaMarket{
		max-width: 100%;
		width: 100%;
		background-color: #fff;

	}
	.capaMarket__container{
		list-style: none;
		display: flex;
		flex-direction: column;
		padding: 0;
		transition: .4s ease ;
		gap: 15px;
	}
	.capaMarket__user:hover{	
		background-color: #9e9292;
		opacity: 1;
	}
	.capaMarket__user{
		display: flex;
		align-items: center;
		justify-content: space-around;
		opacity: .9999;
		background-color: #a89e9e;
		border-radius: 7px;
		gap: 5px;

	}
	.capaMarket__player{
		display: flex;
		justify-content: space-around;
		flex: none;
		max-width: 300px;
		gap: 7px;
	}
	.capaMarket__userImage{
		max-width: 65px;
		object-fit: contain;
		border-radius: 50%;

	}
	.capaMarket__userImageTeam{
		max-width: 65px;
		object-fit: contain;

	}
	.capaMarket__userName{
		display: flex;
		align-items: center;
		gap: 7px;
	}
	.capaMarket__userText{
		font-size: 1.45rem;
		font-weight: bold;
	}
	@media (min-width: 500px) {
	.capaMarket__player{
	flex: 1;
    gap: 0px;
	}
	}
</style> -->




<script>

</script>

<section class="live">
<div class="live__container">
	<h2 class="live__title">TRANSMISSÃO</h2>
	<iframe class="live__video"  src="https://www.youtube.com/embed/DtOZFNjMrBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="live__box">
	<h2 class="live__subtitle">BOOYAH!</h2>
	<div class="live__results">
		<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="live__img">
	</div>
	<div class="live__results">
		<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="live__img">
	</div>
	<div class="live__results">
		<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="live__img">
	</div>
	<div class="live__results">
		<img src="https://www.freefiremania.com.br/images/intz.jpg" alt="Foto da Equipe - FreeFire" class="live__img">
	</div>
</div>

</section>

<style>
.live{
	background-color: #fff;
	display: grid;
	grid-template-columns: 3fr  minmax(200px, 400px);
	grid-template-areas: 'live  result';
	gap: 20px;
}
.live__container{
	grid-area: 'live';
	border-radius: 5px;
}
.live__video{
	width: 100%;
	height: 70vh;
	max-width: 100%;
	max-height: 100%;
	min-width: 70vw;
}
.live__box{
	border-radius: 5px;
	display: flex;
	flex-direction: column;
	grid-area: 'result';
	border-right: solid 5px #fff;
	border-left: solid 5px #fff;
	width: 100%;
}
.live__results{
	
	background-color: #a89e9e ;
	display: grid;
	padding: 10px;

	border: solid 5px #fff
}
.live__subtitle{
    margin: 0;
    padding: 30px;

		color: #ff6900;
		background-color: #fff;
}
.live__title{
	color: #ff6900;
    margin: 0;
    padding: 30px;
		color: #ff6900;
		background-color: #fff;
}
.live__img{
	border-radius: 50%;
	display: grid;
	align-self: center;
	justify-self: end;
	max-width: 50px;
}
@media (max-width: 900px)
{
.live{
	grid-template-areas: 'live'
	'results';
}
}
</style>