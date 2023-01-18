// /* globals Chart:false, feather:false */

// (() => {
//     'use strict'
  
//     feather.replace({ 'aria-hidden': 'true' })
  
//     // Graphs
//     const ctx = document.getElementById('myChart')
//     // eslint-disable-next-line no-unused-vars
//     const myChart = new Chart(ctx, {
//       type: 'line',
//       data: {
//         labels: [
//           'Sunday',
//           'Monday',
//           'Tuesday',
//           'Wednesday',
//           'Thursday',
//           'Friday',
//           'Saturday'
//         ],
//         datasets: [{
//           data: [
//             15339,
//             21345,
//             18483,
//             24003,
//             23489,
//             24092,
//             12034
//           ],
//           lineTension: 0,
//           backgroundColor: 'transparent',
//           borderColor: '#007bff',
//           borderWidth: 4,
//           pointBackgroundColor: '#007bff'
//         }]
//       },
//       options: {
//         scales: {
//           yAxes: [{
//             ticks: {
//               beginAtZero: false
//             }
//           }]
//         },
//         legend: {
//           display: false
//         }
//       }
//     })
//   })()


  var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'My First dataset',
        data: [65, 59, 80, 81, 56, 55, 40],
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

  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'My First dataset',
        data: [65, 59, 80, 81, 56, 55, 40],
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

