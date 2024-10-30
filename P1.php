<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="this.css">
</head>

<body>
    <header>
        <h2 class="logo">Curriculum Vitae</h2>
    </header>

    <div class="sidebar">
        <a href="P1.php"><i class="fas fa-address-card"></i><span>&nbsp;&nbsp;Curriculum Vitae</span></a>
        <a href="P2.php"><i class="fa-solid fa-square-root-variable"></i><span>&nbsp;&nbsp;The Use of
                Variables</span></a>
        <a href="P3.php"><i class="fa-solid fa-list-ol"></i><span>&nbsp;&nbsp;Manipulating Numbers</span></a>
    </div>

    <div class="container">
        <div class="picture">
            <img src="prof.jpg" alt="Profile Picture" class="img">
        </div>
        <h1>Isaiah Vincent Briones</h1>
        <p><b><i class="fas fa-envelope-open"> </i>&nbsp;Email:</b> isaiahvincentbriones.com | <i class="fas fa-phone">
            </i>&nbsp;<b>Phone:</b> +639998711048 | <i class="fas fa-home"></i>&nbsp;<b>Location:</b> Tisa, Cebu city
        </p>
    </div>
    <div class="container1">

        <h1 class="h"><u>Objective</u></h1>
        <p>Driven and innovative professional eager to apply my comprehensive skills</p>
        <p>and knowledge in hardware-based technology to drive the success of a customer-focused organization.</p>
        <p>With a keen eye for detail and a dedication to excellence, I aim to deliver solutions that not only meet but
            exceed
            customer expectations,</p>
        <p>ensuring maximum satisfaction and contributing to the company's growth and success.</p>
        <h1><u>Educational Background</u></h1>
        <p>
        <ul></ul>
        </p>
        <p>
            <li>College Cebu Technological University
                Bachelor of Science in Information System
                2022-2023</li>
        </p>
        <p>
            <li>Senior High School Asian College Technology
                Pantaleon del Rosario St, Cebu City
                2020-2022</li>
        </p>
        <p>
            <li>Junior High School Tisa National High School
                Tisa II Cebu, City
                2016-2020</li>
        </p>
        <p>
            <li>Elementary Tisa II Elementary School
                F. Llamas Street, Tisa, Cebu City, Cebu
                2014-2020</li>
        </p>
        <h1>Special Skills</h1>

        <li>Ability to learn and understand technical-related problems.</li>
        <li>Skilled in fostering positive and productive relationships with colleagues and stakeholders.</li>
        <li>Creativity and innovation, open to ideas that are genuine.</li>
        <li>Capable of delivering accurate and articulate presentations, resulting in a good level of understanding.
        </li>


        <h1>Achievements</h1>

        <li>Integrating Climate Change in UNICEF’s Planning and Programming</li>
        <li>iLeap Course on Intellectual Property</li>
        <li>Software Testing</li>

    </div>

</body>
<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

    header {
        top: 0;
        left: 0;
        position: fixed;
        background-color: rgb(250, 249, 246);
        width: 100%;
        padding: 1px;
        justify-content: space-around;
        align-items: center;
        display: flex;
        font-family: 'Montserrat', sans-serif;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        z-index: 10;
    }

    .logo {
        color: black;
        font-size: 1.6em;
        font-family: 'Lora', serif;

    }

    .sidebar {
        height: 100%;
        width: 80px;

        position: fixed;
        z-index: 9;
        top: 0;
        left: 0;
        background-color: rgb(250, 249, 246);
        overflow-x: hidden;
        padding-top: 16px;
        transition: width 0.3s;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        font-family: 'Roboto', sans-serif;

    }

    .sidebar:hover {
        width: 250px;
    }

    .sidebar a {
        padding: 15px;
        text-decoration: none;
        font-size: 15px;
        color: black;
        display: flex;
        justify-content: flex-start;
        white-space: nowrap;
        transition: color 0.3s;
        margin-left: 10px;
    }

    .sidebar a {
        position: relative;
        top: 80px;
    }

    .sidebar i {
        min-width: 30px;
        color: black;
        margin-right: 10px;
    }

    .sidebar a span {
        opacity: 0;

        transition: opacity 0.3s;
    }

    .sidebar:hover a span {
        opacity: 1;

    }

    .sidebar a:hover {
        text-shadow: -.25px -.25px 0 black,
            .25px .25px black;

    }

    .main {
        margin-left: 100px;

        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }


    .container {
        position: relative;
        top: 100px;
        text-align: center;
        padding: 20px;
        background-color: whitesmoke;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1;
        /* Lower z-index than sidebar */
    }

    .container1 {
        position: relative;
        top: 100px;
        margin-left: 100px;
        /* Adjust this value based on the width of your sidebar */
        text-align: justify;
        padding: 20px;
        background-color: whitesmoke;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1;
        /* Lower z-index than sidebar */
    }

    .img {
        position: relative;
        left: 630px;
        width: 280px;
        height: 290px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1,
    p {
        font-family: 'Lora', serif;
    }

    .h {
        position: relative;
        bottom: 30px;
    }

    .cart {
        position: relative;
        top: 100px;
        text-align: center;
        padding: 20px;
        background-color: whitesmoke;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1;

    }

    .table {
        position: relative;
        left: 730px;
        text-align: center;

    }
</style>

</html>