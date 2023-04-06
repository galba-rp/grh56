console.log('here')
var xValues = ["2", "4", "6", "8", "10", "12"];
var yValues = ['A1', 'A2+', 'B1', 'B1+', 'B2', 'B2+', 'C1'];
var data = [1, 1, 4, 5, 3, 4, 2];
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
                text: "Niveaux obtenus",
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