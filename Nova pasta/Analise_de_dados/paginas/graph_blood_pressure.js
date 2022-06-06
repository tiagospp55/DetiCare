
	let httpRequest = new XMLHttpRequest();

	httpRequest.open("GET", "../teste/file_para_usar_no_graph.json", true);
	httpRequest.send();
	httpRequest.addEventListener("readystatechange", function() {
			if (this.readyState === this.DONE) {
					let json_file = JSON.parse(this.response);

					let labels = []
					let pulse= []
					let dia_max= []
					let dia_min= []
					let sys_max= []
					let sys_min= []
					for (let key of Object.keys(json_file)) {
						labels.push(json_file[key]["Date"].substring(0,11))
						pulse.push(json_file[key]["Pulse_mean"])
						dia_min.push(json_file[key]["DIA_min"])
						dia_max.push(json_file[key]["DIA_max"])
						sys_min.push(json_file[key]["SYS_min"])
						sys_max.push(json_file[key]["SYS_max"])
					}
		var joined_dia=[];
		for (let i = 0; i < dia_min.length; i++) {
			var temp=[];
			temp.push(dia_min[i]);
			temp.push(dia_max[i]);
			joined_dia.push(temp);
		}
		var joined_sys=[];
		for (let i = 0; i < sys_min.length; i++) {
			var temp=[];
			temp.push(sys_min[i]);
			temp.push(sys_max[i]);
			joined_sys.push(temp);
		}

		const ctx = document.getElementById('line-chart');
			const data = {
						labels:labels,
						datasets: [{
							type:'bar',
							label: 'DIA',
							data:joined_dia,
							backgroundColor: 'rgba(52, 186, 235)',
							barPercentage:0.8,
						},
						{
							type:'line',
							label: 'Pulse mean',
							data:pulse,
							borderColor: '#34eb5f',
						},
						{
							type:'bar',
							label: 'SYS',
							data:joined_sys,
							backgroundColor: '#eb3440',
							barPercentage:0.8,
						}]
			};
			const config = {
				type: 'bar',
				data:data,
				options: {
					scales: {
						xAxes: {
							stacked: true,
						},
					}
				}
			};
			const myChart = new Chart(ctx,config);
		}
	});
