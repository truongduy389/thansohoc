import {
  Chart as ChartJS,
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend,
  } from 'chart.js';
  
  ChartJS.register(
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend
  );
//#region Set value for Chart Circle Sex
const listSexs = document.querySelectorAll(".sexAccest");
let countMale = 0;
let countFemale = 0;
for (let i = 0; i < listSexs.length; i++) {
    if(listSexs[i].innerHTML === "Nam") {
        countMale += 1;
    } else {
        countFemale += 1;
    }
}
let percentMale = countMale / (countFemale + countFemale) * 100;
let percentFemale = countFemale / (countFemale + countFemale) * 100;
//#endregion


var xValues = ["Nam", "Nữ"];
var yValues = [countMale, countFemale];
var barColors = [
  "#3399ff",
  "#cc3399"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  }
});


var xValues1 = ["Việt Nam", "Trung Quốc", "Hàn Quốc", "Nhật Bản", "Singapo"];
var yValues1 = [55, 49, 44, 24, 15];
var barColors1 = ["#e60000", "#00aba9","#ffa500","#3399ff","#cc3399"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues1,
    datasets: [{
      backgroundColor: barColors1,
      data: yValues1
    }]
  }
});


var xValues = ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ Nhật"];
var yValues = [5, 8, 7, 10, 12, 11, 12, 16];

new Chart("myChart3", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "#00aba9",
      borderColor: "#00aba9",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});


var xValues = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6",
                 "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"];
var yValues = [5, 8, 7, 10, 12, 11, 12, 16, 5, 8, 7, 10, 12, 11, 12, 16];

new Chart("myChart4", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "#ffa500",
      borderColor: "#ffa500",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});