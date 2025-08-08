<template>
  <div>
    <input v-model="query" placeholder="Search" />
    <ul>
      <li v-for="p in products" :key="p.id">{{ p.name }}</li>
    </ul>
  </div>
</template>
<script setup>
import { ref, watch } from 'vue';
import { useProductStore } from '../stores/product';

const store = useProductStore();
const query = ref('');

watch(query, async (val) => {
  const res = await fetch(`/api/products?q=${val}`);
  store.setProducts(await res.json());
});

const products = store.list;
</script>
