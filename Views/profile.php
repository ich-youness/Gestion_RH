<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace-empl-profile</title>
    <link rel="stylesheet" href="stylee.css">
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

    <div id="main1">
       <!-- <img src="Views/img/prof-pic.png" alt="profile"> -->
       <div id="li">
            <ul>
                    <li>Matricule: 5987</li>
                    <li>Nom: Zerhouni</li>
                    <li>Prénom: Ali</li>
                    <li>Adresse : BV Bahnini, El massira 2, Dakhla </li>
                    <li>Email Adresse : ZerhouniAli@onp.ma</li>
                    <li>Numero telephone: 0687555936</li>
                    <li>CIN : AG445662</li>
                    <li>Année de naissance : 27/09/1983</li>
                    <li>Département : service informatique</li>
                    <li>État civil : Marié</li>
                    <li>Nombre d'enfant : 2</li>
                    <li>Numéro à contacter en cas d'urgence : 0615482798</li>
            </ul>
        </div>

   </div>
</body>
</html>
<style>  /* @font-face {
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
    box-sizing: border-box;
    font-family: 'Pathway Gothic One', sans-serif;
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
    margin-left: 160px;
    margin-top: 40px;
    font-size: 29px;
    padding-left:10%;
    /* width: 250px; */

}
header ul li a{
    padding-left:20px;
}

#main1{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("Views/img/backgrd.png");
    background-position: center;
    background-size: cover;
    height: 109vh;
    padding-top: 1%;
    

}
/* #main1 img{
    display: inline;
    height:410px;
    width:470px;
    /* padding-right: 24px; */
    /* margin-left:80px;
    padding-top: 18%;
} */ 


a{
    text-decoration: none;
}

#main1 a{
    font-size: 40px; 
    margin:0px 75px;
    /* margin-right: 150px;  */

}
/*#list{
     height: 100px; 
    

}*/
#main1 ul{
    width: 470px;
    height: 33px;
    float: right;
    margin-right: 172px;
    /* margin-bottom: 300px; */
    
}
#main1 ul li{
    list-style: none;
    color:black;
    /* padding:0%; */
    /* margin:  -15% 0; */
    /* margin-right:350px ; */
    /* width: 250px; */
    /* height: 60px; */
    padding-top: 5px;
    background-color:#d2d2d2db;
    opacity: 3;
    text-align: center;
    border-top: 1px solid rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid #ffd8de12;
    font-size: large;

}

#li{
    height:360px;
    margin-top:146px;
    margin-left:-18%;
    /* padding-left: 980px; */
    /* width: 200px; */
}


/* ///////////////////////HEADER'S STYLE///////////////////////////////////////// */</style>