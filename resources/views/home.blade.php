<!DOCTYPE html>
<html> 
<head>
    <title>Rafli Triofansyah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header-banner">  
        <nav class="top-navigation">
            <a href="/about">About</a> | <a href="/contact">Contact</a>
        </nav>

        <div class="what">
        <section class="what-text">
        <h1>My Personal Portofolio</h1>
        <article>Information Systems students | passionate about cloud computing | Amikom Purwokerto University</article>
        </section>

        <img src="{{ asset('/images/profile.jpg') }}" alt="Profile">
        </div>

    </header>

    <main>
        <section class="who">
            <h2>Who Am I?</h2>
            <article>
            I am currently a 6th semester Information Systems student at Amikom Purwokerto University, with a strong academic and practical focus in backend development and cloud computing. Over the course of my studies, I have developed a particular interest in cloud infrastructure, especially using Google Cloud Platform (GCP), where I’ve been actively exploring services such as Compute Engine, App Engine, Cloud Functions, Cloud Storage, Firestore, and more.

My passion for backend technologies has driven me to gain hands-on experience with deploying and managing scalable applications in the cloud. I have worked on several academic and independent projects that integrate server-side logic, database management, and cloud services to build efficient, secure, and responsive systems.

In addition to my backend expertise, I am currently sharpening my frontend development skills to become a more well-rounded developer. I’m learning to create intuitive and user-friendly interfaces using modern tools and frameworks, aiming to bridge the gap between frontend and backend for seamless full-stack development.

My goal is to continue growing as a cloud-native developer, combining system design, DevOps principles, and application development to build robust solutions that meet real-world business needs.
            </article>
       </section>
    </main>

    <footer>

    </footer>
</body>
</html>
