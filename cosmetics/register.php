<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="register.css">
    <!--for title logo-->
    <link rel="shortcut icon" href="cosmetic_icon.ico" /> 
</head>

<body id="purchase">

    <!-- header -->
    <header>
        <div class="container">
            <div id="store-name">
                <h1><span style="font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif;">LADY ME</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="form-container" id="form-container">
        <h2>Customer Information</h2>
        <form id="data-form" action="registerdb.php" method="post" onsubmit="event.preventDefault(); validateForm();"><h4>
            <label for="firstName">First Name:</label>
            <input type="text" id="fName" name="fName">

            <label for="lastName">Last Name:</label>
            <input type="text" id="lName" name="lName">

            <label for="address">Shipping Address:</label>
            <textarea id="address" name="address" rows="4"></textarea>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <input type="hidden" id="total" name="total">

            <label>
                Subscribe to newsletters and promotions
                <input type="checkbox">
            </label>

            <button type="submit">Submit</button>
        </h4></form>
    </div>

    <div class="queryForm" id="queryForm">
        <div class="finalized-form" id="finalized-form" style="display: none;">
            <!-- view query window -->
            <div>
                <h1 style="text-align: center;">Confirmation</h1>
                <h3>First Name: <span id="view-fname"></span></h3>
                <h3>Last Name: <span id="view-lname"></span></h3>
                <h3>Shipping Address: <span id="view-address"></span></h3>
                <h3>Email: <span id="view-email"></span></h3>
                <h3>Mobile: <span id="view-mobile"></span></h3>
                <h3>Total Price: <span id="view-total"></span></h3>
            </div>

            <!-- view mail window -->
            <div>
                <form action="mailto:vithanagevishmi@gmail.com" method="post" enctype="text/plain">
                    <input type="hidden" name="Name" id="email_name">
                    <input type="hidden" name="Email" id="email_email">
                    <input type="hidden" name="Mobile" id="email_mobile">
                    <input type="hidden" name="Subjects" id="email_subjects">
                    <input type="hidden" name="Details" id="email_details"> 
                    
                    <div class="button-container">
                        <button class="button-class" type="submit">Send</button>
                    </div>
               </form>
            </div>
            <div class="button-container">
                <button class="button-class" type="submit" onclick="manipulateForm()">Edit</button>
            </div>
        </div>
    </div>

    <script src="register.js"></script>

    <!-- footer -->
    <footer>
        <div class="row">
            <div class="column">
                <p>We are the best cosmetic brand.</p>
            </div>
            <div class="column">
                <h3>Office</h3>
                <p>Cosmetics</p>
                <p>Cosmetic Company</p>
                <p>1901 Main Street 3rd Floor,</p>
                <p>Battaramulla, Sri Lanka</p>
                <br>
            </div>
            <div class="column">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="store.php">Store</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Newsletter</h3>
                <form>
                    <label>Subscribe to our Newsletter</label>
                    <input type="email" name="email" id="email-footer" placeholder="Enter your email" required>
                    <button type="submit"><h5>Submit</h5></button>
                </form>
            </div>
        </div>
        <hr>
        <div class="credentials">
            <p class="copyright">©Code 4x 2022 - All credits goes to <a href="https://www.cosmetics.com/homepage/"><span style="color: yellow;">Cosmetics.</span></a></p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>


    </footer>
</body>