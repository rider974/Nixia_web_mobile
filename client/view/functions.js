/* *********************************************** function to log in **********************************/
function login(){
    // envoyer les données du formulaire email et mdp et recevoir les données qui sont envoyés par le controller de User pour la connexion
        let mail= document.getElementById("email").value; 
        let password= document.getElementById("pass").value; 
        // let data = {'email':  mail, 'pass': password};
        let data = "email=" + mail + "&pass=" + password;
         fetch("http://localhost/nixia_app_mobile_login", {
            method: 'POST',
            headers: {
                 'Content-Type': 'application/x-www-form-urlencoded'
                //  'Content-Type': 'application/json'
            },
            // body: JSON.stringify(data)
            // permet d'envoyer les données au bon format
            body : data
        })
          
         //      return response.json()
    
         .then((response) => {
            return response.json();
            //return response.text(); 
          })
        .then((result) => {
            // stocker les données dans Local Storage
            console.log(result);
            localStorage.setItem('idUser', result.idUser);
            //loadingDashboard();
          })
          .catch((error) => {
            console.error('There has been a problem with your fetch operation:', error);
          }); 
    }