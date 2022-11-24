import Chart from 'chart.js/auto';
import 'chartjs-adapter-moment';

const labels = [
    // 'Januari', 'Februari', 'Maret',
    // 'April', 'Mei', 'Juni',
    // 'Juli', 'Agustus', 'September',
    // 'Oktober', 'November', 'Desember',
    '01-01-2020', '02-02-2020', '03-03-2020',
    '04-04-2020', '05-05-2020', '06-06-2020',
    '07-07-2020', '08-08-2020', '09-09-2020',
    '10-10-2020', '11-11-2020', '12-12-2020',
    
];

const data = {
    labels: labels,
    datasets: [
        // Indigo line
        {
          data: [
            732, 610, 610, 504, 504, 504, 349,
            349, 504, 342, 504, 1000,
          ],
          fill: true,
          backgroundColor: `rgba(59, 130, 246, 0.08)`,
          borderColor: '#6366f1',
          borderWidth: 2,
          tension: 0,
          pointRadius: 0,
          pointHoverRadius: 3,
          pointBackgroundColor: '#6366f1',
          clip: 20,
        },
      ],
};

const config = {
    type: 'line',
    data: data,
    options: {
        chartArea: {
          backgroundColor: 'rgb(248 250 252)',
        },
        layout: {
          padding: 20,
        },
        scales: {
            x: {
                type: 'time',
                time: {
                  parser: 'hh:mm:ss',
                  unit: 'second',
                  tooltipFormat: 'MMM DD, H:mm:ss a',
                  displayFormats: {
                    second: 'H:mm:ss',
                  },
                },
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  autoSkipPadding: 48,
                  maxRotation: 0,
                },
              },
        },
        plugins: {
            legend: {
              display: false,
            },
            tooltip: {
              titleFont: {
                weight: '600',
              },
              callbacks: {
                label: function(context) {
                    
                    let label = context.dataset.label || '';
                    if (label) {
                        label += ': ';
                    }
                    if (context.parsed.y !== null) {
                        label += new Intl.NumberFormat('id', { style: 'currency', currency: 'IDR' }).format(context.parsed.y * 1444.70);
                    }
                    return label;
               
                    
                } 
              },
            },
        },
        interaction: {
            intersect: false,
            mode: 'nearest',
        },
        animation: true,
        maintainAspectRatio: false,
        resizeDelay: 200,
    },
};


new Chart(
    document.getElementById('line-chart3'),
    config
);

