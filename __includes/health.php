<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU Health Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        <?php require_once '../css/health.css'; ?>
        <?php require_once '../css/heroall.css'; ?>
    </style>
</head>
<body>
<section class="hero">
    <div class="hero-overlay"></div>     <div class="hero-content">
        <h1 class="hero-title">Empowering Minds, Shaping Futures</h1>
        <p class="hero-subtitle">Explore the services and opportunities we offer to help you excel in your academic and personal journey.</p>
        <a href="#services" class="hero-btn">Explore Services</a>
    </div>
    <div class="wave-divider"></div> </section>


    <section class="health-services">
        <div class="container-health">
            <h2 class="section-title">WHAT IS UNIVERSITY HEALTH SERVICES?</h2>
            <div class="content-wrapper">
                <div class="text-content scroll-reveal-left">
                    <p>The University Health Services provides comprehensive medical assistance, consultations, and preventive healthcare to students, faculty, and staff.</p>
                    <p>We offer basic treatment for illnesses, first aid, and health education programs designed to promote wellness across campus.</p>
                    <p>Our team of qualified healthcare professionals is dedicated to supporting your physical and mental well-being throughout your university journey.</p>
                </div>
                <div class="image-content scroll-reveal-right">
                    <img src="../imgs/wmsu1.jpg" alt="Students Studying" class="health-image">
                </div>
            </div>
        </div>
    </section>



    <section class="services-section">
        <div class="services-container">
            <h2 class="services-title">OUR SERVICES</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon"><i>&#9877;</i></div>
                    <h3 class="service-title">Presidential Scholarship</h3>
                    <p>Check-ups for minor illnesses and health concerns. Our healthcare providers can diagnose and treat common conditions, prescribe medications, and refer you to specialists when necessary.</p>
                </div>
                <div class="service-card">
                    <div class="icon"><i>&#9877;</i></div>
                    <h3 class="service-title">Presidential Scholarship</h3>
                    <p>Check-ups for minor illnesses and health concerns. Our healthcare providers can diagnose and treat common conditions, prescribe medications, and refer you to specialists when necessary.</p>
                </div>
                <div class="service-card">
                    <div class="icon"><i>&#9877;</i></div>
                    <h3 class="service-title">Presidential Scholarship</h3>
                    <p>Check-ups for minor illnesses and health concerns. Our healthcare providers can diagnose and treat common conditions, prescribe medications, and refer you to specialists when necessary.</p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="operating-hours-section">
    <div class="container">
        <h2 class="schedule-section-title">OPERATING HOURS</h2>
                <div class="toggle-box" onclick="showSchedule()">
        Click to View Schedule 📅
        </div>

                <div class="schedule-box" id="scheduleBox">
            <h3 class="schedule-title">SCHEDULE</h3>
            <div class="schedule-wrapper">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8:00 AM - 5:00 PM</td>
                            <td>8:00 AM - 5:00 PM</td>
                            <td>8:00 AM - 5:00 PM</td>
                            <td>8:00 AM - 5:00 PM</td>
                            <td>8:00 AM - 5:00 PM</td>
                            <td>9:00 AM - 3:00 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="health-contact-section">
    <h2 class="health-contact-title">Contact & <span>Officers in Charge</span></h2>

    <div class="health-officers-container">
        <div class="health-officer-card">
            <div class="profile-circle"></div>
            <h4>DR. SARAH JOHNSON</h4>
            <p class="position">Director of Financial Aid</p>
            <p class="email">📧 sjohnson@university.edu</p>
            <p class="phone">📞 (555) 123-4567</p>
            <p class="location">🏢 Financial Aid Building, Room 201</p>
        </div>

        <div class="health-officer-card">
            <div class="profile-circle"></div>
            <h4>MR. JAMES CARTER</h4>
            <p class="position">Library Manager</p>
            <p class="email">📧 jcarter@university.edu</p>
            <p class="phone">📞 (555) 987-6543</p>
            <p class="location">🏢 Main Library, Room 105</p>
        </div>

        <div class="health-officer-card">
            <div class="profile-circle"></div>
            <h4>MS. LINDA SMITH</h4>
            <p class="position">Assistant Librarian</p>
            <p class="email">📧 lsmith@university.edu</p>
            <p class="phone">📞 (555) 555-2020</p>
            <p class="location">🏢 Library Help Desk</p>
        </div>
    </div>
</section>

<section class="health-info-section">
    <h2 class="health-info-title">Location & Contact</h2>

    <div class="health-info-container">
                <div class="health-contact-card">
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span><strong>Location:</strong> Normal Road, Baliwasan, Zamboanga City, Philippines</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span><strong>Email:</strong> scholar@wmsu.edu.ph</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <span><strong>Phone:</strong> 0960 889 8603</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-globe"></i>
                <span><strong>Website:</strong> <a href="#">Visit Health Services Website</a></span>
            </div>
        </div>

                <div class="health-map-card">
            <div class="health-map-placeholder">
                <i class="fas fa-map-marker-alt map-icon"></i>
                <p>Click to view on Google Maps</p>
            </div>
        </div>
    </div>
</section>

<script src="../js/health.js"></script>
</body>
</html> 