<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <div class="container">
        

            <div class="user-details">
                <h4>Add an address</h4>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Name" name="fname" required>
                        <input type="number" placeholder="10-digit Number" name="phn" required>
                    </div>
                    <div class="input-field">
                        <input type="number" placeholder="Pincode" name="pin" required>
                        <input type="text" placeholder="Locality" name="locality" required>
                    </div>
                    <div>
                        <input type="text" placeholder="Address (Area and Street)" name="address" 
                        class="address-field" required>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="City/District/Town" name="place" required>
                        <select name="state" class="option-field">
                            <option value="kerala">Kerala</option>
                            <option value="tamilnadu">Tamilnadu</option>
                            <option value="karnataka">Karnataka</option>
                            <option value="goa">Goa</option>
                            <option value="telugana">Telugana</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Landmark" name="land">
                        <input type="number" placeholder="Alternate Phone" name="alt">
                    </div>
                    <div class="delivery-spot">
                        <input type="radio" value="home" name="type">
                        <label for="type">Home (All day delivery) </label>
                        <input type="radio" value="work" name="type">
                        <label for="type">Work (Delivery between 10 AM - 5 PM)</label>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Deliver Here">
                    </div>
                </form>
            </div>

            <div class="phn-price-details">
                <h3>Price Details</h3>
                <div class="phn-price">
                    <h4>Iphone 13 pro max</h4>
                    <div class="prices">
                        <p>Price</p>
                        <p>40000</p>
                        <p>Delivery Charge</p>
                        <p>FREE</p>
                    </div>
                </div>
                <div class="total-price">
                    <h4>Total Payable</h3>
                    <h4>₹40000</h3>
                </div>
            </div>
        
    </div>
</body>
</html>