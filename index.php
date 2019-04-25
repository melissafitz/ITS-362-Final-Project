<?php
    include('html/header.html');
?>

    <br />
    <div id="order" class="body-box">
        <h3>Place an Order</h3>

        <p>Check out the different parts of our menu by clicking through the tabs below!
            When you have decided what you want, click on the item and it will be added to your cart.</p>

            <div id="tabs-1">
                <ul>
                    <li><a href="#tabs-2">Combos</a></li>
                    <li><a href="#tabs-3">Sides</a></li>
                    <li><a href="#tabs-4">Drinks</a></li>
                </ul>

                <!-- COMBOS -->
                <div id="tabs-2">
                    <ul>
                        <p>Hot dog, fries, & drink<br/>
                           Cheeseburger, fries, & drink<br/>
                           Fish tacos, slaw, & drink<br/>
                           Veggie burger, fries, & drink</p>

                        <p>Substitute fries with tater tots for an extra <strong>$0.25</strong>!</p>
                    </ul>

                    
                </div>

                <!-- SIDES -->
                <div id="tabs-3">
                    <ul>
                        <p>French fries<br/>
                           Tater tots<br/>
                           Cole slaw</p>
                    </ul>
                </div>

                <!-- DRINKS -->
                <div id="tabs-4">
                    <ul>
                        <p>Coca-Cola<br/>
                           Lemonade<br/>
                           Iced tea<br/>
                           Bottled water</p>
                    </ul>
                </div>
            </div>
    </div>
    <br />
    <div id="about" class="body-box">
        <h3>About Us</h3>
        <p>Meals to Smiles has been in business since 2006.
            We're serving up fresh, delicious fast food!
            Try our customer favorite, the classic cheeseburger and fries combo!
        </p>
    </div>
    <br />
    <div id="contact" class="body-box">
        <h3>Contact Us</h3>
        <p>Customer satisfaction is our #1 priority!
            Let us know what we're doing right or what we could improve on.</p>

        <form action="index.php">
            <input type="text" placeholder="Name" size="35" /><br />
            <input type="text" placeholder="Email" size="35" /><br />
            <input type="text" placeholder="Message" size="35" style="height:100px" /><br /><br />
            <button type="submit" class="btn-submit"> SEND </button>
        </form>
        <br />
    </div>

<?php
    include('html/footer.html');
