<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chicago Tailgators: Contact Us</title>
    <meta name="description" content="Chicago TailGators serves a mix of uniquely-prepared offerings, including ribs, smoked brisket and Italian Beef, as well as some different twists on traditional fare.  ">

    <?php include 'header.html'; ?>
    <body class="contact">
        <?php include 'navbar.html'; ?>

        <div class="main grid_9 omega">
            <div class="non-semantic-protector">
                <h1 class="ribbon"><span class="ribbon-content">Contact Us</span></h1>
                <div class="clear"></div>
            </div>

            <div class="article grid_9 alpha">
                <p>3760 Dempster Street
                    <br />Skokie, Il 60076
                    <br /> (p)224-534-7787
                    <br />(f) 224-534-7248</p>
                <p><a href="mailto:steven@chicagotailgators.com">steven@chicagotailgators.com</a></p>


                <div id="contact-area">

                    <form method="post" action="contactengine.php">
                        <table>
                            <tr>
                                <td class="left" valign="top"><label for="Name">Name:</label></td>
                                <td><input type="text" name="Name" /></td>
                            </tr>
                            <tr>
                                <td  valign="top" class="left"><label for="City">City:</label></td>
                                <td><input type="text" name="City"  /></td>
                            </tr>
                            <tr>
                                <td valign="top" class="left"><label for="Email">Email:</label></td>
                                <td><input type="text" name="Email" /></td>
                            </tr>
                            <tr>
                                <td valign="top" class="left"><label for="Message">Message:</label></td>
                                <td><textarea name="Message" rows="10" cols="45"></textarea></td>
                            </tr>
                        </table>


                        <input type="submit" name="submit" value="Submit" class="submit-button" />
                    </form>

                </div>

            </div>
        </div>
        <br class="clear"/>
        <?php include 'footer.html'; ?>
    </body>
</html>

