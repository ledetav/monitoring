<template>
  <div>
    <div class="app-content-header">
      <h3 class="app-content-largeText">Права пользователей</h3>
    </div>
    <div class="paragraf">
      <p>
        Пользователю в системе имеют различные права доступа: на этой вкладке
        его можно сделать <b>администратором системы</b> с полным комплектом
        прав или же <b>открыть ему доступ</b> к закрытым электростанциям.
      </p>
    </div>
    <hr />
    <h3 class="app-content-largeText">Назначение администратором</h3>
    <div class="form-group">
      <div
        style="display: flex; justify-content: space-evenly; margin-top: 40px"
      >
        <div>
          <p>Выберите пользователя:</p>
          <select
            class="select-form"
            name="user"
            required
            v-model="selectedUser"
          >
            <option class="list-item" disabled selected value="">
              Выберите пользователя
            </option>
            <option
              class="list-item"
              v-for="user in users"
              v-bind:key="user.id"
              v-bind:value="user.id"
            >
              {{ user.username }}
            </option>
          </select>
        </div>
        <div>
          <p>Выберите права доступа:</p>
          <select
            class="select-form"
            name="user"
            required
            v-model="selectedRule"
          >
            <option class="list-item" disabled selected value="">
              Выберите права
            </option>
            <option class="list-item" value="1">Администратор</option>
            <option class="list-item" value="0">Пользователь</option>
          </select>
        </div>
      </div>
      <button
        class="dashboard-btn register"
        style="top: 40px"
        @submit.prevent="submit"
      >
        Изменить права пользователя
      </button>
      <div class="error" role="alert" v-if="errored">
        <p>Ошибка передачи данных!</p>
      </div>
    </div>
    <hr />
    <h3 class="app-content-largeText">Права на просмотр данных станций</h3>
    <div class="form-group">
      <div
        style="display: flex; justify-content: space-evenly; margin-top: 40px"
      >
        <div>
          <p>Выберите пользователя:</p>
          <select class="select-form" name="user" required v-model="username">
            <option class="list-item" disabled selected value="">
              Выберите пользователя
            </option>
            <option
              class="list-item"
              v-for="user in users"
              v-bind:key="user.id"
              v-bind:value="user.id"
            >
              {{ user.username }}
            </option>
          </select>
        </div>
        <div>
          <p>Выберите станцию:</p>
          <select class="select-form" name="user" required v-model="station">
            <option class="list-item" disabled selected value="">
              Выберите станцию
            </option>
            <option
              class="list-item"
              v-for="station in stations"
              v-bind:key="station.id"
              v-bind:value="station.id"
            >
              {{ station.key }}
            </option>
          </select>
        </div>
      </div>
      <button class="dashboard-btn register" style="top: 40px"  @click.prevent="setStation">
        Изменить права пользователя
      </button>
      <div class="error" role="alert" v-if="errored">
        <p>Ошибка передачи данных!</p>
      </div>
    </div>
    <hr>
    <h3 class="app-content-largeText">Удаление прав</h3>
    <div class="paragraf">
        <p>
            Удаление прав на просмотр данных станций возможно <b>ТОЛЬКО</b> через базу данных. Смиритесь.
        </p>
    </div>
  </div>
</template>
<script>
export default {
  data: function () {
    return {
        selectedUser: "",
        selectedRule: "",
        users: [],
        stations: [],
        errored: false,
    };
  },
  mounted() {
    this.getAllUsers(), this.gelAllStations();
  },
  methods: {
    gelAllStations() {
      axios
        .get("/api/v1/stations")
        .then((response) => {
          this.stations = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },

    getAllUsers() {
      axios
        .get("/api/v1/users")
        .then((response) => {
          this.users = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },

    setStation() {
      axios
        .post("/api/v1/keys", {
            user_id: this.username, 
            station_id: this.station
        })
        .then((response) => {
            this.username = "",
            this.station = "",
            this.rule = response.data.data.rule;
            confirm('Данная станция добавлена к правам пользователя.')
        })
        .catch((error) => {
          console.log(error.response);
          this.errored = true
        }) 
        .finally(() => {
          this.loading = false;
        });
    },
    setRules(){

    },
  },
};
</script>