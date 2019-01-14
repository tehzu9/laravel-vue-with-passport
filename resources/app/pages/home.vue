<template>
  <div>
    <card :title="$t('home')">{{ $t('you_are_logged_in') }}</card>
  </div>
</template>

<script>
export default {
  middleware: "auth",

  metaInfo() {
    return { title: this.$t("home") };
  },

  created() {
    console.log(this.$store.getters["auth/user"]);
  }
};
</script>
