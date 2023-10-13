document.getElementById("Item-LaGrande").onclick = function (){
    consumirDatos();
}


function consumirDatos()  {
    //    let date = "2023-10-07";
    
       fetch("https://x1vvo6hrf1.execute-api.us-east-1.amazonaws.com/prod/lagrande-results?date=2023-10-07", {
        method: "GET",
        headers: {
            "content-Type": "application/json",
            "x-api-key": "HAxrpDySsR2OPax7bsij8aXWth0bgGcy6vqDmRr8",
        },
        mode: 'no-cors',
       })
       .then((res) => res.json())
       .then((data) => {
        console.log(data);
       })
}