
	let httpRequest = new XMLHttpRequest();

	httpRequest.open("GET", "../file_para_usar_no_graph.json", true);
	httpRequest.send();
	httpRequest.addEventListener("readystatechange", function() {
			if (this.readyState === this.DONE) {
					let json_file = JSON.parse(this.response);

					let labels = []
					let pulse= []
					let dia_max= [],dia_min= []
					let sys_max=[],sys_min=[]
					let sys_max_lim= [],dia_max_lim= []
					let sys_min_lim= [],dia_min_lim= []
					
					for (let key of Object.keys(json_file)) {
						labels.push(json_file[key]["Date"].substring(0,11))
						pulse.push(json_file[key]["Pulse_mean"])
						dia_min.push(json_file[key]["DIA_min"])
						dia_max.push(json_file[key]["DIA_max"])
						sys_min.push(json_file[key]["SYS_min"])
						sys_max.push(json_file[key]["SYS_max"])
						sys_max_lim.push(json_file[key]["SYS_max_lim"])
						dia_max_lim.push(json_file[key]["DIA_max_lim"])
						sys_min_lim.push(json_file[key]["SYS_min_lim"])
						dia_min_lim.push(json_file[key]["DIA_min_lim"])
					}
		console.log(json_file["0"]["DIA_min"]);
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

		var DIA_LIM_COLOR='#15b072';
		const ctx = document.getElementById('line-chart');
			const data = {
						labels:labels,
						datasets: [{
							type:'bar',
							label: 'DIA',
							data:joined_dia,
							backgroundColor: '#0abf8f',
							barPercentage:0.2,
						},{
							type:'line',
							label: 'DIA maximum limit',
							data:dia_max_lim,
							borderColor: DIA_LIM_COLOR,
							backgroundColor: DIA_LIM_COLOR,
						},{
							type:'line',
							label: 'DIA minimum limit',
							data:dia_min_lim,
							borderColor: DIA_LIM_COLOR,
							backgroundColor: DIA_LIM_COLOR,
						},{
							type:'bar',
							label: 'SYS',
							data:joined_sys,
							backgroundColor: '#eb3440',
							barPercentage:0.2,
						},{
							type:'line',
							label: 'SYS maximum limit',
							data:sys_max_lim,
							borderColor: '#a30707',
							backgroundColor: '#a30707',
						},{
							type:'line',
							label: 'SYS minimum limit',
							data:sys_min_lim,
							borderColor: '#a30707',
							backgroundColor: '#a30707',
						},{
							type:'line',
							label: 'Pulse mean',
							data:pulse,
							borderColor: '#000000',
							backgroundColor: '#000000',
						}]
			};
			const config = {
				//type: 'bar',
				data:data,
				options: {
					//responsive:false,
					scales: {
						xAxes: {
							stacked: true,
						},
						yAxes: {
				        	beginAtZero:false,
                        },
					}
				}
			};
			const myChart = new Chart(ctx,config);
		}
	});
