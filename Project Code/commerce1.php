<?php
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start(); 
$ROLL = $_SESSION['sess_username'];
?>
<html>
<head>
<style>
  .button 
  {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
    position: absolute;
  }

  .wrapper 
  {
    text-align: center;
  }

  a:link, a:visited 
  {
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

  a:hover, a:active 
  {
    background-color: red;
  }

  ul 
  {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
  }

  li 
  {
    float: left;
  }

  li a 
  {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
  }

  li a:hover 
  {
    background-color: #111111;
  }

  .dropbtn 
  {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropdown 
  {
    position: relative;
    display: inline-block;
  }

  .dropdown-content 
  {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a 
  {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover 
  {
    background-color: #f1f1f1
  }

  .dropdown:hover .dropdown-content 
  {
    display: block;
  }

  .dropdown:hover .dropbtn 
  {
    background-color: #3e8e41;
  }

  body
  { 
    background: url(http://cliparting.com/wp-content/uploads/2017/02/Shopping-clipart-free-download-clip-art-on.jpg) no-repeat center fixed; 
    background-size: cover;
    background-size: 400px 400px;
  }

  h1
  {
    color: blue;
    font-family: algerian;
    font-size: 300%;
  }

</style>
</head>
<body>
  <h1 style="text-align: center;">Welcome To E-Commerce Portal</h1>
  <h2 style="text-align: center;">Select item</h2> 

 
   <div id="id01" class="modal">        
  
  <form method="POST" class="modal-content form-signin animate" role="form" action="commerce4.php">                            
    <div class="container">
    <select name="topology">
  <option value="Unibic Cookies">Unibic Cookies</option>
  <option value="McVite's Digestive Cookies">McVite's Digestive Cookies</option>
  <option value="Parle G Biscuits">Parle G Biscuits</option>
  <option value="Delishus Cookies">Delishus Cookies</option>
  <option value="Karachi Biscuits">Karachi Biscuits</option>
  <option value="Hide and Seek Bourbon Cookies">Hide and Seek Bourbon Cookies</option>
  <option value="Good Day Cookies">Good Day Cookies</option>
  <option value="Hide and Seek Cookies">Hide and Seek Cookies</option>
  <option value="Britannia Cookies">Britannia Cookies</option>
  <option value="Sunfeast Cookies">Sunfeast Cookies</option>
  <option value="20-20 Cookies">20-20 Cookies</option>
  <option value="Marie Gold Biscuits">Marie Gold Biscuits</option>
  <option value="Lays">Lays</option>
  <option value="Lays MAXX">Lays MAXX</option>
  <option value="Uncle Chips">Uncle Chips</option>
  <option value="Kurkure">Kurkure</option>
  <option value="Bingo Mad Angles">Bingo Mad Angles</option>
  <option value="Bingo Yumitos">Bingo Yumitos</option>
  <option value="Bingo Tangles">Bingo Tangles</option>
  <option value="Cheetos">Cheetos</option>
  <option value="Haldiram Chips">Haldiram Chips</option>
  <option value="Pringles">Pringles</option>
  <option value="Ruffles">Ruffles</option>
  <option value="Doritos">Doritos</option>
  <option value="Haldiram">Haldiram</option>
  <option value="Bikano">Bikano</option>
  <option value="Lehar">Lehar</option>
  <option value="Bhakarwadi">Bhakarwadi</option>
  <option value="Laung Sev">Laung Sev</option>
  <option value="Coated Peanuts">Coated Peanuts</option>
  <option value="Garlic Sev">Garlic Sev</option>
  <option value="Spicy Potato Chips">Spicy Potato Chips</option>
  <option value="Ferrero Rocher">Ferrero Rocher</option>
  <option value="Dairy Milk">Dairy Milk</option>
  <option value="Galaxy">Galaxy</option>
  <option value="Mars">Mars</option>
  <option value="Alpino">Alpino</option>
  <option value="Bournville">Bournville</option>
  <option value="Kit-Kat">Kit-Kat</option>
  <option value="Green Black's">Green Black's</option>
  <option value="Guylian">Guylian</option>
  <option value="Patchi">Patchi</option>
  <option value="Hershey's Chocolate">Hershey's Chocolate</option>
  <option value="Temptation">Temptation</option>
  <option value="Milky Bar">Milky Bar</option>
  <option value="5-Star">5-Star</option>
  <option value="Bar-One">Bar-One</option>
  <option value="Snickers">Snickers</option>
  <option value="Channa">Channa</option>
  <option value="Kurmura">Kurmura</option>
  <option value="Nuts">Nuts</option>
  <option value="Tilgul">Tilgul</option>
  <option value="Whole Wheat Biscuits">Whole Wheat Biscuits</option>
  <option value="Pooranpoli">Pooranpoli</option>
  <option value="Granola Oats">Granola Oats</option>
  <option value="Murukku">Murukku</option>
  <option value="Thattai">Thattai</option>
  <option value="Chakli">Chakli</option>
  <option value="Shakkar Para">Shakkar Para</option>
  <option value="Nimki">Nimki</option>
  <option value="Baked Corn Tortilla Chips">Baked Corn Tortilla Chips</option>
  <option value="Spicy Maida Diamond Cut Biscuits">Spicy Maida Diamond Cut Biscuits</option>
  <option value="Sweet cheeda">Sweet cheeda</option>
  <option value="Homemade Kaju Namkeen">Homemade Kaju Namkeen</option>
  <option value="Maggi Noodles">Maggi Noodles</option>
  <option value="Yipee Noodles">Yipee Noodles</option>
  <option value="Top Ramen">Top Ramen</option>
  <option value="Ching's Secret">Ching's Secret</option>
  <option value="Knorr Soupy Noodles">Knorr Soupy Noodles</option>
  <option value="Nestle Pasta">Nestle Pasta</option>
  <option value="Yipeee Pasta">Yipeee Pasta</option>
  <option value="Sunfeast Pasta">Sunfeast Pasta</option>
  <option value="MTR Macroni">MTR Macroni</option>
  <option value="McCain Pasta">McCain Pasta</option>
  <option value="De Cecco">De Cecco</option>
  <option value="Naturally-Yours">Naturally-Yours</option>
  <option value="Gulab Jamun">Gulab Jamun</option>
  <option value="Mysore Pak">Mysore Pak</option>
  <option value="Gujiya">Gujiya</option>
  <option value="Kaju Rotla">Kaju Rotla</option>
  <option value="Malapua">Malapua</option>
  <option value="Besan Ladoo">Besan Ladoo</option>
  <option value="Motichoor Ladoo">Motichoor Ladoo</option>
  <option value="Pista Burfi">Pista Burfi</option>
  <option value="Soan Papdi">Soan Papdi</option>
  <option value="Badam Sweets">Badam Sweets</option>
  <option value="Date and Nuts Ladoo">Date and Nuts Ladoo</option>
  <option value="Rasmalai">Rasmalai</option>
  <option value="Handy Portfolio - with Pad">Handy Portfolio - with Pad</option>
  <option value="Solo Secure Folder (With twin pocket)">Solo Secure Folder (With twin pocket)</option>
  <option value="Solo Separatorz (With Index - Set of 10)">Solo Separatorz (With Index - Set of 10)</option>
  <option value="Solo Separator /Divider (Set of 10) - Multi Colour">Solo Separator /Divider (Set of 10) - Multi Colour</option>
  <option value="Card Holder-Classic 240 cards">Card Holder-Classic 240 cards</option>
  <option value="Punchless Clip File A4 Timex Clip">Punchless Clip File A4 Timex Clip</option>
  <option value="Chequebook Expanding">Chequebook Expanding</option>
  <option value="Spring Clip File A4 Spring Clip">Spring Clip File A4 Spring Clip</option>
  <option value="Basic Stationery Set">Basic Stationery Set</option>
  <option value="Casio SL-760LB Portable Calculator">Casio SL-760LB Portable Calculator</option>
  <option value="Casio FC-100V">Casio FC-100V</option>
  <option value="Imported 10x Lanyard ID Badge Keys">Imported 10x Lanyard ID Badge Keys</option>
  <option value="Kangaro Stapler HD-10D">Kangaro Stapler HD-10D</option>
  <option value="Lotus Visitor Book">Lotus Visitor Book</option>
  <option value="Classmate Practical Note Book - Chemistry">Classmate Practical Note Book - Chemistry</option>
  <option value="JK Copier Paper - A4, 500 Sheets, 75 GSM, 10 Ream">JK Copier Paper - A4, 500 Sheets, 75 GSM, 10 Ream</option>
  <option value="Classmate Impression 5 Subject Single Line">Classmate Impression 5 Subject Single Line</option>
  <option value="High Resolution Glossy Paper A4 Size, 20 Sheets">High Resolution Glossy Paper A4 Size, 20 Sheets</option>
  <option value="LOTUS GRAPH NOTE BOOK (SMALL)">LOTUS GRAPH NOTE BOOK (SMALL)</option>
  <option value="Stageman Business Envelope White Pack of 100 Pcs
">Stageman Business Envelope White Pack of 100 Pcs
</option>
  <option value="Stageman Multiprpose A4 Color Paper - 20 Sheets">Stageman Multiprpose A4 Color Paper - 20 Sheets</option>
  <option value="Bilt Matrix Executive Series Notebook">Bilt Matrix Executive Series Notebook</option>
  <option value="Classmate Longbook Single Line">Classmate Longbook Single Line</option>
  <option value="Classmate Notebook Single Line">Classmate Notebook Single Line</option>
  <option value="BILT Matrix Premium Notebook - A6 - Single Subject">BILT Matrix Premium Notebook - A6 - Single Subject</option>
  <option value="Classmate Pocket MemoSingle Line">Classmate Pocket MemoSingle Line</option>
  <option value="Deli Super Stick on Colourful Flags">Deli Super Stick on Colourful Flags</option>
  <option value="Solo Note Book (100 pages) - 2 Colour Printing
">Solo Note Book (100 pages) - 2 Colour Printing</option>
  <option value="1/6 Spiral Pad (19x22.5cm-80 Sheets">1/6 Spiral Pad (19x22.5cm-80 Sheets</option>
  <option value="Reynolds 045 Carbure Pen - Pack of 10">Reynolds 045 Carbure Pen - Pack of 10</option>
  <option value="Uniball Vision Needle - UB 185">Uniball Vision Needle - UB 185</option>
  <option value="Cello Gripper-1 Ball Pen, Blue - Pack of 10">Cello Gripper-1 Ball Pen, Blue - Pack of 10</option>
  <option value="Uniball Deluxe - UB 177">Uniball Deluxe - UB 177</option>
  <option value="Cello Topball Click Retractable Ballpoint Pen">Cello Topball Click Retractable Ballpoint Pen</option>
  <option value="Parker Beta Millenium GT with Swiss Knife Ball Pen">Parker Beta Millenium GT with Swiss Knife Ball Pen</option>
  <option value="Parker Vector Mettalix CT Roller Ball Pen (Blue)">Parker Vector Mettalix CT Roller Ball Pen (Blue)</option>
  <option value="Parker Vector Crystal Special Edition Roller Pen">Parker Vector Crystal Special Edition Roller Pen</option>
  <option value="Classmate Pencil Regular 2B Carbon Black">Classmate Pencil Regular 2B Carbon Black</option>
  <option value="Classmate Trilobe Blue Pencil Pack of 10">Classmate Trilobe Blue Pencil Pack of 10</option>
  <option value="Graphite 777 07 Mechanical Pencil">Graphite 777 07 Mechanical Pencil</option>
  <option value="Correction Pen">Correction Pen</option>
  <option value="Nataraj 621 Sharpener">Nataraj 621 Sharpener</option>
  <option value="Nataraj 621 Plasto Erasers">Nataraj 621 Plasto Erasers</option>
  <option value="Textsurfer Classic 364WP6 Highliter">Textsurfer Classic 364WP6 Highliter</option>
  <option value="Luna Twist up 228 L18 Wax Crayons">Luna Twist up 228 L18 Wax Crayons</option>
  <option value="Classic Spin Mop">Classic Spin Mop</option>
  <option value="Gala Broom">Gala Broom</option>
  <option value="Colin Glass Cleaner">Colin Glass Cleaner</option>
  <option value="Scotch Brite Sponge Wipe">Scotch Brite Sponge Wipe</option>
  <option value="Good Night Mosquito Repellent">Good Night Mosquito Repellent</option>
  <option value="Trash Bags">Trash Bags</option>
  <option value="Harpic Toilet Cleaner">Harpic Toilet Cleaner</option>
  <option value="Harpic Power In-Cistern Toilet Bowl Cleaner">Harpic Power In-Cistern Toilet Bowl Cleaner</option>
  <option value="Surf Excel Matic Front Load Detergent Powder">Surf Excel Matic Front Load Detergent Powder</option>
  <option value="Surf Excel Blue Easy Wash Detergent Powder">Surf Excel Blue Easy Wash Detergent Powder</option>
  <option value="Surf Excel Detergent Powder Quick Wash">Surf Excel Detergent Powder Quick Wash</option>
  <option value="Surf Excel Detergent Bar">Surf Excel Detergent Bar</option>
  <option value="Comfort Fabric Conditioner">Comfort Fabric Conditioner</option>
  <option value="Vim Bar">Vim Bar</option>
  <option value="Vim Liquid">Vim Liquid</option>
  <option value="Scotch Brite Scrub Pad">Scotch Brite Scrub Pad</option>
  <option value="Toilet Tissue">Toilet Tissue</option>
  <option value="Kitchen Towel">Kitchen Towel</option>
  <option value="Aluminium Foil">Aluminium Foil</option>
  <option value="Dettol Hand Wash">Dettol Hand Wash</option>
  <option value="Dove Cream Beauty Bathing Bar 100g">Dove Cream Beauty Bathing Bar 100g</option>
  <option value="Colgate Strong Teeth">Colgate Strong Teeth</option>
  <option value="Closeup Deep Action Red Hot Toothpaste">Closeup Deep Action Red Hot Toothpaste</option>
  <option value="Parachute Coconut Oil 500ml Bottle">Parachute Coconut Oil 500ml Bottle</option>
  <option value="L'Oreal Paris Total Repair 5 Damaged Hair Shampoo">L'Oreal Paris Total Repair 5 Damaged Hair Shampoo</option>
  <option value="Sensodyne Sensitive Soft Toothbrush">Sensodyne Sensitive Soft Toothbrush</option>
  <option value="Sunsilk Nourishing Soft and Smooth Shampoo">Sunsilk Nourishing Soft and Smooth Shampoo</option>
  <option value="Pears Soft and Fresh Soap">Pears Soft and Fresh Soap</option>
  <option value="Nivea Fruity Shine Cherry Lip Balm">Nivea Fruity Shine Cherry Lip Balm</option>
  <option value="Dove Hair Therapy - Hair Fall Rescue Conditioner">Dove Hair Therapy - Hair Fall Rescue Conditioner</option>
  <option value="Volini Expert Pain Relief Spray">Volini Expert Pain Relief Spray</option>
  <option value="Cotton Ear Buds">Cotton Ear Buds</option>
  <option value="Garnier Men Acno Fight Face Wash">Garnier Men Acno Fight Face Wash</option>
  <option value="Veet Sensitive Skin Full Body Waxing Kit">Veet Sensitive Skin Full Body Waxing Kit</option>
  <option value="Nivea Men Deodorant Cool Kick">Nivea Men Deodorant Cool Kick</option>
  <option value="Pond's Flawless White Daily Cream">Pond's Flawless White Daily Cream</option>
  <option value="Himalaya Herbals Neem Face Wash">Himalaya Herbals Neem Face Wash</option>
  <option value="Bajaj Brahmi Amla Hair Oil">Bajaj Brahmi Amla Hair Oil</option>
  <option value="Bblunt-Salon-Secret-Natural-Black-Hair-Colour">Bblunt-Salon-Secret-Natural-Black-Hair-Colour</option>
  <option value="Cinthol Energy Deo Stick Men">Cinthol Energy Deo Stick Men</option>
  <option value="Pepsi">Pepsi</option>
  <option value="Coca Cola">Coca Cola</option>
  <option value="Sprite">Sprite</option>
  <option value="Thumbs Up">Thumbs Up</option>
  <option value="Limca">Limca</option>
  <option value="Fanta">Fanta</option>
  <option value="Maaza">Maaza</option>
  <option value="Mountain Dew">Mountain Dew</option>
  <option value="7 Up">7 Up</option>
  <option value="Mirinda">Mirinda</option>
  <option value="Appy Fizz">Appy Fizz</option>
  <option value="Real Juice">Real Juice</option>
</select>
      <button type="submit" class="button1" style="vertical-align:middle" value="submit" name="submit"><span>Submit</span></button>
    </div>

   
  </form>  

<div class="dropdown" style="float:right;">
    <button class="dropbtn">Logout</button>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </div>


  <script>/* When the user clicks on the button,toggle between hiding and showing the dropdown content */
  function myFunction() 
  {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  function filterFunction() 
  {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagvalue("a");
    for (i = 0; i < a.length; i++) 
    {
      if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) 
      {
            a[i].style.display = "";
      } 
      else 
      {
            a[i].style.display = "none";
      }
    }
  }
</script>
</body>                  
</html>  