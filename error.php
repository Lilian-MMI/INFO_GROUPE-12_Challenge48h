<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Poppins&display=swap');

    * {
      box-sizing: border-box;
    }

    html,
    body {
      margin: 0;
      height: 100%;
      width: 100%;
      display: flex;
      background-color: lightcyan;
    }

    .error_section {
      width: 40%;
      min-width: 300px;
      background-color: whitesmoke;
      margin: auto;
      padding: 1rem;
      border-radius: .5rem;
      box-shadow: 0px 10px 23px -6px rgba(0, 0, 0, 0.25);
      -webkit-box-shadow: 0px 10px 23px -6px rgba(0, 0, 0, 0.25);
      -moz-box-shadow: 0px 10px 23px -6px rgba(0, 0, 0, 0.25);
    }

    .error_div_content {
      height: calc(100% - 150px - 32px);
    }

    .error_div_content>h1 {
      font-family: 'Playfair Display', serif;
      color: rgba(0, 0, 0, 0.75);
      text-align: center;
      text-decoration: underline;
    }

    .error_div_content>h2 {
      font-family: 'Poppins', sans-serif;
      color: rgba(0, 0, 0, 0.75);
      font-size: 14px;
      text-align: center;
    }


    .logo_background {
      height: 150px;
      width: auto;
      background: no-repeat center/50% url("https://i.ibb.co/fdnJC2s/logo.jpg");
      background-size: contain;
    }
  </style>
</head>

<body>
  <!--
    https://futureboy.us/stegano/decinput.html
  -->

  <section class="error_section">
    <div class="logo_background"></div>
    <div class="error_div_content">
      <h1>Agent utilisateur non reconnu !</h1>
      <h2>Tu peux toujours admirer notre <b>logo...</b></h2>
    </div>
  </section>
  <script>
    function decrypt(str) {
      console.log(atob(str))
    }
  </script>
</body>

</html>