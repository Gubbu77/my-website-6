<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
    
</head>
<body>
    <div class="wrapper" id="top">
        
        <header>
            <div class="navbar"  >

                <a href="index.php">HOME</a>
                <a href="">WORKS</a>
                <a href="about.php">ABOUT</a>
                <a href="#">GAMESIDE</a>
                <div class="menu">
                    <select class="select" name="links" onchange="window.location.href=this.value;">
                        <option value="index.php">HOME</option>
                        <option value="">WORKS</option>
                        <option value="about.php">ABOUT</option>
                        <option value="">GAME SIDE</option>
                        
                    </select>
                </div>
            </div>
            
        </header>
    </div>


<!-- style -->
    <style>
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

@media  screen and (max-width:420px) {
    
    /*  navbar */
   

    .wrapper header div.navbar{
        padding: 3px;
    }

    .wrapper header div.navbar a{
       display: none;

    }

}

@media  screen and (min-width:420px){
    .menu{
        display: none;
    }
}


.wrapper header{

    
    padding: 5px;

}
.wrapper header .navbar{
    
    border: 1px solid;
    border-radius: 7px;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: rgb(255, 255, 255);
}

.wrapper header .navbar a{
    text-decoration: none;
    margin-top: 3px;
    font-family: sans-serif;
    font-size: 14px;
    color: rgb(48, 48, 48);
    text-align: center;
    transition: 0.2s ease-in-out;
}

.wrapper header .navbar a:hover{
    
    color: rgb(49, 176, 255);
}
.menu{
    width: 100%;
    text-align: center;
   
}
.select{
    background-color: rgb(70, 70, 70);
    color: rgb(255, 255, 255);
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    padding: 3px;
    outline: none;
    text-align: center;
    
  
}

.select option{
    position:absolute;
    color: rgb(236, 236, 236);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 10px; 
      
}


    </style>

</body>
</html>