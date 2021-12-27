<?php 
    
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<?php 
     include('header.php')
?> 
<body>
    <div class="container">
        <div class="main-content">
            <div class="intro-row row">
                <div class="col-md verticle-center">
                    <div class="column-inner">
                        <img class="my-img" src="img/fz.jpg" alt="Picture of me">
                    </div>
                </div>
                <div class="col-md verticle-center">
                    <div class="column-inner">
                        <h3>Hey there, thanks for checking out my site!</h3>
                        <h5>Keep scrolling to learn a bit more about me...</h5>
                    </div>
                </div>
            </div>
            <div class="about-row row">
                <div class="col-md-9">
                    <div class="column-inner">
                        <h3 class="header-title">| About Me</h3>
                        <p>Hey there! My name is Freddy Zwirb. I'm a recent college graduate and current front-end developer residing in Utah. I love the outdoors, and outside of work, you can find me in the mountains snowboarding, rock climbing, and hiking. Music is also a massive part of my life. I've been playing instruments most of my life, and I share that passion by teaching several high school groups during my free time.
                            <br><br>
                            The primary existence of this site is for me to advertise myself in a unique and creative way essentially. This is also a work in progress, and I will likely use this site to try and showoff newly acquired skills as I develop them. Fun fact, this is the second iteration of this site! Click <a href= "/old-site/index.html" target="_blank">here</a> to view the version I built a year ago.</p>
                    </div>
                </div>
            </div>
            <div class="experience-row row">
                <div class="col-md-9">
                    <div class="column-inner">
                        <h3 class="header-title">| Work Experience</h3>
                    </div>
                </div>    
                <div class="col-md-9">
                    <div class="column-inner">
                        <div class="column-info">
                            <h5>Front End Developer</h5>
                            <p><i>Ironistic</i></p>
                        </div>
                        <ul>
                            <li>Used HTML, CSS, JavaScript, PHP, and WordPress to create user-friendly and dynamic web pages
                            </li>
                            <li>Provided technical support for over 150 clients by troubleshooting issues and
                                implemented lasting solutions</li>
                            <li>Improved site performance by reducing the total site load time by as much as 50%</li>
                            <li>Participated in peer code reviews, working in an agile environment</li>
                        </ul>
                        <p><strong>Tools Used: </strong>WordPress, HTML 5, CSS 3, PHP, Bootstrap, JavaScript, jQuery, SCSS</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column-inner">
                        <p class="align-right dates">May 2020 - January 2021</p>
                    </div>
                </div>
            </div>
            <div class="experience-row row">
                <div class="col-md-9">
                    <div class="column-inner">
                        <h3 class="header-title">| Education</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column-inner">
                    </div>
                </div>
            </div>
            <div class="experience-row row">
                <div class="col-md-9">
                    <div class="column-inner">
                        <div class="column-info">
                            <h5>Launch School</h5>
                            <p><i>Software Engineering</i></p>
                        </div>
                        <ul>
                            <li>Launch School is a program for software engineers built around the concept of mastery-based learning. Learn more here: <a href='https://launchschool.com/'>launchschool.com</a></li>
                            <li>Tools: Ruby, Git, Github, AWS Cloud9 IDE </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column-inner">
                        <p class="align-right dates">Febuary 2021</p>
                    </div>
                </div>
            </div>
            <div class="experience-row row">
                <div class="col-md-9">
                    <div class="column-inner">
                        <div class="column-info">
                            <h5>Utah State University</h5>
                            <p><i>Management Information Systems</i></p>
                        </div>
                        <ul>
                            <li>Cumulative GPA 3.29</li>
                            <li>Dean’s list summer 2018 semester</li>
                            <li>Relevant Coursework: Advanced Web Development, Systems Design & Implementation, Digital Marketing, IT Infrastructure, Designing GUI For Ecommerce, Database Management, Business Programming </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="column-inner">
                        <p class="align-right dates">2016 - 2020</p>
                    </div>
                </div>
            </div>
            <div class="interests-row row">
                <div class="col-md-9">
                    <div class="column-inner">
                        <h3 class="header-title">| Hobbies</h3>
                        <p>Click on each image to learn more!</p>
                        <div class="interests">
                            <img class="open-modal" data-modal="modal-1" src="img/climbing-silhouette.png" alt="">
                            <img class="open-modal" data-modal="modal-2" src="img/music.png" alt="">
                            <img class="open-modal" data-modal="modal-3" src="img/riding.png" alt="">
                        </div>
                    </div>
                </div>
            </div> 
            <div class="experience-row row">
                <div class="col">
                    <div class="column-inner">
                        <h3 class="header-title">| Contact Me</h3>
                        <center><p><a href="tel:7039636501">703-963-6501</a>   -   <a href="mailto:fzwirb@gmail.com">fzwirb@gmail.com</a>   -   <a href="https://www.linkedin.com/in/frederickzwirb/" target="_blank">LinkedIn</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL SECTION -->
    <div id="climbing" class="bg-modal climbing-modal">
        <div class="bg-modal-container">
            <div class="bg-close" id="close">+</div>
            <p>Climbing is one of my newest hobbies. I love how climbing is essentially just problem solving (just like programming!) Each new route presents a challenge, usually requiring multiple attempts to solve successfully. As I progress in the sport, I am continually amazed at discovering what my body is capable of.</p>
            <img src="img/climbing.png" alt="">
        </div>
    </div>
    <div id="music" class="bg-modal music-modal">
        <div class="bg-modal-container">
            <div class="bg-close" id="close2">+</div>
            <p>Music has always been a huge part of my life. I started learning music through the public education system. I played through high school and had the opportunity to play in several ensembles during my time in college. Additionally, I spent two years marching in Drum Corps International (DCI), where I made countless memories and met some of my best friends. I'm still able to use what I've learned over the year by teaching at several high school programs in my area.</p>
            <img src="img/band.jpg" alt="">
        </div>
    </div>
    <div id="riding" class="bg-modal riding-modal">
        <div class="bg-modal-container">
            <div class="bg-close" id="close3">+</div>
            <p>No winter is complete without spending time in the mountains. Snowboarding is when I feel the freest. It's a way I can creatively express myself. It's my favorite way to escape some of the harsher realities of life and enjoy being in the moment. I love every aspect of the sport, from backcountry lines to sliding across rails. I always have a smile on my face when I'm snowboarding.</p>
            <img src="img/snowboarding.jpg" alt="">
        </div>
    </div>
<!-- end modal section -->

</body>
<script type='text/javascript' src="/js/app.js"></script>
<?php 
    include('footer.php')
?>