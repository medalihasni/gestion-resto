<html>
<head>
<title>Reservation</title>
<style>
  fieldset{margin:auto;
  padding:auto;
  width:rgb(255, 0, 0);px;
}
html, body {
display: flex;
justify-content: center;
height: 100%;
background-color: Teal;
}
body, div, h1, form, input, p {
padding: 0;
margin: 0;
outline: none;
font-family: Roboto, Arial, sans-serif;
font-size: 16px;
color: #666;
}
h1 {
padding: 10px 0;
font-size: 32px;
font-weight: 300;
text-align: center;
color:#666;
}
p {
font-size: 12px;
}
hr {
color: #a9a9a9;
opacity: 0.3;
}
.main-block {
max-width: 1000px;
min-height: 460px;
padding: 10px 10px;
margin: auto;
border-radius: 5px;
border: solid 1px #ccc;
box-shadow: 1px 2px 5px rgba(0,0,0,.31);
background: #ebebeb;
}
form {
margin: 0 30px;
}
.account-type, .gender {
margin: 15px 0px;
}

input[type=text], input[type=number],input[type=date] {
width: 300px;
height: 36px;
margin: 13px 0 0 - 5px;
padding-left: 10px;
border-radius: 0 5px 5px 0;
border: solid 1px #cbc9c9;
box-shadow: 1px 2px 5px rgba(0,0,0,.09);
background: #fff;
}
button {
width: 100%;
padding: 10px 0;
margin: 10px auto;
border-radius: 5px;
border: none;
background: Teal;
font-size: 14px;
font-weight: 600;
color: #fff;
}
button:hover {
background: #26a9e0;
}
</style>
</head>
<body>
   <div class="main-block">
  <h1><i><b>Reservation d'une table </b></i></h1>
  <form action="/">
    <hr>
     <div align="center"> Réservez en ligne en remplissant ce formulaire

</div> <hr>
     <fieldset>
       <legend><b>votre table souhaitée</b></legend> <br>
       nbre de place:<input type="number" name="nbre" id="nbre" min="1" max="6" required> <br><br>
à quelle date vous allez venir: <input type="date" name="date_r"id="date_r" required><br> <br>
</fieldset>
<button type="submit" href="/">Reserver</button>
</form>
</div>
</body>
</html>
