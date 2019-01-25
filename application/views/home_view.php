<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<title>Welcome to my website</title>

	<style type="text/css">
            @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

h1 {
    font-family:fantasy;
    margin-top: -270px;
}
.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}

.darken-grey-text {
    color: #2E2E2E;
}
.jumbotron {
    background-color: #E4E5E6;
    margin-bottom:0;
    height: 490px;
}

img {
    height: 300px;
    margin-left: 600px;
}
	</style>
</head>
<body>
	    <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark">
                <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/logo.png" height="30" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#"> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#"> Contact</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Logout</a>
                        </li>                        
                    </ul>
                </div>
        </nav>

        <div class="col-md-12">
            <div class="jumbotron">
                    <img src="https://pngimage.net/wp-content/uploads/2018/06/gambar-user-png-2.png" alt="">
                    <h1>Selamat datang di Website saya</h1>
                    <br>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat, arcu nec sodales varius, augue tellus mollis eros, non dignissim dui lacus ut neque. Aenean suscipit sem a lectus pretium aliquet. Curabitur tempor dolor ac ante molestie, sed volutpat massa imperdiet. Morbi leo nibh, sagittis vel eros eget, dictum pharetra neque. Integer dictum ultricies auctor.</p>
                    </div>
                    <button class="btn btn-outline-success">Read More</button>
            </div>
        </div>
</body>
</html>