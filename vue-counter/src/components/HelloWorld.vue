


<script setup>
import { ref } from 'vue'

const count = ref(0)

function Incrementar() {
  count.value++
}

function Decrementar() {
  count.value--
}
</script>

<template>
  <div>
    <h2>Contador: {{ count }}</h2>
    <button @click="Decrementar ">Decrementar</button>
    <button @click="Incrementar ">Incrementar</button>
  </div>
</template>
