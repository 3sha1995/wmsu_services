<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        <?php require_once '../css/guidance.css'; ?>
        <?php require_once '../css/heroall.css'; ?>
    </style>
</head>
<body>
<section class="hero">
    <div class="hero-overlay"></div> 
    <div class="hero-content">
        <h1 class="hero-title">Empowering Minds, Shaping Futures</h1>
        <p class="hero-subtitle">Explore the services and opportunities we offer to help you excel in your academic and personal journey.</p>
        <a href="#services" class="hero-btn">Explore Services</a>
    </div>
    <div class="wave-divider"></div> 
</section>
    <section class="services-section">
        <h2 class="section-title">Our Services</h2>
        <p class="section-description">
            We offer a comprehensive range of services designed to support your academic success, 
            career development, and personal well-being.
        </p>
        <div class="services-container">
            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3 class="service-title">Academic Counseling</h3>
                <p class="service-description">
                    Get support with study skills, course selection, and overcoming academic challenges.
                </p>
                <a href="#" class="service-link">Learn more →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">💼</div>
                <h3 class="service-title">Career Guidance</h3>
                <p class="service-description">
                    Explore career options, build your resume, and prepare for job interviews.
                </p>
                <a href="#" class="service-link">Learn more →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">❤️</div>
                <h3 class="service-title">Mental Health Support</h3>
                <p class="service-description">
                    Learn strategies for managing stress, anxiety, and maintaining emotional well-being.
                </p>
                <a href="#" class="service-link">Learn more →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🤝</div>
                <h3 class="service-title">Peer Counseling</h3>
                <p class="service-description">
                    Connect with trained peer counselors and join supportive group sessions.
                </p>
                <a href="#" class="service-link">Learn more →</a>
            </div>
        </div>
    </section>
    <section class="guidance-section">
    <div class="guidance-container">
        <div class="guidance-text-container">
            <h2 class="guidance-title">Personalized Guidance for Your Success</h2>
            <p class="guidance-description">
                Our mentorship programs provide students with the support and advice they need to excel academically 
                and personally. We connect students with experienced mentors to navigate challenges and opportunities effectively.
            </p>
        </div>
        <div class="guidance-image">
            <img src="../imgs/student.jpg" alt="Guidance Program">
        </div>
    </div>
</section>

    <section class="mental-wellness-section">
        <h2 class="section-title">Mental Wellness Resources</h2>
        <p class="section-subtitle">Explore our collection of articles, videos, and self-help resources to support your mental well-being.</p>

        <div class="resource-tabs">
            <button class="tab-btn">All</button>
            <button class="tab-btn active">Articles</button>
            <button class="tab-btn">Videos</button>
            <button class="tab-btn">Self-Help</button>
        </div>

        <div class="resource-container">
            <div class="resource-card">
                <div class="image-placeholder"></div>
                <div class="resource-content">
                    <span class="resource-tag">📄 Article</span>
                    <h3 class="resource-title">Managing Exam Stress</h3>
                    <p class="resource-description">Learn effective strategies to manage stress during exam periods.</p>
                    <button class="resource-btn">View Resource</button>
                </div>
            </div>

            <div class="resource-card">
                <div class="image-placeholder"></div>
                <div class="resource-content">
                    <span class="resource-tag">📄 Article</span>
                    <h3 class="resource-title">Building Healthy Relationships</h3>
                    <p class="resource-description">Tips for developing and maintaining healthy relationships in college.</p>
                    <button class="resource-btn">View Resource</button>
                </div>
            </div>

            <div class="resource-card">
                <div class="image-placeholder"></div>
                <div class="resource-content">
                    <span class="resource-tag">📄 Article</span>
                    <h3 class="resource-title">Coping with Homesickness</h3>
                    <p class="resource-description">Strategies to deal with homesickness when you're away from family.</p>
                    <button class="resource-btn">View Resource</button>
                </div>
            </div>
        </div>
    </section>
   
    <section class="guidance-contact-section">
    <h2 class="mentorship-title">Guidance & <span>Mentors in Charge</span></h2>

    <div class="mentors-container">
        <div class="mentor-card">
            <div class="mentor-profile-circle"></div>
            <h4>DR. SARAH JOHNSON</h4>
            <p class="mentor-position">Head of Student Guidance</p>
            <p class="mentor-email">📧 sjohnson@university.edu</p>
            <p class="mentor-phone">📞 (555) 123-4567</p>
            <p class="mentor-location">🏢 Student Support Office, Room 201</p>
        </div>

        <div class="mentor-card">
            <div class="mentor-profile-circle"></div>
            <h4>MR. ROBERT WILLIAMS</h4>
            <p class="mentor-position">Career Counselor</p>
            <p class="mentor-email">📧 rwilliams@university.edu</p>
            <p class="mentor-phone">📞 (555) 234-5678</p>
            <p class="mentor-location">🏢 Career Services, Room 305</p>
        </div>

        <div class="mentor-card">
            <div class="mentor-profile-circle"></div>
            <h4>MS. LISA ADAMS</h4>
            <p class="mentor-position">Mental Health Advisor</p>
            <p class="mentor-email">📧 ladams@university.edu</p>
            <p class="mentor-phone">📞 (555) 789-1011</p>
            <p class="mentor-location">🏢 Wellness Center, Room 102</p>
        </div>
    </div>
</section>


<section class="guidance-contact">
    <div class="guidance-contact-card">
        <h3 class="guidance-contact-title">Contact Us</h3>
        <div class="guidance-info">
            <div class="guidance-item">
                <i class="fas fa-facebook-square guidance-icon"></i>
                <a href="https://www.facebook.com/wmsu.cjpc" target="_blank">
                    Facebook Page
                </a>
            </div>
            <div class="guidance-item">
                <i class="fas fa-envelope guidance-icon"></i>
                <p>cppeso.wmsu2019@gmail.com</p>
            </div>
            <div class="guidance-item">
                <i class="fas fa-map-marker-alt guidance-icon"></i>
                <p>2/F Executive Building, WMSU, Baliwasan, Zamboanga City</p>
            </div>
        </div>
    </div>
</section>


    <script src="../js/guidance.js"></script>
</body>
</html>
