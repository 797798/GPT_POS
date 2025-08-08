import { defineStore } from 'pinia';

export const useProductStore = defineStore('products', {
  state: () => ({ list: [] }),
  actions: {
    setProducts(products) {
      this.list = products;
    },
  },
});
