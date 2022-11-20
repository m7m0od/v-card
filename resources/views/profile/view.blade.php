<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="developer" content="mahmoud">
            <title>Business Card</title>
            <link rel="icon" href="Img/icon-logo.svg" type="image/png">
            <link rel="icon" href="Img/icon-logo.svg">
            <link rel="stylesheet" href="{{asset('front/Css/all.css')}}">
            <link rel="stylesheet" href="{{asset('front/Css/style.css')}}">
            <link rel="icon" type="image/x-icon" href="{{asset('uploads/cart.jpg')}}">
      </head>
      <body id="body" class="theme--dark">
            <input id="menu" type="checkbox">
            <input id="night" type="checkbox">
            <div id="container">
                  <div class="header">
                        <div class="logo"></div>
                        <label class="night-mode" for="night" onclick="enableNight()">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"/></svg>
                        </label>
                  </div>  
                 
                  <section class="left-section">
                        <img class="profile-pic" src="{{asset($profile->profile_pic)}}"/>

                        <div class="profile-detail">
                              <span class="profile-maps">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
                                    {{$profile->location}}
                              </span>
                              <p class="profile-name">{{$profile->user->name}}</p>
                              <span class="profile-summary">{{$profile->jobTitle}}</span>
                              <p class="profile-phone"><a href="tel:{{$profile->phone}}" style="color:antiquewhite;">{{$profile->phone}}</a></p>
                        </div>
                        
                        <div class="profile-pils">
                            <span class="pils"><a href="{{$profile->linkedIn}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg> Linkedin</a></span>
                            <span class="pils"><a href="{{$profile->github}}" target="_blank"><ion-icon name="logo-github"></ion-icon> gitHub</a></span>
                            <span class="pils"><a href="mailto:{{$profile->user->email}}" target="_blank"><ion-icon name="mail-outline"></ion-icon> linkedin</a></span>
                            <span class="pils"><a href="{{$profile->fb}}" target="_blank"><ion-icon name="logo-facebook"></ion-icon> Facebook</a></span>
                        </div>
                  </section>
                 
                  <div class="front-smooth"></div>
            </div>
            <script src="{{asset('front/Js/script.js')}}"></script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      </body>
</html>