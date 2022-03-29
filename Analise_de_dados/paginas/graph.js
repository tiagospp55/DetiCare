let httpRequest = new XMLHttpRequest();
// aqui têm de passar o nome correto do ficheiro json

httpRequest.open("GET", "BloodPressure_202108-202201.json", true);
httpRequest.send();
httpRequest.addEventListener("readystatechange", function() {
    if (this.readyState === this.DONE) {
      	// when the request has completed
        let json_file = JSON.parse(this.response);
        //console.log(Object.keys(json_file))

        let labels = []
        let pulse= []
        let sys= []
        let dia= []
        for (let key of Object.keys(json_file)) {
          labels.push(json_file[key]["Measurement Date"].substring(0,11))
          pulse.push(json_file[key]["Pulse(bpm)"])
          sys.push(json_file[key]["SYS(mmHg)"])
          dia.push(json_file[key]["DIA(mmHg)"])
        }
	const ctx = document.getElementById('line-chart');
	const myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: labels,
            datasets: [
              { 
                data: pulse,
                label: "Pulse",
		borderColor: "#3e95cd",
                fill: false
              },
              { 
                data: sys,
                label: "SYS(mmHg)",
		borderColor: "#000000",
                fill: false
              },
              { 
                data: dia,
                label: "DIA(mmHg)",
		borderColor: "#e00000",
                fill: false
              }
            ]
          },
          options: {
	//	  responsive:false,
            title: {
              display: true,
              text: 'Pulse by time'
            }
          }
        });
    }
}); 
