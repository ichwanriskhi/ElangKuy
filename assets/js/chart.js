const xValues = ["Iphone 14 Plus", "Lenovo Thinkpad 14", "Asus VivoBook 14x ", "Mouse Logitech"];
const yValues = [55, 49, 44, 24];
const barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true
    }
  }
});