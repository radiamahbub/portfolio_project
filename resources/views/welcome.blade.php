@extends('layouts.userLayout')

@section('title','Radia Mahbub')
@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/image/Untitled design (4).png" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Radia Mahbub</h2>
        <p>HI! I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Painter">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        <div>
        <a href="{{ asset('assets/cv/RadiaMahbub_CV.pdf') }}" download class="btn btn-outline-light d-inline-flex align-items-center gap-2 mt-3"> Resume <i class="bi bi-download"></i></a>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <h2 class="text-center">Introducing Myself</h2>
        <p class="text-center">Turning ideas into clean, powerful code every day.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/image/IMG-20260130-WA0216-Picsart-AiImageEnhancer.jpg" class="img-fluid" alt="" style="height: 420px; float: right; margin-right: 20px;">
          </div>
          <div class="col-lg-8 content">
            <h2>Junior Web Developer<i class="bi bi-exclamation-lg"></i></h2>
            <p class="fst-italic py-3" style="text-align: justify;">
             With an artistic sensibility and natural curiosity, enjoying the process of turning ideas into functional and visually thoughtful web applications.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Birthday:</strong> <span>19th Feb 1998</span></li>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Phone:</strong> <span>+880 1987029855</span></li>
                  <li><i class="bi bi-diamond-fill"></i> <strong>City:</strong> <span>Dhaka, Bangladesh</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Age:</strong> <span>28</span></li>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Degree:</strong> <span>B.Sc. in CSE</span></li>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Email:</strong> <span>iamr.adia2629@gmail.com</span></li>
                  <li><i class="bi bi-diamond-fill"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3" style="text-align: justify;">
              I hold a background in Computer Science Engineering and have hands-on experience in full-stack web development, particularly using Laravel & Django. Passionate about learning, creativity, and giving back, I draw inspiration from painting, reading, and volunteering to approach problems thoughtfully and innovatively.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-calendar-heart"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>+ Year Experience</strong> <span>in IT Domain</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-cast"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>Advance, recently done</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>Daily, Lifelong</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-pencil-square"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Tools</strong> <span>Bare Minimum</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Skills</h2>
        <p class="text-center">Crafting code that’s sharp, sleek, and unstoppable</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML/CSS</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Python/AI</span> <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>MySQL/Databases</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Wordpress</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Resume</h2>
        <p class="text-center" style="text-align: justify;">I learn fast, adapt faster, and never settle for ordinary—driven by curiosity, guided by creativity, and fueled by relentless ambition.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <h3 class="resume-title">Profile</h3>
            <div class="resume-item pb-0">
              <h4>Radia Mahbub</h4>
              <p style="text-align:justify"><em>Aspiring Junior Web Developer with 3+ years of experience building responsive, user-focused applications. Skilled in Laravel, Django, React, JavaScript, MySQL, and Git, with a strong full-stack foundation and a keen interest in advanced web technologies and AI.</em></p>
              <ul>
                <li>Dhaka, Bangladesh</li>
                <li>(+880) 1987-029855</li>
                <li>iamr.adia2629@gmail.com</li>
                <li>https://github.com/Radia-19</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Skills <i class="bi bi-award"></i></h3>
            <div class="resume-item  pb-0">
              <h4>Technical Skills:</h4>
                <ul>
                <li><strong>Programming:</strong> Python, PHP, JavaScript ES6</li>
                <li><strong>Frameworks & Libraries:</strong> Django, Flask, Laravel, Bootstrap, React</li>
                <li><strong>Frontend:</strong> HTML5, CSS3</li>
                <li><strong>Database:</strong> MySQL</li>
                <li><strong>Tools:</strong> Git, GitHub, VS Code</li>
                <li><strong>Web Technologies:</strong> AJAX, JSON</li>
                <li><strong>CMS & SEO:</strong> WordPress, SEO</li>
                <li><strong>Core Concepts:</strong> MVC, REST API, OOP</li>
                </ul>

            <h4>Soft Skills:</h4>
            	<ul>
                <li>Problem-Solving</li>
                <li>Communication</li>
                <li>Teamwork</li>
                </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education <i class="bi bi-mortarboard"></i></h3>
            <div class="resume-item  pb-0">
              <h4>Bachelor of Science</h4>
              <h5>Computer Science &amp; Engineering</h5>
              <p><em>Bangladesh University | 2021</em></p>
              <p>CGPA: 3.47/4.0</p>
            </div><!-- Edn Resume Item -->

             <h3 class="resume-title">Certification <i class="bi bi-bookmark-heart"></i></h3>
            <div class="resume-item  pb-0">
              <h4>Advance Web Development</h4>
              <h5>CodersTrust Bangladesh</h5>
              <p><em>December 2022 - July 2023</em></p>

              <h4>Responsive Web Design</h4>
              <h5>CodersTrust Bangladesh</h5>
              <p><em>April 2022 - August 2022</em></p>

              <h4>IELTS (Academic)</h4>
              <p><em>July 2025</em></p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

            <h3 class="resume-title">Projects</h3>
            <div class="resume-item  pb-0">
              <h4>Disease Prediction System</h4>
                <ul>
                <li>Developed a system to predict diseases from symptoms using machine learning.</li>
                <li>Handled data preprocessing, model training, and evaluation.</li>
                <li><strong>Technologies:</strong> Python, Scikit-learn, Pandas, NumPy, Flask.</li>
                </ul>

                <h4>Learning Management System (LMS)</h4>
                <ul>
                <li>Built a web-based LMS to manage courses, users, and content.</li>
                <li>Developed responsive UI with React and backend APIs with Laravel, integrated with MySQL.</li>
                <li><strong>Features:</strong> User authentication, course enrollment, progress tracking.</li>
                </ul>

                <h4>Real Estate Property Management System</h4>
                <ul>
                <li>Created a web app to manage properties, clients, and transactions.</li>
                <li>Built frontend with React and backend with Laravel, integrated with MySQL.</li>
                <li><strong>Features:</strong> Property listings, client management, booking, payment tracking.</li>
                </ul>

                <p class="text-center">❝ These are the top three. Have More ❞</p>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item pb-0">
              <h4>Junior Web Developer - MAC Planners & Builders Ltd</h4>
              <h5>January 2023 – Present</h5>
              <p><em>House # 60/1 (4th Floor), Road # 4/A Dhanmondi, Dhaka-1209</em></p>
               <ul>
                <li>Developed, tested, and maintained full-stack web applications using Python, PHP, React, MySQL, and JavaScript ES6.</li>
                <li>Implemented responsive UI/UX designs with Bootstrap and Tailwind CSS, ensuring cross-device compatibility.</li>
                <li>Collaborated with product managers, designers, and QA teams to deliver projects on time and meet client requirements.</li>
                <li>Optimized application performance, debugged issues, and maintained clean, modular, and scalable code.</li>
                <li>Integrated RESTful APIs and third-party services to enhance application functionality.</li>
                </ul>

            </div><!-- Edn Resume Item -->

            <div class="resume-item  pb-0">
              <h4>LDA (Part-Time), Islami Mission, Islamic Foundation Ltd </h4>
              <h5>February 2019 – November 2021</h5>
              <p><em>Islamic Foundation, Sayed Mahbub Morshed Rd, Dhaka 1207</em></p>
              <p>Organized files, prepared reports, handled data entry, scheduled meetings, and managed documents and financial records using Word, Excel, and Office tools.</p>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Portfolio</h2>
        <p class="text-center">Naturally curious and detail-oriented, I approach challenges with thoughtfulness and care. I enjoy learning deeply, exploring creative solutions, and growing through every experience. Grounded, reflective, and purposeful, I focus on meaningful work and continuous improvement.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Design</li>
            <li data-filter=".filter-branding">Development</li>
            <li data-filter=".filter-books">Paintings</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Service Offers</h2>
        <p class="text-center">I build web apps that don’t just work—they impress and make websites run smoother and look smarter..</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Full-Stack Web Development</a></h4>
              <p class="description">Building responsive, scalable web applications using Laravel, Django, and modern frontend frameworks.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Backend & API Development</a></h4>
              <p class="description">Creating secure, efficient backend systems and RESTful APIs for seamless functionality</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Frontend & UI Design</a></h4>
              <p class="description">Designing intuitive, user-friendly interfaces with React, JavaScript, HTML, and CSS</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Database Design & Management</a></h4>
              <p class="description">Structuring and optimizing MySQL databases for performance and reliability</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Machine Learning Solutions</a></h4>
              <p class="description">Developing predictive models and data-driven applications using Python, Scikit-learn, and Pandas</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">
Web Deployment & Maintenance</a></h4>
              <p class="description">Ensuring applications are live, secure, and maintainable with optimal performance</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Gallery</h2>
        <p class="text-center">It’s not just escape — it’s perspective</p>
        <p class="text-center">My Facebook Page Here: <a href="https://www.facebook.com/profile.php?id=100076308391726" class="facebook"> Artsy Radia <i class="bi bi-brush-fill"></i></a></p>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Art creates a space between reality and imagination. It slows us down, revealing details and perspectives we might otherwise miss. Through color, form, and texture, it encourages observation and reflection. It doesn’t remove us from the world, but shows it in a different light.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/image/art/20210625_000143.jpg" class="testimonial-img" alt="">
                <h3>Radia Mahbub</h3>
                <a href="https://www.facebook.com/profile.php?id=100076308391726" class="facebook"><i class="bi bi-brush-fill"></i></a>
                <h4>Acrylic Painting</h4>
              </div>
            </div><!-- End testimonial item  &amp; -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Art holds moments of pause in a busy world. It reframes familiar things, letting us see them freshly. Each stroke or shape carries meaning beyond words. It invites curiosity, reflection, and subtle understanding.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/image/art/20201224_232744.jpg" class="testimonial-img" alt="">
                <h3>Radia Mahbub</h3>
                <a href="https://www.facebook.com/profile.php?id=100076308391726" class="facebook"><i class="bi bi-brush-fill"></i></a>
                <h4>Sketch Art</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Through art, ordinary experiences gain depth. It blends observation with imagination, structure with freedom. Art opens a quiet dialogue between the viewer and the world. It reshapes perception without forcing conclusions</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/image/art/20220426_131824.jpg" class="testimonial-img" alt="">
                <h3>Radia Mahbub</h3>
                <a href="https://www.facebook.com/profile.php?id=100076308391726" class="facebook"><i class="bi bi-brush-fill"></i></a>
                <h4>Gouache Painting</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Art exists to make us notice what is often overlooked. It gives form to emotion, idea, and subtle detail. Through it, we experience the familiar differently. It creates perspective, reflection, and a calm, thoughtful pause</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/image/art/20210102_205217.jpg" class="testimonial-img" alt="">
                <h3>Radia Mahbub</h3>
                <a href="https://www.facebook.com/profile.php?id=100076308391726" class="facebook"><i class="bi bi-brush-fill"></i></a>
                <h4>Watercolor Art</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Art is where imagination meets reality. It offers a chance to step back and observe more closely. It reveals hidden patterns, nuances, and possibilities. In that space, perception shifts, and understanding quietly grows.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/image/art/20210308_124025.jpg" class="testimonial-img" alt="">
                <h3>Radia Mahbub</h3>
                <a href="https://www.facebook.com/profile.php?id=100076308391726" class="facebook"><i class="bi bi-brush-fill"></i></a>
                <h4>Wild Imagination</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h6 class="text-center">Contact with me</h6>
        <h2 class="text-center">Get in touch</h2>
        <p class="text-center" >I'd love to hear from you! If you have any questions, comments or feedback, please use the form below.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Zigatola, Dhaka-1209, Bangladesh</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+880 1987029855</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Me</h3>
                  <p>iamr.adia2629@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.23027394723!2d90.37307517391956!3d23.739166478678108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b900047843dd%3A0xa821be27d5d58221!2sZigatola%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1770574346165!5m2!1sen!2sbd"frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

@endsection




 {{-- <a href="assets/dev-icon.png" download="" class="px-10 py-2.5 rounded-full border border-gray-300 dark:border-white/25 hover:bg-slate-100/70 dark:hover:bg-darkHover flex items-center gap-2 bg-white dark:bg-transparent dark:text-grey">my resume <img src="assets/image/icons8-down-arrow-48.png" alt="" class="w-4 dark:invert"></a> --}}
        {{-- <a href="{{ asset('assets/cv/RadiaMahbub_CV.pdf') }}" download class="px-5">Resume <img src="assets/image/icons8-down-arrow-48.png" alt="" style="width:16px; height:16px;vertical-align:middle;"></a> --}}
{{-- <a href="{{ asset('assets/cv/RadiaMahbub_CV.pdf') }}"
        download
        class="btn btn-outline-light d-inline-flex align-items-center gap-2 mt-3">
        Resume
        <img src="assets/image/icons8-down-arrow-48.png" width="16" height="16" alt="">
        </a> --}}
{{-- <div class="divider-head">
            <div class="divider"></div>
        <h2 class="text-center">About Me</h2>
        <div class="divider"></div>
        </div> --}}


{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.23027394723!2d90.37307517391956!3d23.739166478678108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b900047843dd%3A0xa821be27d5d58221!2sZigatola%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1770574346165!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
{{-- <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center">Gallery</h2>
        <p class="text-center">It’s not just escape — it’s perspective</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}
