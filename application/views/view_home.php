<!DOCTYPE html>
<html>
  

<head>
    
<title>Graðevinar</title>
    
 
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet' type='text/css'>

<style type="text/css">
        
html, body
{
  height: 100%;
}



body
{
  margin: 0px;
    padding: 0px;
    background: #ededed;
    font-family: 'Arial', sans-serif;
    font-size: 13px;

}

h1, h2, h3
{
    margin: 0;
    padding: 0;
}






/** CONTAINER */


.container
{
    width: 1100px;
    margin: 0px auto;
}

.clearfix
{
    clear: both;
}





/** HEADER */

#header-wrapper
{
    overflow: hidden;
    background: #3b3b3b;
}

#header
{
    overflow: hidden;
    height: 150px;
}

/** LOGO */

#logo
{
  float: left;
    width: 400;
}

#logo h1 a
{
    display: block;
    line-height: 150px;
    text-decoration: none;
    font-family: 'Kavoon', cursive;
    font-size: 40px;
    color: #FFFFFF;
}

/** MENU */

#menu
{
    float: right;
    width: 700px;
}

#menu ul
{
    float: right;
    margin: 0px;
    padding: 60px 0px 0px 0px;
    list-style: none;
    line-height: normal;
}

#menu li
{
    float: left;
    margin-left: 10px;
}

#menu a
{
    display: block;
    padding: 10px 20px;
    letter-spacing: 2px;
    text-decoration: none;
    text-transform: uppercase;
    font-family: 'Archivo Narrow', sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: #FFFFFF;
}

#menu .active a
{
    background: #8c8c8c;
    border-radius: 5px;
    color: #FFFFFF;
}

        #menu .active a:hover
        {
            background-color: #5b5b5b
        }
        
        #menu .active a:active
        {
            background-color: #55555
        }


#menu a:hover
{
    text-decoration: none;
}



/** PAGE */

#page-wrapper
{
    overflow: hidden;
    padding: 20px 0px;
    background:#ededed ;
}

#page
{
    overflow: hidden;
}





/** CONTENT */



#featured-wrapper
{
    overflow: hidden;
    padding: 50px 0px;
    background-image: url('images/geometry1.png'); no-repeat;
    border-top: 1px solid #E7E7E7;
    text-align: center;
}


#featured header
{
    display: block;
    margin-bottom: 10px;
    letter-spacing: -1px;
    font-size: 30px;
    font-weight: 400;
    color: #333333;
}

/** BUTTON STYLING */

.button
{
    display: inline-block;
    margin: 0px 10px;
    padding: 10px 30px;
    background: #3b3b3b;
    -moz-transition: background-color .25s ease-in-out;
    -webkit-transition: background-color .25s ease-in-out;
    -o-transition: background-color .25s ease-in-out;
    -ms-transition: background-color .25s ease-in-out;
    transition: background-color .25s ease-in-out;
    border-radius: 5px;
    box-shadow: 0px 0px 0px 5px rgba(255,255,255, 1);
    letter-spacing: 2px;
    text-decoration: none;
    text-transform: uppercase;
    font-family: 'Archivo Narrow', sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #FFFFFF;
}

        .button:hover
        {
            background-color: #8c8c8c;
        }
        
        .button:active
        {
            background-color: #20e1b6;
        }

.button-alt
{
    background: #3b3b3b;
    
}

        .button-alt:hover
        {
            background-color: #8c8c8c;
        }
        
        .button-alt:active
        {
            background-color: #FC3F68;
        }

.button-small
{
    margin: 5px 0px;
    box-shadow: none;
    font-size: 6px;
    color: #FFFFFF;
}


/** Gallery */

#content header
{
    display: block;
    margin-bottom: 1px;
    font-size: 30px;
    font-weight: 400;
    color: #333333;
}




#two-column h3
{
    padding-bottom: 5px;
    font-size: 20px;
    font-weight: 600;
}

#two-column img
{
    float: left;
    margin-right: 30px;
    padding: 5px;
    background: #FFFFFF;
    opacity: 0.8;
}

#two-column  a:hover img
{
    opacity: 0.9;
}



#two-column .box-style
{
    overflow: hidden;
    padding: 30px 0px;
}

#two-column #tbox1
{
    float: left;
    width: 500px;
}

#two-column #tbox2
{
    float: right;
    width: 500px;
}


/** Third Section */

#banner-wrapper
{
    overflow: hidden;
    padding: 12px 0px 1px 0px;
    background-image:url('images/3rdsection.jpg'); no-repeat;
    text-align: left;
  color: #3b3b3b;
  min-height: 250px;
}

#banner p
{
    letter-spacing: -1px;
    font-size: 40px;
    font-weight: 300;
}

#banner strong
{
    font-weight: 400;
}


/** FOOTER */


#footer-wrapper
{
  overflow: hidden;
    padding: 35px 0px;
    background: #444444;
    border-top: 1px solid #404040;
    border-bottom: 1px solid #404040;
}

#footer
{
    overflow: hidden;
    color: #B1B1B1;
}

#footer header
{
    margin-bottom: 2px;
    font-size: 20px;
    font-weight: 400;
    color: #FFFFFF;
}

#footer #fbox1
{
    float: left;
    width: 700px;
}

#footer #fbox2
{
    float: right;
    width: 300px;
}

#footer a
{
    color: #D0D0D0;
}

#footer .button-small
{
    color: #FFFFFF;
}

#copyright
{
    overflow: hidden;
    padding: 3px 0px 3px 0px;
    text-align: center;
    color: #606060;
}

#copyright a
{
    color: #818181;
}

</style>
</head>
  


<body>
      


  <div id="header-wrapper">
  <div id="header" class="container">
      <div id="logo">
            <img src="images/logo.png" alt="logo">
        </div>
        <div id="menu">
            <ul>
                <li class="active"><a href="#">Graðevinar</a></li>
                <li><a href="#">Usluge</a></li>
                <li><a href="#">Galerija</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </div>
    </div>
</div>


<div id="featured-wrapper">
  <div id="featured" class="container">
        <header>Graðevinar d.o.o.</header>
        <a href="#" class="button">O nama</a><a href="#" class="button button-alt">Galerija</a></div>
</div>

<div id="page-wrapper">
    <div id="page" class="container">
        <div id="content">
            <header>Neki od naših radova</header>
            <div id="two-column">
                <div id="tbox1">
                    <div class="box-style"> <a href="#"><img src="images/screenshot01.jpg" width="140" height="105" alt="" /></a>
                        <h3>Trg branitelja Zdenci</h3>
                        <p>Duis non imperdiet nisl, non lobortis ligula. Mauris ut ultricies purus. Morbi semper. </p>
                        </div>
                    <div class="box-style"> <a href="#"><img src="images/screenshot02.jpg" width="140" height="105" alt="" /></a>
                        <h3>Crkva u Crncima, kroviste</h3>
                        <p>Duis non imperdiet nisl, non lobortis ligula. Mauris ut ultricies purus. Morbi semper. </p>
                        </div>
                </div>
                <div id="tbox2">
                    <div class="box-style"> <a href="#"><img src="images/screenshot03.jpg" width="140" height="105" alt="" /></a>
                        <h3>Trenæ silos u Budimcima</h3>
                        <p>Duis non imperdiet nisl, non lobortis ligula. Mauris ut ultricies purus. Morbi semper. </p>
                        </div>
                    <div class="box-style"> <a href="#"><img src="images/screenshot04.jpg" width="140" height="105" alt="" /></a>
                        <h3>Višestambena zgrada na marsu</h3>
                        <p>Duis non imperdiet nisl, non lobortis ligula. Mauris ut ultricies purus. Morbi semper. </p>
                    </div>
        
        
      
        
        
            </div>
        </div>
    </div>
</div>

<div id="banner-wrapper">
  <div id="banner" class="container">
        <p>Posjetite nas! </br>
            Adresa moga malog mališana 555</p>
    </div>
</div>


<div id="footer-wrapper">
  <div id="footer" class="container">
        <div id="fbox1">
            <header>About Us</header>
            <p>Duis non imperdiet nisl, non lobortis ligula. Mauris ut ultricies purus. Morbi semper nisl dignissim, dapibus justo eleifend, rhoncus libero. In at luctus augue. Ut cursus velit at velit rhoncus tincidunt. Donec pellentesque faucibus mi, id pretium nisl posuere a. </p>
            <a href="#" class="button button-small">Click this button!</a> </div>
        <div id="fbox2">
            <header>Get In Touch</header>
            <p>
Aliquam molestie, erat non faucibus venenatis, leo neque malesuada urna, eget elementum nisi mauris a lectus. Sed eu felis sem. Vivamus ipsum est, ultrices in lectus a, interdum porta mauris. Suspendisse et porta justo. Fusce volutpat tellus eu posuere tincidun.
</p>
        </div>
    </div>
</div>
<div id="copyright" class="container">
    <p>Copyright (c) 2013. All rights reserved.</p>
</div>


 </body>
</html>