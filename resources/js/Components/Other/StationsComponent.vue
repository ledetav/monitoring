<template>
  <div>
    <div class="app-content-header">
      <h1 class="app-content-headerText">Станции</h1>
    </div>
    <div class="norisontal-menu">
      <ul class="horisontal-menu-list">
        <li
          v-for="(tab, id) in tabs"
          v-bind:key="id"
          v-bind:class="[{ active: currentTab === tab.name }, 'horisontal-menu-list-item' ]"
          @click="currentTab = tab.name"
        >
          <a><span>{{ tab.title }}</span></a>
        </li>
      </ul>
    </div>
    <div class="station-content">
      <component :is="currentTabComponent"></component>
    </div>
  </div>
</template>
<script>
export default {
  data: function () {
        return {
            currentTab: "Data",
            tabs: [{
              name: "Data",
              title: "Мониторинг станций"
            }, 
            {
              name: "Uploading",
              title: "Выгрузка данных мониторинга"
            },
          ] 
        }
    },
    computed: {
        currentTabComponent: function () {
            return "dash-" + this.currentTab.toLowerCase();
        }
    }
}
</script>