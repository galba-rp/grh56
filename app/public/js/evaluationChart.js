console.log('here')
var xValues = ["très satisfaisant", "satisfaisant", "peu satisfaisant", "insatisfaisant"];
var yValues = [100, 0, 0, 0];
var barColors = [
    "blue",
    "red",
    "yellow",
    "green",
];


let pie = new Chart("evaluationChart", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            borderColor: 'blue',
            data: yValues
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'right',
            },
            title: {
                display: true,
                text: "Votre évaluation de la formation",
                padding: {
                    bottom: 30
                },
                font: {
                    size: 24
                }
            },
        }
    }
});