<script>
	let teamName = 'NOBRU'
	let player = 'BRUBO GOES DA SILVA'

	</script>
	
	
	<section class="teams">
	<div class="background">
	<img clas="team__img" src="https://i.imgur.com/3iS2RZG.png" alt="Foto time Freefire">
	</div>
	<div class="teams__icons">
		<h2 class="teams__title">
			{teamName}
		</h2>
		<p class="teams__player">{player}</p>
	</div>
	<div class="teams__box">
		<div class="team--team">
			<h3 class="teams__teams">
				TIME ATUAL
			</h3>
			<img class="teams__imgs" src="https://www.freefiremania.com.br/images/intz.jpg" alt="time de FreeFire">
		</div>
		<div class="team">
			<h3 class="teams__teams">
				TIMES
			</h3>
			<img class="teams__imgs" src="https://www.freefiremania.com.br/images/intz.jpg" alt="time de FreeFire">
			<img class="teams__imgs" src="https://www.freefiremania.com.br/images/intz.jpg" alt="time de FreeFire">
			<img class="teams__imgs" src="https://www.freefiremania.com.br/images/intz.jpg" alt="time de FreeFire">
			
		</div>
		
	</div>
	<h2 class="teams__news">
		RETROSPECTO
	</h2>
	<h2 class="teams__news">
		ÚLTIMAS NOTÍCIAS</h2>
	
	</section>
	
	
	<style>
	
	.teams{
		background-color: #fff;
	}
	.background{
		background-color: #9e9292;
		height: 200px;
		position: relative;
		display: grid;
		align-items: center;
		justify-items: center;
	}
	.background > img{
		max-width: 200px;
		object-fit: contain;
		position: absolute;
		top: 100px;
	
	}
	.teams__imgs{
		max-width: 100px;
		object-fit: contain;
		border-radius: 50%;
		padding: 8px;
		justify-self: center;
	}
	.teams__title, .teams__teams{
		color: #ff6900;
		font-size: 2rem;

		text-align: center;
	}
	.teams__player{
		color: #ff6900;
		font-size: 1rem;
		margin-bottom: 0;
		text-align: center;
	}
	.teams__icons{
		height: 50px;
		margin: 100px 0;
		display: grid;
		align-items: center;
		justify-content: center;
	
	}
	.teams__box{
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: space-around;
		
	}
	.team--team{
		display: grid;
		align-items: center;

	}
	.teams__news{
		width: 90%;
		margin: 0 auto;
		color: #ff6900;
		font-size: 2.2rem;
		padding: 10px;
	}
	</style>