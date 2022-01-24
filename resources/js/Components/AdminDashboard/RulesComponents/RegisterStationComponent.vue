<template>
  <div>
    <div class="app-content-header">
      <h3 class="app-content-largeText">Регистрация станции</h3>
    </div>
    <div class="paragraf">
      <p>
        Чтобы зарегистрировать новую электростанцию для мониторинга, требуется
        ввести ее индефикационный номер — <span><b>ключ</b></span>
      </p>
    </div>
    <form @submit.prevent="setKey">
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-key" class="form_icon" />
        <input
          type="input"
          class="form_field form_input"
          placeholder="Ключ станции"
          name="key"
          required
          v-model="key"
        />
      </div>
      <button class="dashboard-btn register">Зарегистрировать</button>
    </form>
    <hr />
    <h3 class="app-content-largeText">Список зарегистрированных станций</h3>
    <div class="stations-list tableView">
      <div class="stations-header">
        <div class="stations-item id">
          <span>ID станции</span>
        </div>
        <div class="stations-item key">
          <span>Ключ</span>
        </div>
        <div class="stations-item created-up">
          <span>Дата появления в системе</span>
        </div>
        <div class="stations-item delete">
          <span>Удаление из системы</span>
        </div>
      </div>
      <div class="error" v-if="errors">
        <p>Ошибка загрузки данных!</p>
      </div>
      <div class="loader" v-if="loading">
        <div class="clock-loader"></div>
      </div>
      <div
        class="stations-row"
        v-for="station in stations"
        v-bind:key="station.id"
      >
        <div class="stations-item id">
          <span class="station-label">ID станции:</span>
          {{ station.id }}
        </div>
        <div class="stations-item key">
          <span class="station-label">Ключ:</span>
          {{ station.key }}
        </div>
        <div class="stations-item created-up">
          <span class="station-label">Дата появления в системе:</span>
          {{ station.created_at }}
        </div>
        <div class="stations-item delete">
          <button
            class="dashboard-btn delete-btn"
            @click="deleteStation(station.id)"
          >
            Удалить
            <font-awesome-icon icon="fa-solid fa-trash-can" />
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data: function () {
    return {
      key: "",
      stations: [],
      errors: false,
      loading: true,
    };
  },

  mounted() {
    this.getAllStations();
  },

  methods: {
    getAllStations() {
      axios
        .get("/api/v1/stations")
        .then((response) => {
          this.stations = response.data.data;
        })
        .catch((error) => {
          console.log(error);
          this.errors = true;
        })
        .finally(() => {
          this.loading = false;
        });
    },

    deleteStation(id) {
      if (
        confirm(
          "Действительно ли Вы хотите удалить этот ключ? Все данные станции будут удалены и не подлежат восстановлению."
        )
      ) {
        axios
          .post("/api/v1/stations/" + id, {
            _method: "DELETE",
          })
          .then((response) => {
            (this.stations = []), this.getAllStations();
          })
          .catch((error) => {
            console.log(error);
            this.errors = true;
          })
          .finally(() => {
            this.loading = false;
          });
      }
    },

    setKey() {
      axios
        .post("/api/v1/stations", {
          key: this.key,
        })
        .then((response) => {
          (this.stations = []), this.getAllStations();
        })
        .catch((error) => {
          console.log(error);
          this.errors = true;
        })
        .finally(() => {
          this.loading = false;
        });
    },
  },
};
</script>