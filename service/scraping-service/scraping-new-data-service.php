<?php
    require_once('new-data-service.php');
    include("../../public/dist/helper/simple-html-dom.php");

    $newspaper = $_POST['newspaper'];

    switch ($newspaper) {
        case $newspaper =='DIARIO_XALAPA':
            getNewsFromDiarioXalapa();
        break;

        case $newspaper =='MUNDO_XALAPA':
            getNewsFromMundoXalapa();
        break;
        
        case $newspaper =='HERALDO_COATZACOALCOS':
            getNewsFromHeraldoCoatzacoalcos();
        break;
        
        case $newspaper =='DIARIO_LIBERAL':
            getNewsFromDiarioLiberal();
        break;

        case $newspaper =='EL_MUNDO':
            getNewsFromElMundo();
        break;

        case $newspaper =='EL_BUEN_TONO':
            getNewsFromBuenTono();
        break;

        case $newspaper =='NOTICIAS_PERFIL':
            getNewsFromNoticiasPerfil();
        break;

        case $newspaper =='LA_POLITICA':
            getNewsFromLaPolitica();
        break;

        case $newspaper =='VANGUARDIA':
            getNewsVanguardiaVeracruz();
        break;

        case $newspaper =='EXCELSIOR':
            getNewsFromExcelsior();
        break;

        case $newspaper =='SOL_MEXICO':
            getNewsFromSolDeMexico();
        break;

        case $newspaper =='MILENIO':
            getNewsFromMilenio();
        break;

        case $newspaper =='YAHOO':
            getNewsFromYahoo();
        break;

        case $newspaper =='DIARIO_SIN_SECRETOS':
            getNewsFromDiarioSinSecretos();
        break;

        case $newspaper =='TWITTER':
            getNewsFromTwitter();
        break;

        case $new =='BING':
            getNewsFromBing();
        break;

        case $new =='GOOGLE':
            getNewsFromGoogle();
        break;

        case $new =='IMAGEN_VERACRUZ':
            getNewsFromImagenVeracruz();
        break;

        default:
            echo "Newspaper not found";
        break;
    } 

    //This method is for scraping for the newspaper Diario de Xalapa
    function getNewsFromDiarioXalapa() {
        $newsFound = [];
        $url = "https://www.diariodexalapa.com.mx/buscar/?q=discriminación+en+veracruz";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.teaser") as $new){	
            $date = $new->find(".timestamp", 0)->text();
            $title = $new->find(".title",0)->text();
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for the newspaper Mundo de Xalapa
    function getNewsFromMundoXalapa() {
        $newsFound = [];
        $url = "http://mundodexalapa.com.mx/?s=discriminación";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("article.cat_article") as $new){	
            $date = "2019";
            $title = $new->find("h3",0)->text();
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }
          
        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for the newspaper Heraldo de Coatzacoalcos
    function getNewsFromHeraldoCoatzacoalcos() {
        $newsFound = [];
        $url = "http://heraldodecoatzacoalcos.com.mx/busqueda.html?searchword=Discriminación&ordering=newest&searchphrase=all&limit=0";
        $htmlFile = file_get_html($url); 
        
        foreach($htmlFile->find("article.item") as $new){
            $date = $new->find("p", 0)->text();
            $title = $new->find("a",0)->text();
            $link = $new->find("a", 0)->href;
            $newData = new NewData("http://heraldodecoatzacoalcos.com.mx/".$link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }  

    //This method is for scraping for the newspaper Diario Liberal del Sur
    function getNewsFromDiarioLiberal(){
        $newsFound = [];
        $url = "http://liberal.com.mx/?s=Discriminación";
        $htmlFile = file_get_html($url);

        foreach($htmlFile->find("div.list-item") as $new){
            $date = "2019";
            $title = $new->find("h3",0)->text();	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for the newspaper El Mundo
    function getNewsFromElMundo(){
        $newsFound = [];
        $url = "https://www.diarioelmundo.com.mx/?s=Discriminación+en+Veracruz";
        $htmlFile = file_get_html($url);
        
        foreach($htmlFile->find("div.td_module_16") as $new){  
            $date = $new->find("time", 0)->text();
            $title = $new->find("a",0)->title;	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for the newspaper El Buen Tono
    function getNewsFromBuenTono(){
        $newsFound = [];
        $url = "https://www.elbuentono.com.mx/?s=Discriminación+en+Veracruz";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("article.post-box") as $new){

            $date = $new->find("span.post-date", 0)->text();
            $title = $new->find("a", 0)->title;
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for the newspaper Noticias Perfil
    function getNewsFromNoticiasPerfil(){
        $newsFound = [];
        $url = "http://www.noticiasperfil.com/index/?s=Discriminación+en+Veracruz&x=0&y=0";
        $htmlFile = file_get_html($url); 
        
        foreach($htmlFile->find("div.post") as $new){
            $date = $new->find("span.postdate", 0)->text();
            $title = $new->find("a", 0)->text();
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }
        
        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for the newspaper Diario sin Secretos
    function getNewsFromDiarioSinSecretos(){
        $newsFound = [];
        $url = "https://diariosinsecretos.com/?s=Discriminación";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("article.item-list") as $new){

            $date = $new->find("span.tie-date", 0)->text();
            $title = $new->find("a", 1)->text();
            $link = $new->find("a", 1)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }


    //This method is for scraping for the newspaper La Politica
    function getNewsFromLaPolitica(){
        $newsFound = [];
        $url = "http://www.lapolitica.mx/?s=Discriminación+en+Veracruz";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.column") as $new){

            // $date = $new->find("time", 0)->text();
            $date = "2019";
            $title = $new->find("a", 1)->title;
            $link = $new->find("a", 1)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }
        
        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }


    //This method is for scraping for the newspaper Vanguardia Veracruz
    function getNewsVanguardiaVeracruz(){
        $newsFound = [];
        $url = "https://www.vanguardiaveracruz.mx/?s=Discriminación+en+Veracruz";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.td_module_16") as $new){

            $date = $new->find("time", 0)->text();
            $title = $new->find("a",0)->title;	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }


    //This method is for scraping for the newspaper Excelsior
    function getNewsFromExcelsior() {
        $newsFound = [];
        $url = "https://www.excelsior.com.mx/buscador?b=Discriminación+en+Veracruz&x=0&y=0";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("span.imx-listado-busqueda") as $new){

            $date = $new->find("span.imx-nota-fecha", 0)->text();
            $title = $new->find("a",0)->text();	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }


    //This method is for scraping for the newspaper El sol de México
    function getNewsFromSolDeMexico() {
        $newsFound = [];
        $url = "https://www.elsoldemexico.com.mx/buscar/?q=Discriminación+en+Veracruz";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.teaser") as $new){
            $date = $new->find("strong.timestamp", 0)->text();
            $title = $new->find("a",1)->text();	
            $link = $new->find("a", 1)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }


    //This method is for scraping for the newspaper Milenio
    function getNewsFromMilenio() {
        $newsFound = [];
        $url = "https://www.milenio.com/buscador?text=Discriminación+en+Veracruz";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.item-news-container") as $new){
            $date = $new->find("span", 0)->text();
            $title = $new->find("div.title",0)->text();	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for Yahoo
    function getNewsFromYahoo(){
        $newsFound = [];
        $url = "https://es.search.yahoo.com/search?p=discriminación+en+Veracruz&fr=yfp-t&fp=1&toggle=1&cop=mss&ei=UTF-8";
        $htmlFile = file_get_html($url);

        foreach($htmlFile->find("div.dd") as $new){

            $date = "2019";
            $title = $new->find("a", 0)->text();	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for Twitter
    function getNewsFromTwitter(){
        $newsFound = [];
        $url = "https://twitter.com/search?f=news&q=discriminación&src=typd";
        $htmlFile = file_get_html($url); 
    
        foreach($htmlFile->find("li.js-stream-item") as $new){
    
            $date = $new->find("span._timestamp", 0)->text();
            $title = $new->find("p.TweetTextSize", 0)->text();	
            $link = $new->find("a.twitter-timeline-link", 0)->href;
    
            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for Bing
    function getNewsFromBing(){
        $newsFound = [];
        $url = "https://www.bing.com/news/search?q=discriminación+en+Veracruz&FORM=HDRSC6";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.news-card") as $new){

            $date = $new->find("span", 2)->text();
            $title = $new->find("a", 1)->text();	
            $link = $new->find("a", 1)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }

    //This method is for scraping for Google
    function getNewsFromGoogle(){  
        $newsFound = []; 
        $url = "https://www.google.es/search?q=discriminacion+en+veracruz&client=safari&source=lnms&tbm=nws&sa=X&ved=0ahUKEwi-9LX6i7HiAhUPXK0KHSF0DjgQ_AUIDygC&biw=1280&bih=647";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.g") as $new){

            $date = ".../2019";
            // $date = $new->find("span.f", 0)->text();
            $title = "Discriminan";
            // $title = $new->find("a", 1)->text();
            $link = $new->find("a", 1)->href;
            // $link = $new->find("a", 1)->href; exito

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }

        $jsonString = json_encode($newsFound);
        echo $jsonString;    

    }  
    
    //This method is for scraping for Imagen Veracruz
    function getNewsFromImagenVeracruz(){
        $newsFound = [];
        $url = "https://imagendeveracruz.mx/search?q=Discriminación";
        $htmlFile = file_get_html($url); 

        foreach($htmlFile->find("div.content-timeline__item") as $new){

            $date = "2019";
            $title = $new->find("a", 0)->title;	
            $link = $new->find("a", 0)->href;

            $newData = new NewData($link, $title, $date);
            array_push($newsFound, $newData);
        }
        
        $jsonString = json_encode($newsFound);
        echo $jsonString;
    }
?>