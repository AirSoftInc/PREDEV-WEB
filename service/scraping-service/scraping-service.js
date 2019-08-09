$(document).ready(function(){
    
    onInit();

    function onInit() {
        if (new Date().getDate() == 21) {
            getNewsFoundData();
        } 
    }

    //Method to carry out the web scraping of the news found
    function getNewsFoundData() {
        newspaper.forEach(newspaper =>{
            const paperForm = { newspaper: newspaper };
            postFormWithResponse("../../service/scraping-service/scraping-new-data-service.php",
            paperForm, function(response){
                try {
                    const newsFound = JSON.parse(response);
                    newsFound.map(newsFound =>{
                        newsFound.newspaper = newspaper;
                    });
                    dateFilter(newsFound);
                } catch (error) {
                    console.error(error);
                }
            });
        });
    }

    //Method to filter that the date is greater than 2018
    function dateFilter(newsFound){
        let dateNewsFilter = [];
        newsFound.forEach( newData =>{
            const isValidYear = arraysIntersection(newData.date, yearsInForce);
            
            if (isValidYear.length > 0) {
                dateNewsFilter.push(newData);
            }
        });

        keyWordFilter(dateNewsFilter);
    }

    function keyWordFilter(dateNewsFilter) {
         
    	let discriminationWordsFilter = [];
    	dateNewsFilter.map(newData =>{
            const isPositive = arraysIntersection(newData.title.toUpperCase(), mainNoDiscriminationWords);
    	    const isValidNew = arraysIntersection(newData.title.toUpperCase(), mainDiscriminationWords);

    	    if (isPositive.length == 0){
                if (isValidNew.length > 0) {
                    newsFilter.push(newData);
                    newData.isCase = true;
                } else { discriminationWordsFilter.push(newData) }
    	    }
    	});

        analysisByPhrases(discriminationWordsFilter);
    }

    function analysisByPhrases(discriminationWordsFilter){
  
        discriminationWordsFilter.forEach(newData =>{
            let phraseFound = searchPhrases(cleanTextByPhrases(newData.title));
            if (phraseFound.length > 0) {
                newsFilter.push(newData);
            }
        });

        finalAnalisisByPhrases(newsFilter);
    }

    function finalAnalisisByPhrases(newsFilterByPhrases){
        newsFilterByPhrases.forEach(newData => {
            const nonDiscriminationPhrasesFound = searchNonDiscriminationPhrases(cleanTextByPhrases(newData.title));
            
            if (nonDiscriminationPhrasesFound.length == 0) {
                newsFinalFilter.push(newData)
            }
        });

        getContentByNew(newsFinalFilter);
    }

    function getContentByNew(newsFilter) {
        const url = "../../service/scraping-service/save-case-service.php";
        newsFilter.forEach(news => {
            const newData = { 
                url: news.link,
                newspaper: news.newspaper
            };
            postFormWithResponse("../../service/scraping-service/scraping-url.php", newData, function(response){
                try {
                    let zoneCount = 0;
                    dataZone.forEach(zone =>{
                        const identifiedAreas = arraysIntersection(response.toUpperCase(), zone.municipalities);
                        if (identifiedAreas.length > 0) {
                            zoneCount = zoneCount + 1;
                            identifiedAreas.map(area =>{
                                const newDataForm = {
                                    title: news.title,
                                    date: news.date,
                                    isCase: news.isCase,
                                    link: news.link,
                                    zone: zone.zone
                                };

                                postFormWithResponse(url, newDataForm, function(response) {
                                    console.debug(response);
                                });
                            });
                        }
                    });

                    if (zoneCount === 0) {
                        dataZone.forEach(area =>{
                            const newDataForm = {
                                title: news.title,
                                date: news.date,
                                isCase: news.isCase,
                                link: news.link,
                                zone: area.zone
                            };

                            postFormWithResponse(url, newDataForm, function (response) {
                                console.debug(response);
                            });
                        });
                    }
                } catch (error) {
                    console.log(error);
                }
            });
        });
    }
});