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
    <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</h2>
    


    <style>
        h2{
            width: 800px;
        }
      body{
        background-color: orange;
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