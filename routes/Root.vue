<template>
<div id='grid-container'>
<Protein/>
<Pairing/>
<Picture/>
<Somm/>
</div>
</template>

<script>
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

