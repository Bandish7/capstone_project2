<?php
include('header.php');
?>
<main>
    <div class="hero-wrapper">
        <div class="hero-content">
            <h3 class="thinheader">
                Welcome to
            </h3>
            <h1 class="mainheader">Hog <span>Heaven</span></h1>
            <p class="normaltext">“Find Your Zen, One Click Away”</p>
            <button onclick="window.location.href='form.php';" type="button">Book Appointment</button>
        </div>
    </div>
    <section id="features">
        <div class="sectiontitle">
            <h3 class="titlesubhead">Features</h3>
            <h2 class="titlehead">Our Features and Services</h2>
        </div>
        <div class="item-wrapper">

            <div class="itembox">
                <div class="image">
                    <img src="./assets/images/Counselling Image.png" alt="">
                </div>
                <div class="itemcontent">
                    <h4 class="global-body-title">Online Counselling</h4>
                    <p class="global-body-text">Offer workshops, training sessions, or continuing education programs
                        for mental health professionals, educators, employers, or community organizations.</p>
                </div>
                <button class="itembox-button" onclick="openModal('modal1')">Learn More</button>
            </div>


            <div class="itembox">
                <div class="image">
                    <img src="./assets/images/mental health.png" alt="">
                </div>
                <div class="itemcontent">
                    <h4 class="global-body-title">Mental Health Assessment</h4>
                    <p class="global-body-text">Offer workshops, training sessions, or continuing education programs
                        for mental health professionals, educators, employers, or community organizations.</p>
                </div>
                <button class="itembox-button" onclick="openModal('modal2')">Learn More</button>
            </div>


            <div class="itembox">
                <div class="image">
                    <img src="./assets/images/training.png" alt="">
                </div>
                <div class="itemcontent">
                    <h4 class="global-body-title">Workshop and Training</h4>
                    <p class="global-body-text">Offer workshops, training sessions, or continuing education programs
                        for mental health professionals, educators, employers, or community organizations.</p>
                </div>
                <button class="itembox-button" onclick="openModal('modal3')">Learn More</button>
            </div>
        </div>
    </section>
    <!-- Modal 1 -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <img src="./assets/images/Counselling Image.png" alt="">
            <h2>Online Counselling</h2>
            <p>Offer workshops, training sessions, or continuing education programs for mental health professionals, educators, employers, or community organizations. If you need our counselling you can simply book appointment with our counsellor with out any cost</p>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <img src="./assets/images/mental health.png" alt="">
            <h2>Mental Health Assessment</h2>
            <p>In-depth information on mental health assessments, including process and outcomes for different types of evaluations.</p>
        </div>
    </div>

    <!-- Modal 3 -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <img src="./assets/images/training.png" alt="">
            <h2>Workshop and Training</h2>
            <p>Comprehensive workshops and training sessions offered to help improve mental health awareness and skills for professionals.</p>
        </div>
    </div>
    </section>
    <section id="features-change">
        <div class="sectiontitle">
            <h3 class="titlesubhead">Team</h3>
            <h2 class="titlehead">Meet Our Team</h2>
        </div>
        <div class="team-wrapper">
            <div class="member-box">
                <div class="member-image">
                    <img src="./assets/images/bandish.png" alt="">
                </div>
                <div class="member-detail">
                    <h4 class="global-body-title">Bandish Basnet</h4>
                    <p class="global-body-text">Full Stack Developer</p>
                    <div class="socialmedia-links">
                        <a target="_blank" href="https://www.linkedin.com/in/bandish-basnet-858550230/"><i class="fa-brands fa-linkedin-in" style="color: #0B66C2;"></i></a>
                        <a target="_blank" href="https://github.com/Bandish7"><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                        <a target="_blank" href="https://bandishbasnet.com.np/"><i class="fa-solid fa-globe" style="color: #000000;"></i></a>
                    </div>

                </div>
            </div>
            <div class="member-box">
                <div class="member-image">
                    <img src="./assets/images/Swikriti.jpg" alt="">
                </div>
                <div class="member-detail">
                    <h4 class="global-body-title">Swikriti KC</h4>
                    <p class="global-body-text">Project Manager</p>
                    <div class="socialmedia-links">
                        <a href=""><i class="fa-brands fa-linkedin-in" style="color: #0B66C2;"></i></a>
                        <a href=""><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                        <a href=""><i class="fa-solid fa-globe" style="color: #000000;"></i></a>
                    </div>

                </div>
            </div>
            <div class="member-box">
                <div class="member-image">
                    <img src="./assets/images/Anusha.jpg" alt="">
                </div>
                <div class="member-detail">
                    <h4 class="global-body-title">Anusha Khadka</h4>
                    <p class="global-body-text">Database Engineer</p>
                    <div class="socialmedia-links">
                        <a href=""><i class="fa-brands fa-linkedin-in" style="color: #0B66C2;"></i></a>
                        <a href=""><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                        <a href=""><i class="fa-solid fa-globe" style="color: #000000;"></i></a>
                    </div>

                </div>
            </div>
            <div class="member-box">
                <div class="member-image">
                    <img src="./assets/images/yukshya_new.jpg" alt="">
                </div>
                <div class="member-detail">
                    <h4 class="global-body-title">Yuksha Shrestha</h4>
                    <p class="global-body-text">Product Owner</p>
                    <div class="socialmedia-links">
                        <a href=""><i class="fa-brands fa-linkedin-in" style="color: #0B66C2;"></i></a>
                        <a href=""><i class="fa-brands fa-github" style="color: #000000;"></i></a>
                        <a href=""><i class="fa-solid fa-globe" style="color: #000000;"></i></a>
                    </div>

                </div>
            </div>

        </div>
    </section>

        <section id="features-article">
    <div class="sectiontitle">
        <h3 class="titlesubhead">Articles</h3>
        <h2 class="titlehead">Our latest blog</h2>
    </div>
    <div class="item-wrapper">
        <!-- First Article -->
        <div class="itembox">
            <div class="image">
                <img src="./assets/images/relation.jpg" alt="">
            </div>
            <div class="itemcontent">
                <h4 class="global-body-title">Developing a Compassionate Relationship</h4>
                <p class="global-body-text">Offer workshops, training sessions, or continuing education programs for mental health professionals, educators, employers, or community organizations.</p>
            </div>
            <button class="itembox-button" onclick="openModal('modal7')">Read More</button>
        </div>

        <!-- Second Article -->
        <div class="itembox">
            <div class="image">
                <img src="./assets/images/dayoff anxiety.jpg" alt="">
            </div>
            <div class="itemcontent">
                <h4 class="global-body-title">Day Off Anxiety</h4>
                <p class="global-body-text">Offer workshops, training sessions, or continuing education programs for mental health professionals, educators, employers, or community organizations.</p>
            </div>
            <button class="itembox-button" onclick="openModal('modal8')">Read More</button>
        </div>

        <!-- Third Article -->
        <div class="itembox">
            <div class="image">
                <img src="./assets/images/cultivate.jpg" alt="">
            </div>
            <div class="itemcontent">
                <h4 class="global-body-title">Cultivate Modern Happiness</h4>
                <p class="global-body-text">Offer workshops, training sessions, or continuing education programs for mental health professionals, educators, employers, or community organizations.</p>
            </div>
            <button class="itembox-button" onclick="openModal('modal9')">Read More</button>
        </div>
    </div>
</section>

<!-- Modal for 1st Article -->
<div id="modal7" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal7')">&times;</span>
        <h2>Developing a Compassionate Relationship</h2>
        <p>In this article, we explore how to build a compassionate relationship with others, focusing on emotional intelligence, empathy, and open communication. It offers insights into understanding the needs of others and fostering stronger connections.</p>
    </div>
</div>

<!-- Modal for 2nd Article -->
<div id="modal8" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal8')">&times;</span>
        <h2>Day Off Anxiety</h2>
        <p>This article discusses the phenomenon of day-off anxiety, a feeling of unease many people experience when they are not working. It delves into how to manage these emotions and make the most of your time off for mental and physical relaxation.</p>
    </div>
</div>

<!-- Modal for 3rd Article -->
<div id="modal9" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal9')">&times;</span>
        <h2>Cultivate Modern Happiness</h2>
        <p>Cultivating happiness in modern times requires a combination of mindfulness, personal development, and emotional resilience. This article offers practical steps and insights into how to navigate the challenges of modern life while maintaining a sense of well-being.</p>
    </div>
</div>

        <section class="banner">
        <div class="banner-content">
            <h4 class="global-body-title" style=" font-weight: 500; font-size: 20px; ">If you are in trouble need our help, Contact Us!</h4>
            <button onclick="window.location.href='form.html';" type="button" style="background-color:#8C0053; font-weight: 400;">Schedule Now</button>
        </div>
    </section>


    <section id="features-work">
        <div class="sectiontitle">
            <h3 class="titlesubhead">Stages</h3>
            <h2 class="titlehead">How it Works</h2>
        </div>
        <div class="item-wrapper">
            <!-- First Phase -->
            <div class="itembox">
                <div class="image">
                    <img src="./assets/images/Brain.png" alt="">
                </div>
                <div class="itemcontent">
                    <h4 class="global-body-title">1st Phase</h4>
                    <p class="global-body-text">Offer workshops, training sessions, or continuing education programs
                        for mental health professionals, educators, employers, or community organizations.</p>
                </div>
                <button class="itembox-button" onclick="openModal('modal4')">Learn More</button>
            </div>

            <!-- Second Phase -->
            <div class="itembox">
                <div class="image">
                    <img src="./assets/images/Brain.png" alt="">
                </div>
                <div class="itemcontent">
                    <h4 class="global-body-title">2nd Phase</h4>
                    <p class="global-body-text">Offer workshops, training sessions, or continuing education programs
                        for mental health professionals, educators, employers, or community organizations.</p>
                </div>
                <button class="itembox-button" onclick="openModal('modal5')">Learn More</button>
            </div>

            <!-- Third Phase -->
            <div class="itembox">
                <div class="image">
                    <img src="./assets/images/Brain.png" alt="">
                </div>
                <div class="itemcontent">
                    <h4 class="global-body-title">3rd Phase</h4>
                    <p class="global-body-text">Offer workshops, training sessions, or continuing education programs
                        for mental health professionals, educators, employers, or community organizations.</p>
                </div>
                <button class="itembox-button" onclick="openModal('modal6')">Learn More</button>
            </div>
        </div>
    </section>

    <!-- Modal for 1st Phase -->
    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h2>1st Phase: Understanding</h2>
            <p>In the first phase, we focus on understanding the core issues through workshops and personalized assessments.</p>
        </div>
    </div>

    <!-- Modal for 2nd Phase -->
    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h2>2nd Phase: Application</h2>
            <p>The second phase is about applying practical solutions through hands-on training and guidance.</p>
        </div>
    </div>

    <!-- Modal for 3rd Phase -->
    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h2>3rd Phase: Transformation</h2>
            <p>The third phase leads to transformation, where participants implement lasting changes based on what they have learned.</p>
        </div>
    </div>

</main>
<?php
include('footer.php')
?>