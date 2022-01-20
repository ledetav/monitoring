<template>
  <div>
    <div class="app-content-header">
      <h1 class="app-content-headerText">Права пользователей и станций</h1>
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
            currentTab: "Station",
            tabs: [{
              name: "Station",
              title: "Регистрация станции"
            }, 
            {
              name: "User",
              title: "Регистрация пользователя"
            },
            {
              name: "Update",
              title: "Права пользователя"
            }
          ] 
        }
    },
    computed: {
        currentTabComponent: function () {
            return "rules-" + this.currentTab.toLowerCase();
        }
    }
}
</script>