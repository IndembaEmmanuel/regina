<!DOCTYPE html>
<html>
    <a id="retour_en_haut"></a>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>La Mode by Regina</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta http-equiv="Content-Language" content="fr" />
        <link rel="shortcut icon" href="images/favicon.jpg" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="https://kit.fontawesome.com/d85511e385.js"></script>
            <meta name="viewport" content="width=device-width"/>
    </head>

<body>
    <div id="wrap">
         <div class="header">

           <div class="logo">
               <div class="imgLogo"> <a href="home.php" title="logo"><img src="images/logo_email_lamodebyregina.jpg" width="250" height="100" /></a></div><!-- fin de logo -->
           <!-- fin de bandeau blanc -->
             
           <div class="langues">
               <div class="languesAnglais"><a href="home.php" title="english"><img src="images/eng.jpg" width="40" height="26" /></a>
               </div>
               
               <div class="languesFrancais"><a href="home.php" title="français"><img src="images/fr.png" width="40" height="26" /></a>
               </div>
          </div>
        </div>     
           <div class="menu">
                    
                    <ul>
                        <li><a href="#HOME" class="scroll">HOME</a></li>
                        <li><a href="#DESCRIPTION" class="scroll">DESCRIPTION</a></li>
                        <li><a href="#GALERIE D'AMBIANCE" class="scroll">GALERIE D'AMBIANCE</a></li>
                        <li><a href="#CONTACT" class="scroll">CONTACT</a></li>
                        
                    </ul>
          </div>
        <br>
<hr class="style1">
<br>   
    </div><!-- fin de header -->
       <article class="description">
             <a id="DESCRIPTION"></a><h2>Description</h2>
        <p>Un Concept-Store dédié à la femme avec une sélection de marques françaises comme internationales dans une ambiance Glamour.

        <br>Présentation de stylistes au niveau Prêt à Porter, Cocktail comme Lingerie.</p>
            
             <div class="slider">
                 <div class="slides"> 
                    <div class="slide"><img src="images/ban01.jpg" alt=""/></div>
                    <div class="slide"><img src="images/ban02.jpg" alt=""/></div>
                    <div class="slide"><img src="images/ban03.jpg" alt=""/></div>
                    <div class="slide"><img src="images/ban04.jpg" alt=""/></div>
                </div>
        </div>
            
            <p>Sur place, un accueil privilégié et des conseils d’expert vous seront réservés.<br>
                
            N’attendez plus et venez nous voir au 66 avenue des Champs Elysées dans la Galerie du Point Show de Paris.<br>
            A très vite !</p>
            
            <br>
            <hr class="style1">
            <br> 
            
        </article>
        
        <article class="galeries">
             <a id="GALERIE"></a><h2>Galerie</h2>
            <p>Des nouveautés régulièrement et des évènements dans notre espace.</p>

        <div id="GALERIE">
            <div class="column">
                <div class="imginsta"><a href="home.php"><img src="images/insta1.jpg" width="220" height="150" /></a></div>
                <img src="images/insta1.jpg">
                <img src="images/insta1.jpg">
                <img src="images/insta1.jpg">
                <img src="images/insta1.jpg">
            </div>
            <div class="column">
                <img src="images/">
                <img src="images/">
                <img src="images/">
                <img src="images/">
            </div>
            <div class="column">
                <img src="images/">
                <img src="images/">
                <img src="images/">
                <img src="images/">
            </div>
        </div>

            <?php
    function scrape_insta_user_images($username) {
        $insta_source = file_get_contents('https://www.instagram.com/'.$username.'/'); // instagram user url
        $shards = explode('window._sharedData = ', $insta_source);
        $insta_json = explode(';</script>', $shards[1]); 
        $insta_array = json_decode($insta_json[0], TRUE);
        return $insta_array; 
    }

    $username = 'lamodebyregina'; // user for which you want images 
    $results_array = scrape_insta_user_images($username);
    $limit = 12; // provide the limit thats important because one page only give some images.
    $image_array= array(); // array to store images.
        for ($i=0; $i < $limit; $i++) { 	
            //new code to get images from json 	
            if(isset($results_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'][$i])){
                $latest_array = $results_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'][$i]['node'];
                $image_data  = '<img src="'.$latest_array['thumbnail_src'].'">';
                array_push($image_array, $image_data);
            }
        }?>
          <div class="instagram"> 
         <ul>  
        <?php foreach ($image_array as $image) { ?>

            <li>
                
                    <?php echo $image; ?>
                
            </li>
        
        <?php } ?>
        </ul>
              </div>
            <p>Des produits en exclusivité pour vos sorties et mettre votre silhouette en valeur.</p>
        </article>
        <br>
            <hr class="style1">
            <br>
        <article class="lieu">
             <a id="LIEU"></a><h2>Lieu</h2>
            <p>Pour nous rejoindre, suivez le plan ci-dessous.<br>
               OÙ NOUS TROUVER ?</p>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d656.0835037440792!2d2.304840429213704!3d48.87090878082769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s66%2C+avenue+des+Champs+Elys%C3%A9es++++++++++++++128%2C+rue+de+La+Bo%C3%A9tie+49%2C+rue+de+Ponthieu!5e0!3m2!1sfr!2sfr!4v1563208956691!5m2!1sfr!2sfr" width="900" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
            
 <div id="pdlg">         
<h3>Plan de la galerie</h3>


<img id="myImg" src="images/plan_lamodebyregina.jpg" alt="Plan de la galerie"></div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
            <a id="Coordonnées"></a><section>
                
                    <div id="coordonnees">
                        <div id="titreh3">
                            <i class="fas fa-map-marked-alt"></i>
                            <h3>Coordonnées</h3>
                        </div>
                        
                        <p><i class="fas fa-envelope"></i> regina@lamodebyregina.com</p>
                        
                        <p><i class="fas fa-phone-alt"></i> +33 1 45 61 12 43</p>
                        
                        <div id="fapara">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Via galerie "Point Show"
                                trois entrées possible:<br> - 66, avenue des Champs Elysées<br>
                            - 128, rue de La Boétie<br>
                            - 49, rue de Ponthieu</p>
                        </div>
                        
                        
                    </div>

                    <div id="horaire">
                        
                        <div id="titreh3">
                        <i class="fas fa-clock"></i>
                        <h3>Horaire</h3></div>
                
                        <div id="fapara">
                            <i class="far fa-clock"></i>
                            <p>Lundi au Samedi de 11h30 à 20h30.<br>
                            Dimanche de 15h à 20h30.</p>
                        </div>
                        
                        <div id="fapara">
                            <i class="fas fa-info-circle"></i><p>Pour d'autres horaires, ouverture possible sur demande.<br>
                            Appelez-nous et nous resterons le soir pour vous.</p>
                        </div>
                </div>
                
</section>
            
        </article>
        
        <br>
            <hr class="style1">
            <br>
        
        <article class="contact">
            <a id="CONTACT"></a><h2>Contact</h2>
            <p>Vous souhaitez avoir plus d'informations concernant nos services, ou bien prendre un rendez-vous ?<br>
            Contactez-nous via les <a href="#Coordonnées">coordonnées</a> ou le formulaire ci-dessous.</p>
            
                	<!-- début du formulaire!-->
    
                            <div class="form_sec">
                                
                                <form method="post" id="form_contact" action="contact.php">
                                
                                    <fieldset>
                                        <ul>
                                            <li>
                                                <label>
                                                    Nom :
                                                </label>
                                                <div class="row"><input type="text" id="nom" name="nom" required/></div></li>
                                            <li>
                                                <label>
                                                    E-mail :
                                                    
                                                </label>
                                                <div class="row"><input type="email" id="mail" name="email" placeholder="votre.email@gmail.com" required aria-required="true"></div>
                                            </li>
                                            
                                            <li>
                                                <label>Message</label>
                                                <div class="row description_row">
                                                    <textarea id="comments" name="comments" cols="" rows="" required></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                        <input type="submit" id="submit" value="envoyer"/>
                                        <input type="reset" name="submit2" value="annuler" />
                                    </fieldset>    
                                </form>
                </div><!-- fin du formulaire!-->
            

        </article>
        
        <footer>
            <div id="medias">
            <a href="http://lamodebyregina.blogspot.com/" ><i class="fab fa-blogger" title="blog"  target="_blank"></i></a>
                
            <a href="https://www.facebook.com/lamodebyregina"><i class="fab fa-facebook-square" title="facebook"></i></a>
                
            <a href="https://twitter.com/lamodebyregina"><i class="fab fa-twitter-square" title="twitter"></i></a>
                
            <a href="https://www.instagram.com/lamodebyregina/#"><i class="fab fa-instagram" title="instagram"></i></a>
                
            <a href="https://vk.com/id247501165"><i class="fab fa-vk" title="vk"></i></a></div>
            
            <p>@2019 La Mode by Regina - Paris                         | Mentions Légales</p><a href="#retour_en_haut" class="scroll"><img src="images/fleche_top.png"id="tablo" title="retourner en haut de la page"></a></footer>
   </div>  
      
    
    <script type="text/javascript" src="js/jquery.js"></script><script type="text/javascript" src="js/ancres.js"></script>
</body>
</html>
