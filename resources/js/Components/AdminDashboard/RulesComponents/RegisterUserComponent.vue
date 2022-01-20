<template>
  <div>
    <div class="app-content-header">
      <h3 class="app-content-largeText">Регистрация станции</h3>
    </div>
  <div class="paragraf">
    <p>Чтобы зарегистрировать нового пользователя системы, нужно создать <span><b>его имя и пароль</b></span>. Имя должно быть уникальным в системе, содержать только буквы латинского алфавита, а так же не быть длинее 25 символов.</p>
  </div>
    <form method="POST">
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-user" class="form_icon"/>
        <input
          type="input"
          class="form_field form_input"
          placeholder="Имя пользователя"
          name="login"
          required
        />
      </div>
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-key" class="form_icon"/>
        <input
          type="input"
          class="form_field form_input"
          placeholder="Пароль пользователя"
          name="password"
          required
        />
      </div>
     <button class="dashboard-btn register">Зарегистрировать</button>
    </form>
     <hr>
      <h3 class="app-content-largeText">Список зарегистрированных пользователей</h3>
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
          <div class="stations-item rule">
            <span>Уровень доступа</span>
          </div>
          <div class="stations-item delete">
            <span>Удаление из системы</span>
          </div>
        </div>
        <div class="stations-row"  
          v-for="(user, id) in users"
          v-bind:key="id"
          >
          <div class="stations-item id">
            <span class="station-label">ID пользователя:</span>
            {{ user.id }}
          </div>
          <div class="stations-item name"> 
            <span class="station-label">Имя в системе:</span>
            {{ user.name }}
          </div>
          <div class="stations-item pass"> 
            <span class="station-label">Пароль:</span>
            {{ user.password }}
            </div>
          <div class="stations-item rule">
            <span class="station-label">Уровень доступа:</span>
            {{ user.rule }}
            </div>
          <div class="stations-item delete">
            <button class="dashboard-btn delete-btn">
              Удалить
              <font-awesome-icon icon="fa-solid fa-trash-can" />
            </button>
          </div>
        </div>
      </div>
      <hr>
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
            users: [{
              id: "1",
              name: "85937q89",
              password: "eiofui84",
              rule: "администратор",
            }, 
            {
              id: "2",
              name: "85649839",
              password: "eiofui84",
              rule: "пользователь",
            }, 
            {
              id: "3",
              name: "839463yyr",
              password: "eiofui84",
              rule: "пользователь",
            }, 
            {
              id: "4",
              name: "9802374hh",
              password: "eiofui84",
              rule: "пользователь",
            }, 
          ] 
        }
    }
}
</script>