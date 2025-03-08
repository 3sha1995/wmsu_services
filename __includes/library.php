<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU Library Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        <?php require_once '../css/library.css'; ?>
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
    <section class="library-section">
    <div class="library-container">
        <div class="library-image">
            <img src="../imgs/alumni.jpg" alt="Library">
        </div>
        <div class="library-content">
            <h2 class="library-title">Library</h2>
            <p class="library-text">
                Our scholarship and financial aid programs are designed to recognize academic excellence, 
                support students with financial need, and promote diversity within our campus community.
            </p>
            <p class="library-text">
                We are committed to making education accessible to all qualified students by providing assistance 
                with tuition, books, housing, and other educational expenses.
            </p>
        </div>
    </div>
</section>
<section class="library-services">
<h2 class="library-facilities-title">FACILITIES</h2>
   </div>
    <div class="library-card">
        <div class="library-thumbnail">
            <img src="https://via.placeholder.com/340x200" alt="Modern Facilities">
        </div>
        <div class="library-card-content">
            <h3 class="library-card-title">Modern Facilities</h3>
            <p>Our library features modern facilities, including quiet study areas, group discussion rooms, and computer workstations.</p>
        </div>
    </div>

    <div class="library-card">
        <div class="library-thumbnail">
            <img src="../imgs/alumni.jpg" alt="Extensive Resources">
        </div>
        <div class="library-card-content">
            <h3 class="library-card-title">Extensive Resources</h3>
            <p>Access thousands of books, journals, and digital resources to support your academic journey and research needs.</p>
        </div>
    </div>
</section>

    <section class="library-services-section">
        <h2 class="library-services-title">What Does It Provide?</h2>
        <p class="library-services-description">Our library offers a comprehensive range of services to support your academic and research needs.</p>
        
        <div class="library-services-container">
            <div class="service-card">
                <i class="fas fa-book-open"></i>
                <h3>Physical & Digital Resources</h3>
                <p>Access to books, journals, theses, and research papers.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-database"></i>
                <h3>Online Database Access</h3>
                <p>E-books, academic journals, and research repositories.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-users"></i>
                <h3>Study Spaces & Discussion Rooms</h3>
                <p>Quiet areas for studying and collaborative spaces for group discussions.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-wifi"></i>
                <h3>Computer & Internet Access</h3>
                <p>Workstations for research and digital learning.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-question-circle"></i>
                <h3>Reference & Research Assistance</h3>
                <p>Librarians to help with research and citations.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-graduation-cap"></i>
                <h3>Library Orientation & Workshops</h3>
                <p>Training sessions on research skills and database usage.</p>
            </div>
        </div>
    </section>
    <section class="library-operating-hours-section">
     <div class="container">
         <h2 class="section-title">Operating Hours</h2>

        <div class="toggle-box" onclick="showSchedule()">
        Click to View Schedule 📅
    </div>

        <div id="scheduleBox" class="schedule-box">
        <h3 class="schedule-title">Library Schedule</h3>
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

<section class="library-contact-section">
    <h2 class="library-contact-title">Contact & <span>Officers in Charge</span></h2>

    <div class="library-officers-container">
        <div class="library-officer-card">
            <div class="profile-circle"></div>
            <h4>DR. SARAH JOHNSON</h4>
            <p class="position">Director of Financial Aid</p>
            <p class="email">📧 sjohnson@university.edu</p>
            <p class="phone">📞 (555) 123-4567</p>
            <p class="location">🏢 Financial Aid Building, Room 201</p>
        </div>

        <div class="library-officer-card">
            <div class="profile-circle"></div>
            <h4>MR. JAMES CARTER</h4>
            <p class="position">Library Manager</p>
            <p class="email">📧 jcarter@university.edu</p>
            <p class="phone">📞 (555) 987-6543</p>
            <p class="location">🏢 Main Library, Room 105</p>
        </div>

        <div class="library-officer-card">
            <div class="profile-circle"></div>
            <h4>MS. LINDA SMITH</h4>
            <p class="position">Assistant Librarian</p>
            <p class="email">📧 lsmith@university.edu</p>
            <p class="phone">📞 (555) 555-2020</p>
            <p class="location">🏢 Library Help Desk</p>
        </div>
    </div>
</section>

<section class="library-info-section">
    <h2 class="library-info-title">Location & Contact</h2>

    <div class="library-info-container">
                <div class="library-contact-card">
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span><strong>Location:</strong> WMSU Main Campus, Library Building</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span><strong>Email:</strong> library@wmsu.edu.ph</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <span><strong>Phone:</strong> (XXX) XXX-XXXX</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-globe"></i>
                <span><strong>Website:</strong> <a href="#">Visit Library Website</a></span>
            </div>
        </div>

                <div class="library-map-card">
            <div class="library-map-placeholder">
                <i class="fas fa-map-marker-alt map-icon"></i>
                <p>Click to view on Google Maps</p>
            </div>
        </div>
    </div>
</section>

    <script src="../js/library.js"></script>
</body>
</html> 