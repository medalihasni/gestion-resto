<html>
  <head>
    <title>creer un compte</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      fieldset{margin:auto;
        padding:auto;
        width:rgb(255, 0, 0);px;
      }
      html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      background-image: url("x.jfif");


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
      color: Teal;

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
      input[type=radio] {
      display: none;
      }
      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: Teal;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=text], input[type=Email],input[type=password] {
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
      background: Teal;
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <h1><i><b>Création d'un compte </b></i></h1>
      <form action="/">

        <hr>
         <div align="center"> Remplir ce formulaire svp</div>
        <hr>
        <fieldset>
          <legend><b>vos coordonnees</b></legend>
          <div class="item">
            <div class="account-type">
              <input type="radio" value="none" id="radioOne" name="account" checked/>
              <label for="radioOne" class="radio">Mr</label>
              <input type="radio" value="none" id="radioTwo" name="account" />
              <label for="radioTwo" class="radio">Mme</label>
              <input type="radio" value="none" id="radioThree" name="account" />
              <label for="radioThree" class="radio">Mlle</label> <br> <br>



Nom:<input id="nom" type="text" name="nom"  placeholder="nom"required /> <br> <br>
Prenom:<input id="prenom" type="text" name="prenom"  placeholder="Prenom"required /> <br> <br>
Tel :  <input type="number" name="tel" id="tel" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" placeholder="telephone" required/><br> <br>
Email: <input type="Email" name="email" id="email" placeholder="email"required /> <br> <br>
MDP: <input type="password" name="mdp1" id="mdp1" placeholder="Mot De Passe"required /> <br> <br>
Confirmer MDP: <input type="password" name="mdp2" id="mdp2" placeholder="Confirmer Mot De Passe"required /> <br>
          </div>
      </fieldset>
      <br>
          <button type="submit" href="/">S'Inscrire</button>
      </form>
    </div>
  </body>
</html>
