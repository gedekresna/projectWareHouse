
document.getElementById('berat_y_aksen');

function display(e,dataChart){
    console.log("HAHAHA");
    
    e.preventDefault();
    var parsedDatas = JSON.parse(dataChart);
    let labels = parsedDatas.map((dataChart)=>{return dataChart.time});
    let dataChartZ = parsedDatas.map((dataChart)=>{return dataChart.z_aksen});
    let dataChartY = parsedDatas.map((dataChart)=>{return dataChart.z_aksen});

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

    
}

function loadCardA1(id){
    console.log("load card js");
    e.preventDefault();
    $.ajax({
        method: "GET",
        url: `/get-databarang-id/${id}`,
        data: id
      })
        .done(function( msg ) {
          alert( "Success get data: " + msg );
        });
}

