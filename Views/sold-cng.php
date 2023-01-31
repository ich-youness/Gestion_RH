<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Employe</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    <header>
        <img src="Views/img/logo.png" alt="logo">
        <div id="menu">
            <ul>
                <li>Espace Employe</li>
                <li><a href="index.php?action=deconnexion">Deconnexion</a></li>
            </ul>
        </div>
    </header>
    <div id="main">
        <table class="content-table">
            <thead>
              <tr>

                <th>Solde de congé</th>
                <th>Solde consommé</th>
                <th>Solde restant d’année dernière</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>40 jours</td>
                <td>20 jours</td>
                <td>15 jours</td>
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
    /* height:186px;
    width:290px; */
    /* margin-right:50px; */
    /* float: left; */
    width: 160px;
    float: left;
    height: 160px;
    /* padding-top: 15px; */
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
    margin: 32px 0 0 24px;
    font-size: 0.9em;
    width: 79%;
    height: 90px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left: 116px ;
    color: black;

  }
  
  .content-table thead tr {
    background-color: #eeeeeea0;
    color: black;
    text-align: center;
    /* font-weight: bold; */
    width: 50px;
    
  }
  
  .content-table th,
  .content-table td {
    padding: 14px 121px;
    width: 90px;
  }
  .content-table td{
    width: 10px;
    text-align: center;
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