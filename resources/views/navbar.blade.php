<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

/* Navbar Styles */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 1rem 2rem;
}

.logo {
    color: #fff;
    font-size: 1.5rem;
    font-weight: bold;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-left: 1rem;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #f39c12;
}

/* Hamburger Menu */
.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.hamburger .line {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 4px 0;
    transition: all 0.3s ease;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .nav-links {
        position: absolute;
        top: 60px;
        right: 0;
        height: 100vh;
        background-color: #333;
        flex-direction: column;
        width: 100%;
        align-items: center;
        justify-content: center;
        transform: translateX(100%);
        transition: transform 0.3s ease-in;
    }

    .nav-links li {
        margin: 1rem 0;
    }

    .hamburger {
        display: flex;
    }

    .nav-links.active {
        transform: translateX(0);
    }
}
</style>
<body>
    <nav class="navbar">
        <div class="logo">MyWebsite</div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('userview') }}">user info</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
</body>
</html>
