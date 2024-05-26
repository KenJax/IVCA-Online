<html>
    <head>
<title>IVCA Journal</title>
        
<link rel="stylesheet" type="text/css" href="css/journal.css"/>
<link rel="stylesheet" type="text/css" href="css/ivca.css"/>
</head>
<body >
   
    <?php 
  include ("topNav.htm");
?>

<div id="bodytext">
  
   <?php
{
        //We check if the form has been sent
        if(isset($_POST['password']))
        {
                //We remove slashes depending on the configuration
               
                        $password = stripslashes($_POST['password']);
               
                //We get the password of the user
                //We compare the submited password and the real one
                if('velocipede'==$password )
                {
                        //If the password is good, we dont show the form
                        $form = false;
    $_SESSION['password'] = $_POST['password'];
    ?>
  <div class="journalMenu">
    
<ul>
  <li><a href ="Journal/IVCAjournal58.pdf">Journal N°58</a></li>
  <li><a href ="Journal/IVCAjournal60.pdf">Journal N°60</a></li>
  <li><a href ="Journal/IVCAjournal61.pdf">Journal N°61</a></li>
  <li><a href ="Journal/IVCAjournal62.pdf">Journal N°62</a></li>
  <li><a href ="Journal/IVCAjournal63.pdf">Journal N°63</a></li>
  <li><a href ="Journal/IVCAjournal64.pdf">Journal N°64</a></li>
  <li><a href ="Journal/IVCAjournal65.pdf">Journal N°65</a></li>
  <li><a href ="Journal/IVCAjournal66.pdf">Journal N°66</a></li>
  <li><a href ="Journal/IVCAjournal67.pdf">Journal N°67</a></li>
  <li><a href ="Journal/IVCAjournal68.pdf">Journal N°68</a></li>
  <li><a href ="Journal/IVCAjournal69.pdf">Journal N°69</a></li>
  <li><a href ="Journal/IVCAjournal70.pdf">Journal N°70</a></li>
    </ul>
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
<p >In 1991, the IVCA produced its first magazine The International Veteran Cyclist, edited by Walter Ulreich.</p>
      <p> This was an A5 sized, 48 paged booklet with illustrated articles about veteran cycle events and cycle history. It continued until 1993 when issue 5 was retitled The International Veteran Cycle. </p>
<p>The last issue of this series was number 6 in December 1993.</p>
<p>In December 1995 a new magazine in A4 format was started by Paul Reid: The Journal. It countinues today under the same name.</p>
<p>The aim is to issue two editions a year, depending on the material received.</p>
<p>It aims to cover:</p>
<ul><li>Forthcoming veteran cycle events which have an international interest</li> 
<li>Displays or museums showing old cycles</li><li>News of veteran cycle clubs' activities</li>
<li>Articles relating to aspects of old cycles</li><li>Discussions on IVCA matters</li><li>Items for sale and wanted or advertisements from commercial concerns connected with cycles</li>
</ul>
<p>Placing advertisements is free of charge to members.</p>
<p>The Journal also contains information about the rallies; news from the members; details of meetings and events; books and museum reviews; new articles about old bicycles; historic views of bicycles cycling and related topics; a traders market; stories of bicycle journeys visiting far destinations; exciting new  bicycle culture, and much, much more.</p>

<p>The editor prepares The Journal twice per year, one in the fall after the annual meeting, and again in the spring with details of the next annual meeting. Shorter news bulletins will be distributed electronically at other times.</p>
<p>The Editor urges members to send in contributions on any cycling related subject in any language. </P><p>The Editor urges country representatives to submit more information,especially about future events.</p>
<p> <a href="mailto:robertjohanbumblebee@yahoo.com">Contact the Editor</a></p>
  </div>
</div>
  	</body>

</html>