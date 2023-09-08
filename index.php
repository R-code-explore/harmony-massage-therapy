<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home - Harmony-Massage-Therapy</title>
</head>
<body>

<!--Header settings -->
    <header>
        <div class="logo_section">
            <img src="./assets/harmonie_logo_white.png" alt="Harmony Massage Therapy's Logo">
            <h1 class="logo_title">Harmony Massage Therapy</h1>
        </div>

        <div class="phone_menu">
            <img src="./assets/menu.svg" alt="Menu's button icone" onclick="openMenuFunction()">
        </div>
        
        <div class="desktop_menu">
            <a href="" class="desktop_menu_link main_font">Contact</a>
            <a href="" class="desktop_menu_link main_font">Pareri</a>
            <a href="" class="desktop_menu_link main_font">Termeni si conditii de utilizare</a>
        </div>
    </header>

    <div class="menu_container" id="menu_container">
        <a href="" class="text_menu_1 main_font text_menu" onclick="closePhoneMenu()">Contact</a>
        <a href="" class="main_font text_menu" onclick="closePhoneMenu()">Pareri</a>
        <a href="" class="main_font text_menu" onclick="closePhoneMenu()">Termeni si conditii de utilizare</a>
        <p class="main_font text_menu close_menu" onclick="closePhoneMenu()">Inchide meniu</p>
    </div>
<!--End of Header-->

    <div class="banner">
        <img src="./assets/alan-caishan-cU53ZFBr3lk-unsplash.jpg" alt="Harmony Massage Therapy's Banner" class="banner_background">
        <img src="./assets/gants.jpg" alt="Banner's second image" class="banner_img">

        <div class="banner_filter"></div>
        <h1 class="banner_filter_title">Terapia Fohow<br>Harmony Massage Therapy</h1>
    </div>

    <main>
        <div class="ring_menu">
            <img src="./assets/star_icone.png" alt="" class="etoile">
            <img src="./assets/fb_icone.png" alt="" class="fb_icone">
        </div>
        <div class="nav_menu">
            <a href="" class="nav_menu_options main_font">Ce este terpaia fohow ?</a>
            <a href="" class="nav_menu_options main_font">Ce vă putem oferi?</a>
            <a href="" class="nav_menu_options main_font">Informatii de contact</a>
        </div>

        <div class="map_info">
            <h3 class="map_info_title main_font">Unde ne puteti gasi ?<br>Aleea Minerilor 29, Baia Sprie 435100</h3>
            <img src="./assets/maps.png" alt="Harmony Massage Therapy's localisation informations" class="map_info_image">
        </div>

        <div class="fohow_info">
            <h3 class="fohow_info_title main_font">Ce este terapia Fohow ?</h3>
            <p class="fohow_info_txt main_font">
                Fohow combină principiile învățăturilor medicinei tradiționale chinezești privind meridianele și organele interne cu cele mai recente realizări ale științei moderne în domenii precum bioinformatica, bioenergetica și neurologia. Simulează efectele fizioterapiei și ale tehnicilor de medicină tradițională chineză, cum ar fi: Acupunctură Gua Sha Tui Na Masaj Moxibustie Terapia cu vacuum. 
                <br><br>
                Masajul meridian oferă un efect fizioterapeutic rapid și tangibil datorită impactului direcțional asupra punctelor biologic active. Acesta curăță instantaneu meridianele, îmbunătățește circulația sângelui, crește energia corpului și restabilește echilibrul Yin-Yang al organelor interne. Poate fi utilizată pentru a preveni și trata bolile și pentru a menține o stare de sănătate bună.
            </p>
        </div>

        <div class="fohow_helps">
            <h3 class="fohow_info_title main_font">Cu ce va ajuta terapia ?</h3>
            <div class="fohow_helps_section">
                <p class="main_font">
                    - Relaxare
                    <br>
                    - Detoxifiere
                    <br>
                    - Scadere in greutate
                    <br>
                    - Drenaj limfatic
                    <br>
                    - Tratare celulita
                    <br>
                    - Intinderi si relaxare musculara
                    <br>
                    - Dureri lombare toracice si cervicale
                    <br>
                    - Insomnie
                    <br>
                    - Nevroza
                    <br>
                    - Bursita tulburari gastrointestinale
                    <br>
                    - Constipatie
                    <br>
                    - Hemoroizi
                </p>
                <p>
                    - Boli reumatice
                    <br>
                    - Artrita
                    <br>
                    - Dureri picioare
                    <br>
                    - Traumatisme
                    <br>
                    - Leziuni ale tesuturilor moi
                    <br>
                    - Sindrom de menopauza
                    <br>
                    - Suprasolicitare
                    <br>
                    - Reintinerire
                    <br>
                    - Reda elasticitate pielii
                    <br>
                    - Restabileste functille organelor
                    <br>
                    - Reechilibrarea organismului
                </p>
            </div>
        </div>
        
        <div class="advice_section">
            <h3 class="main_font advice_section_title">Opinii despre Harmony Massage Therapy</h3>
            <ul class="gallery advices_section">

                <!--Section à générer en PHP-->
                <li class="advices_sections">
                    <div class="user_info">
                        <img src="./assets/user_img_example.jpg" alt="src">
                        <p>Oana Test</p>
                    </div>
                    <p>Incepant cu primele sedinte,
                    am inceput deja sa simt o reala
                    diferenta !</p>
                    <div class="stars">
                        <!--Script de vote par étoile ( avec séléction JS dans un   formulaire par exemple ) // à développer-->
                        <img src="./assets/etoiles_exemple.png" alt="indicatie de   o nota atrbuita de vre un utilizator">
                    </div>
                </li>
        
                <li class="advices_sections">
                    <div class="user_info">
                        <img src="./assets/user_img_example.jpg" alt="src">
                        <p>Oana Test</p>
                    </div>
                    <p>Incepant cu primele sedinte,
                    am inceput deja sa simt o reala
                    diferenta !</p>
                    <div class="stars">
                        <!--Script de vote par étoile ( avec séléction JS dans un   formulaire par exemple ) // à développer-->
                        <img src="./assets/etoiles_exemple.png" alt="indicatie de   o nota atrbuita de vre un utilizator">
                    </div>
                </li>
        
            </ul>
         </div>

         <div class="advice_form">
            <h3 class="main_font advice_form_title">Lasati si dumneavoastra un comentariu
completand formular de mai in jos</h3>
            <form action="" method="POST" class="form">
                
                <input type="text" class="advice_form_input main_font" id="advice_form_input_01" name="name" placeholder="Prenume" required>
            
                <textarea name="advice_txt" id="advice_textarea" placeholder="Comentariul sau pararea dumneavoastra" required></textarea>

                <label for="option">Alegeti o nota : </label>
                <select id="option" name="option">
                    <option value="option1" class="option-container">
                        <p>Nota 1/5</p>
                    </option>
                    <option value="option2" class="option-container">
                        <p>Nota 2/5</p>
                    </option>
                    <option value="option3" class="option-container">
                        <p>Nota 3/5</p>
                    </option>
                    <option value="option4" class="option-container">
                        <p>Nota 4/5</p>
                    </option>
                    <option value="option5" class="option-container">
                        <p>Nota 5/5</p>
                    </option>
                    <!-- Ajoutez autant d'options que nécessaire -->
                </select>
                <img id="image_preview" src="assets/stars/1.png" alt="Image Preview">
                <br><br>
                <div class="termens_checkbox">
                    <input type="checkbox">
                    <p class=main_font>Am acceptat <a href="">terminii si conditiile</a> site-ului inainte de a confirma formularul</p>
                </div>

                <button class="submit_form_button main_font" type="submit">Trimite</button>
            </form>
         </div>

         <script>
    // Récupérez la référence vers le sélecteur
    var selectElement = document.getElementById("option");

    // Récupérez la référence vers l'image que vous souhaitez mettre à jour
    var imagePreview = document.getElementById("image_preview");

    // Ajoutez un écouteur d'événements "change" au sélecteur
    selectElement.addEventListener("change", function() {
        // Obtenez la valeur sélectionnée dans le sélecteur
        var selectedOption = selectElement.value;

        // Mettez à jour l'image en fonction de l'option sélectionnée
        switch (selectedOption) {
            case "option1":
                imagePreview.src = "assets/stars/1.png";
                break;
            case "option2":
                imagePreview.src = "assets/stars/2.png";
                break;
            case "option3":
                imagePreview.src = "assets/stars/3.png";
                break;
            case "option4":
                imagePreview.src = "assets/stars/4.png";
                break;
            case "option5":
                imagePreview.src = "assets/stars/5.png";
                break;
            // Autres options peuvent être ajoutés au cas ou
            default:
                imagePreview.src = "default-image.jpg"; // Image par défaut
        }
    });
</script>

    
    </main>

    <footer>

        <div class="footer_sections">
            <p class="main_font"><strong>Adresa</strong> : Aleea Minerilor 29, Baia Sprie 435100</p>
            <p class="main_font"><strong>Telefon : </strong>+40 771 766 535</p>
            <p class="main_font"><strong>Email : </strong>terapiefohow@gmail.com</p>
        </div>

        <div class="footer_sections">
            <p class="main_font"><a href="">Termeni si conditii de utilizare</a></p>
            <p class="main_font">Credit website : Harmony Massage Therapy ®</p>
        </div>

    </footer>
<script src="main.js"></script>
</body>
</html>