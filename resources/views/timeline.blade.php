@extends('layouts.app')

@section('content')
<head><title>timeline</title></head>
<body >
  <style>
body{
	background-color: #F6FAFF;
	background-attachment: fixed;
	background-size:cover;
    background-size: 100%;
    padding-left: 250px;
    padding-right: 250px;
}
textarea{

    background-color: #DAE8F9 ; 
	border:1px solid BLACK;

    width: 600px;
 	height: 70px;
}
#submit{
	background-color: #DAE8F9 ; 
    border: 2px solid BLACK;
    color: #008B75, 100%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius:5px;
}
p{
	text-align:left;
	background-color:white;
}

center{
    color:#385A82;
    
}

.profile{
    padding-left: 150px;
    padding-bottom: 10px;
    text-align:left;
}

img{
    border-radius: 50%;
}

  </style>
<center>
    <h1 >Timeline</h1>
    <div id="txt">
        <form method="post" action="index.php" enctype="multipart/form-data">
        <textarea name="text" placeholder="What is in your mind" required></textarea><br>

        <input type="submit" id="submit" name="submit" value="post" />
        </form>
    </div>
</center>

<br>
<center>
    <div class="profile">
    <img src="data:image/jpeg;base64,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"
     alt="Avatar" style="width:75px" > 
    </div>
    <div class="card" style="width: 600px;" >
        <div class="card-body" >
            <p>username :<br>  at:  "time"<br> "loremispum bablabalb "</p>
        </div>
    </div>
</center>




</body>
@endsection