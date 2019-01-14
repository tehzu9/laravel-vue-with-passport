<template>
  <div class="main-layout container-fluid m-0">
    <navbar/>
    <div class="row">
      <sidebar/>

      <div class="container col-10 pl-0">
        <child/>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import Sidebar from "~/components/Sidebar";

export default {
  name: "MainLayout",

  components: {
    Navbar,
    Sidebar
  }
};
</script>
