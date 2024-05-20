<html>
    <title>Edit Existing Package</title>
<head>
    <link rel="stylesheet" type="text/css" href="css/edit.css">

</head>
<body>

<fieldset>
		<legend></legend>
        <form action="update.php"method="POST">
        <!--Account Information Start-->
        <h4>Account</h4>
        <div class="input_group">
            <div class="input_box">
                <input type="text" placeholder="Full Name" required class="name" name="name">
                <i class="fa fa-user icon"></i>
            </div>
        </div>

        <div class="input_group">
            <div class="input_box">
                <input type="text" placeholder="Name On Card" 
                required class="name" name="Card">
                <i class="fa fa-user icon"></i>
            </div>
        </div>

        <div class="input_group">
            <div class="input_box">
                <input type="email" placeholder="Email Address" 
                required class="name" name="Mail">
                <i class="fa fa-envelope icon"></i>
            </div>
        </div>

        <div class="input_group">
            <div class="input_box">
                <input type="text" placeholder="Address" 
                required class="name" name="Location">
                <i class="fa fa-map-marker icon"
                aria-hidden="true"></i>
            </div>
        </div>
        

        <!--Account Information End-->



        <div class="input_group">
            
        </div>

        <!--Payment Details Start-->

        <div class="input_group">
            <div class="input_box">
                <h4>Payment Details</h4>
                <input type="radio" name="pay" class="radio"
                id="bc1" checked>
                <label for="bc1"><span>
                    <i class="ri-visa-fill"></i>Credit Card
                </span></label>
                <input type="radio" name="pay" class="radio"
                id="bc2" checked>
                <label for="bc2"><span>
                    <i class="ri-paypal-fill"></i>Paypal
            </div>
        </div>
    <div class="input_group">
        <div class="input_box">
            
            <input type="tel" class="name" name="Number" placeholder="Card 
            Number 1111-2222-3333-4444" required>  
            <i class="fa fa-credit-card icon"></i>
        </div>
    </div>
    <div class="input_group">
        <div class="input_box">
            <input type="number" class="name" name="Year" placeholder="Exp
             Year" required>
             <i class="fa fa-calendar icon"></i>
        </div>
    </div>
    <div class="input_group">
        <div class="input_box">
            <i class="ri-money-dollar-box-line"></i>
            <input type="number" class="name" name="Amount" placeholder="Enter
             Amount" required>
             
        </div>
    </div>  
     <div class="input_group">
            <div class="input_box">
                <button type="submit">Update Booking</button>
            </div>
    </div>

    <button><a href="read.php">view list</button></a>

    <!--Payment Details End-->

     </form>

    </fieldset>
</body>	
</html>