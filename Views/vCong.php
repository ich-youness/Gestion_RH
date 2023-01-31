<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace employe</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
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
        <!--<div id="mg"><img width="150px" src="conge-icone.png" alt="piw"></div>-->
        <br>
    
         <img src="Views/img/solde-icone.png" alt="profil-logo">
        <img src="Views/img/demande-icone.png" alt="calendr-logo">
        
        <br><div id="men">
        <a href="index.php?action=sold_cng">Solde conge</a>
        <a href="index.php?action=dmdConge.html">Demande conge</a>
       
    </div>
    </div>
</body>
<style>/* @font-face {
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
    margin-top:-19px;
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
    /* display: flex;
    justify-content: center;
    align-items: center;
    margin-right:20%;
    padding-top:20px; */
    /* font-size: 40px; */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right:20%;
    padding-top:20px;

}


header ul li{
    /* float: right; */
    /* list-style: none; */
    /* margin-left: 250px; */
    /* margin-top: 40px;
    font-size: 25px;
    padding-left: 30%; */
    /* width: 250px; */
    /* float: right; */
    list-style: none;
    margin-left: 160px;
    margin-top: 40px;
    font-size: 29px;
    padding-left:10%;
    /* width: 250px; */

}

#menu ul li a:hover{
    color: #98d5e7;
}
header ul li a{
    padding-left:20px;
}

#main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("Views/img/backgrd.png");
    background-position: center;
    background-size: cover;
    height: 109vh;
    padding-top: 1%;
}
#main img{
    display: inline;
    height:175px;
    width:175px;
    /* padding-right: 24px; */
    margin-left: 25%;
    text-align:center;
    padding-top: 18%;
}


a{
    text-decoration: none;
}

#main a{
    font-size: 30px; 
    padding: 10px 174px;
    margin-right: -2px; 
    /* padding-left: 30px; */

}
/*#list{
     height: 100px; 
    

}*/
#main ul{
    /* width: 400px; */
    height: 30px;
    /* float: right; */
    margin-left: 200px;
    /* margin-bottom: 300px; */
    
}
#men{
    height: 100px;
    width:82%;
    margin-left: 95px ;
    padding-left:47px ;
    /* text-align: center; */
    /* padding: 0px 0px; */


}
#men a {
    padding-left: 198px ;
}
#main ul li{
    list-style: none;
    color:black;
    /* padding:0%; */
    /* margin:  -15% 0; */
    /* margin-right:350px ; */
    /* width: 250px; */
    /* height: 60px; */
    padding-top: 5px;
    background-color: #DABBBB;
    text-align: center;
    border-top: 1px solid black;
    border-bottom: 1px solid black;
    font-size: large;
    /* padding-right: ; */

}


/*#mg{
    width:150px; 
    height:150px;
    text-align: center;
    margin-top: -120px;
}
#mg img{
    width:330px;
    height: 190px;
    text-align: center;
}*/

/* ///////////////////////HEADER'S STYLE///////////////////////////////////////// */</style>
</html>