<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Settings</title>
    <link rel="stylesheet" href="styles10.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    
    <i class="fas fa-bars fa-2x" id="menu-icon"></i>
    <header>
        <h1>HSTU University Alumni Settings</h1>
    </header>

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



    <main class="hero">
        <section id="personal-info">
            <h2>Personal Information</h2>
            <form>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name">
                
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
                
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </form>



        </section>
        <section id="contact-info">
            <h2>Contact Information</h2>
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone">
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </form>
        </section>
        <section id="education-info">
            <h2>Educational Background</h2>
            <form>
                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="degree">
                
                <label for="department">Department:</label>
                <input type="text" id="department" name="department">
                
                <label for="graduation-year">Year of Graduation:</label>
                <input type="number" id="graduation-year" name="graduation-year" min="1997" max="2100">
            </form>
        </section>
    </main>
    <div class="button_submit">Submit</div><br>
    <footer>
        <p>&copy; 2024 HSTU University. All rights reserved.</p>
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
