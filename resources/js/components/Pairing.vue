<template>
  <div id="Pairing">
    <button
      type ="button"
     @click="WineSelection"
    >2. Let us pair a wine with that!</button>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      quote: "Wine Pairing"
    };
  },
  mounted: function() {
    this.$root.$on("Protein", this.ProteinSelection);
  },
  methods: {
    ProteinSelection: function(MainCourse) {
      this.quote = MainCourse;
      //this.WineSelection(MainCourse);
    },
    WineSelection: function() {
      this.$root.$emit("WineSelection", this.quote);
    }
  }
};
</script>

<style>
.button {
  background-color: #001e96;
  color: white;
  padding: 16px;
  font-size: 20px;
  border: none;
}
.button {
  position: relative;
  display: inline-block;
}
</style>
