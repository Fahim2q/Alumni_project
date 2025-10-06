<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute - HSTU University Alumni</title>
    <link rel="stylesheet" href="styles1.css">
   
   
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>




 <i class="fas fa-bars fa-2x" id="menu-icon"></i>

    <header>
        <div class="container">
            <h1>HSTU University Alumni</h1>
            <nav id="menu" class="hidden">
                <ul>
                  
                   
            <li><a href="Admin2.html">Admin</a></li>
            <li><a href="Home1.html">Home</a></li>
            <li><a href="About.html">About Us</a></li>
            <li><a href="Event.html">Events</a></li>
            <li><a href="contacts.html">Contact</a></li>
            <li><a href="Register.html">Register</a></li>
            <li><a href="Activites.html">Activites</a></li>
            <li><a href="Contribute.html">Contribute</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="Setting.html">Setting</a></li>
            <li><a href="Dashboard.html">Dashboard</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="update.html">Update</a></li>
            <li> <a href="Forgate.html">Forgate</a></li>
            <li><a href="signup.html">Signup</a></li>
            
                </ul>
            </nav>
        </div>
    </header>

    <section id="contribute" class="section">
        <div class="container">
            <h2>Contribute</h2>
            <p>Your contributions help us to grow and support our alumni community. Please fill out the form below to contribute your time, skills, or donations.</p>
            <form action="submit_contribution.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="contribution-type">Contribution Type:</label>
                <select id="contribution-type" name="contribution_type" required>
                    <option value="time">Time</option>
                    <option value="skills">Skills</option>
                    <option value="donation">Donation</option>
                </select>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <input type="submit" value="Submit">
            </form>
        </div> 
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 HSTU University Alumni Association. All rights reserved.</p>
        </div>
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
