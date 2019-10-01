<!DOCTYPE html>
<html>

<head>
    <!-- Project files = index.php (with javascript at bottom of page)- main.1.css - contact.php  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Antoine GUYADER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Web Developer, Developeur Web, Curriculum Vitae">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS stylesheet -->
    <link rel="stylesheet" type="text/css" media="screen" href="main.1.css">
    <!-- Script link to JQuery -> sliding divs below -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Standard JavaScript Code -->
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <!-- CV container starts here, the div separating main cv from grey background !! -->
        <div class="CVcontainer">
            <!-- Header, photo and javascript type-effect paragraphs start here (js at bottom of screen)  -->
            <div class="header">
                <h1>CURRICULUM VITAE</h1><br>
            </div>
            <div class="containerWithoutHeader">
                <div class="name">
                    <div ID="nameAndStatement">
                        <h2>Antoine GUYADER</h2>
                        <p id="typeText" class="paragraph"></p>
                    </div>
                    <div>
                        <img ID="photo" src="Antoine Guyader.jpg" alt="Antoine Guyader" />
                    </div>
                </div>
                <!-- Personal info divs, first hidden/revealed div, starts here  -->
                <div class="personalInfo">
                    <button id="func1" class="btn">
                        <h3>PERSONAL INFORMATION</h3>
                    </button>
                    <div id="personalInformation" class="addressEtc">
                        <div>
                            <h4>Mobile Phone</h4>
                            <p class="phoneNumber paragraph1 ">06.21.86.39.24</p>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p class="paragraph1 ">antoineg06@yahoo.fr</p>
                        </div>
                        <div>
                            <h4>Transport Licence</h4>
                            <p class="paragraph1 ">Moto</p>
                        </div>
                        <div class="address">
                            <h4>Location</h4>
                            <p class="paragraph1">Nice, PACA</p>
                        </div>
                    </div>
                </div>
                <!-- Currently studying divs starts here -->
                <div class="studying">
                    <button id="func2" class="btn">
                        <h3>CURRENTLY STUDYING</h3>
                    </button>
                    <div id="currentlyStudying">
                        <p class="paragraph">Web and Mobile Development - HTML, CSS, Javascript, PHP</p>
                        <p class="paragraph">English Language - Written and Oral</p>
                    </div>
                </div>
                <!-- Projects completed divs, with external links  -->
                <div class="projectCompleted">
                    <button id="func3" class="btn">
                        <h3>COMPLETED PROJECTS</h3>
                    </button>
                    <div id="projectsCompleted" class="projectScreenshots">
                        <div><a href="Nouveau dossier/index.php" target="_blank"><img src="Trombinoscope.PNG" alt="Yearbook/Evaluation Website" class="projectImage"></a>
                            <p class="paragraph centerPara">Yearbook/Evaluation Website</p>
                        </div>
                        <div><a href="#" target="_blank"><img src="Capture2.PNG" alt="Online CV for Colleague" class="projectImage"></a>
                            <p class="paragraph centerPara">Online CV for Colleague</p>
                        </div>
                    </div>
                </div>
                <!-- Education and experience divs starts here  -->
                <div class="education">
                    <button id="func4" class="btn">
                        <h3>EDUCATION AND WORK EXPERIENCE</h3>
                    </button>
                    <div id="educationExperience">
                        <div>
                            <p class="paragraph">2005 : C.F.A. Antibes : CAP Travaux paysagers
                                <br><br>
                                2003 : C.F.A. Antibes : CAP Pépiniériste</p>
                        </div>
                        <div>
                            <p class="paragraph">2005-2017 : CASINO, 54 Bd d’Alsace 06400 CANNES</p>
                        </div>
                    </div>
                </div>
                <!-- Hobbies and Interests start here, includes moving bike - javascript at bottom of screen -->
                <div class="hobbies">
                    <button id="func5" class="btn">
                        <h3>HOBBIES AND INTERESTS</h3>
                    </button>
                    <div id="hobbiesInterests" class="imagesAndLabels">
                        <div class="hobbyImages" id="testBike">
                            <img id="goBike" class="image" src="baseline_motorcycle_white_48dp.png" alt="Motorbike">
                            <img src="baseline_movie_white_48dp.png" alt="Movies" class="image">
                            <img src="baseline_local_library_white_48dp.png" alt="Reading" class="image">
                        </div>
                        <div class="hobbyTitles">
                            <div class="imageWidth">
                                <p class="notButton">Movies</p>
                            </div>
                            <div class="imageWidth"><button #bikeButton onclick="myMove()">
                                    <p id="btnLabel">Motorbikes</p>
                                </button></div>
                            <div class="imageWidth">
                                <p class="notButton">Reading</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FORM STARTS HERE -->
                <div id="form">
                    <button id="func6" class="btn formBtn">
                        <h3>CONTACT FORM</h3>
                    </button>
                    <form method="post" action="contact.php" class="formContainer">
                        <div id="contactClose">
                            <div class="labelNameEmail">
                                <input class="formDecoration" name="sender" placeholder="Your name here...">
                                <label for="sender"></label>
                                <input class="formDecoration" name="senderEmail" placeholder="Your email here...">
                                <label for="senderEmail"></label>
                                <input class="formDecoration" name="subject" placeholder="Subject of your message...">
                                <label for="subject"></label>
                            </div>
                            <div class="labelMessage">
                                <textarea class="formDecoration" rows="8" cols="20" name="message" placeholder="Type message here..."></textarea>
                            </div>
                            <div class="labelButton">
                                <label for="submit"></label>
                                <input type="submit" name="submit" value="Send Message" class="formBtn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

<script>
    // This is the typing effect in the first couple of paragraphs !! 
    var i = 0,
        typeText;
    typeText = "Obtain a Web Development position where I can maximise my skills and potential.%%Please click the headings below to discover more about me, and use the contact form to get in touch!"

    function typing() {
        var charToType = typeText.charAt(i);
        if (charToType === '%') {
            charToType = '<br />';
        }

        if (i < typeText.length) {
            document.getElementById("typeText").innerHTML += charToType;
            i++;
            setTimeout(typing, 25);
        }
    }
    typing();
</script>

</html> 