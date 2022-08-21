console.log('here')
var xValues = ["0%", "20%", "40%", "60%", "80%", "100%"];
var yValues = ['A1', 'A2', 'B1', 'B2', 'C1', 'C2'];
var data = [0, 0, 100, 0, 0, 0];
var barColors = [
    "red",
    "yellow",
    "blue",
    "green",
    "purple",
    "blue"
];


let bar = new Chart("resultsChart", {
    type: "bar",
    data: {
        labels: yValues,
        datasets: [{
            backgroundColor: barColors,
            data: data
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Résultats atteints",
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