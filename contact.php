<!DOCTYPE html>
<html>
<head>
  <title> Contact Us </title>
  <base target="_blank">
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">

  <style>
    /* for background color */
    body {
      background-color: white;
    }

    /* for top nav bar */
    .topnav {
      overflow: hidden;
      background-color: white;
      border: 2px solid;
    }

    /* for top nav bar */
    .topnav a {
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }


    /* for top nav bar hover effect */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }


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
  <a href="contact.html" target="_self">Contact</a>
  <a href="aboutus.html" target="_self">About Us </a>
  <a href="buildingpc.html" target="_self">Build PC</a>
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
  <form>
    <!-- Dividing webpage into sections -->
    <div>
      Full Name:
      <input TYPE=“text” name="firstName" id="t_b_1">
    </div>
    <div>
      Email Info:
      <input name="lastName" id="t_b_2" type="text">
    </div>
    <div>
      Department:
      <input name="sleeve" list="sleeves" placeholder="Departments">
      <datalist id="sleeves">
        <option value="Financial">
        <option value="Orders">
        <option value="Health">
        <option value="Personel">
      </datalist>
    </div>
    <B>Comments?</B>
    </div>
    <div>
      <textarea id="txt1" type="textarea" rows="10%" cols="50%"></textarea>
    </div>
    <div>
      <input TYPE="submit" value="Submit">
      <input type="reset">
    </div>
  </form>
  </div>
</body>
</html>
