
<script>
    let teamName = 'REAL E-SPORTS'
    </script>
    
    
    <section class="teams">
    <div class="background">
    <img clas="teams__img" src="https://i.imgur.com/3iS2RZG.png" alt="Foto time Freefire">
    </div>
    <div class="teams__icons">
        <h2 class="teams__title">
            {teamName}
        </h2>
    </div>
    <div class="teams__box"> 
        <div class="teams__container"></div>
        <div class="teams__container"></div>
        <div class="teams__container"></div>
        <div class="teams__container"></div>
        <div class="teams__container"></div>
        <div class="teams__container"></div>
    </div>
    
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
    .teams__title{
        color: #ff6900;
        font-size: 2rem;
        
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
    .teams__container{
        background-color: #9e9292;
     height: 200px;
     width: 150px;
    margin: 10px;
    }
    
    </style>