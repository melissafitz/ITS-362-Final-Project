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
                    <form id="menuForm1" method='POST' action='cart.php'>
                    <ul>
                        <p>Hot dog, fries, & drink &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Cheeseburger, fries, & drink &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Fish tacos, slaw, & drink &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Veggie burger, fries, & drink &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button></p>

                        <p>Substitute fries with tater tots for an extra <strong>$0.25</strong>!</p>
                    </ul>
                    </form>
                </div>

                <!-- SIDES -->
                <div id="tabs-3">
                    <form id="menuForm2" method='POST' action='cart.php'>
                    <ul>
                        <p>French fries&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Tater tots&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Cole slaw&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button></p>
                    </ul>
                    </form>
                </div>

                <!-- DRINKS -->
                <div id="tabs-4">
                    <form id="menuForm3" method='POST' action='cart.php'>
                    <ul>
                        <p>Coca-Cola&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Lemonade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Iced tea&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button><br/>
                           Bottled water&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button name="menuSubmit" type="submit" value="' . $row[0] . '">+</button></p>
                    </ul>
                    </form>
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
