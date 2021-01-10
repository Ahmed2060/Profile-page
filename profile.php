<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="design/likes.css">
       <link rel="shortcut icon" href="design/1.ico">
        <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width"/>
    

    <style media="screen">

    *{
      padding: 0;
      margin: 0;
    }
 

    body{
      font-family: 'Nerko One', cursive;
      height: 100%;
      background-color: #fafafa;
      color: #262626;
      padding-bottom: 0;
      background: #222831;
      min-height: 100vh;


      display: flex;
      flex-direction: column;
    }


   footer{
       background-color: #21b0a2;
       display: none;
       justify-content: space-around;
       height: 66px;
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;

       /*display: none;*/
     }
     footer i{
       color: white;
       padding-top: 24px;
       font-size: 30px;

     }



    /*comments*/
    input{
      background: transparent;
      width: 100%;
      height: 30px;
      font-size: 16px;
      color: white;
      border: 0;
      padding-top: 70px;
      outline: none;
    }
    ::placeholder{
      padding-left: 10px;
      font-size: 15px;
    }



    /*header*/
    .header{
      width: 101%;
      height: 90px;
      display: block;
      background: #21b0a2;
      margin-top: -8px;
      margin-left: -8px;
      position: fixed;
      top: 0;
      right: 0;
    }
    .inner_header{
      width: 100%;
      height: 100%;
      display: flex;
      justify-content:space-around;
      margin: 0 auto;
    }
    .logo-container{
      height: 100%;
      display: table;
      float: left;
    }
    .logo-container h1{
      color: white;
      height: 100%;
      display: table-cell;
      vertical-align: middle;
      font-size: 32px;
    }
    .logo-container span{
      color: #333445;
    }
    .nav{

      height: 100%;
    }
    .nav a{
      height: 100%;
      display: table;
      float: left;
      padding: 0px 20px;
    }
    .nav a li{
      display: table-cell;
      vertical-align: middle;
      height: 100%;
      color: white;
      font-size: 25px;
      padding-bottom: 1px;
    }


    /* profile Section*/
    .container{
      width: 60%;

      background: #222831;
      border-radius: 6px;
      overflow: hidden;
      padding-top: 100px;
      height: auto;
      width: 100%;
    }


    .profile{

    }
    .profile::after{
      content: "";
      display: block;
      clear: both;
    }
    .profile-image{
      float: left;
      width: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-left: 10px;
      height: 200px;
    }
    .profile-image img{
      border-radius: 50%;
      width: inherit;
      height: inherit;
    }
    .btn{
      border: 1px solid #3498db;
      background-color: black;
      color: white;
      height: 30px;
      width: 100px;
      border-radius: 5px;
      transition: all 0.3s;
      font-family: Arial;
       font-style: none;
       font-size: 15px;
       
    }

    .btn:hover{
      transform: scale(1.1);
    }
    .profile-user-settings,
    .profile-stats,
    .profile-bio{
      float: left;
      width: calc(66.666% - 2rem);
      color: white;
      padding-left: 20px;
    }
    .profile-user-settings{
      margin-top: 1.1rem;

    }
    .profile-user-name{
      display: inline-block;
      font-size: 3.2rem;
      font-weight: 300;
      color: white;
      padding-bottom: 10px;

    }
    .profile-edit-btn{
      outline:none;
      margin-left: 10px;
      margin-bottom: 10px;
      color: white;
    }
    .profile-settings-btn{
      font-size: 2rem;
    |
      color: white;
    }
    .profile-stats-count{
       padding-left: 10px;


    }
    .profile-stats li{
      display: inline-block;
      font-size: 1.6rem;
      line-height: 1.5;

      cursor: pointer;
    }
    .profile-stats li:last-of-type{

    }
    .profile-bio{
      font-size: 1.6rem;
      font-weight: 400;
      line-height: 1.5;
      padding-left: 30px;
      padding-top: 20px;
      color: white;
      width: 100%;

    }
    .profile-real-name,
    .profile-stat-count,
    .profile-esit-btn{
      font-weight: 600;
      color: white;
    }

    .clearfix::after {
      content: '';
      display: block;
      clear: both;
    }

    .fa-ellipsis-h {
      position: relative;
      left: 490px;
      bottom: 40px;
      background-color: #222831;
      box-shadow: none;
      outline: none;
      border: none;
      color: white;
      font-size: 30px;
      
    }

    
    .post-wrapper {
       display: inline-block;
       margin: 0;
       margin-top: 100px;
       height: auto;
       border: 1px solid white;
       width: 540px;
       margin-bottom: 20px;

     }



     .username {
       background: #222831;
       display: block;
       padding: 0;
       height: 50px;
       border: 1px solid white;
     }
     .username i {
       padding-left: 10px;
       padding-top: 10px;
       color: white;
     }
     .username h1 {
       display: inline-block;
       padding: 0;
       height: 0;
       font-size: 20px;
       color: white;
     }
     .post-img {
       background:  #222831;
       display: block;
       padding: 0;
       height: auto;
       

     }
     .post-img img{
       max-width: 540px;
       max-height: 700px;
     }
     .post-img video{
       max-width: 540px;
       max-height: 700px;
     }
     .post-bottom {
       padding: 10px;
       height: 100px;
       width: 520px;
     }



    .delete {
      z-index: 100000;
      height: 50px;
      width: 200px;
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      display: flex;
      justify-content: center;
      position: relative;
      left: 340px;
      bottom: 30px;
      color: white;
      background-color: #da052b;
      border-top-left-radius: 9px;
      border-bottom-left-radius: 9px;
      border-top-right-radius: 9px;
      border-bottom-right-radius: 9px;
      display: none;
    }

    .ellipsis:hover .delete{
      display: block;
    }

    
    label{
    box-sizing: border-box;
    font-size: 20px;
    background-color: black;
    color: white;
    border: 1px solid #3498db;
    padding: 2px 15px;
    border-radius: 5px;
    }




   .contents {
     border-radius: 10px;
     width: 600px;
     height: 400px;
     z-index: 10000;
     position: relative;

     background-color: white;
     outline: none;
   }

   .modal-header {
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      height: 80px;
      width: 600px;
      background-color: #21b0a2;
      padding: 0;
      margin: 0;
      position: relative;
      bottom: 1px;

   }

   .modal-title {
     font-size: 20px;
     font-style: bold;
     color: black;
     position: relative;
     left: 20px;
     top: 20px;

   }

   .input {
     padding: 0;
     margin: 0;

     position: relative;

   }

   .textarea {
     border: 3px solid black;
     position: relative;
     left: 5px;
     width: 583px;
     height: 100px;
     
   }


   .caption {
     position: relative;
     left: 5px;

     padding-bottom: 5px;
   }
    
   .img-input {

     color: black;
     padding:0px;
     padding-left: 5px;
     margin:0px 0px 6px;
     text-align: center;
     width: auto;
   }

   .close {
     position: relative;
     left: 540px;
     bottom: 10px;
     font-size: 30px;
     background-color: #21b0a2;
     text-decoration: bold;
     box-shadow: none;
     border: none;
     outline: none;

   }

   .post-btn {
     position: relative;
     left: 10px;
     top: 26px;
     background-color: #da052b;
     padding: 0;
     margin: 0;
     width: 100px;
     border-radius: 5px;
     transition-duration: 0.4s;
   }

   .post-btn:hover {
     transition-duration: 0.4s;
     transform: scale(1.1);
   }

   .modal-wrapper {
     top: 50%;
     width: 100%;
     position: absolute;
     display: flex;
     justify-content:center;

   }

   .hello {
     display: flex;
     justify-content: center;
     align-items: center;

   }

   
   .b_btn {
     position: relative;
     left: 350px;
     bottom: 82.5px;
   }


   @media screen and (max-width:700px) {
     .post-wrapper{
          width: 100%;
          margin-bottom: 100px;
        }

        .post-bottom h1 {
            font-size: 30px;
        }
        .post-bottom {
            width: 480px;
        }
        .username{
            height: 60px;
        }

        .username h1 {
            font-size: 30px;
        }
        .post-img img{
          width: 100%;
          max-width: 100%;
        }
        
        .post-img video{
          width: 100%;
       }
       body {
           width: 100vh;
           margin:0;
           padding:0;
       } 

       html {
           width: 100vh;
           margin:0;
           padding:0;
       }


      footer {
        display: flex;
      }
      .nav {
        display: none;
      }

      .inner_header {
        justify-content: center;
      }

      .fa-ellipsis-h{
        left: 800px;
        bottom: 45px;
      }

      .delete {
        left: 660px;
      }

     .b_btn {
         position: relative;
         bottom: 30px;
         left: 0px;
     
     }

     
        .logo-container h1 {
            font-size: 60px;
        }

      .modal-wrapper {
          position:fixed;
          width: 100%;
      }  
      .modal-header {
          width: 100%;
      }
      .contents {
          width: 95%;
      }

      .close {
          left:600px;
      }

      .textarea {
          width: 97%;
      }

   }

   .a_btn {
     position: relative;
     left: 230px;
     bottom: 40.5px;
     font-family: Arial;
       font-style: none;
       font-size: 15px;
       
       
     
   }
   
   .h1-text {
       padding-top: 5px;
       padding-left: 10px;
   }


   .no-post_text {
     color: white;
     font-size: 40px;
   }

   .fa-icons{
     color: white;
     font-size: 150px;
     align-items: center;
   }

   .no-post_wrapper {

     display: flex;
     justify-content: center;
     padding-top: 20px;
   }

   .no-post_wrapper2 {

     display: flex;
     justify-content: center;
   }



    </style>


    <title>Profile</title>
  </head>
  <body>


    <div class="header" style="z-index: 1000000;">
      <div class="inner_header">
        <div class="logo-container">
          <h1>SFS<span> Students</span></h1>
        </div>
        <ul class="nav">
          <a href="index.php"><li><i class="fas fa-home" aria-hidden="true"></i></li></a>
          <a href="explore.php"><li><i class="fas fa-compass" aria-hidden="true"></i></li></a>
          <a href="profile.php"><li><i class="fa fa-user" aria-hidden="true"></i></li></a>
        </ul>
      </div>

    </div>



    <div class="container">
      <div class="profile">
        <div class="profile-image">
            <img src="# HOT SORA MEN 3NDAK #" alt="">
        </div>
        <div class="profile-user-settings">
          <h1 class="profile-user-name"><?php echo $username; ?></h1>


           <div class="button-wrapper">

        <div class="second-wrapper">


         
              <button type="submit" type="button" name="follow" class="btn profile-edit-btn">Follow</button>
         
         
          <button class="btn profile-edit-btn" type="button" onclick="showNewPostModal()">New Post</button>
          <div class="btn profile-edit-btn a_btn">
            <a href="edit-profile.php" style="text-decoration:none; color:white;"><div class="h1-text">Edit Profile</div></a>
          </div>
            <button type="submit" type="button" name="logout" class="btn profile-edit-btn b_btn" style="background-color:#da052b;">Logout</button>
        </div>
        </div>


          </form>
        </div>
        <div class="profile-stats">
          <ul>
            <li><span class="profile-stats-count">1 followers</span></li>
            <li><span class="profile-stats-count">1 following</span></li>
            
          </ul>
        </div>
        <div class="profile-bio">
          <p>Bio Bio bIO bIO bIO bio Bio Bio Bio Bio Bio</p>
        </div>
      </div>
    </div>

  <div class="timelineposts">
      <div class="hello"><div class="post-wrapper"><div class="username"><i class="fa fa-user fa-2x"></i><h1>Mostafa Saber</h1></div><div class="ellipsis"><i class="fas fa-ellipsis-h"></i><button type="button" name="button"><div class="delete" id="delete" >Delete</div></button></div><div class="post-img"><img src="# HOT SORA MEN 3NDAK#" alt=""></div><div class="post-bottom" style="min-height:100%; overflow-x:hidden; overflow-y:auto;"><h1 style="color:white; width:100%;bottom: 10px; font-size: 30px;position:relative; word-wrap:break-word;">test post</h1></div></div></div></div> 
  </div>

          <div class="modal-wrapper" >

            <div class="modal contents" id="newpost" role="dialog" tabindex="-1" role="document" style="display:none;">
                <div class="modal-header">
                    <h4 class="modal-title">New Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <br>
                <div class="input">
                        <form action="profile.php?username=<?php echo $username; ?>" method="post" enctype="multipart/form-data">
                                <h1 class="caption">Caption: </h1>
                                <textarea id="hellos" class="textarea" name="postbody" rows="8" cols="80"></textarea>
                                
                                <br /><h2 class="caption">Upload file:</h2>
                                <input class="img-input" type="file" name="postimg" value="Upload">

                </div>
                <div class="modal-footer">
                    <input type="submit" name="post" value="Post" class="post-btn" type="button" >

                    </form>
                </div>
            </div>
          </div>

          <footer>
            <a href="index.php"><i class="fa fa-home home" aria-hidden="true"></i></a>
            <a href="explore.php"><i class="fas fa-compass" aria-hidden="true"></i></a>
            <a href="profile.php?username=<?php echo $usernames; ?>"><i class="fa fa-user" aria-hidden></i></a>
            
         </footer>


         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/bootstrap/js/bootstrap.min.js"></script>
         <script src="assets/js/bs-animation.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
             
   </body>
</html>

<!--    ' <div class="hello"><div class="post-wrapper"><div class="username"><i class="fa fa-user fa-2x"></i><h1>'+posts[index].PostedBy+'</h1></div><div class="ellipsis"><i class="fas fa-ellipsis-h"></i><div class="delete" id="delete" data-delete_id="'+posts[index].PostId+'">Delete</div> </div><div class="post-img"><img src="img/'+posts[index].PostImg+'" alt=""></div><div class="post-bottom" style="min-height:100%; overflow-x:hidden; overflow-y:auto;"><h1 style="color:white; width:100%;bottom: 10px; font-size: 20px;position:relative; word-wrap:break-word;">'+posts[index].PostBody+'</h1><div class="heart-btn"><div class="content" data-id="'+posts[index].PostId+'"><span class="heart"></span><span class="text">Like</span><span class="numb">'+posts[index].Likes+'</span></div></div></div></div></div>'
