<!DOCTYPE html>
<html>
<head>
  <title> Contact Us </title>
  <base target="_blank">
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="css/global.css">
  <style>
    /* flexbox */
    .flex-container {
      display: flex;
      flex-wrap: nowrap;
      background-color: DodgerBlue;
      height: 150px;
      justify-content: center;
      background: linear-gradient(to left, DodgerBlue, aquamarine);
    }
    

    /* for h2*/
    h2 {
      color: black;
    }

    /* for h1*/
    h1 {
      text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;
      color: white;
      font-size: 50px;
    }

    /* for form*/
    form {
      margin: 10px;
    }
  </style>
</head>

<body>

   
 <!-- code for top nav bar-->
 <div class="topnav">
  <a class="active" href="index.html" target="_self">Home</a>
  <a href="contact.php" target="_self">Contact</a>
  <a href="aboutus.html" target="_self">About Us </a>
  <a href="buildingpc.html" target="_self">Build PC</a>
  <div class="dropdown">
    <button class="dropbtn">Games
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="counterstrike.html" target="_self">Counter Strike</a>
      <a href="leagueoflegends.html" target="_self">League of Legends</a>
      <a href="osrs.html" target="_self">Old School Runescape</a>
      <a href="oculus.html" target="_self">Oculus Games</a>
    </div>
  </div>
</div>

  <!-- code for the flex container at top-->
  <div class="flex-container" style="text-align: center;">
    <h1>Contact Us</h1>
  </div>


  <!-- for image at the top -->
  <p><img align=right src="https://mediad.publicbroadcasting.net/p/klcc/files/styles/x_large/public/201610/contact-us.jpg" alt="Weight Lifting"></p>


  <!-- drop a line header -->
  <h2> Drop us a line</h2>
  <!-- form code -->
  <form action="post_contact_data.php" method="post">
    <!-- Dividing webpage into sections -->
    <div>
      Full Name:
      <input TYPE=“text” name="firstName" id="t_b_1">
    </div>
    <div>
      Email Info:
      <input name="email" id="t_b_2" type="text">
    </div>
    <div>
      Department:
      <input name="sleeve" list="sleeves" placeholder="Departments">
      <datalist id="sleeves" name = "sleeves">
        <option value="Financial">
        <option value="Orders">
        <option value="Health">
        <option value="Personel">
      </datalist>
    </div>
    <B>Comments?</B>
    <div>
      <textarea id="txt1" type="textarea" rows="10%" cols="50%" name = "box"></textarea>
    </div>
    <div>
      <input TYPE="submit" value="Submit">
      <input type="reset">
    </div>
  </form>
</body>
</html>
