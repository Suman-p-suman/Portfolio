<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <header class="header">
<div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portfolio</a>
    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#skills">skills</a>
        <a href="#projects">projects</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-github"></a>
    </div>
 </header>   

 <section class="home" id="home">
    <div class="image">
        <img src="su.jpeg" alt="None">
    </div>
    <div class="content">
        <h3>hi, i am suman p</h3>
        <span>web designer & developer</span>
        <p>My portfolio website showcases my expertise as a web designer and Java programmer. With a sleek and modern design, it highlights my creative web designs and efficient Java programming skills</p>
   <a href="#about" class="btn">about me</a>
    </div>
 </section>   

 <section class="about" id="about">
    <h1 class="heading"><span>biograph</span></h1>
    <div class="biography">
    <p>Lorem, ipsum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit excepturi architecto quaerat eum voluptatum odio, ipsum corporis cumque placeat neque aut saepe? Deserunt earum dolor iste assumenda architecto officiis alias, debitis dolores corporis eum, voluptatem commodi 

    </p>
    <div class="bio">
        <h3> <span>name :</span>Suman</h3>
        <h3> <span>email :</span>sumanpsuman9@gmail.com</h3>
        <h3> <span>address :</span>bengalore, india</h3>
        <h3> <span>phone :</span>7411271024</h3>
        <h3> <span>age :</span>20 years</h3>
        <h3> <span>experience :</span>fresher</h3>
    </div>
    <a href="#" class="btn">download cv</a>
    </div>
    <div class="skills" id="skills">
    <h1 class="heading"><span>skills</span></h1>
    <div class="progress">
        <div class="bar"><h3><span>HTML</span><span>95%</span></h3></div>
        <div class="bar"><h3><span>CSS</span><span>75%</span></h3></div>
        <div class="bar"><h3><span>JavaScript</span><span>65%</span></h3></div>
        <div class="bar"><h3><span>PHP</span><span>60%</span></h3></div>
        <div class="bar"><h3><span>JAVA</span><span>90%</span></h3></div>
        <div class="bar"><h3><span>DBMS</span><span>85%</span></h3></div>

    </div>
    </div>
    <div class="edu-exp">
    <h1 class="heading"><span>education</span></h1>
    <div class="row">
        <div class="box-container">
            <h3 class="title">education</h3>
            <div class="box">
            <span>(2017-2018)</span>
            <h3>SSLC</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas doloribus quis dicta repellat nemo minus ad hic necessitatibus quia?</p>
            
        </div>
        <div class="box">
            <span>(2019-2020)</span>
            <h3>PUC</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas doloribus quis dicta repellat nemo minus ad hic necessitatibus quia?</p>
            
        </div>
        <div class="box">
            <span>(2020-2024)</span>
            <h3>Engeneering </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas doloribus quis dicta repellat nemo minus ad hic necessitatibus quia?</p>
            
        </div>
        </div>
    </div>
    </div>
 </section>
 <section class="portfolio" id="projects">
 <h1 class="heading"><span>Projects</span></h1>
 <div class="box-container">
    <div class="box">
     <a href="#">  <img src="7.png" alt=""></a> 
        <h3>Tarvel angency</h3>
    </div>
    <div class="box">
       <a href="#"><img src="8.jpeg" alt=""></a> 
        <h3>Book Mani</h3>
    </div>
    <div class="box">
       <a href="#"> <img src="9.jpg" alt=""></a> 
        <h3>Tranction API</h3>
    </div>
 </div>
 </section>
 <section class="contact" id="contact">
 <h1 class="heading"><span>contact me</span></h1>
 <form action="" method="post">
    <div class="flex">
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
    </div>
    <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
    <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10" ></textarea>
    <input type="submit" value="send message" name="send" class="btn">
</form>
 </section>



























<script src="script.js"></script>
</body>
</html>