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
    <h2>Here is my resume </h2>
    <img class="image" src="{{url('https://www.jobscan.co/wp-content/uploads/2017/11/Functional-Resume-Template-2.jpg')}}", height = "700px">




    <style>
      body{
        background-color: green;
      }
  .head{
    display: flex;
  }
  .image{
    margin-left: 100px;
    margin-top: 10px;
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