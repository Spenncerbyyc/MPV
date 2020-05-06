<template>
  <div>
    <h2>{{quote}}</h2>
  </div>
</template>

<script>
export default {
  name: "Picture",
  data: function() {
    return {
      quote: "Wine Pairing"
    };
  },
  mounted: function() {
    this.$root.$on("WineSelection", this.getWinePairing);
  },
  methods: {
    getWinePairing: function(selection) {
      axios
        .get("/drink-quote")
        .then(response => {
          console.log(response);
          this.$root.$emit("WinePairing", response.data.quote);
        })
        .catch(error => {
          console.log(error);
          this.quote = WinePairing;
        });
    },
    WinePairing: function(selection) {
      this.$root.$emit("WinePairing", "This Wine Matches");
    }
  }
};
</script>
