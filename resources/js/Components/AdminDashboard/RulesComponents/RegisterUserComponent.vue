<template>
  <div>
    <div class="app-content-header">
      <h3 class="app-content-largeText">Регистрация пользователя</h3>
    </div>
    <div class="paragraf">
      <p>
        Чтобы зарегистрировать нового пользователя системы, нужно создать
        <span><b>его имя и пароль</b></span
        >. Имя должно быть уникальным в системе, содержать только буквы
        латинского алфавита, а так же не быть длинее 25 символов.
      </p>
    </div>
    <form @submit.prevent="setUser">
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-user" class="form_icon" />
        <input
          type="input"
          class="form_field form_input"
          placeholder="Имя пользователя"
          v-model="username"
          name="login"
          required
        />
      </div>
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-key" class="form_icon" />
        <input
          type="password"
          class="form_field form_input"
          placeholder="Пароль пользователя"
          v-model="password"
          name="password"
          required
        />
      </div>
      <button class="dashboard-btn register">Зарегистрировать</button>
      <div class="error" role="alert" v-if="errored">
        <p>Ошибка загрузки данных!</p>
      </div>
    </form>
    <hr />
    <h3 class="app-content-largeText">
      Список зарегистрированных пользователей
    </h3>
    <div class="stations-list tableView">
      <div class="stations-header">
        <div class="stations-item id">
          <span>ID пользователя</span>
        </div>
        <div class="stations-item name">
          <span>Имя в системе</span>
        </div>
        <div class="stations-item pass">
          <span>Пароль</span>
        </div>
        <div class="stations-item delete">
          <span>Удаление из системы</span>
        </div>
      </div>
      <div class="loader" v-if="loading">
        <div class="clock-loader"></div>
      </div>
      <div class="stations-row" v-for="(user, id) in users" v-bind:key="id">
        <div class="stations-item id">
          <span class="station-label">ID пользователя:</span>
          {{ user.id }}
        </div>
        <div class="stations-item name">
          <span class="station-label">Имя в системе:</span>
          {{ user.username }}
        </div>
        <div class="stations-item pass">
          <span class="station-label">Пароль:</span>
          {{ user.password }}
        </div>
        <div class="stations-item delete">
          <button class="dashboard-btn delete-btn">
            Удалить
            <font-awesome-icon icon="fa-solid fa-trash-can" />
          </button>
        </div>
      </div>
    </div>
    <hr />
    <div class="paragraf">
      <p>
        Изменение прав доступа происходит во вкладке <b>Права пользователей</b>.
      </p>
    </div>
  </div>
</template>
<script>
export default {
  data: function () {
    return {
      username: "",
      password: "",
      users: [],
      errors: [],
      errored: false,
      loading: true,
    };
  },
  mounted() {
    this.getAllUsers()
  },
  methods: {
    getAllUsers() {
      axios
        .get("/api/v1/users")
        .then((response) => {
          this.users = response.data.data;
        })
        .catch((error) => {
          console.log(error);
          this.errors = true;
        })
        .finally(() => {
          this.loading = false;
        });
    },
    setUser(){
      axios
        .post("/api/v1/users", {
          username: this.username,
          password: this.password
        })
        .then((response) => {
          this.username = "",
          this.password = "",
          (this.users = []), this.getAllUsers();
        })
        .catch((error) => {
          console.log(error.response);
          this.errored = true
        }) 
        .finally(() => {
          this.loading = false;
        });
    }
  },
};
</script>