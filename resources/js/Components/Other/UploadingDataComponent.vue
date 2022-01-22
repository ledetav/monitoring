<template>
<div>
    <div class="app-content-header">
        <h1 class="app-content-largeText">Выгрузить данные мониторинга</h1>
    </div>
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
            <span>Выгрузить данные</span>
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
              Выгрузить
              <font-awesome-icon icon="fa-solid fa-file-arrow-down" />
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