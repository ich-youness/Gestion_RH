<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- <link rel="stylesheet" href="demandemuta.css"> -->
</head>
<body>
    <header>
        <img src="Views/img/RHONP_lastversion.png" alt="logo">
        <div id="menu">
            <ul>
                <li>Espace Employe</li>
                <li><a href="index.php?action=deconnexion">Deconnexion</a></li>
            </ul>
        </div>
    </header>
    <div id="main">
        <div class="form">
        <form action="index.php?action=pdf2" method="post">

            <h1>Formulaire</h1>
            <label>Raisons de la demande de mutation: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <label for="a">oui</label><input type="radio" name="ab" id="a">
            <label for="b">non</label><input type="radio" name="ab" id="b"><br>
            <input placeholder="Prenom" type="text">
            <input placeholder="Matricule" type="text">
            <input placeholder="Grade" type="text">
            <input placeholder="Echelle" type="text">
            <input placeholder="Echelon" type="text">
            <input placeholder="Telephone" type="text">
            <input placeholder="Diplome" type="text">
            <input placeholder="Etablissement" type="text"><br>
            <input type="submit" id="btn" name="soumettre">
        
        </div>
    </div>
</body>
</html>
<style>
    /* @font-face {
font-family: 'Cormorant Garamond Medium';
font-style: normal;
font-weight: normal;
src: local('Cormorant Garamond Medium'), url('CormorantGaramond-Medium.woff') format('woff');
} */
@import url('https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap');

*{
    padding: 0;
    margin:0;
    width: 100%;
    height: 100%;
    color: white;
    font-family: 'Pathway Gothic One', sans-serif;
    /* box-sizing: border-box; */
    /* height: 109vh; */
    
}
body{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("Views/img/backgrd.png");
    background-position: center;
    background-size: cover;
    /* height: 109vh; */
    padding-top: 1%;

}
header {
    position:absolute;
    top: 0; left: 0; right: 0;
    background: none;
    height: 110px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
    /* margin-right:90px; */

}
header img{
    width: 160px;
    float: left;
    height: 160px;
    /*margin-bottom: 40px;*/
}
#menu{
    margin-left: 140px;
}
header ul{
    /* float: right; */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right:20%;
    padding-top:20px;
    /* font-size: 40px; */

}
header ul li{
    /* float: right; */
    list-style: none;
    /* margin-left: 250px; */
    margin-top: 40px;
    font-size: 25px;
    padding-left: 30%;
    /* width: 250px; */

}
header ul li a{
    padding-left:20px;
    text-decoration: none;
}


/* ///////////////////////HEADER'S STYLE///////////TEMPLATE////////////////////////////// */

#main{
   /* height: 50%; */
   height:60px ;
   width: 100;
    padding-top: 10%;
    /* background-color: red; */
    /* text-align:center; */
    
}
.form{
    width: 550px;
    height: 477px;
    background: #D9D9D9;
    position: absolute;
    top: 95px;
    left: 337px;
    border-radius: 15px;
    padding: 25px;
    text-align: center;

}


.form h1{
    width: 530px;
    height: 45px;
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
    color: #4B5469;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    margin: 20px 5px;
    
    /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
}
.form input[type="radio"], .form label{
    width: 13px;
    height:13px;
    color:#4B5469;
    font-size:20px;
}
.form input:focus{
    outline: none;
}

::placeholder{
    color: #4B5469;

    /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
}

#btn{
    width: 155px;
    height: 34px;
    background: #4B5469;
    border: none;
    margin-top: -1px;
    margin-right: 20px;
    font-size: 25px;
    border-radius: 15px;
    cursor: pointer;
    color: #fff;
    font-weight: bold;
    transition: 0.4s ease;
    text-decoration: none;
}

#btn:hover{
    background: #98d5e7;
    color: #4B5469;
}

</style>