<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <!-- font -->  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,700;1,300;1,700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,400;0,8..144,700;1,8..144,100&display=swap" rel="stylesheet">

    <!--feather icon-->
    <script src="https://unpkg.com/feather-icons"></script>
    <!--My CSS-->
    <link rel="stylesheet" href="profil.css">
</head>
<body>
    <?php
    $tglLahir = new DateTime('2002-07-21');
    $tglSekarang = new DateTime('today');
    $umur = $tglSekarang->diff($tglLahir)->y;
    $nama = 'Bachtiar Riza Pratama';
    $pendidikan = array('SDN Jedongcangkring','SDN Cemengkalang','SMPN 2 Sidoarjo','SMAN 1 Krembung','Universitas Pembangunan Nasional "Veteran" Jawa Timur');
    ?>
    <!--Navbar start-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">bachtiar<span>riza</span>.</a>
        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#about">About Me</a>
            <a href="#hobby">Hobby</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
        </div>
    </nav>
    <!--Navbar end-->
    <!--Hero start-->
    <section class="hero" id="hero">
    <main class="content">
        <h1>Hello, <span>It's Me</span></h1>
        <h2>Bachtiar Riza Pratama</h2>
        <p>I'am a majoring informatics <br> UPN "Veteran" Jawa Timur</p>
        <a href="#" >My Social Media</a>
        <div class="image">
            <img src="img/profil.png" class="profil">
        </div>
        <div class="social">
            <a href="https://github.com/bachtiarrizaa" target="_blank"><i data-feather="github"></i></a>
            <a href="https://www.instagram.com/bachtiarrizaa/" target="_blank"><i data-feather="instagram"></i></a>
            <a href="https://twitter.com/scoobyd_doo" target="_blank"><i data-feather="twitter"></i></a>
        </div>
    </main>
    </section>
    <!--Hero end-->
    <!--About start-->
    <section id="about" class="about">
        <h2><span>About</span> Me</h2>
        <div class="row">
            <div class="about-img">
                <img src="img/profil.png" alt="Tentang Kami">
            </div>
            <form action="#" style="width: 1000px"class="posisi";>
            <fieldset class="h"/>
                <table>
                    <tr>
                        <td><b>Full Name</b></td>
                        <td>:</td>
                        <td>Bachtiar Riza Pratama</td>
                    </tr>
                    <tr>
                        <td><b>Nick Name</b></td>
                        <td>:</td>
                        <td>Bachtiar</td>
                    </tr>
                    <tr>
                        <td><b>Place and Date of Birth</b></td>
                        <td>:</td>
                        <td>Surabaya, 21 Juli 2002</td>
                    </tr>
                    <tr>
                        <td><b>Age</b></td>
                        <td>:</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td><b>Gender</b></td>
                        <td>:</td>
                        <td>Man</td>
                    </tr>
                    <tr>
                        <td><b>Blood Type</b></td>
                        <td>:</td>
                        <td>O</td>
                    </tr>
                    <tr>
                        <td><b>Religion</b></td>
                        <td>:</td>
                        <td>Islam</td>
                    </tr>
                    <tr>
                        <td><b>Address</b></td>
                        <td>:</td>
                        <td>Desa Jedongcangkring RT 01/RW 01 Kec. Prambon, Sidoarjo</td>
                    </tr>
                    <tr>
                        <td><b>Work</b></td>
                        <td>:</td>
                        <td>College Student</td>
                    </tr>
                    <tr>
                        <td><b>Nationality</b></td>
                        <td>:</td>
                        <td>Indonesia</td>
                </table>
            </fieldset>
            </form>
        </div>
    </section>
    <!--About end-->
    <!--Hobby start-->
    <section id="hobby" class="hobby">
        <h2><span>My</span> Hobby</h2>
        <div class="row">
            <div class="hobby-data">
                <img src="img/gunung.jpg" alt="hiking" class="hobby-card-image">
                <h3>Hiking</h3>
            </div>
            <div class="hobby-data">
                <img src="img/travelling.jpg" alt="travelling" class="hobby-card-image">
                <h3>Travelling</h3>
            </div>
        </div>
    </section>
    <!--Hobby end-->
    <section id="education" class="education">
        <h2><span>Education</span> Journey</h2>
        <div class="education-data">
                <div class="level"><?php echo $pendidikan[0]?></div>
                <div class="year">2009 - 2014</div>
            </div>
            <div class="education-data">
                <div class="level"><?php echo $pendidikan[1]?></div>
                <div class="year">2014 - 2015</div>
            </div>
            <div class="education-data">
                <div class="level"><?php echo $pendidikan[2]?></div>
                <div class="year">2015 - 2018</div>
            </div>
            <div class="education-data">
                <div class="level"><?php echo $pendidikan[3]?></div>
                <div class="year">2018 - 2021</div>
            </div>
            <div class="education-data">
                <div class="level"><?php echo $pendidikan[4]?></div>
                <div class="year">2021 - now</div>
            </div>
    </section>
    <!--Education end-->
    <!--Contaxt start-->
    <section id="contact" class="contact">
        <h2><span>My</span> Contact</h2>
        <div class="row">
            <div class="contact-item">
                <img src="https://img.icons8.com/nolan/1x/phone.png" />
                <h3 class="contact-item-tittle">Phone</h3>
                <p >+628983162389</p>
            </div>
            <div class="contact-item">
                <img src="https://img.icons8.com/nolan/1x/apple-mail.png" />
                <h3 class="contact-item-tittle">Email</h3>
                <p >bachtiarriza87@gmail.com</p>
            </div>
            <div class="contact-item">
                <img src="https://img.icons8.com/nolan/1x/marker.png" />
                <h3 class="contact-item-tittle">Address</h3>
                <p >Desa Jedongcangkring RT 01/RW 01 <br>Kec. Prambon Sidoarjo</p>
            </div>
        </div>
    </section>
    <!--Contact end-->
    <!--Footer start-->
    <footer>
        21081010293 | Bachtiar Riza Pratama
    </footer>
    <!--Footer end-->
    <!--Feather Icon-->
    <script>
        feather.replace()
    </script>
</body>
</html>