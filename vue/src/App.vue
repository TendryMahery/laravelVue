<template>
  <div id="app">
    <div class="flex justify-around content-center items-center bg-blue-500 p-4">
      <router-link to="/" >home</router-link>
      <router-link to="create" >create</router-link>
      <router-link to="view">view liste</router-link>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import './index.css';

export default {
  name: 'App',
  
}
</script>


<style >

</style>
