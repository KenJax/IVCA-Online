<html>
    <head>
<title>IVCA Journal</title>
        
<link rel="stylesheet" type="text/css" href="css/ivca.css"/>
<link rel="stylesheet" type="text/css" href="css/journal.css"/>
</head>
<body >
    
  <!--#include virtual="topNav.htm" -->

<div id="bodytext" class="row">
  
   <?php
{
        //We check if the form has been sent
        if(isset($_POST['password']))
        {
                //We remove slashes depending on the configuration
                if(get_magic_quotes_gpc())
                {
                        $password = stripslashes($_POST['password']);
                }
                else
                {
                        $password = $_POST['password'];
                }
                //We get the password of the user
                //We compare the submited password and the real one
                if('velocipede'==$password )
                {
                        //If the password is good, we dont show the form
                        $form = false;
    $_SESSION['password'] = $_POST['password'];
    ?>
  <div class="journalMenu">
<ul><li><a href ="Journal/IVCAjournal60.pdf">Journal N°60</a></li>
        <li><a href ="Journal/IVCAjournal62.pdf">Journal N°62</a></li></ul>
      </div> 
<?php
                }
                else
                {
                        //Otherwise, we say the password is incorrect.
                        $form = true;
                        $message = 'The password is incorrect.';
                }
        }
        else
        {
                $form = true;
        }
        if($form)
        {
                //We display a message if necessary
        if(isset($message))
        {
                echo '<div class ="journalMenu">'.$message.'</div>';
        }
        //We display the form
?>
    <form action="journal.php" method="post">
        <div class ="journalMenu">
        <p style="padding-top:20px;">
            <label for="password">Please enter your password to download the Journals:</label><input type="password" name="password" id="password" />
            </p><p>
            <input type="submit" value="To the Journals" /></p>
            </div>
    </form>
<?php
        }
}
?>

  <div class="journalText">
   
<h2> The Magazines of the IVCA</h2>
<p >In 1991, the IVCA produced its first magazine "The International Veteran Cyclist", edited by Walter Ulreich.</p>
      <p> This was an A5 sized, 48 paged booklet with illustrated articles about veteran cycle events and cycle history. It continued until 1993 when issue 5 was retitled The International Veteran Cycle. </p>
<p>The last issue of this series was number 6 in December 1993.</p>
<p>In December 1995, a new magazine in A4 format was started by Paul Reid, called "The Journal", which now continues under the same name. </p>
<p>The aim is to issue two editions a year, depending on the material received.</p>
      <p>It aims to cover forthcoming veteran cycle events which have an international interest, details of displays or museums showing old cycles, news of veteran cycle clubs' activities, articles relating to aspects of old cycles, discussions on IVCA matters, items for sale and wanted or advertisements from commercial concerns connected with cycles.</p>
      <p>Placing advertisements is free of charge to members.</p>
      <p> The editor will prepare The Journal twice per year, one in the fall after the annual meeting, and one in the early spring of the following year with details of the annual meet for that year. Shorter news bulletins will be distributed electronically at other times.</p>
<p>The Journal contains information about the rallies, news from the members, a calendar of meetings and events, books and museum reviews, new topics of old bicycles, historic views of bicycles, cycling and related topics, a traders market, stories of bicycle journeys , visiting far destinations and new exciting bicycle cultures, and much, much more.</p>
<p>The Editor urges members to send in contributions on any cycling related subject in any language. </P><p>The Editor urges country representatives to submit more information,especially about future events.</p>
<p> <a href="mailto:robertjohanbumblebee@yahoo.com">Contact the Editor</a></p>
  </div>
</div>
  	</body>

</html>