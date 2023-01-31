    <!-- <title>Webpage RHONP</title> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
<body>
<header>
      
     
          <img src="Views/img/RHONP_lastversion.png" alt="RHONP" /> 


      
  </header>
  <div class="main">
      <div class="content">
          <h1>Gestion RH <br><span>Office National Pêches</span></h1>
          
              <div class="form" >
                <form action="" method="post">
                  <h2>Connexion</h2>
                  <span class="Err"><?= isset($variables["erreur"]["User"]) ? $variables["erreur"]["User"] : "" ?> </span>
                  <span class="Err"><?= isset($variables["erreur"]["Login"]) ? $variables["erreur"]["Login"] : ""?> </span> 
                  <span class="Err"><?= isset($variables["erreur"]["PW"]) ? $variables["erreur"]["PW"] : "" ?> </span>
                  <input type="text" name="Login" placeholder="Entrer le matricule">
                  <input type="password" name="PW" placeholder="Entrer le mot de passe">
                  <button class="btn">se connecter</button>
                </form>
                  
              </div>
      </div>
  </div>



</body> 
</html>     
<style>
  @import url('https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family: 'Pathway Gothic One', sans-serif;
  box-sizing: border-box;
   
}

header {
  position: absolute;
  /* top: 0; left: 0; right: 0; */
  /*background: #fff;*/
  height: 110px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  /* z-index: 1000; */
  /* box-shadow: var(--box-shadow); */
  margin-top: -20px;
}
body{
    margin-top:-19px;
}
.main{
  width: 100%;
  background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("Views/img/backgrd.png");
  background-position: center;
  background-size: cover;
  height: 109vh;
  padding-top: 10%;
}



/*.navbar{
  width: 1200px;
  height: 30px;
  margin: auto;
}*/

img{
  width: 160px;
  float: left;
  height: 160px;
  margin-top: 35px;
  /*margin-bottom: 40px;*/
}


.content{
  width: 100%;
  height: auto;
  margin: 10% 0px;
  color: #fff;
  position: relative;
}

.content h1{
  /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
  font-size: 50px;
  padding-left: 80px;
  margin-top: 0%;
  letter-spacing: 2px;
}

.content span{
  color: #98d5e7;
}

.form{
  width: 357px;
  height: 391px;
  background: #D9D9D9;
  position: absolute;
  top: -85px;
  left: 803px;
  border-radius: 15px;
  padding: 25px;
  text-align: center;

}

.form h2{
  /* width: 220px; */
  /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
  text-align: center;
  color: #ffffff;
  font-size: 26px;
  background-color: #4B5469;
  border-radius: 15px;
  margin: 2px;
  /*font-weight: bold;*/
  padding: 8px;
}

.form input{
  width: 240px;
  height: 35px;
  background: transparent;
  border-bottom: 1px solid #4B5469;
  border-top: none;
  border-right: none;
  border-left: none;
  /*color: #4B5469;*/
  font-size: 15px;
  letter-spacing: 1px;
  margin-top: 30px;
  
  /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
}

.form input:focus{
  outline: none;
}

::placeholder{
  color: #343647;

  /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
}

.btn{
  width: 230px;
  height: 40px;
  background: #4B5469;
  border: none;
  margin-top: 60px;
  font-size: 25px;
  border-radius: 15px;
  cursor: pointer;
  /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
  color: #fff;
  font-weight: bold;
  transition: 0.4s ease;
  text-decoration: none;
}

.btn:hover{
  background: #98d5e7;
}



</style>
</body> 
