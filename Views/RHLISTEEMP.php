<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH liste des employes</title>
    <link rel="stylesheet" href="style7.css">
</head>
<body>
    <header>
        <img src="Views/img/logo.png" alt="logo">
        <div id="menu">
            <ul>
                <li>Espace Gestionnaire RH</li>
                <li><a href="index.php?action=deconnexion">Deconnexion</a></li>
            </ul>
        </div>
    </header>
    <div id="main">
        <table class="content-table">
            <thead>
              <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>E-mail</th>
                <th>Telephone</th>
                <th>CIN</th>
                <th>Date de naissance</th>
                <th>Departement</th>
                <th>L'etat civil</th>
                <th>Nombre d'enfant</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>5987</td>
                <td>Zerhouni</td>
                <td>Ali</td>
                <td>EL MASSIRA 2 DAKHLA</td>
                <td>zerhouniali@onp.ma</td>
                <td>0687555936</td>
                <td>AB445562</td>
                <td>23/08/1983</td>
                <td>Service informatique</td>
                <td>marie</td>
                <td>2</td>
                <td><a href="">modifier</a></td>
              </tr>
              <tr >
                <td>5676</td>
                <td>salhi</td>
                <td>othmane</td>
                <td>OUED CHYEF DAKHLA</td>
                <td>salhiothmane@onp.ma</td>
                <td>0657468359</td>
                <td>OD64332</td>
                <td>19/10/1974</td>
                <td>Finance et Comptabilite</td>
                <td>marie</td>
                <td>4</td>
                <td><a href="">modifier</a></td>
              </tr>
              <tr>
                <td>7046</td>
                <td>jalili</td>
                <td>mokhtare</td>
                <td>HAY AMAL DAKHLA</td>
                <td>Jalilimokhtare@onp.ma</td>
                <td>0646566789</td>
                <td>OD48257</td>
                <td>24/11/1990</td>
                <td>Service informatique</td>
                <td>celibataire</td>
                <td>0</td>
                <td><a href="">modifier</a></td>
              </tr>
            </tbody>
          </table>
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
    /* color: white; */
    box-sizing: border-box;
    /* height: 109vh; */
    font-family: 'Pathway Gothic One', sans-serif;

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
    color: white;

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
    margin-left: 160px;
    margin-top: 40px;
    font-size: 29px;
    padding-left:10%;
    /* width: 250px; */

}
header ul li a{
    padding-left:20px;
    color: white;

}

#main{
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("Views/img/backgrd.png");
    background-position: center;
    background-size: cover;
    padding-top: 15%;
    text-align:center;
}
#main img{
    display: inline;
    height:100px;
    width:180px;
    /* padding-right: 24px; */
    margin: 0 100px;
    text-align:center;
}
a{
    text-decoration: none;
}




/* ///////////////////////HEADER'S STYLE///////////////////////////////////////// */

.content-table {
    border-collapse: collapse;
    margin: 32px 0;
    font-size: 0.9em;
    width: 400px;
    height: 90px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left: 13% ;
    color: black;

  }
  
  .content-table thead tr {
    background-color: #eeeeeea0;
    color: black;
    text-align: left;
    /* font-weight: bold; */
    width: 50px;
    
  }
  
  .content-table th,
  .content-table td {
    padding: 12px 15px;
    width: 90px;
  }
  
  .content-table tbody tr {
    background-color:#dddddd;
    /* width: 30px; */
  }
  
  .content-table tbody tr:nth-of-type(even) {
    background-color: #eeeeeea0;
  }
  
  .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #d48eaa;
  }
  
  .content-table tbody tr.active-row {
    font-weight: bold;
    /* color: #009879; */
  }
  
</style>