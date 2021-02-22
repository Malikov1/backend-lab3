<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
 <title></title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>About me</h1>
<div class=container>
<div class="head">
    <div class="head_inner"><a href=" {{ route('education') }} " class="black">Resume</a></div>
    <div class="head_inner"><a href=" {{ route('bio') }} " class="black">Bio</a></div>
    <div class="head_inner"><a href=" {{ route('contacts') }} " class="black">Contacts</a></div>
    </div>
    </div>
    <h2>Here is my contacts </h2>
   <div class="information">
   <div>
   Kyle B. Chase </br>
4020 Clark Street</br>
Schaumburg, IL 60173</br>
Curious what Kyle means? Click here to find out!</br>

Mother's maiden name</br>
Cullinan</br>
SSN</br>
345-44-XXXX</br>
You should click here to find out if your SSN is online.</br>
Geo coordinates</br>
41.996324, -87.963883</br>
PHONE</br>

Phone</br>
630-987-2784</br>
Country code</br>
1</br>
BIRTHDAY</br>

Birthday</br>
January 11, 1936</br>
Age</br>
85 years old</br>
Tropical zodiac</br>
Capricorn</br>
   </div>

   </div>



    <style>
      body{
        background-color: purple;
      }
      .information{
          font-size:28px;
      }
  .head{
    display: flex;
  }
  .image{
    margin-left: 100px;
    margin-top: 40px;
  }
  .head_inner{
    margin-left: 15px;
    margin-top: 7px;
    margin-right: 50px; 
    text-decoration: none;
    color: black;   
    font-size:30px;
}
.black{
    color: black;
    text-decoration: none;
}

.container{

    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Montserrat', sans-serif;
    }

    </style>


    </body>
</html>