<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile</title>
    <link rel="stylesheet" href="styles8.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>


    <i class="fas fa-bars fa-2x" id="menu-icon"></i>

    <header>
        <div class="container">
            <h1>Welcome to the Alumni Network</h1>
            <nav id="menu" class="hidden">
                <ul>
                     
                    <li><a href="Home1.html">Home</a></li>
                    <li><a href="Admin2.html">Admin</a></li>
                    <li><a href="About.html">About Us</a></li>
                    <li><a href="Event.html">Events</a></li>
                    <li><a href="contacts.html">Contact</a></li>
                    <li><a href="Register.html">Register</a></li>
                    <!-- <li><a href="Activites.html">Activites</a></li> -->
                    <li><a href="Contribute.html">Contribute</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <!-- <li><a href="Setting.html">Setting</a></li> -->
                    <!-- <li><a href="Dashboard.html">Dashboard</a></li> -->
                    <li><a href="login.html">login</a></li>
                    <!-- <li><a href="update.html">Update</a></li> -->
                    <!-- <li> <a href="Forgate.html">Forgate</a></li> -->
                    <li><a href="signup.html">Signup</a></li>
                
                </ul>
            </nav>
        </div>
    </header>





    <div class="profile-container">
        <div class="profile-header">
            <img src="CEO.jpg" alt="Profile Picture" class="profile-picture"><br>
            <h1 class="name">Mohammed Fahim</h1>
            <p class="graduation-year">Class of 2020</p><br><br><br><br>
        </div>
        <div class="profile-content">
            <a href="Setting.html"><div class="btn_update">&nbsp; Update Profile</div></a>
            <h2>
                Biography</h2>
            <p>Fahim is a software engineer with a passion for developing innovative programs that expedite the efficiency and effectiveness of organizational success. He holds a degree in Computer Science from XYZ University and has been working in the tech industry for over 5 years...</p>

            <h2>Career</h2>
            <p>Currently, Fahim is working at ABC Corp as a senior developer, where he leads a team of developers in creating cutting-edge software solutions...</p>

            <h2>Contact Information</h2>
            <p>Email: Fahim.doe@example.com</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/johndoe">linkedin.com/in/johndoe</a></p>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 Alumni Association. All rights reserved.</p>
    </footer>



    <script>
        // Get references to the menu icon and the navigation menu
        const menuIcon = document.getElementById('menu-icon');
        const menu = document.getElementById('menu');

        // Add a click event listener to the menu icon
        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('hidden'); // Toggle the 'hidden' class
        });
    </script>












</body>
</html>