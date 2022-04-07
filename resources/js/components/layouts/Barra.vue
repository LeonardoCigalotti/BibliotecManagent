<template>
    <div class="collapse navbar-collapse">
      <NavbarLogado v-if="usuarioEstaLogado" />
      <NavbarDeslogado v-else />
    </div>
</template>

<script>
import NavbarDeslogado from "./NavbarDeslogado.vue";
import NavbarLogado from './NavbarLogado.vue';

export default {
  components: {
    NavbarDeslogado,
    NavbarLogado
  }
};
</script>

<style>

</style>
