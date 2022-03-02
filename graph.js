let httpRequest = new XMLHttpRequest();
// aqui têm de passar o nome correto do ficheiro json

httpRequest.open("GET", "Folder_JSONs/aa.json", true);
httpRequest.send();
httpRequest.addEventListener("readystatechange", function() {
    if (this.readyState === this.DONE) {
      	// when the request has completed
        let json_file = JSON.parse(this.response);
        console.log(Object.keys(json_file))

        let labels = []
        let data = []
        for (let key of Object.keys(json_file)) {
          labels.push(json_file[key]["Measurement Date"])
          data.push(json_file[key]["Pulse"])
        }

        new Chart(document.getElementById("line-chart"), {
          type: 'line',
          data: {
              // y - pulso
              // x - tempo
            labels: labels,
            datasets: [
              { 
                data: data,
                label: "Pulse",
                borderColor: "#3e95cd",
                fill: false
              }
            ]
          },
          options: {
            title: {
              display: true,
              text: 'Pulse by time'
            }
          }
        });
    }
}); 