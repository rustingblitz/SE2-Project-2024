<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
      <p class="special">This is paragraph</p>  
      <p id="special11">This is paragraph</p>  
      <p>This is paragraph</p>  
      <p>This is paragraph</p>  
    </body>
</html>



/* target all paragraphs */

p {
    color: red;
    font-size: 40px ;
}



/* target any element with class named special */
.special {
    color: green;
    font-size: 40px;
}

/* target any element with id special11 */
#special11 {
    color: yellow;
    font: size 40px; 
}



<!-- seprator image color repeater -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
     
      <div>
        <h2> Product Title</h2>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
        <p>This is Paragraph</p>
      </div>
    </body>
</html>


div {

background-color: red; 
background-color:rgb(255,0,0) ;
background-color: #f00; 
background-image: url(../../2604910.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-position:100% 100% ;
background-size: cover;
}




<!-- seprator padding-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
     
      <div>
        <h2> Product Title</h2>
        <p>This is Paragraph</p>
      </div>
    </body>
</html>

div {
    /* top right bottom left */
    /* 10 10 10 10  */
    /* padding: 10px; */


    /* top right bottom left */
    /* 10 20 10 20  */
    /* padding: 10px 20px; */


    /* top right bottom left */
    /* 10 20 30 20  */
    /* padding: 10px 20px 30px; */


    /* top right bottom left */
    /* 10 0 0 0  */
    /* padding: 10px 0 0 0; */


    padding-left: 10px;

}



<!-- seprator margin -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
     
      <div>
        <h2> Product Title</h2>
        <p>This is Paragraph</p>
      </div>
    </body>
</html>

div {
    background-color: rgb(62, 64, 67);
    padding: 10px;
    width: 80%;
    margin: auto;

}



<!-- seprator  border-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
     
      <div>
        <h2> Product Title</h2>
        <p>This is Paragraph</p>
      </div>
    </body>
</html>

div {
    background-color: rgb(62, 64, 67);
    padding-left: 30px;
    width: 80%;
    margin: auto;


    /* border-width: 10px;
    border-style: solid;
    border-color: red; */
    border: 10px solid darkblue; <!-- short handed -->

}




<!-- seprator outline -->
<!-- not used very much and it doesnot take space in the figure -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
     
      <div>
        <h2> Product Title</h2>
        <p>This is Paragraph</p>
      </div>
    </body>
</html>



div {
    background-color: rgb(62, 64, 67);
    padding-left: 30px;
    width: 80%;
    margin: auto;


    /* border-width: 10px;
    border-style: solid;
    border-color: red; */
    border: 10px solid darkblue;

    outline: 10px solid red;

}



<!-- seprator Display (block - inline - inline-block) -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CSS</title>
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
     
      <span>Span=>Inline</span>
      <span>Span=>Inline</span>
      <span>Span=>Inline</span>
      <div>Div=>Block</div>

    </body>
</html>



/*
Block

    take full width if no width
    add line break
    respect padding , margin , width , height





Inline

    don not respect width , height
    respect padding and margin (just left + right)
    do not add line break
    allow elements before and after input



Inline-Block

    allow elements before and after it
    respect padding , margin , width , height  

*/



span {

    background-color: beige;
    display: inline-block;

}



<!-- seprator visibility and use case-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div class="first">first</div>
  <div>second</div>

</body>

</html>



div {

background-color: beige;


}

.first {

visibility: hidden;

}

/*
difference between display and visibility

display : if it none the second element can take its place
visibility : if it hidden the second element cannot take its place



<!-- seperator Grouping Multiple Selector -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div class="first">first</div>
  <div class="two">two</div>
  <div class="three">three</div>
  <div class="four">four</div>
  <p>P</p>
 

</body>

</html>



.first {
    color: red;
    border-bottom:2px solid red;

}

.two {
    color: green;
    border-bottom:2px solid green(226, 233, 226);

}

.three {
    color: blue;
    border-bottom:2px solid blue;

}

.four {
    color: black;
    border-bottom:2px solid black;

}

.first,
.two,
.three,
.four,
p {
    background-color: #eee;
    margin-left: 25%; 
    padding: 10px;
    width: 50%;


}



<!-- seperator -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div >
   <h2>Title</h2> 
    <p>Paragraph Inside Div</p>
    <p class="special">Paragraph Inside Div With Class</p>
  </div>
  
  <p>Paragraph Outside Div</p>
  

</body>

</html>

Div p {
  color: red;
}

div .special {
  color: blue;

}



<!-- seperator Width and Height-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div >Osama Saed</div>
  <hr>
  <div >Osama Saed Mohamed</div>
  <hr>
  <div >Osama Saed Mohamed Ali</div>
  

  

</body>

</html>


div {
    background-color: red;
    padding: 10px;
    max-height: 400px;
    width: fit-content;


}



<!-- seperator Overflow (Overflow-x , Overflow-y)-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores iste earum amet qui, omnis corporis maxime tempore porro aliquid blanditiis id iure facere recusandae vitae ipsum sed perspiciatis? Dignissimos, suscipit!</div>


  

  

</body>

</html>


div {
    width: 150px;
    height: 150px;
    margin: 20px auto;
    overflow: auto;
  

}



<!-- seperator text color and text shadow-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div >Elzero Web School</div>


  

  

</body>

</html>

div {
 color: black;
 text-shadow:3px 2px 3px red ;

}



<!-- seperator text-align and direction -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>

  <div>Elzero Web <img src="https://placehold.co/20" alt="" style="vertical-align: middle;"> School</div>

</body>

</html>


div {
    text-align: center;
    direction: rtl;
}



<!-- seperator text-decoration and text-transformation -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div>Elzero Web School</div>
  <a href="#">Google</a>






</body>

</html>


div {
    padding: 10px;
    margin-bottom: 5px;
    text-transform: uppercase;


}


a {
    text-decoration: none;
    border-radius: 3px;
    background-color: red;
    color: black;
    display: inline-block;

}



<!-- seperator spacing-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div>Elzero Web School<br>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, vero tempora! Esse quaerat aut sint optio debitis numquam praesentium temporibus eaque! Voluptates mollitia hic necessitatibus sit eos, et perspiciatis minima. 
  </div>
  






</body>

</html>


div {
    background-color: #eee;
    letter-spacing: -1px;
    width: 700px;
    word-spacing:  4px; 
    word-break: break-all;
    white-space: nowrap;
   line-height: 1.6;
   text-indent: 50%;

}



<!-- seperator overflow and use cases -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>

  <div title="Welcome To Elzero Web School ,Hello">Welcome To Elzero Web School ,Hello</div>

</body>

</html>


div {
    background-color: #eee;
    padding: 10px;
    letter-spacing: -1px;
    width: 200px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;

}



<!-- seperator inheritance-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>

  <div >
    <h3>Elzero Web School</h3>
    <p>Welcome to the website</p>
  </div>

</body>

</html>


body{
    font-family: Arial, Helvetica, sans-serif;

}


div {
    padding: 20px;
    background-color: #eee;
    text-align: center;
    border: 2px solid blue;
    font-size: 20px;
}

div p {
    padding: 15px;
    border: 2px solid;
    border-color: inherit;

}



<!-- seperator font-family-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">

</head>

<body>

  <div >
    <h3>Elzero Web School</h3>
    <p>Welcome to the website</p>
  </div>

</body>

</html>


div {
    padding: 20px;
    background-color: #eee;


}

body {
    font-family: "Bungee Spice", sans-serif;
    font-weight: 400;
    font-style: normal;
  }



  <!-- seperator fonts-size and css units-->


  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">


</head>

<body>

  <div >
    Elzero Web School
    <span>Test</span>
  </div>

</body>

</html>


/*
 em => means equals the size of the div
rem => means equals the size of the html 
vw => means equals the size of the page
 */

 
div {

    font-size: 2vw;
    padding: 20px;
    background-color: #eee;
}


div span {
    font-size: 2em;
    /* font-size: 2rem;
    font-size: 2vw; */

}



<!-- seperator font (style , variant , weight)-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">


</head>

<body>

  <div >Elzero Web School </div>
  <p>Elzero Web School </p>

</body>

</html>


div {
font-style: italic;
font-variant: small-caps;
font-weight: 800;
}



<!-- seperator float , clear and opacity -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>


  <div class="parent">
    <div>parent one</div>
    <div>parent two</div>
    <div>parent three</div>
    <div>parent four</div>
    <p class="clear"></p>
  </div>
  
<p class="re">this is a paragraph</p>





</body>

</html>


.parent {
    background-color: red;
    padding: 10px;

}


.parent div {
    background-color: #eee;
    float: left;
    width: 25%;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;

}

.clear {
    clear: both;

}

.re {
    text-align: center;
    background-color: black;
    color: white;
    opacity: 0.5;
}



<!-- seperator table styling-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS</title>
  <link rel="stylesheet" href="css/master.css">

</head>

<body>

 <table>
  <thead>
    <tr>
      <td>Name</td>
      <td>Age</td>
      <td>Email</td>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>Osama</td>
      <td>38</td>
      <td>0@nn.sa</td>

    </tr>

    <tr>
      <td>Osama</td>
      <td>38</td>
      <td>0@nn.sa</td>

    </tr>

    <tr>
      <td>Osama</td>
      <td>38</td>
      <td>0@nn.sa</td>

    </tr>

  </tbody>

 </table>

</body>

</html>


body {
    background-image: url(../../painting-mountain-lake-with-mountain-background_188544-9126.avif);



}



table {
    width: 100%;
    border: 5px solid #eee;
}


table td {
    opacity: 0.8;
    font-size: large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 30px;
    background-color: #d4c8c8a4;
    border: 1px solid #d9d2d2a1;

}


table thead td {
    background-color: darkblue;
    color: #fff;
    font-weight: bold;
    text-align: center;



}


<!-- seperator -->