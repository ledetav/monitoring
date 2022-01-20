<template>
<div>
    <div class="app-content-header">
        <h3 class="app-content-largeText">Мониторинг станций</h3>
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
            currentTab: "Week",
            tabs: [{
              name: "Week",
              title: "За последнюю неделю"
            }, 
            {
              name: "Day",
              title: "За последний день"
            }
          ] 
        }
    },
    computed: {
        currentTabComponent: function () {
            return "mon-" + this.currentTab.toLowerCase();
        }
    }
}
</script>