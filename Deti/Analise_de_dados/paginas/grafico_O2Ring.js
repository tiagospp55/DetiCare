let httpRequest = new XMLHttpRequest();
httpRequest.open("GET", "../O2Ring-20220207053010_OXIRecord_processado.json", true);
httpRequest.send();
httpRequest.addEventListener("readystatechange", function()
{
    if (this.readyState === this.DONE)
    {
        let json_file = JSON.parse(this.response);
        let labels = []
        let SpO2_= []
        let Pulse_Rate= []
        let Motion= []
        for (let key of Object.keys(json_file)){
            labels.push(json_file[key]["Time"].substring(0,8))
            SpO2_.push(json_file[key]["SpO2(%)"])
            Pulse_Rate.push(json_file[key]["Pulse Rate(bpm)"])
            Motion.push(json_file[key]["Motion"])
        }

        var SpO2 = SpO2_.map(function (x){
            return parseInt(x, 10);
        });

        var min=Math.min.apply(null,SpO2)
        var max=Math.max.apply(null,SpO2)
        var dif=max-min;

        var array=[];
        var hist=[];
        var array1=[];
        var hist1=[];


        var temp=min;
        for(let k=0; k< dif;k++){
            array[k]=[temp, temp+1];
            temp++;
        }
        var temp=min;
        for(let k=0; k< dif;k++){
            array1[k]=[temp, temp+1];
            temp++;
        }

        var count;
        for(let k=0; k< dif;k++){
            count=0;
            for(let j=0;j<SpO2.length;j++){
                if(SpO2[j]>=array[k][0] && SpO2[j]<array[k][1]){
                    count++;
                }
            }
            hist[k]=count;
        }
        var count;
        for(let k=0; k< dif;k++){
            count=0;
            for(let j=0;j<SpO2.length;j++){
                if(SpO2[j]>=array1[k][0] && SpO2[j]<array1[k][1]){
                    count++;
                }
            }
            hist1[k]=count;
        }

        const ctx = document.getElementById('line-chart');
        const myChart = new Chart(ctx,
            {
                type: 'line',
                data:
                    {
                        labels: labels,
                        datasets:
                            [
                                {
                                    data: SpO2,
                                    label: "SpO2(%)",
                                    borderColor: "#3e95cd",
                                    backgroundColor: '#3e95cd',
                                    yAxisID: 'y',
                                    pointRadius: 0,
                                    borderWidth: 2,
                                    fill: false
                                },
                                {
                                    data: Pulse_Rate,
                                    label: "Pulse Rate",
                                    borderColor: "#e00000",
                                    backgroundColor: '#e00000',
                                    yAxisID: 'y1',
                                    pointRadius: 0,
                                    borderWidth: 2,
                                    fill: false
                                },
                            ]
                    },
                options:
                    {
                        //responsive:false,
                        title:
                            {
                                display: true,
                                text: 'Pulse by time'
                            }
                        ,
                        scales: {
                            y: {
                                type: 'linear',
                                display: true,
                                position: 'left',
                                borderColor: "#3e95cd",
                            },
                            y1: {
                                type: 'linear',
                                display: true,
                                position: 'right',
                                borderColor: "#ff0000",

                                // grid line settings
                                grid: {
                                    drawOnChartArea: false, // only want the grid lines for one axis to show up
                                },
                            },
                        }
                    }
            });
        const ctx1 = document.getElementById('line-chart1');
        const myChart1 = new Chart(ctx1,
            {
                type: 'bar',
                data:
                    {
                        labels:array1,
                        datasets:
                            [
                                {
                                    data: hist1,
                                    label: "SpO2",
                                    backgroundColor: '#13c3d9',
                                    fill: false
                                },
                            ]
                    },
                options:
                    {
                        //responsive:false,
                        title:
                            {
                                display: true,
                            },
                    }
            });

        var array_sorteado=array;
        var hist_sorteado=hist;
        	for(let i = 0; i < hist.length; i++){
		        for(let j = 0; j < hist.length - i - 1; j++){
		            if(hist[j + 1] > hist[j]){
		                [hist_sorteado[j + 1],hist_sorteado[j]] = [hist_sorteado[j],hist_sorteado[j + 1]];
		                [array_sorteado[j + 1],array_sorteado[j]] = [array_sorteado[j],array_sorteado[j + 1]];
		            }
		        }
		    };

        // torna em percentagem
        var reta=[];
        var resto=0;
		for(let i = 0; i < hist.length; i++){
			reta[i]=hist[i]+resto;
			resto=reta[i];
			reta[i]=(reta[i]/SpO2.length) *100;
		}

        //console.log(hist);
        console.log("tamanho total is ",SpO2.length);
        //existe um erro relativo á percentagem total, variavel "count" deve ser a razao
        
        const ctx2 = document.getElementById('line-chart2');
        const myChart2 = new Chart(ctx2,
            {
                data:
                    {
                        labels:array_sorteado,
                        datasets:
                            [
                                {
                                    type:'bar',
                                    data: hist_sorteado,
                                    label: "SpO2",
                                    yAxisID: 'y',
                                    backgroundColor: '#25dec2',
                                    order: 1,
                                    fill: false
                                },
                                {
                                    type:'line',
                                    data: reta,
                                    label: "Read Values(%)",
                                    yAxisID: 'y1',
                                    backgroundColor: '#e9df13',
                                    borderColor: "#e9df13",
                                    order: 0,
                                    fill: false
                                },
                            ]
                    },
                options:
                    {
                    //xAxis: {
					//	suffix: "[",
					//	prefix: "]"
					//}, 
                        //responsive:false,
                        title:
                            {
                                display: true,
                                text: 'Pulse by time'
                            },
                        scales:
                            {
                                x:
                                    {
                                        grid:
                                            {
                                                display: false,
                                            }
                                    },
                                y:
                                    {
                                        grid:
                                            {
                                                display: false,
                                            }
                                    },
                                y1:
                                    {
                                    	beginAtZero:true,
                                        position: 'right',
                                    },
                            }
                    }
            });
    }
});