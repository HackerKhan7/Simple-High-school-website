<html>
<head>
  <title>Contact Us | Kay secondary school </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
     <h1 style="text-align:center;" >CONTACT KAY SECONDARY SCHOOL</h1><br>
<style>
    body,html {
  height: 100%;
 }

body {
  padding-top: 50px;
  background-image: url('headerimg2.jpg');
  background-repeat: no-repeat;
  background-size: 100%;

}

#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: green;
  color: white;
}

.bg-4{
  outline: none;
  background-color: green;
  color: white;
  background-color: #2f2f2f;
  color: green;

}

footer{
  display: block;
}

.form-area {
  background-color:whitesmoke;
  padding: 10px 80px 60px;
  margin: 10px 0px 60px;
  border: 2px solid black;
  opacity:0.9;
}


/*styles for heading before form */
.heading {
  text-align: center;
  background-color: green;
  padding: 40px;
  font-size: 50px;
}

/*for paragrah below form */
.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Times Roman New"
  font-size: 20px;
  background-color: black;
  color: white;
}

/*for Heading name "Food Exploria" */
.edit{
  text-shadow: 2px 2px 5px lightyellow;
  color: whitesmoke;
}

/* to resize few texts "JUGAD CODE" */
.edit2{
  font-size: 20px;
}
#nav {
    line-height:30px;
    height:800px;
    width:200px;
    float:left;
    padding:5px;	      	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:40px;	 	 
}
ul#menu li {
    display: inline-block;
}

ul#menu li a {
    color: black;
    padding: 10px 30px;
    text-decoration: none;
    border-radius: 5px 5px 0 0;
}

ul#menu li a:hover {
    background-color: orange;
}
.dropbtn {
    color: black;
    padding: 10px 30px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<ul id="menu">
    <li><a href="index.html">HOME</a></li>
  <li><a href="aboutus.html">ABOUT US</a></li>
 <div class="dropdown">
  <button class="dropbtn">ACADEMICS</button>
  <div class="dropdown-content"> 
    <a href="mathematics.html">MATHEMATICS</a>
    <a href="sciences.html">SCIENCES</a>
    <a href="humanities.html">HUMANITIES</a>
    <a href="technical.html">TECHNICAL</a>
  </div>
</div>
 <div class="dropdown">
  <button class="dropbtn">MANAGEMENT</button>
  <div class="dropdown-content">
    <a href="boarding.html">BOARDING</a>
    <a href="guidance.html">GUIDANCE</a>
    <a href="games.html">GAMES</a>
     <a href="clubs.html">CLUBS AND SOCIETIES</a>
  </div>
</div>
<li><a href="events.html">EVENT</a></li>
  <li><a href="gallery.html">GALLERY</a></li>
  <li><a href="contact.html">CONTACT</a></li>
</ul>  <br>
    <div class="heading">
     <strong><span class="edit"> contact kay secondary school </span></strong>
     <br>
    </div>
    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>