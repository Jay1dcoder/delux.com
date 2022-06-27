<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delux Hotels</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /*Custom properties*/

:root {
  --dark-color: #2d2c2c;
  --purple-solid: #350a4f;
  --purple-transparent: rgba(53, 10, 79, .7);
  --purple-transparent-alt: rgba(53, 10, 79, .5);
  --purple-light: #8f50fb;
  --yellow-solid: #fa9e2c;
  /* --red-solid: #fa0e0e; */
  --gradient-color: linear-gradient(to right, var(--yellow-solid), var(--purple-light));
  --gradient-color-alt: linear-gradient(to right, var(--purple-light), var(--yellow-solid));
}*

/* Booking section styles...Seun */
.booking{
  background-image: var(--gradient-color);
  padding-bottom: 2.5rem;
  padding-top: 2.5rem;
}
.input-group{
  margin-bottom: 1.5rem;
}
.input-label{
  /* this will make make anything besides the label go down to the next line */
  display: block;
  font-size: 1.3rem;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  margin-bottom: 1rem;
}
/* setting outline to none, will remove highlight from the inputs */
.input,
.options{
  outline: none;
  border: none;
  width: 100%;
  min-height: 4rem;
  padding: 1rem;
  font-weight: bold;
  color: #a5a5a5;
  letter-spacing: 2px;
  font-family: 'open sans', 'sans-serif';
  /* resize: none; */
}

.form-btn{
  margin-top: 2.5rem;
  cursor: pointer;
}

.btn-purple{
  background-color: var(--purple-solid);
}
.btn-purple:hover{
  /* background-color: #56247f; */
  background-color: var(--purple-transparent);
}

::placeholder{
color:  inherit;
}

    </style>
</head>
<?php
?>
<body>


<div class="header">

<span class="logo"> <b>DELUX HOTEL</b></span>

        <nav>
            <a href="" class="links">Home</a>
            <a href="" class="links">Booking</a>
            <a href="contact.php" class="links">Contact Us</a>
            <a href="" class="links">Location</a>

            <!-- <div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content"> -->
                <a href="" class="links" >Sign Up</a>
                <a href="" class="links" >Login</a>
                <!-- </div>
            </div> -->
        </nav>

</div>

<div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1" ></li>
        <li data-target="#demo" data-slide-to="2" ></li>
        <li data-target="#demo" data-slide-to="3" ></li>
        <!-- <li data-target="#demo" data-slide-to="4" ></li> -->
    </ul>

    <div class="carousel-inner" style="z-index:-1;">


      <div class="carousel-item active">
            <img src="./Images/fernando-alvarez-rodriguez-M7GddPqJowg-unsplash.jpg" alt="" width="100%" height="auto">
        </div>

    <div class="carousel-item ">
    <img src="./Images/alexander-kaunas-xEaAoizNFV8-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    
    <!-- <div class="carousel-item ">
    </div> -->

    
    <div class="carousel-item ">
        <img src="./Images/ralph-ravi-kayden-FqqiAvJejto-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    
    <div class="carousel-item ">
        <img src="./Images/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    <!-- <a href="#demo" class="carousel-control-prev" data-slide="prev" style="cursor: pointer;margin-top:45%;">
        <span class="carousel-control-prev-icon" ></span>
    </a>

    <a href="#demo" class="carousel-control-next" data-slide="next" style="cursor: pointer;margin-top:45%;">
        <span class="carousel-control-next-icon"></span>
    </a> -->

    </div>
</div>

<section class="booking">
        <div class="container">
            <form action="form">
            <div class="input-group">
                    <label for="adults" class="input-label">Hotel rooms</label>
                    <select name="options" id="adults" class="options">
                        <option value="0">Paradise</option>
                        <option value="0">Exquisite</option>
                        <option value="0">maison</option>
                        <option value="0">Faraheit</option>
                        <option value="0">Radisson</option>
                        <option value="0">Blu ray</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="check-in" class="input-label">Check-In</label>
                    <input type="date" class="input" id="check-in">
                </div>
                <div class="input-group">
                    <label for="check-out" class="input-label">Check-out</label>
                    <input type="date" class="input" id="check-out">
                </div>
                <div class="input-group">
                    <label for="adults" class="input-label">Adults</label>
                    <select name="options" id="adults" class="options">
                        <option value="0">0</option>
                        <option value="0">1</option>
                        <option value="0">2</option>
                        <option value="0">3</option>
                        <option value="0">4</option>
                        <option value="0">5</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="children" class="input-label">Children</label>
                    <select name="options" id="children" class="options">
                        <option value="0">0</option>
                        <option value="0">1</option>
                        <option value="0">2</option>
                        <option value="0">3</option>
                        <option value="0">4</option>
                        <option value="0">5</option>
                    </select>
                </div>
                <button type="submit" class="btn form-btn btn-purple">Search
                    <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                </button>
            </form>
        </div>
    </section>

<?php
    require_once("contacthome.php");
?>
</body>
</html>
