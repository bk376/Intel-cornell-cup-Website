<!DOCTYPE html>
<html>   
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <title>Intel-Cornell Cup</title>
        <link rel="stylesheet" type="text/css" href="../css/p2.css">
        <style>
            li span { position: relative; left: 10px; }
        </style>
    </head>
    <body>
        <?php $parent="../"; $file=""; include "../components/top.php"; ?>
        <div id="navh">
            <h2>Application</h2>
        </div>
        <div id="container">
                <div class="box2">
                    <link property='stylesheet' href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
                    <ul class="header-subnav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="team.php">Team Info</a></li>
                        <li><a href="apply.php" class="is-active">Apply Now</a></li>
                        <!-- <li><a href="file/thanks.html">Sponsors</a></li> -->
                    </ul>
                </div>
                <div class="transbox3 round">
        <!--display sucess/failure message here at the top
    Note: this is just a ploy. I haven't added the emailing or saving function yet.-->
                    <h1>&nbsp;<?php
                    if (isset($_POST['submit'])){
                        echo "Invitations sent!";
                    }
                    else if(isset($_POST['save'])){
                        echo "Saved!";
                    }
                        ?></h1>
                          <!--Since the signature part of the form cannot be submitted online, I changed it into an invitation form.--> 
                        <p>If you are thinking of forming a team, send an invitation to your potential team members here! This helps you brainstorm your initial ideas, and gives us an idea of what brilliant ideas you have.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <!--The validation php is inserted using the 'include'statement.-->
                        <?php include "../components/handle_application_form.php"; ?>
                        <p>Name: <select name="title" id="title">
                            <option value="Mr">Mr.</option>
                            <option value="Ms">Ms.</option>
                            <option value="Mrs">Mrs.</option></select>
                            <script type="text/javascript">
                              document.getElementById('title').value = "<?php echo $_GET['title'];?>";
                            </script>
                            <input type="text" name="name_main" value="<?php echo $name_main;?>"><span class="error"> *<?php echo $NameErr ?></span></p>
                        <p>Email address: <input type="text" name="email_main" value="<?php echo $email_main;?>"><span class="error">*  <?php echo $EmailErr ?></span></p>
                            <p>Phone: (optional) <input type="text" name="phone_main" value="<?php echo $phone_main;?>"></p>
                        <p>Project Summary: (no more than 200 characters)</p>
                            <textarea rows="10" cols="50" placeholder="What is your project like? Tell your future teammates!" name="summary"></textarea>
                            <p><span class="error">*This is required.&nbsp;<?php echo $SummaryErr1; echo $SummaryErr2 ?></span></p><br>
                            <p>Now, let's invite your future teammates:</p>
                        <p>Teammate 1</p>
                            <p>Name:  <input type="text" name="name1" value="<?php echo $name1;?>"><span class="error">* <?php echo $NameErr ?></span></p>
                            <p>Email: <input type="text" name="email1" value="<?php echo $email1;?>"><span class="error">*  <?php echo $EmailErr ?></span></p><br>
                        <p>Teammate 2</p>
                            <p>Name:  <input type="text" name="name2" value="<?php echo $name2;?>"><span class="error">*  <?php echo $NameErr ?></span></p>
                            <p>Email: <input type="text" name="email2" value="<?php echo $email2;?>">  <span class="error">*<?php echo $EmailErr ?></span></p><br>
                        <p>Teammate 3</p>
                            <p>Name:  <input type="text" name="name3" value="<?php echo $name3;?>">  <span class="error">*<?php echo $NameErr ?></span></p>
                            <p>Email: <input type="text" name="email3" value="<?php echo $email3;?>">  <span class="error">*<?php echo $EmailErr ?></span>
                            </p><br>
                        <p>Attach your message to your future teammates here: (optional)</p>
                            <textarea rows="10" cols="50" placeholder="Hi, I have an idea for a team and I thought you'd be interested!" name="message"></textarea>
                            <p><input type="submit" value="Send your invitation!" name="submit">   <input type="submit" value="Save it for later" name="save"></p>
                            

                    </form>
                </div>
                <div class="foot2 round">
                    <?php $parent="../"; $file="../file/"; include "../components/footer.php"; ?>
                </div>
            </div>
        
    </body>