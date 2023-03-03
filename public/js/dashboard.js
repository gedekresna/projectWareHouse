
document.getElementById('berat_y_aksen');

function display(e,dataChart,valueRak){

    e.preventDefault();
    var parsedDatas = JSON.parse(dataChart);
    let labels = parsedDatas.map((dataChart)=>{return dataChart.time});
    let dataChartZ = parsedDatas.map((dataChart)=>{return dataChart.z_aksen});
    let dataChartY = parsedDatas.map((dataChart)=>{return dataChart.y_aksen});

    var ctx = document.getElementById('myChart').getContext('2d');
    var table = document.getElementById('data-table');
    if(table.style.display === "none"){
        table.style.display = "block";
    }else{
        table.style.display = "none";
    }

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: labels,
        datasets: [{
            label: 'Jumlah Box',
            data: dataChartZ,
            backgroundColor: 'rgba(0, 0, 180, 0.2)',
            borderColor: 'blue',
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: labels,
        datasets: [{
            label: 'Berat Box',
            data: dataChartY,
            backgroundColor: 'rgba(180, 0,0, 0.2)',
            borderColor: 'red',
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

     // FILTER TABLE BASED RAK
     fetch(`/filter-table/${valueRak}`).then(response => response.json()).then(data => {

         $('#myTable tbody').empty();
         data.data_filtered.forEach(function(row) {
             var tr = $('<tr>');
             tr.append('<td>' + row.id + '</td>');
             tr.append('<td>' + row.time + '</td>');
             tr.append('<td>' + row.y_aksen + '</td>');
             tr.append('<td>' + row.z_aksen + '</td>');
             $('#myTable tbody').append(tr);
         });
         
     });

}


