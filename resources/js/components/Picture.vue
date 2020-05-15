<template>
  <div>

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
    console.log("We have your wine pairing!");
      axios
      .post("/drink-quote",{"UserSelection":selection})
        .then(response=> {
          console.log(response);
          this.$root.$emit("WinePairing", response.data.pairing);
          //add picture component to show data from call,
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


