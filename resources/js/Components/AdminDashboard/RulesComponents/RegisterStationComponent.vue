<template>
  <div>
    <div class="app-content-header">
      <h3 class="app-content-largeText">Регистрация станции</h3>
    </div>
  <div class="paragraf">
    <p>Чтобы зарегистрировать новую электростанцию для мониторинга, требуется ввести ее индефикационный номер — <span><b>ключ</b></span></p>
  </div>
    <form method="POST">
      <div class="form_group">
        <font-awesome-icon icon="fa-solid fa-key" class="form_icon"/>
        <input
          type="input"
          class="form_field form_input"
          placeholder="Ключ станции"
          name="key"
          required
        />
      </div>
     <button class="dashboard-btn register">Зарегистрировать</button>
    </form>
    <hr>
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
          <div class="stations-item updated-up">
            <span>Дата последнего обновления данных</span>
          </div>
          <div class="stations-item delete">
            <span>Удаление из системы</span>
          </div>
        </div>
        <div class="stations-row"  
          v-for="(station, id) in stations"
          v-bind:key="id"
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
            {{ station.created }}
            </div>
          <div class="stations-item updated-up">
            <span class="station-label">Дата последнего обновления данных:</span>
            {{ station.updated }}
            </div>
          <div class="stations-item delete">
            <button class="dashboard-btn delete-btn">
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
            stations: [{
              id: "1",
              key: "85937q89",
              created: "22-01-2018",
              updated: "18-09-2021",
            }, 
            {
              id: "2",
              key: "85649839",
              created: "12-08-2018",
              updated: "16-12-2021",
            }, 
            {
              id: "3",
              key: "839463yyr",
              created: "26-03-2019",
              updated: "23-09-2021",
            }, 
            {
              id: "4",
              key: "9802374hh",
              created: "08-06-2020",
              updated: "13-10-2021",
            }, 
          ] 
        }
    }
}
</script>