<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  data: () => ({
    chartdata: {
      labels: ["2", "4", "6", "8", "10", "12"],
      datasets: [
        {
          label: "Эффективность",
          backgroundColor: "#f87900",
          data: [40, 20, 88, 23, 14, 30],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  }),

  mounted() {
    this.renderChart(this.chartdata, this.options);
  },
};
</script>