<template>
<div id='grid-container'>
<Protein/>
<Pairing/>
<Picture/>
<Somm/>
</div>
</template>

<script>
import Protein from "./Protein.vue";
import Pairing from "./Pairing.vue";
import Picture from "./Picture.vue";
import Somm from "./Somm.vue";

export default {
  name: "Root",
  components: {Protein, Pairing, Picture, Somm,}
  };
</script>

<style>
    body {
        font-family: Nunito
    }

    #grid-container {
        min-height: 50vh;
        display: grid;
        grid-template-rows: 1fr 1fr;
        justify-items: center;
        align-items: center;
    }
</style>

