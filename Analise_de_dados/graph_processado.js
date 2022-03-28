let httpRequest = new XMLHttpRequest();
// aqui têm de passar o nome correto do ficheiro json

httpRequest.open("GET", "teste_blood_presure_processado.json", true);
httpRequest.send();
httpRequest.addEventListener("readystatechange", function() {
    if (this.readyState === this.DONE) {
      	// when the request has completed
        let json_file = JSON.parse(this.response);
        //console.log(Object.keys(json_file))

        let labels = []
        let pulse= []
        let dia_max= []
        let dia_min= []
        for (let key of Object.keys(json_file)) {
          labels.push(json_file[key]["day"].substring(0,11))
          pulse.push(json_file[key]["Pulse_mean"])
          dia_min.push(json_file[key]["DIA_min"])
          dia_max.push(json_file[key]["DIA_max"])
        }
	console.log(labels[0]);
	var labels1=labels;
	console.log(dia_max);
	const ctx = document.getElementById('line-chart');
		const data = {
					labels:labels,
					datasets: [{
						label: 'DIA',
						data:[ 
							[dia_min[0],dia_max[0]],
							[dia_min[1],dia_max[1]],
							],
						backgroundColor: 'rgba(245, 20, 20, 1.0)',
					}]
		};
		const config = {
			type: 'bar',
			data:data,
			options: {
			}
		};
		const myChart = new Chart(ctx,config);
	}
});
