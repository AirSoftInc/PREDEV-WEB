    let newsFilter = [];
    let newsFinalFilter = [];
    
    const yearsInForce = ["2018", "2019", "2020"];

    const mainDiscriminationWords = [
        "DISCRIMINACIÓN", "DISCRIMINACION", "DISCRIMINAR", "DISCRIMINA", "DISCRIMINÓ",
        "DISCRIMINO", "DISCRIMINARON", "DISCRIMINADO", "DISCRIMINADA", "DISCRIMINADOS",
        "DISCRIMINADAS", "RACISMO", "RACISTA", "RACISTAS", "BULLYNG", "CONAPRED"
    ];

     const mainNoDiscriminationWords = [
        "FELICIDAD", "GANAR", "FELIZ", "GANAN", "PREMIO","PREMIARON","FELICITARON", 
        "FELICITACION", "GANARON", "APOYAN", "INCLUSIÓN", "INCLUSION", "ERRADICAR"
    ];

    //This array content newspaper of the Veracruz state
    // const newspaper = [
    //     "DIARIO_XALAPA","MUNDO_XALAPA", "HERALDO_COATZACOALCOS", "DIARIO_LIBERAL", "*EL_MUNDO",
    //     "EL_BUEN_TONO", "NOTICIAS_PERFIL", "DIARIO_SIN_SECRETOS", "*LA_POLITICA", "*VANGUARDIA",
    //     "EXCELSIOR", "SOL_MEXICO", "MILENIO", "YAHOO", "TWITTER", "GOOGLE", "BING", "IMAGEN_VERACRUZ"
    // ];

    const newspaper = [ "VANGUARDIA" ];

    const discriminationPhrases = [
        buildRegex("CRÍMENES DE ODIO"), buildRegex("DELITOS DE ODIO"), buildRegex("COMUNIDAD GAY"),
        buildRegex("DIVERSIDAD SEXUAL SIN"), buildRegex("VIOLENCIA CONTRA LAS MUJERES"),
        buildRegex("CONTRA GAYS"), buildRegex("VIOLENCIA CONTRA MUJERES"), buildRegex("BODAS GAY"),
        buildRegex("PINCHES INDIOS")
    ];

    const nonDiscriminationPhrases = [
        buildRegex("NO DISCRIMINACIÓN"), buildRegex("SIN DISCRIMINACIÓN"), buildRegex("PREVENIR LA DISCRIMINACIÓN"),
        buildRegex("ELIMINAR LA DISCRIMINACIÓN"), buildRegex("CONTRA DE LA DISCRIMINACIÓN"),
        buildRegex("ELIMINACIÓN DE LA DISCRIMINACIÓN"), buildRegex("COMBATE A LA DISCRIMINACIÓN"), buildRegex("EVITAR DISCRIMINACIÓN"),
        buildRegex("CONTRA LA DISCRIMINACIÓN"), buildRegex("PREVENIR DISCRIMINACIÓN"), buildRegex("CONCIENCIA SOBRE LA DISCRIMINACIÓN"),
        buildRegex("EVITAR LA DISCRIMINACIÓN"), buildRegex("NO HAY DISCRIMINACIÓN")
    ];

function searchPhrases(text){
    let phraseFound = [];
    discriminationPhrases.forEach(phrase =>{
        const indexFound = text.search(phrase);
        
        if (indexFound != -1) {
            phraseFound.push(phrase);
        }
    });

    return phraseFound;
}

function searchNonDiscriminationPhrases(text){    
    let nonDiscriminationPhraseFound = [];
    nonDiscriminationPhrases.forEach(phrase =>{
        const indexFound = text.search(phrase);
     
        if (indexFound != -1) {
            nonDiscriminationPhraseFound.push(phrase);            
        }
    });

    return nonDiscriminationPhraseFound;
}

function arraysIntersection(text, compareArray){
    const textArray = text.split(" ", text.length);
    return _.intersection(cleanText(textArray), compareArray);
  }

  function cleanText(text){
      let cleanArray = [];
      text.map(word =>{
          f1 = word.replace(/,/g, "");
          f2 = f1.replace(/:/g, "");
          f3 = f2.replace(/;/g, "");
          f4 = f3.replace(/”/g, "");
          f5 = f4.replace(/"/g, "");
          f6 = f5.replace(/{/g, "");
          f7 = f6.replace(/}/g, "");
          f8 = f7.replace(/“/g, "");
          f9 = f8.replace(/’/g, "");
          f10 = f9.replace(/‘/g, "");

          cleanArray.push(f10);
      });
      
      return cleanArray;
  }

  function buildRegex(text){
      const keyword = text.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
      return new RegExp(keyword, 'ig');
  }

  function cleanTextByPhrases(phrase){

    f1 = phrase.replace(/,/g, "");
    f2 = f1.replace(/:/g, "");
    f3 = f2.replace(/;/g, "");
    f4 = f3.replace(/”/g, "");
    f5 = f4.replace(/"/g, "");
    f6 = f5.replace(/{/g, "");
    f7 = f6.replace(/}/g, "");
    f8 = f7.replace(/“/g, "");
    f9 = f8.replace(/’/g, "");
    f10 = f9.replace(/‘/g, "");

    return f10.toUpperCase();
  }
