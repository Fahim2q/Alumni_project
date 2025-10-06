<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery - HSTU Alumni</title>
    <link rel="stylesheet" href="styles19.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     



</head>
<body>

    <i class="fas fa-bars fa-2x" id="menu-icon"></i>


    <header>
    
        <h1>Hajee Mohammad Danesh Science & Technology University Alumni</h1>
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














    <div class="container">
        <h1>Password Recovery</h1>
        <p>Please enter your email address to recover your password.</p>
        <form id="recovery-form">
            <div class="form-group">
                <label for="email">Email Address:</label>
                <i class="bx bxs-user"></i>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Send Recovery Link</button>
        </form>
        <p class="message">Remember your password? <a href="login.html">Login here</a></p>
    </div>


    <footer>
        <p>&copy; 2024 HSTU Alumni Association. All rights reserved.</p>
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
