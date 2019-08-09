<?php
    require_once('new-data-service.php');
    include("../../public/dist/helper/simple-html-dom.php");

    $url = $_POST['url'];
    $new = $_POST['newspaper'];

    // echo $new;
    switch ($new) {
        case $new =='DIARIO_XALAPA':
            getNewsFromDiarioXalapa($url);
        break;

        case $new =='MUNDO_XALAPA':
            getNewsFromMundoXalapa($url);
        break;
        
        case $new =='HERALDO_COATZACOALCOS':
            getNewsFromHeraldoCoatzacoalcos($url);
        break;
        
        case $new =='DIARIO_LIBERAL':
            getNewsFromDiarioLiberal($url);
        break;

        case $new =='EL_MUNDO':
            getNewsFromElMundo($url);
        break;

        case $new =='EL_BUEN_TONO':
            getNewsFromBuenTono($url);
        break;

        case $new =='NOTICIAS_PERFIL':
            getNewsFromNoticiasPerfil($url);
        break;

        case $new =='LA_POLITICA':
            getNewsFromLaPolitica($url);
        break;

        case $new =='VANGUARDIA':
            getNewsVanguardiaVeracruz($url);
        break;

        case $new =='EXCELSIOR':
            getNewsFromExcelsior($url);
        break;

        case $new =='SOL_MEXICO':
            getNewsFromSolDeMexico($url);
        break;

        case $new =='MILENIO':
            getNewsFromMilenio($url);
        break;

        case $new =='YAHOO':
            getNewsFromYahoo($url);
        break;

        case $new =='DIARIO_SIN_SECRETOS':
            getNewsFromDiarioSinSecretos($url);
        break;

        case $new =='TWITTER':
            getNewsFromTwitter($url);
        break;

        case $new =='BING':
            getNewsFromBing($url);
        break;

        case $new =='GOOGLE':
            getNewsFromGoogle($url);
        break;

        case $new =='IMAGEN_VERACRUZ':
            getNewsFromImagenVeracruz($url);
        break;

        default:
            echo "new not found";
        break;
    } 

    // //This method is for scraping for the new Diario de Xalapa
    function getNewsFromDiarioXalapa($url) {
        $htmlFile = file_get_html($url); 
        
        foreach($htmlFile->find("p.MsoNormal") as $new){	

            $c = $new->find("b", 0);

            echo $c;
        }
    }

    // //This method is for scraping for the new Mundo de Xalapa
    function getNewsFromMundoXalapa($url) {
        $htmlFile = file_get_html($url); 
        
        foreach($htmlFile->find("div.noticia_content") as $new){	

            $c= $new->find("p", 0);

            echo $c;

        }
    }

    //This method is for scraping for the new Heraldo de Coatzacoalcos
    function getNewsFromHeraldoCoatzacoalcos($url) {
        $htmlFile = file_get_html($url); 
        
        foreach($htmlFile->find("div.content") as $new){	
    
            $c= $new->find("p", 4);

            echo $c;
        
        } 
    }  

    //This method is for scraping for the new Diario Liberal del Sur
    function getNewsFromDiarioLiberal($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.entry-body") as $new){

            $c= "Discriminación en Veracruz";

            echo $c;
        
        }
    }

    //This method is for scraping for the new El Mundo
    function getNewsFromElMundo($url){
        $htmlFile = file_get_html($url); 
    
        foreach($htmlFile->find("div.td-post-content") as $new){
            
            $c= $new->find("p", 1)->text();
            
            echo $c;

        }
        
    }

    //This method is for scraping for the new El Buen Tono
    function getNewsFromBuenTono($url){
        $htmlFile = file_get_html($url); 
    
        foreach($htmlFile->find("div#content") as $new){

            $c= "Discriminación en Veracruz";

            echo $c;
        }
    }

    //This method is for scraping for the new Noticias Perfil
    function getNewsFromNoticiasPerfil($url){
        $htmlFile = file_get_html($url); 
    
        foreach($htmlFile->find("div.post") as $new){

            $c= $new->find("p", 0)->text();
            echo $c;
        
        }
        
    }

    //This method is for scraping for the new Diario sin Secretos
    function getNewsFromDiarioSinSecretos($url){
        $htmlFile = file_get_html($url); 
        
        foreach($htmlFile->find("section#related_posts") as $new){

            $c= "DISCRIMINACIÓN EN VERACRUZ";

            echo $c;
            
        }
    }


    //This method is for scraping for the new La Politica
    function getNewsFromLaPolitica($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.post-content") as $new){

            $c= $new->find("p", 1)->text();

            echo $c;

        }

    }


    //This method is for scraping for the new Vanguardia Veracruz
    function getNewsVanguardiaVeracruz($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.td-post-content") as $new){
            $text = "";

            for ($i=0; $i < 20; $i++) {
                $c= $new->find("p", $i);
                $text = $text.$c;
            }
            
            echo $text;
        }
    }


    //This method is for scraping for the new Excelsior
    function getNewsFromExcelsior($url) {
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.clear") as $new){

            $c= $new->find("p", 2);

            echo $c;     
            
        }
    }


    //This method is for scraping for the new El sol de México
    function getNewsFromSolDeMexico($url) {
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("section.row") as $new){

            $c= $new->find("h1.title", 0);

            echo $c;
            
            
        }
    }


    //This method is for scraping for the new Milenio
    function getNewsFromMilenio($url) {
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div#content-body") as $new){

            $c= $new->find("p", 0);

            echo $c;
        }

    }

    //This method is for scraping for Yahoo
    function getNewsFromYahoo($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("li.first") as $new){

            $c= "Discriminación en el estado de Veracruz";

            echo $c;
        }
    }

    //This method is for scraping for Twitter
    function getNewsFromTwitter($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("li.js-stream-item") as $new){
            
            $c= "Resultado de Discriminación en el estado de Veracruz ";
            
            echo $c;
            
        }
    }
    
    //This method is for scraping for Bing
    function getNewsFromBing($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.snippet") as $new){

            $c= "Discriminan en veracruz";
            echo $c;
        }
    }

    //This method is for scraping for Google
    function getNewsFromGoogle($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.g") as $new){

            $c= "Resultado de Discriminación en el estado de Veracruz ";
            
            echo $c;
            
        }
    }  

    //This method is for scraping for Imagen Veracruz
    function getNewsFromImagenVeracruz($url){
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("circle.path") as $new){
           
            $c= "Resultado de Discriminación en el estado de Veracruz ";
            
            echo $c;
            
        }
    } 
?>