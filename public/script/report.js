// Report Chart Configuration
const ctx = document.getElementById('AgriConnectReport').getContext('2d');
const AgriConnectReport = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Milk Trading', 'Crop Cultivation Guide', 'Land Leasing'],
        datasets: [{
            data: [90, 85, 70],
            backgroundColor: ['#8ccf74', '#f5c5aa', '#fbe89a'],
            borderColor: '#fff',
            borderWidth: 2,
            hoverOffset: 10
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.label || '';
                        if (label) {
                            label += ': ';
                        }
                        if (context.parsed !== null) {
                            label += context.parsed + '%';
                        }
                        return label;
                    }
                }
            }
        },
        cutout: '70%',
        animation: {
            animateRotate: true,
            animateScale: true
        }
    }
});