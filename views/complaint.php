<!DOCTYPE html> 
<html> 
<head> 
   <title>Publish Subscribe Tutorial</title> 
   <link rel="stylesheet" href="../source/css/materialize.min.css">
    <link rel="stylesheet" href="../source/css/predev.css">
    <link rel="stylesheet" href="../source/fonts/fontawesome-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="../source/css/home-css/home.css">

</head> 
      <body> 
        <?php 
          require_once("components/home-components/header-component.php");
        ?>
          <main>

          <div class="row">
            <div class="col s12 m12 center">
              <div class="card teal">
                <div class="card-content white-text">
                  <span class="card-title" style="background-color: transparent;
                    opacity: 1;">Denuncias y comentarios</span>
                  <div class="divider"></div>
                  <br><br>
                  <p>Todas las denuncias y comentarios que realices en esta plataforma servirán como estadísticas para la misma
                   así, como las instituciones colaboradoras trabajaran en el análisis de tus comentarios.
                  </p>
                  <br><br>
                  <div class="container" id="contentMessage"></div>
                </div>
                <div class="card-action">
                  <div class="row">
                    <div class="input-field col s10">
                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                      <label for="textarea1">Describe tu caso</label>
                    </div>
                    <button class="btn waves-effect waves-light col s tooltipped" data-position="top" data-tooltip="Enviar" style="margin-top: 24px; 
                    border-radius: 43px; padding-left: 7px; background-color: #091426;" id="publish-button"><i class="fas fa-paper-plane"></i></button>
                  </div>
                </div>
              </div>
            </div>
        </div>

            <!-- <div class="container">
              <div class="container" id="contentMessage"></div>
              <br><br><br>
              <div class="row">
                <div class="row">
                  <div class="input-field col s10">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Describe tu caso</label>
                  </div>
                  <button class="btn waves-effect waves-light col s" style="margin-top: 24px; 
                  border-radius: 43px; padding-left: 7px;" id="publish-button"><i class="fas fa-paper-plane"></i></button>
                </div>
              </div>
            </div> -->

          </main>
        <?php 
          require_once("components/home-components/footer-component.php");
        ?>


      <script src="../source/js/jquery-3.4.1.min.js"></script>
      <script src="../source/js/materialize.min.js"></script>
      <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.21.7.min.js"></script> 
      <script> 

      const pubnub = new PubNub({
        publishKey : "pub-c-dd4a4cf3-c46d-4b69-bd46-84b4f7ccbf2c",
        subscribeKey : "sub-c-46918ba0-9f58-11e9-a0e6-3684ccde0898",
        secretKey: "sec-c-ODQ1ZjRiNjAtYTg4OC00MWQ4LWI1NzYtMjA5MzRlOTc2NDNi"
      });

      const button = document.getElementById('publish-button');

      pubnub.history(
          {
              channel: 'test_channel',
              reverse: false, // true to send via post
              count: 50, // how many items to fetch
              stringifiedTimeToken: true // false is the default
          },
          function (status, response) {
              // handle status, response
              response.messages.map(message =>{
                let pElement = document.createElement('div'); 
                pElement.appendChild(document.createTextNode(message.entry)); 
                document.getElementById("contentMessage").appendChild(pElement);
              });     
          }
      );

      button.addEventListener('click', () => { 
        const textArea = document.getElementById('textarea1').value;
        pubnub.publish({
          channel : "test_channel", 
          message : textArea
        }, function(status, response) { 
          //Handle error here
          document.getElementById('textarea1').value = ""; 
        });
      });

      pubnub.subscribe({
        channels: ['test_channel']
      }); 

      pubnub.addListener({
        message: function(event) {
          let pElement = document.createElement('div');
          // pElement.className = ("complaint")
          // pElement.setAttribute("class", "complaint");
          // pElement.classList.add('complaint')
          pElement.appendChild(document.createTextNode(event.message)); 
          document.getElementById("contentMessage").appendChild(pElement);
        }
      }); 
      </script> 
      </body> 
</html>