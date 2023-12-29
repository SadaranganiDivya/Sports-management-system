<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 5px;
  padding: 0 0;
}

.card {
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  margin: 5px;
}

.about-section {
  padding: 30px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 0;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 350px) {
  .column {
    width: 190%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Sports management systems provide users with a dashboard to complete tasks related to: Managing, Scheduling, Analytics, Inventory. 
</p>
  <p>Sports teams, Sports clubs, Athletes, Sportspersons, Sports venues, Sports events. 
</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
            <img src="priya mam.jpg" style="width:100%">
      <div class="container">
        <h2>Priya Swaminarayan mam</h2>
        <p class="title">Dean </p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="vivek sir.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Vivek Dave Sir</h2>
        <p class="title">HOD</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Sohil-Parmar.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Sohil Parmar Sir</h2>
        <p class="title">Professor</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="Divya.jpg"  style="width:90%">
      <div class="container">
        <h2>Sadarangani Divya Rajeshkumar</h2>
        <p class="title">Student</p>
        <p>I am Sadarangani Divya RajeshKumar in Full Stack Web Developer proficient in fundamental front-end languages and server side languages.
</p>
        <p>divyasadarangani3@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="DURVESH.jpg"  style="width:90%">
      <div class="container">
        <h2>Durvesh Choudhary</h2>
        <p class="title">Student</p>
        <p>I am Durvesh Choudhary in Full Stack Web Developer proficient in fundamental front-end languages and server side languages.</p>
        <p>durveshchoudhary3@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


<div class="column">
    <div class="card">
      <img src="bittu.jpg"  style="width:90%">
      <div class="container">
        <h2>KM Bittu Pandey</h2>
        <p class="title">Student</p>
        <p>I am KM Bittu Pandey in Full Stack Web Developer proficient in fundamental front-end languages and server side languages.
</p>
        <p>bittupandey2@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


<div class="column">
    <div class="card">
      <img src="samir.jpg"  style="width:90%">
      <div class="container">
        <h2>Samir Modha</h2>
        <p class="title">Student</p>
        <p>I am Samir Modha in Full Stack Web Developer proficient in fundamental front-end languages and server side languages.
</p>
        <p>samirmodha4@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>







</body>
</html>
