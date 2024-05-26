<html><head>
<title>IVCA Membership</title>
    
<link rel="stylesheet" type="text/css" href="css/ivca.css"/>
</head>
    
    <?php 
  include ("topNav.htm");
?>
<body>
    
    <div id="bodytext">
        <p>If you like veteran cycles, please consider joining the IVCA</p>
        <p>Whether you are a member of an <a href="memberClubs.php">affiliated cycling club</a> or not, you can join.</p>
        <p>Membership obtains the twice-yearly Journal and advance notice of the annual rallies.</p>
        <p>In exchange we ask for €15 as a one-off joining fee to cover our costs.</p>
		<p>Please either complete the form below or download and print the application form 
        <ul>
            <li><a href="IVCA membership EN.docx" target="_blank">in English</a></li>
            <li><a href="IVCA membership FR.docx" target="_blank">en Fran&ccedil;ais</a></li>
            <li><a href="IVCA membership DE.docx" target="_blank">auf Deutsche</a></li>
</ul></p>
        <p>Thank you for your support!</p>
<form action="php/mail_handler.php" method="post">
    <table>
        <tr><td >Membership Application:</td><td><input maxlength="32" type="text" name="subject" value="I want to join the IVCA"></td></tr>
        <tr><td >Interest:</td><td><textarea name="interest" style="width:220px;" rows="4"></textarea></td></tr>
        <tr><td >Your email:</td><td><input class="INPUT" style="width:220px;" maxlength="64" type="text" name="senderemail" value=""></td></tr>
        <tr><td >Name:</td><td><input class="INPUT" style="width:220px;" maxlength="64" type="text" name="name" value=""></td></tr>
        <tr><td >Address:</td><td><input class="INPUT" style="width:220px;" maxlength="64" type="text" name="address" value=""></td></tr>
        <tr><td >Postcode:</td><td><input class="INPUT" style="width:220px;" maxlength="64" type="text" name="postcode" value=""></td></tr>
        <tr><td >City:</td><td><input class="INPUT" style="width:220px;" maxlength="64" type="text" name="city" value=""></td></tr>
        <tr><td >Country:</td><td><input class="INPUT" style="width:220px;" maxlength="64" type="text" name="country" value=""></td></tr>
        </table>

      
<input type="submit" name="submit" value="Submit">


</form>
    </div>


</body>
</html> 