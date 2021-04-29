<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Home</title>
    </head>

    <input type="checkbox" id="check">

    <body> 
        <nav>
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="logo">
                <h4>Rise Of Kindoms</h4>
            </div>
            
            <ul>
                <li class="home"><a href="index.html">Home</a></li>
                <li class="list"><a href="list.html">list</a></li>
                <li class="profile"><a href="profil.html">Profile</a></li>
            </ul>
        </nav>  

        <div class="sidebar">
            <ul>
                <li>
                    <a href="terpopuler.html">
                        <span class="icon"><i class="fas fa-fire-alt"></i></span>
                        <span class="title">Terpopuler</span>
                    </a>
                </li>
                
                 
                <li>
                    <a href="berita.html">
                        <span class="icon"><i class="fas fa-newspaper"></i></span>
                        <span class="title">Berita</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="box">
            <input class="search" type="text" name"" placeholder="Search...">
            <a href="search-btn" href="#"><i class="fas fa-search"></i></a>
        </div>

        <section>              
            
            <div class="vertical-menu">
                
                <strong class="berita"># Berita Populer</strong>
                <a href="Aliansi.html">Aliansi Indonesia Diserang di Rise of Kingdoms</a>
                <a href="TatentR.html">Talent Ricard</a>
                
            </div>  
            
            <div class="tengahmenu">
                <h2 class="berita"><a href="Aliansi.html">Aliansi Indonesia Diserang di Rise of Kingdoms</a></h2>
                <img src="war.PNG">
                <h2 class="berita"><a href="TatentR.html">Talent Ricard</a></h2>
                <img src="talent.PNG">
            </div>
            
        </section>


    <footer>
        <div class="bawah">
            <h5>Mode</h5>
            <p>
                <span class="icon" onclick="setDarkMode(false)"><button>Terang</button></span>
                <span class="icon" onclick="setDarkMode(true)"><button>Gelap</button></span>
            </p>
    
            <style>
                #darkmode{
                    background: rgb(37, 35, 35);
                    color: white;
                }
            </style>
    
            <script>
                if(localStorage.getItem('theme') == 'dark')
                    setDarkMode(true)
    
    
                function setDarkMode(isDark){
                    if(isDark){
                        document.body.setAttribute('id', 'darkmode')
                        localStorage.setItem('theme', 'dark')
    
    
                    }else{
                        document.body.setAttribute('id', '')
                        localStorage.removeItem('theme')
    
                    }
    
                }
    
    
            </script>
            <strong>ROK</strong>
            <ul>
                <li>
                    <p>Kontak kami :</p>
                    <a href="https://instagram.com/firman_4s?igshid=1vp3j37udh0bs">Instagram ||</a>
                   
                </li>
            </ul>                    
        </div>
    </footer>    
    </body>
</html>